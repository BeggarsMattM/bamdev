<?php
App::uses('Recording', 'Model');

/**
 * Recording Test Case
 *
 */
class RecordingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recording',
		'app.bonus_track',
		'app.promo_mp3',
		'app.remix',
		'app.video',
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
		'app.formats_recording'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Recording = ClassRegistry::init('Recording');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Recording);

		parent::tearDown();
	}

}
