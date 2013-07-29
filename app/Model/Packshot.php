<?php
App::uses('AppModel', 'Model');
/**
 * Packshot Model
 *
 * @property Release $Release
 */
class Packshot extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Release' => array(
			'className' => 'Release',
			'foreignKey' => 'packshot_id',
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
