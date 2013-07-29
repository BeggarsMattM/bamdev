<?php
App::uses('Bio', 'Model');

/**
 * Bio Test Case
 *
 */
class BioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bio',
		'app.artist',
		'app.font',
		'app.logo',
		'app.photo',
		'app.playlist',
		'app.release',
		'app.packshot',
		'app.artwork',
		'app.format',
		'app.recording',
		'app.bonus_track',
		'app.promo_mp3',
		'app.remix',
		'app.video',
		'app.formats_recording',
		'app.pressrelease',
		'app.street_date',
		'app.sales_memo',
		'app.social_media_tool'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bio = ClassRegistry::init('Bio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bio);

		parent::tearDown();
	}

}
