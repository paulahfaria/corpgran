<?php
App::uses('AppController', 'Controller');
/**
 * Destaques Controller
 *
 * @property Destaque $Destaque
 */
class DestaquesController extends AppController {


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Destaque->recursive = 0;

		$this->Destaque->order = array('Destaque.ativo DESC', 'prioridade DESC', 'Destaque.created');

		$this->set('destaques', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Destaque->exists($id)) {
			throw new NotFoundException(__('Invalid destaque'));
		}
		$options = array('conditions' => array('Destaque.' . $this->Destaque->primaryKey => $id));
		$this->set('destaque', $this->Destaque->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Destaque->create();
			if ($this->Destaque->save($this->request->data)) {
				$this->Session->setFlash(__('O destaque foi salvo com sucesso.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destaque could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Destaque->exists($id)) {
			throw new NotFoundException(__('Invalid destaque'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Destaque->save($this->request->data)) {
				$this->Session->setFlash(__('O destaque foi salvo com sucesso.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destaque could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Destaque.' . $this->Destaque->primaryKey => $id));
			$this->request->data = $this->Destaque->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Destaque->id = $id;
		if (!$this->Destaque->exists()) {
			throw new NotFoundException(__('Invalid destaque'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Destaque->delete()) {
			$this->Session->setFlash(__('Destaque deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Destaque was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
