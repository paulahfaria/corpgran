<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Favorito $Favorito
 */
class Usuario extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Empreendimento' => array(
			'className' => 'Empreendimento',
			'foreignKey' => 'empreendimento_id',
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

  public function beforeSave() 
  {
    if (isset($this->data[$this->alias]['password']) && strlen($this->data[$this->alias]['password']) < 20 ) 
    {
      $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
  }	

}
