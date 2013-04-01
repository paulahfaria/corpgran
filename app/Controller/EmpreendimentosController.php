<?php
App::uses('AppController', 'Controller');
/**
 * Empreendimentos Controller
 *
 * @property Empreendimento $Empreendimento
 */
class EmpreendimentosController extends AppController {


	public $uses = array('Empreendimento','Etapa','Bairro');


	public function detalhe($empreendimento_slug){

		$empreendimento = $this->Empreendimento->find('first', array('conditions'=> array('Empreendimento.slug' => $empreendimento_slug)));

		$empreendimento['Empreendimento']['atributos'] = explode('<br />',nl2br($empreendimento['Empreendimento']['atributos']));

		$this->set('empreendimento', $empreendimento);

		debug($empreendimento);

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
			if ($this->Empreendimento->save($this->request->data)) {
				$this->Session->setFlash(__('The empreendimento has been saved'));
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
			if ($this->Empreendimento->save($this->request->data)) {
				$this->Session->setFlash(__('The empreendimento has been saved'));
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
