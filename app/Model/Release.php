<?php
App::uses('AppModel', 'Model');
/**
 * Release Model
 *
 * @property Artist $Artist
 * @property Packshot $Packshot
 * @property Artwork $Artwork
 * @property Format $Format
 * @property Pressrelease $Pressrelease
 * @property StreetDate $StreetDate
 */
class Release extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Artist' => array(
			'className' => 'Artist',
			'foreignKey' => 'artist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Packshot' => array(
			'className' => 'Packshot',
			'foreignKey' => 'packshot_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Artwork' => array(
			'className' => 'Artwork',
			'foreignKey' => 'release_id',
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
		'Format' => array(
			'className' => 'Format',
			'foreignKey' => 'release_id',
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
		'Pressrelease' => array(
			'className' => 'Pressrelease',
			'foreignKey' => 'release_id',
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
		'StreetDate' => array(
			'className' => 'StreetDate',
			'foreignKey' => 'release_id',
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
