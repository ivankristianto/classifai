<?php
/**
 * The plugin settings page loads correctly.
 *
 * @package wpacceptance
 */
/**
 * PHPUnit test class
 */
class Settings extends \TestCaseBase {

	/**
	 * @testdox Plugin settings page loads correctly.
	 */
	public function testSettings() {
		$actor = $this->openBrowserPage();
		$actor->loginAs( 'admin' );

		// Go to the settings page and test.
		$actor->moveTo( '/wp-admin/admin.php?page=classifai_settings' );
		$actor->seeText( 'Registered Email', 'label[for="email"]' );
		$actor->seeText( 'Registration Key', 'label[for="license_key"]' );
	}

	/**
	 * @testdox Language Processing credentials are set.
	 */
	public function testLanguageProcessingSettings() {
		$actor = $this->openBrowserPage();
		$actor->loginAs( 'admin' );

		// Go to the settings page and test.
		$actor->moveTo( '/wp-admin/admin.php?page=language_processing' );
		$this->assertTrue( '' != $actor->getElementProperty( '#classifai-settings-watson_url', 'value' ) );
		$this->assertTrue( '' != $actor->getElementProperty( '#classifai-settings-watson_username', 'value' ) );
		$this->assertTrue( '' != $actor->getElementProperty( '#classifai-settings-watson_password', 'value' ) );
	}

	/**
	 * @testdox Image Processing credentials are set.
	 */
	public function testImageProccessingSettings() {
		$actor = $this->openBrowserPage();
		$actor->loginAs( 'admin' );

		// Go to the settings page and test.
		$actor->moveTo( '/wp-admin/admin.php?page=image_processing' );
		$this->assertTrue( '' != $actor->getElementProperty( '#classifai-settings-url', 'value' ) );
		$this->assertTrue( '' != $actor->getElementProperty( '#classifai-settings-api_key', 'value' ) );
	}
}

