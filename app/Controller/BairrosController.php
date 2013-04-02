<?php
App::uses('AppController', 'Controller');
/**
 * Bairros Controller
 *
 * @property Bairro $Bairro
 */
class BairrosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Bairro->recursive = 0;
		$this->set('bairros', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Bairro->exists($id)) {
			throw new NotFoundException(__('Invalid bairro'));
		}
		$options = array('conditions' => array('Bairro.' . $this->Bairro->primaryKey => $id));
		$this->set('bairro', $this->Bairro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->request->data['Bairro']['slug'] = Inflector::slug(strtolower($this->request->data['Bairro']['nome']), '-' );
			$this->Bairro->create();
			if ($this->Bairro->save($this->request->data)) {
				$this->Session->setFlash(__('The bairro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bairro could not be saved. Please, try again.'));
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
		if (!$this->Bairro->exists($id)) {
			throw new NotFoundException(__('Invalid bairro'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Bairro']['slug'] = Inflector::slug(strtolower($this->request->data['Bairro']['nome']), '-' );			
			if ($this->Bairro->save($this->request->data)) {
				$this->Session->setFlash(__('The bairro has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bairro could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bairro.' . $this->Bairro->primaryKey => $id));
			$this->request->data = $this->Bairro->find('first', $options);
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
		$this->Bairro->id = $id;
		if (!$this->Bairro->exists()) {
			throw new NotFoundException(__('Invalid bairro'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Bairro->delete()) {
			$this->Session->setFlash(__('Bairro deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bairro was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
