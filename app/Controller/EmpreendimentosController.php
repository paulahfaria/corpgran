<?php
App::uses('AppController', 'Controller');
/**
 * Empreendimentos Controller
 *
 * @property Empreendimento $Empreendimento
 */
class EmpreendimentosController extends AppController {


	public $uses = array('Empreendimento','Etapa','Bairro','Contato');

	public function index(){

		$empreendimentos = $this->Empreendimento->find('all');

		if(isset($this->passedArgs['Busca']))
			$busca =  $this->passedArgs['Busca'];

		if(isset($this->passedArgs['Bairro']))
			$bairroFiltro =  $this->passedArgs['Bairro'];

		if(isset($this->passedArgs['Etapa']))
			$etapaFiltro =  $this->passedArgs['Etapa'];		

        $this->set(compact('empreendimentos','etapaFiltro','bairroFiltro','busca')); 
		
	}

	public function acompanhar(){

		if(!$this->Session->read('Usuario.id'))

			$this->redirect('/empreendimentos');

		$empreendimentos = $this->Empreendimento->find('all', array('conditions' => array('Empreendimento.slug' => $this->Session->read('Usuario.empreendimentos')  )));

        $this->set(compact('empreendimentos')); 
		
	}


	public function detalhe($empreendimento_slug){

		if($this->Session->read('Usuario.empreendimentos') && in_array($empreendimento_slug,$this->Session->read('Usuario.empreendimentos'))){

			$this->Empreendimento->contain(array("Quarto","ImagemDestaque","Imagem"));

			$this->set('private', true);

		}else{

			$this->Empreendimento->contain(array("Quarto","ImagemDestaque","Imagem" =>  array('conditions' => array('Imagem.privado' => 0 ) )));

		}

		$empreendimento = $this->Empreendimento->find('first', array('conditions'=> array('Empreendimento.slug' => $empreendimento_slug)));

		if(empty($empreendimento))

			$this->redirect('/');

		$empreendimento['Empreendimento']['atributos'] = explode('<br />',nl2br($empreendimento['Empreendimento']['atributos']));

		$this->set('empreendimento', $empreendimento);

	}



/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Empreendimento->recursive = 0;
		$this->set('empreendimentos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Empreendimento->exists($id)) {
			throw new NotFoundException(__('Invalid empreendimento'));
		}
		$options = array('conditions' => array('Empreendimento.' . $this->Empreendimento->primaryKey => $id));
		$this->set('empreendimento', $this->Empreendimento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Empreendimento->create();
			$this->request->data['Empreendimento']['slug'] = Inflector::slug(strtolower($this->request->data['Empreendimento']['nome']), '-' );
			if ($this->Empreendimento->save($this->request->data)) {
				$this->Session->setFlash(__('Empreendimento salvo com sucesso.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empreendimento could not be saved. Please, try again.'));
			}
		}
		$bairros = $this->Empreendimento->Bairro->find('list');
		$quartos = $this->Empreendimento->Quarto->find('list');
		$etapas = $this->Empreendimento->Etapa->find('list');
		$this->set(compact('bairros', 'quartos', 'etapas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Empreendimento->exists($id)) {
			throw new NotFoundException(__('Invalid empreendimento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Empreendimento']['slug'] = Inflector::slug(strtolower($this->request->data['Empreendimento']['nome']), '-' );
			if ($this->Empreendimento->save($this->request->data)) {
				$this->Session->setFlash(__('Empreendimento salvo com sucesso.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empreendimento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Empreendimento.' . $this->Empreendimento->primaryKey => $id));
			$this->request->data = $this->Empreendimento->find('first', $options);
		}
		$bairros = $this->Empreendimento->Bairro->find('list');
		$quartos = $this->Empreendimento->Quarto->find('list');
		$etapas = $this->Empreendimento->Etapa->find('list');
		$this->set(compact('bairros', 'quartos', 'etapas'));
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
		$this->Empreendimento->id = $id;
		if (!$this->Empreendimento->exists()) {
			throw new NotFoundException(__('Invalid empreendimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Empreendimento->delete()) {
			$this->Session->setFlash(__('Empreendimento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Empreendimento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
