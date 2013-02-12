<?php

error_reporting(E_ALL);

/**
 * Specification of the Generis ExtensionInstaller class to add a new behavior:
 * the Modules and Actions in the Ontology at installation time.
 *
 * @author Jerome Bogaerts <jerome@taotesting.com>
 * @package tao
 * @since 2.4
 * @subpackage install
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include common_ext_ExtensionInstaller
 *
 * @author Jerome Bogaerts, <jerome@taotesting.com>
 */
require_once('common/ext/class.ExtensionInstaller.php');

/* user defined includes */
// section 10-13-1-85-74f9b31f:13c8ff1fd35:-8000:0000000000003C57-includes begin
// section 10-13-1-85-74f9b31f:13c8ff1fd35:-8000:0000000000003C57-includes end

/* user defined constants */
// section 10-13-1-85-74f9b31f:13c8ff1fd35:-8000:0000000000003C57-constants begin
// section 10-13-1-85-74f9b31f:13c8ff1fd35:-8000:0000000000003C57-constants end

/**
 * Specification of the Generis ExtensionInstaller class to add a new behavior:
 * the Modules and Actions in the Ontology at installation time.
 *
 * @access public
 * @author Jerome Bogaerts <jerome@taotesting.com>
 * @package tao
 * @since 2.4
 * @subpackage install
 */
class tao_install_ExtensionInstaller
    extends common_ext_ExtensionInstaller
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Will create the model of Modules and Actions (MVC) in the persistent
     *
     * @access public
     * @author Jerome Bogaerts <jerome@taotesting.com
     * @return void
     * @since 2.4
     */
    public function extendedInstall()
    {
        // section 10-13-1-85-74f9b31f:13c8ff1fd35:-8000:0000000000003C58 begin
        common_Logger::i("Loading constants for extension '" . $this->extension->getID());
        Bootstrap::loadConstants($this->extension->getID());
        
        tao_helpers_funcACL_Model::spawnExtensionModel($this->extension);
        // section 10-13-1-85-74f9b31f:13c8ff1fd35:-8000:0000000000003C58 end
    }

} /* end of class tao_install_ExtensionInstaller */

?>