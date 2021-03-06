<?php
App::uses('AppModel', 'Model');
/**
 * Empreendimento Model
 *
 * @property Bairro $Bairro
 * @property Quarto $Quarto
 * @property Etapa $Etapa
 * @property Favorito $Favorito
 * @property Imagen $Imagen
 */
class Empreendimento extends AppModel {


	public $displayField = "nome";
	
	public $actsAs = array('Containable');
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'bairro_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'quarto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'etapa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Bairro' => array(
			'className' => 'Bairro',
			'foreignKey' => 'bairro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Quarto' => array(
			'className' => 'Quarto',
			'foreignKey' => 'quarto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Etapa' => array(
			'className' => 'Etapa',
			'foreignKey' => 'etapa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Imagem' => array(
			'className' => 'Imagem',
			'foreignKey' => 'empreendimento_id',
			'dependent' => true,
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

	public $hasOne = array(
		'ImagemDestaque' => array(
			'className' => 'Imagem',
			'foreignKey' => 'empreendimento_id',
			'dependent' => false,
			'conditions' => array('ImagemDestaque.destaque' => 1 ),
			'fields' => '',
			'order' => 'ImagemDestaque.created DESC'
		)
	);	

}
