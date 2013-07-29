<?php
App::uses('Packshot', 'Model');

/**
 * Packshot Test Case
 *
 */
class PackshotTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.packshot',
		'app.release',
		'app.artist',
		'app.bio',
		'app.font',
		'app.logo',
		'app.photo',
		'app.playlist',
		'app.sales_memo',
		'app.social_media_tool',
		'app.artwork',
		'app.format',
		'app.recording',
		'app.bonus_track',
		'app.promo_mp3',
		'app.remix',
		'app.video',
		'app.formats_recording',
		'app.pressrelease',
		'app.street_date'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Packshot = ClassRegistry::init('Packshot');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Packshot);

		parent::tearDown();
	}

}
