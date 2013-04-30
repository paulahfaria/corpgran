<?php
App::uses('AppModel', 'Model');
/**
 * Noticia Model
 *
 */
class Noticia extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'titulo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

   public $actsAs = array(
        'Upload.Upload' => array(
            'imagem' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailMethod' => 'php',
                'thumbnailQuality' => 90,
                'thumbnailSizes' => array(
                    'normal' => '720x400',                   
                    'thumb' => '350x235'
                )
            )
        )
    );		
}
