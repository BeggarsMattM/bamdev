<?php
App::uses('AppModel', 'Model');
/**
 * FormatsRecording Model
 *
 * @property Format $Format
 * @property Recording $Recording
 */
class FormatsRecording extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Format' => array(
			'className' => 'Format',
			'foreignKey' => 'format_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Recording' => array(
			'className' => 'Recording',
			'foreignKey' => 'recording_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
