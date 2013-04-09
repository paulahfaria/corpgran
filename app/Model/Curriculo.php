<?php
App::uses('AppModel', 'Model');
/**
 * Curriculo Model
 *
 */
class Curriculo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';


   public $actsAs = array(
        'Upload.Upload' => array(
            'arquivo' => array(
 
            )
        )
    );	
}
