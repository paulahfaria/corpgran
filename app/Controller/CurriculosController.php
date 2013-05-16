<?php
App::uses('AppController', 'Controller');
/**
 * Curriculos Controller
 *
 * @property Curriculo $Curriculo
 */
class CurriculosController extends AppController {

	public $uses = array('Curriculo','Area','Vaga');

	public function carreiras($indice = null) {

		if ($this->request->is('post')) {

			$this->Curriculo->create();

			$curriculo['Curriculo'] = $this->request->data['Curriculo'][$indice];

			if ($this->Curriculo->save($curriculo)) {

				$this->Session->setFlash(__('Seu curriculo foi enviado com sucesso.'));

			} else {

				$this->Session->setFlash(__('Erro ao enviar. Preencha todos os campos e adicione o arquivo.'));

			}

		}

		$vagas = $this->Vaga->find('all', array('conditions'=>array('Vaga.ativo'=> 1)));

		$areas = $this->Area->find('list');

		$this->set(compact('areas','vagas'));
	}
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {

		$this->Curriculo->recursive = 0;

	
	    $this->paginate = array(
	        'Curriculo' => array(
	        	'conditions' => 'Curriculo.vaga_id IS NULL',
	            'limit' => 20,
	            'order' => array('Curriculo.created' => 'desc')
	           )
	    );

		$this->set('curriculos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Curriculo->exists($id)) {
			throw new NotFoundException(__('Invalid curriculo'));
		}
		$options = array('conditions' => array('Curriculo.' . $this->Curriculo->primaryKey => $id));
		$this->set('curriculo', $this->Curriculo->find('first', $options));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Curriculo->exists($id)) {
			throw new NotFoundException(__('Invalid curriculo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Curriculo->save($this->request->data)) {
				$this->Session->setFlash(__('The curriculo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curriculo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Curriculo.' . $this->Curriculo->primaryKey => $id));
			$this->request->data = $this->Curriculo->find('first', $options);
		}
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
		$this->Curriculo->id = $id;
		if (!$this->Curriculo->exists()) {
			throw new NotFoundException(__('Invalid curriculo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Curriculo->delete()) {
			$this->Session->setFlash(__('Curriculo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Curriculo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
