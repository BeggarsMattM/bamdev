<?php
/**
 * FormatsRecordingFixture
 *
 */
class FormatsRecordingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'format_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'recording_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'track_no' => array('type' => 'integer', 'null' => true, 'default' => null),
		'side_no' => array('type' => 'integer', 'null' => true, 'default' => null),
		'volume_no' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'format_id' => 1,
			'recording_id' => 1,
			'track_no' => 1,
			'side_no' => 1,
			'volume_no' => 1
		),
	);

}
