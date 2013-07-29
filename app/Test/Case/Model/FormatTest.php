<?php
App::uses('Format', 'Model');

/**
 * Format Test Case
 *
 */
class FormatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.format',
		'app.release',
		'app.artist',
		'app.bio',
		'app.font',
		'app.logo',
		'app.photo',
		'app.playlist',
		'app.sales_memo',
		'app.social_media_tool',
		'app.packshot',
		'app.artwork',
		'app.pressrelease',
		'app.street_date',
		'app.recording',
		'app.formats_recording'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Format = ClassRegistry::init('Format');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Format);

		parent::tearDown();
	}

}
