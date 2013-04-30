<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 */
class UsuariosController extends AppController {

	public $uses = array('Usuario','Empreendimento','Contato','Favorito');


	public function salvar_contato(){

		$this->autoRender = false;

		$contato['Contato']['email'] = $this->request->data['email'];

		if($this->Contato->save($contato)){

			echo 'success';

		}else{

			echo 'error';

		}
	}	


	function login(){

		$this->autoRender = false;

		$usuario = $this->Usuario->find('first', array('conditions' => array('Usuario.email' => $this->request->data['email'], 'Usuario.password' => AuthComponent::password($this->request->data['senha']))));

		if($usuario){

			$empreendimentos = $this->mountArraySlug( $usuario['Empreendimento']);

			$this->Session->write('Usuario.id', $usuario['Usuario']['id']);

			$this->Session->write('Usuario.nome', $usuario['Usuario']['nome']);

			$this->Session->write('Usuario.empreendimentos', $empreendimentos);

		}

		$this->redirect('/empreendimentos/acompanhar');

	}

	function logout(){

		$this->autoRender = false;

		$this->Session->delete('Usuario.id');

		$this->Session->delete('Usuario.nome');

		$this->Session->delete('Usuario.empreendimentos');

		$this->redirect('/');

	}



/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Usuario->recursive = 0;
		$this->Usuario->order = 'Usuario.id DESC';
		$this->set('usuarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Usuário salvo com sucesso'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Erro. Please, try again.'));
			}
		}

		$empreendimentos = $this->Empreendimento->find('list');

		$this->set('empreendimentos', $empreendimentos);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {

		
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('Usuário editado com sucesso.'));
			}else{
				$this->Session->setFlash(__('Erro ao salvar.'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
		}

		$empreendimentos = $this->Empreendimento->find('list');

		$empreendimentosSelected = $this->Favorito->find('all', array('conditions' => array('usuario_id'=>$id)));

		$empreendimentosSelected = $this->mountArrayId($empreendimentosSelected);

		$this->set('empreendimentos', $empreendimentos);	

		$this->set('empreendimentosSelected', $empreendimentosSelected);	
	}


	private function mountArrayId($empreendimentos){

		$listaIds = array();

		foreach ($empreendimentos as $empreendimento) {
			
			array_push($listaIds, (int)$empreendimento['Favorito']['empreendimento_id']);

		}

		return $listaIds;

	}

	private function mountArraySlug($empreendimentos){

		$listaIds = array();

		foreach ($empreendimentos as $empreendimento) {

				array_push($listaIds, $empreendimento['slug']);

		}

		return $listaIds;

	}	

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('Usuario deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Usuario was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


	public function admin_contatos_exportar(){

		$this->layout = null;

		header('Content-type: application/vnd.ms-excel');
	    header("Content-Disposition: attachment; filename=contatos-newsletter.xls");
	    header("Pragma: no-cache");
	    header("Expires: 0"); 

	    $contatos = $this->Contato->find('all');

	    $this->set('contatos', $contatos);
	}
}
