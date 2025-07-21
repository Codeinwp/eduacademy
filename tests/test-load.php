<?php
/**
 * Class Test_Loading
 *
 * @package eduacademy
 */

class Test_Loading extends WP_UnitTestCase {
	/**
	 * Test Constants.
	 */
	public function testConstants() {
		$this->assertTrue( defined( 'EDUACADEMY_VERSION' ) );
		$this->assertTrue( defined( 'EDUACADEMY_DEBUG' ) );
		$this->assertTrue( defined( 'EDUACADEMY_DIR' ) );
		$this->assertTrue( defined( 'EDUACADEMY_URL' ) );
	}

	/**
	 * Make sure debug is false.
	 */
	public function testDebugOff() {
		$this->assertEquals( EDUACADEMY_DEBUG, WP_DEBUG );
	}

	/**
	 * Make sure Core is loaded.
	 *
	 * @return void
	 */
	public function testCoreLoaded() {
		$this->assertTrue( class_exists( 'Eduacademy\Core', false ) );
	}
}