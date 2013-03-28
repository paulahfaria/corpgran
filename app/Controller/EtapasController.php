<?php
App::uses('AppController', 'Controller');
/**
 * Etapas Controller
 *
 * @property Etapa $Etapa
 */
class EtapasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Etapa->recursive = 0;
		$this->set('etapas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Etapa->exists($id)) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		$options = array('conditions' => array('Etapa.' . $this->Etapa->primaryKey => $id));
		$this->set('etapa', $this->Etapa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Etapa->create();
			if ($this->Etapa->save($this->request->data)) {
				$this->Session->setFlash(__('The etapa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etapa could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Etapa->exists($id)) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Etapa->save($this->request->data)) {
				$this->Session->setFlash(__('The etapa has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The etapa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Etapa.' . $this->Etapa->primaryKey => $id));
			$this->request->data = $this->Etapa->find('first', $options);
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
		$this->Etapa->id = $id;
		if (!$this->Etapa->exists()) {
			throw new NotFoundException(__('Invalid etapa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Etapa->delete()) {
			$this->Session->setFlash(__('Etapa deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Etapa was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
