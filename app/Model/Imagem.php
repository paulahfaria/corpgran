<?php
App::uses('AppModel', 'Model');
/**
 * Imagen Model
 *
 * @property Empreendimento $Empreendimento
 */
class Imagem extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'empreendimento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Empreendimento' => array(
			'className' => 'Empreendimento',
			'foreignKey' => 'empreendimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	

   public $actsAs = array(
        'Upload.Upload' => array(
            'arquivo' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailMethod' => 'php',
                'thumbnailSizes' => array(
                    'normal' => '500x340',
                    'thumb' => '210x190'
                )
            )
        )
    );	

}
