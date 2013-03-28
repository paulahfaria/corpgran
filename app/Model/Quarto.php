<?php
App::uses('AppModel', 'Model');
/**
 * Quarto Model
 *
 * @property Empreendimento $Empreendimento
 */
class Quarto extends AppModel {

	public $displayField  = "nome";
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Empreendimento' => array(
			'className' => 'Empreendimento',
			'foreignKey' => 'quarto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
