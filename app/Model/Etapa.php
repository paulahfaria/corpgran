<?php
App::uses('AppModel', 'Model');
/**
 * Etapa Model
 *
 * @property Empreendimento $Empreendimento
 */
class Etapa extends AppModel {

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
			'foreignKey' => 'etapa_id',
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
