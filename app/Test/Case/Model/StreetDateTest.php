<?php
App::uses('StreetDate', 'Model');

/**
 * StreetDate Test Case
 *
 */
class StreetDateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.street_date',
		'app.release',
		'app.artist',
		'app.bio',
		'app.font',
		'app.logo',
		'app.photo',
		'app.playlist',
		'app.sales_memo',
		'app.territory',
		'app.social_media_tool',
		'app.packshot',
		'app.artwork',
		'app.format',
		'app.recording',
		'app.bonus_track',
		'app.promo_mp3',
		'app.remix',
		'app.video',
		'app.formats_recording',
		'app.pressrelease'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StreetDate = ClassRegistry::init('StreetDate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StreetDate);

		parent::tearDown();
	}

}
