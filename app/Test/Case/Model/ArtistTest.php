<?php
App::uses('Artist', 'Model');

/**
 * Artist Test Case
 *
 */
class ArtistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.artist',
		'app.bio',
		'app.font',
		'app.logo',
		'app.photo',
		'app.playlist',
		'app.release',
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
		$this->Artist = ClassRegistry::init('Artist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Artist);

		parent::tearDown();
	}

}
