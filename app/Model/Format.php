<?php
App::uses('AppModel', 'Model');
/**
 * Format Model
 *
 * @property Release $Release
 * @property Recording $Recording
 */
class Format extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'catalogue_no';


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

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Recording' => array(
			'className' => 'Recording',
			'joinTable' => 'formats_recordings',
			'foreignKey' => 'format_id',
			'associationForeignKey' => 'recording_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
