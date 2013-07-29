<?php
App::uses('Logo', 'Model');

/**
 * Logo Test Case
 *
 */
class LogoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.logo',
		'app.artist',
		'app.bio',
		'app.font',
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
		$this->Logo = ClassRegistry::init('Logo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Logo);

		parent::tearDown();
	}

}
