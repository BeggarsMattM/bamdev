<?php
App::uses('BonusTrack', 'Model');

/**
 * BonusTrack Test Case
 *
 */
class BonusTrackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bonus_track',
		'app.recording',
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
		$this->BonusTrack = ClassRegistry::init('BonusTrack');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BonusTrack);

		parent::tearDown();
	}

}
