<?php
App::uses('AppModel', 'Model');
/**
 * Remix Model
 *
 * @property Recording $Recording
 */
class Remix extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Recording' => array(
			'className' => 'Recording',
			'foreignKey' => 'recording_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
