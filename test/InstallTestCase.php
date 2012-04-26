<?php
require_once dirname(__FILE__) . '/TestRunner.php';
include_once dirname(__FILE__) . '/../includes/raw_start.php';

/**
 * 
 * @author Jerome Bogaerts, <taosupport@tudor.lu>
 * @package tao
 * @subpackage test
 */
class InstallTestCase extends UnitTestCase {
    
    const SAMPLE_LOCALES = '/samples/locales';
	
	/**
	 * Test the Installation Model Creator.
	 */
	public function testModelCreator() {
	    // - Test the existence of translations for models in tao meta extension.
		$extensionManager = common_ext_ExtensionsManager::singleton();
		$extensions = $extensionManager->getInstalledExtensions();
		$taoNs = LOCAL_NAMESPACE;
		$files = tao_install_utils_ModelCreator::getTranslationModelsFromExtension($extensions['tao']);
		$this->assertTrue(is_array($files));
		//$this->assertTrue(array_key_exists($taoNs, $files));
		//$this->assertTrue(count($files) == 1);
		
		// - Test the existence of language descriptions.
		$modelCreator = new tao_install_utils_ModelCreator(LOCAL_NAMESPACE);
		$langs = $modelCreator->getLanguageModels();
        $this->assertTrue(isset($langs[$taoNs . '#']), "No language descriptions available for model '${taoNs}'.");
        // We should have at least english described.
        $enFound = false;
        $languageDescriptionFiles = $langs[$taoNs . '#'];
        foreach ($languageDescriptionFiles as $f){
            if(preg_match('/locales\/EN\/lang.rdf/i', $f)){
                $enFound = true;
                break;
            }
        }
        
        $this->assertTrue($enFound, "English language description not found for model '${taoNs}'.");
	}

    /**
     * This test aims at testing the tao_install_utils_System class methods.
     */
    public function testSystemUtils(){
        // - Check if tao platform locales can be correctly retrieved.
        $locales = tao_install_utils_System::getAvailableLocales(dirname(__FILE__) . self::SAMPLE_LOCALES);
        $this->assertTrue(is_array($locales), 'Locales should be returned as an array of strings.');
        $this->assertTrue(array_key_exists('EN', $locales), "Locale 'EN' should be found.");
        $this->assertTrue($locales['EN'] == 'English', "Wrong label for locale 'EN'.");
        $this->assertTrue(array_key_exists('DE', $locales), "Locale 'DE' should be found.");
        $this->assertTrue($locales['DE'] == 'German', "Wrong label for locale 'DE'.");
        $this->assertTrue(array_key_exists('FR', $locales), "Locale 'FR' should be found.");
        $this->assertTrue($locales['FR'] == 'French', "Wrong label for locale 'FR'.");
        $this->assertTrue(array_key_exists('LU', $locales), "Locale 'LU' should be found.");
        $this->assertTrue($locales['LU'] == 'Luxembourgish', "Wrong label for locale 'LU'.");
        $this->assertTrue(array_key_exists('SE', $locales), "Locale 'SE' should be found.");
        $this->assertTrue($locales['SE'] == 'Swedish', "Wrong label for locale 'SE'.");
        $this->assertTrue(array_key_exists('en-YO', $locales), "Locale 'en-YO' should be found.");
        $this->assertTrue($locales['en-YO'] == 'Yoda English', "Wrong label for locale 'en-YO'.");
    }
}
?>