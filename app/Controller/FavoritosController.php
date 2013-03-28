<?php
App::uses('AppController', 'Controller');
/**
 * Favoritos Controller
 *
 * @property Favorito $Favorito
 */
class FavoritosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Favorito->recursive = 0;
		$this->set('favoritos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Favorito->exists($id)) {
			throw new NotFoundException(__('Invalid favorito'));
		}
		$options = array('conditions' => array('Favorito.' . $this->Favorito->primaryKey => $id));
		$this->set('favorito', $this->Favorito->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Favorito->create();
			if ($this->Favorito->save($this->request->data)) {
				$this->Session->setFlash(__('The favorito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorito could not be saved. Please, try again.'));
			}
		}
		$empreendimentos = $this->Favorito->Empreendimento->find('list');
		$usuarios = $this->Favorito->Usuario->find('list');
		$this->set(compact('empreendimentos', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Favorito->exists($id)) {
			throw new NotFoundException(__('Invalid favorito'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Favorito->save($this->request->data)) {
				$this->Session->setFlash(__('The favorito has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The favorito could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Favorito.' . $this->Favorito->primaryKey => $id));
			$this->request->data = $this->Favorito->find('first', $options);
		}
		$empreendimentos = $this->Favorito->Empreendimento->find('list');
		$usuarios = $this->Favorito->Usuario->find('list');
		$this->set(compact('empreendimentos', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Favorito->id = $id;
		if (!$this->Favorito->exists()) {
			throw new NotFoundException(__('Invalid favorito'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Favorito->delete()) {
			$this->Session->setFlash(__('Favorito deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Favorito was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
