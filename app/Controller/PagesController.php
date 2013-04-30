<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

App::uses('CakeEmail', 'Network/Email');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Empreendimento','Bairro','Etapa','Destaque','Terreno','Favorito');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */

	public function home(){

		$destaques = $this->Destaque->find('all');

		$empreendimentos = $this->Empreendimento->find('all');

        $this->set(compact('destaques','empreendimentos')); 

	}

	public function contato(){

		$tipoContato = array('Venda' => 'Venda','Pós Venda' => 'Pós Venda');

		if ($this->request->is('post')) {

			$mensagem = "Nome: ".$this->request->data['Contato']['nome'] .'/n/r';

			$mensagem .= "E-mail: ".$this->request->data['Contato']['email'] .'/n/r';	

			$mensagem .= "Telefone: ".$this->request->data['Contato']['telefone'] .'/n/r';

			$mensagem .= "Mensagem: ".$this->request->data['Contato']['mensagem'] .'/n/r';			

			$Email = new CakeEmail();

			$Email->from(array('contato@grancorp.com' => 'Contato'));

			$Email->to('thiago.magsoares@gmail.com');

			$Email->subject('Contato -'.$this->request->data['Contato']['tipo_contato'].' - '.$this->request->data['Contato']['assunto']);

			if($Email->send($mensagem)){

				$this->Session->setFlash(__('Contato enviado com sucesso'));
			}

		}		

        $this->set(compact('tipoContato')); 

	}	

	public function negocie(){

		if ($this->request->is('post')) {

			if($this->Terreno->save($this->request->data)){

				$this->Session->setFlash(__('Seu Terreno foi cadastrado. Entraremos em contato.'));

			}else{

				$this->Session->setFlash(__('Preencha todos os campos corretamente.'));
				
			}

		}		

	}

	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
}
