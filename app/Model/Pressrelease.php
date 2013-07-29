<?php
App::uses('AppModel', 'Model');
/**
 * Pressrelease Model
 *
 * @property Release $Release
 */
class Pressrelease extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Release' => array(
			'className' => 'Release',
			'foreignKey' => 'release_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
