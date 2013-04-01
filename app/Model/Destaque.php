<?php
App::uses('AppModel', 'Model');
/**
 * Destaque Model
 *
 */
class Destaque extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(

	);

   public $actsAs = array(
        'Upload.Upload' => array(
            'arquivo' => array(
                'fields' => array(
                    'dir' => 'photo_dir'
                ),
                'thumbnailMethod' => 'php'
            )
        )
    );		
}
