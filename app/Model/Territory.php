<?php
App::uses('AppModel', 'Model');
/**
 * Territory Model
 *
 * @property SalesMemo $SalesMemo
 * @property StreetDate $StreetDate
 */
class Territory extends AppModel {

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
		'SalesMemo' => array(
			'className' => 'SalesMemo',
			'foreignKey' => 'territory_id',
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
			'foreignKey' => 'territory_id',
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
