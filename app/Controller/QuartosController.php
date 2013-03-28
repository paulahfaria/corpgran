<?php
App::uses('AppController', 'Controller');
/**
 * Quartos Controller
 *
 * @property Quarto $Quarto
 */
class QuartosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Quarto->recursive = 0;
		$this->set('quartos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Quarto->exists($id)) {
			throw new NotFoundException(__('Invalid quarto'));
		}
		$options = array('conditions' => array('Quarto.' . $this->Quarto->primaryKey => $id));
		$this->set('quarto', $this->Quarto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Quarto->create();
			if ($this->Quarto->save($this->request->data)) {
				$this->Session->setFlash(__('The quarto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quarto could not be saved. Please, try again.'));
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
		if (!$this->Quarto->exists($id)) {
			throw new NotFoundException(__('Invalid quarto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Quarto->save($this->request->data)) {
				$this->Session->setFlash(__('The quarto has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quarto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quarto.' . $this->Quarto->primaryKey => $id));
			$this->request->data = $this->Quarto->find('first', $options);
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
		$this->Quarto->id = $id;
		if (!$this->Quarto->exists()) {
			throw new NotFoundException(__('Invalid quarto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Quarto->delete()) {
			$this->Session->setFlash(__('Quarto deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Quarto was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
