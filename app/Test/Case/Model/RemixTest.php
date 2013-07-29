<?php
App::uses('Remix', 'Model');

/**
 * Remix Test Case
 *
 */
class RemixTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.remix',
		'app.recording',
		'app.bonus_track',
		'app.promo_mp3',
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
		$this->Remix = ClassRegistry::init('Remix');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Remix);

		parent::tearDown();
	}

}
