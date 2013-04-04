<?php
App::uses('AppController', 'Controller');
/**
 * Vagas Controller
 *
 * @property Vaga $Vaga
 */
class VagasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Vaga->recursive = 0;
		$this->set('vagas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Vaga->exists($id)) {
			throw new NotFoundException(__('Invalid vaga'));
		}
		$options = array('conditions' => array('Vaga.' . $this->Vaga->primaryKey => $id));
		$this->set('vaga', $this->Vaga->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Vaga->create();
			if ($this->Vaga->save($this->request->data)) {
				$this->Session->setFlash(__('The vaga has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vaga could not be saved. Please, try again.'));
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
		if (!$this->Vaga->exists($id)) {
			throw new NotFoundException(__('Invalid vaga'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vaga->save($this->request->data)) {
				$this->Session->setFlash(__('The vaga has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vaga could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Vaga.' . $this->Vaga->primaryKey => $id));
			$this->request->data = $this->Vaga->find('first', $options);
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
		$this->Vaga->id = $id;
		if (!$this->Vaga->exists()) {
			throw new NotFoundException(__('Invalid vaga'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vaga->delete()) {
			$this->Session->setFlash(__('Vaga deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vaga was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
