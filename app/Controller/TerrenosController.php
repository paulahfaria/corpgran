<?php
App::uses('AppController', 'Controller');
/**
 * Terrenos Controller
 *
 * @property Terreno $Terreno
 */
class TerrenosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Terreno->recursive = 0;
		$this->Terreno->order = 'Terreno.created DESC';
		$this->set('terrenos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Terreno->exists($id)) {
			throw new NotFoundException(__('Invalid terreno'));
		}
		$options = array('conditions' => array('Terreno.' . $this->Terreno->primaryKey => $id));
		$this->set('terreno', $this->Terreno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Terreno->create();
			if ($this->Terreno->save($this->request->data)) {
				$this->Session->setFlash(__('The terreno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terreno could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		if (!$this->Terreno->exists($id)) {
			throw new NotFoundException(__('Invalid terreno'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Terreno->save($this->request->data)) {
				$this->Session->setFlash(__('The terreno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terreno could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Terreno.' . $this->Terreno->primaryKey => $id));
			$this->request->data = $this->Terreno->find('first', $options);
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
	public function delete($id = null) {
		$this->Terreno->id = $id;
		if (!$this->Terreno->exists()) {
			throw new NotFoundException(__('Invalid terreno'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Terreno->delete()) {
			$this->Session->setFlash(__('Terreno deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Terreno was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Terreno->recursive = 0;
		$this->set('terrenos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Terreno->exists($id)) {
			throw new NotFoundException(__('Invalid terreno'));
		}
		$options = array('conditions' => array('Terreno.' . $this->Terreno->primaryKey => $id));
		$this->set('terreno', $this->Terreno->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Terreno->create();
			if ($this->Terreno->save($this->request->data)) {
				$this->Session->setFlash(__('The terreno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terreno could not be saved. Please, try again.'));
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
		if (!$this->Terreno->exists($id)) {
			throw new NotFoundException(__('Invalid terreno'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Terreno->save($this->request->data)) {
				$this->Session->setFlash(__('The terreno has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The terreno could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Terreno.' . $this->Terreno->primaryKey => $id));
			$this->request->data = $this->Terreno->find('first', $options);
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
		$this->Terreno->id = $id;
		if (!$this->Terreno->exists()) {
			throw new NotFoundException(__('Invalid terreno'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Terreno->delete()) {
			$this->Session->setFlash(__('Terreno deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Terreno was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function admin_exportar(){

		$this->layout = null;

		header('Content-type: application/vnd.ms-excel');
	    header("Content-Disposition: attachment; filename=terrenos.xls");
	    header("Pragma: no-cache");
	    header("Expires: 0"); 

	    $terrenos = $this->Terreno->find('all');

	    $this->set('terrenos', $terrenos);
	}

}
