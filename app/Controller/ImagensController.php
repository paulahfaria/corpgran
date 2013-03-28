<?php
App::uses('AppController', 'Controller');
/**
 * Imagems Controller
 *
 * @property Imagem $Imagem
 */
class ImagensController extends AppController {


	public $uses = array('Imagem','Empreendimento');

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Imagem->recursive = 0;
		$this->set('imagens', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Imagem->exists($id)) {
			throw new NotFoundException(__('Invalid Imagem'));
		}
		$options = array('conditions' => array('Imagem.' . $this->Imagem->primaryKey => $id));
		$this->set('Imagem', $this->Imagem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add($empreendimento_id) {

		if ($this->request->is('post')) {

			foreach ($this->request->data['Imagem']['arquivo'] as $arquivo) {

				$this->Imagem->create();

				$imagem['titulo'] = $this->request->data['Imagem']['titulo'] ;

				$imagem['empreendimento_id'] = $this->request->data['Imagem']['empreendimento_id'] ;

				$imagem['destaque'] = $this->request->data['Imagem']['destaque'];

				$imagem['arquivo'] = $arquivo;		

				if ($this->Imagem->save($imagem)) {

					echo 'save';


				} else {

					debug($this->Imagem->validationErrors);

					$this->Session->setFlash(__('The Imagem could not be saved. Please, try again.'));
				}
			}

			$this->Session->setFlash(__('The Imagem has been saved'));

			$this->redirect(array('action' => 'index'));
		}
		$empreendimentos = $this->Imagem->Empreendimento->find('list');
		$this->set(compact('empreendimentos','empreendimento_id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($empredimento_id = null) {


		if ($this->request->is('post') || $this->request->is('put')) {


			foreach ($this->request->data['Imagem'] as $arquivo) {

				$this->Imagem->create();

				$this->Imagem->id = $arquivo['id'];

				$imagem['titulo'] = $arquivo['titulo'] ;

				$imagem['empreendimento_id'] = $arquivo['empreendimento_id'] ;

				$imagem['destaque'] = $arquivo['destaque'];	

				$this->Imagem->save($imagem);

			}

			$this->Session->setFlash(__('The Imagem has been saved'));

			$this->redirect(array('action' => 'index'));

		} else {
			$empreendimento = $this->Empreendimento->read(null, $empredimento_id);
			//$options = array('conditions' => array('Imagem.' . $this->Imagem->primaryKey => $id));
			//$this->request->data = $this->Imagem->find('first', $options);
		}
		$empreendimentos = $this->Imagem->Empreendimento->find('list');
		$this->set(compact('empreendimentos','empreendimento'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null, $empreendimento_id = null) {
		$this->Imagem->id = $id;
		if (!$this->Imagem->exists()) {
			throw new NotFoundException(__('Invalid Imagem'));
		}
		//$this->request->onlyAllow('post', 'delete');
		if ($this->Imagem->delete()) {
			$this->Session->setFlash(__('Imagem deleted'));
		$this->redirect(array('action' => 'edit/'.$empreendimento_id));
		}
		$this->Session->setFlash(__('Imagem was not deleted'));
		$this->redirect(array('action' => 'edit/'.$empreendimento_id));
	}
}
