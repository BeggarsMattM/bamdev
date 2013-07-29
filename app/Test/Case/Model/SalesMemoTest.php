<?php
App::uses('SalesMemo', 'Model');

/**
 * SalesMemo Test Case
 *
 */
class SalesMemoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sales_memo',
		'app.artist',
		'app.bio',
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
		'app.social_media_tool',
		'app.territory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SalesMemo = ClassRegistry::init('SalesMemo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SalesMemo);

		parent::tearDown();
	}

}
