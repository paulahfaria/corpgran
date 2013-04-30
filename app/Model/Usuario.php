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
    public $hasAndBelongsToMany = array(
        'Empreendimento' =>
            array(
                'className'              => 'Empreendimento',
                'joinTable'              => 'favoritos',
                'foreignKey'             => 'usuario_id',
                'associationForeignKey'  => 'empreendimento_id',
                'unique' => 'keepExisting',
                'conditions'             => '',
                'fields'                 => '',
                'order'                  => '',
                'limit'                  => '',
                'offset'                 => '',
                'finderQuery'            => '',
                'deleteQuery'            => '',
                'insertQuery'            => ''
            )
    );

  public function beforeSave($options = array()) 
  {

    if (isset($this->data[$this->alias]['password']) && strlen($this->data[$this->alias]['password']) < 20 ) 
    {
      $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }

    foreach (array_keys($this->hasAndBelongsToMany) as $model){
      if(isset($this->data[$this->name][$model])){
        $this->data[$model][$model] = $this->data[$this->name][$model];
        unset($this->data[$this->name][$model]);
      }
    }
    return true;

  }	



}
