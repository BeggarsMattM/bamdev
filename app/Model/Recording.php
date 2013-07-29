<?php
App::uses('AppModel', 'Model');
/**
 * Recording Model
 *
 * @property BonusTrack $BonusTrack
 * @property PromoMp3 $PromoMp3
 * @property Remix $Remix
 * @property Video $Video
 * @property Format $Format
 */
class Recording extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'BonusTrack' => array(
			'className' => 'BonusTrack',
			'foreignKey' => 'recording_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PromoMp3' => array(
			'className' => 'PromoMp3',
			'foreignKey' => 'recording_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Remix' => array(
			'className' => 'Remix',
			'foreignKey' => 'recording_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Video' => array(
			'className' => 'Video',
			'foreignKey' => 'recording_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Format' => array(
			'className' => 'Format',
			'joinTable' => 'formats_recordings',
			'foreignKey' => 'recording_id',
			'associationForeignKey' => 'format_id',
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
