<?php

error_reporting(E_ALL);

/**
 * Generis Object Oriented API -
 *
 * $Id$
 *
 * This file is part of Generis Object Oriented API.
 *
 * Automatically generated on 22.12.2009, 16:53:45 with ArgoUML PHP module 
 * (last revised $Date: 2009-04-11 21:57:46 +0200 (Sat, 11 Apr 2009) $)
 *
 * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
 * @package tao
 * @subpackage helpers_form_elements_xhtml
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include tao_helpers_form_elements_Htmlarea
 *
 * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
 */
require_once('tao/helpers/form/elements/class.Htmlarea.php');

/* user defined includes */
// section 127-0-1-1-3ed01c83:12409dc285c:-8000:00000000000019EA-includes begin
// section 127-0-1-1-3ed01c83:12409dc285c:-8000:00000000000019EA-includes end

/* user defined constants */
// section 127-0-1-1-3ed01c83:12409dc285c:-8000:00000000000019EA-constants begin
// section 127-0-1-1-3ed01c83:12409dc285c:-8000:00000000000019EA-constants end

/**
 * Short description of class tao_helpers_form_elements_xhtml_Htmlarea
 *
 * @access public
 * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
 * @package tao
 * @subpackage helpers_form_elements_xhtml
 */
class tao_helpers_form_elements_xhtml_Htmlarea
    extends tao_helpers_form_elements_Htmlarea
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute CSS_CLASS
     *
     * @access public
     * @var string
     */
    const CSS_CLASS = 'html-area';

    // --- OPERATIONS ---

    /**
     * Short description of method render
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return string
     */
    public function render()
    {
        $returnValue = (string) '';

        // section 127-0-1-1-3ed01c83:12409dc285c:-8000:00000000000019F4 begin

		if(array_key_exists('class', $this->attributes)){
			if(strstr($this->attributes['class'], self::CSS_CLASS) !== false){
				$this->attributes['class'] .= ' ' . self::CSS_CLASS;
			}
		}
		else{
			$this->attributes['class'] = self::CSS_CLASS;
		}
		 
		 $returnValue .= "<label class='form_desc' for='{$this->name}'>".$this->getDescription()."</label>";
		 $returnValue .= "<textarea name='{$this->name}' id='{$this->name}' ";
		 $returnValue .= $this->renderAttributes();
		 $returnValue .= ">{$this->value}</textarea>";
		 
        // section 127-0-1-1-3ed01c83:12409dc285c:-8000:00000000000019F4 end

        return (string) $returnValue;
    }

} /* end of class tao_helpers_form_elements_xhtml_Htmlarea */

?>