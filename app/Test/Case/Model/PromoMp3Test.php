<?php
App::uses('PromoMp3', 'Model');

/**
 * PromoMp3 Test Case
 *
 */
class PromoMp3Test extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promo_mp3',
		'app.recording',
		'app.bonus_track',
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
		$this->PromoMp3 = ClassRegistry::init('PromoMp3');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PromoMp3);

		parent::tearDown();
	}

}
