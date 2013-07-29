<?php
/**
 * StreetDateFixture
 *
 */
class StreetDateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'release_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'territory_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'date' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'release_id' => 1,
			'territory_id' => 1,
			'date' => '2013-07-29',
			'created' => '2013-07-29 16:09:31',
			'modified' => '2013-07-29 16:09:31'
		),
	);

}
