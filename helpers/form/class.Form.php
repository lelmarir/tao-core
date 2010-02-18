<?php

error_reporting(E_ALL);

/**
 * Represents a form. It provides the default behavior for form management and
 * be overridden for any rendering mode.
 * A form is composed by a set of FormElements.
 *
 * The form data flow is:
 * 1. add the elements to the form instance
 * 2. run evaluate (initElements, update states (submited, valid, etc), update
 * )
 * 3. render form
 *
 * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
 * @package tao
 * @subpackage helpers_form
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include tao_helpers_form_FormContainer
 *
 * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
 */
require_once('tao/helpers/form/class.FormContainer.php');

/**
 * include tao_helpers_form_Decorator
 *
 * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
 */
require_once('tao/helpers/form/interface.Decorator.php');

/* user defined includes */
// section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018A4-includes begin
// section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018A4-includes end

/* user defined constants */
// section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018A4-constants begin
// section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018A4-constants end

/**
 * Represents a form. It provides the default behavior for form management and
 * be overridden for any rendering mode.
 * A form is composed by a set of FormElements.
 *
 * The form data flow is:
 * 1. add the elements to the form instance
 * 2. run evaluate (initElements, update states (submited, valid, etc), update
 * )
 * 3. render form
 *
 * @abstract
 * @access public
 * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
 * @package tao
 * @subpackage helpers_form
 */
abstract class tao_helpers_form_Form
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute name
     *
     * @access protected
     * @var string
     */
    protected $name = '';

    /**
     * Short description of attribute elements
     *
     * @access protected
     * @var array
     */
    protected $elements = array();

    /**
     * Short description of attribute actions
     *
     * @access protected
     * @var array
     */
    protected $actions = array();

    /**
     * Short description of attribute valid
     *
     * @access protected
     * @var boolean
     */
    protected $valid = false;

    /**
     * Short description of attribute submited
     *
     * @access protected
     * @var boolean
     */
    protected $submited = false;

    /**
     * Short description of attribute groups
     *
     * @access protected
     * @var array
     */
    protected $groups = array();

    /**
     * Short description of attribute decorators
     *
     * @access protected
     * @var array
     */
    protected $decorators = array();

    /**
     * Short description of attribute options
     *
     * @access protected
     * @var array
     */
    protected $options = array();

    // --- OPERATIONS ---

    /**
     * the form constructor
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string name
     * @param  array options
     * @return mixed
     */
    public function __construct($name = '', $options = array())
    {
        // section 127-0-1-1--54ddf4d1:12404ee79c9:-8000:0000000000001912 begin
		$this->name = $name;
		$this->options = $options;
        // section 127-0-1-1--54ddf4d1:12404ee79c9:-8000:0000000000001912 end
    }

    /**
     * Short description of method setName
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string name
     * @return mixed
     */
    public function setName($name)
    {
        // section 127-0-1-1-2209c6ee:1266b4e4079:-8000:0000000000001E39 begin
		
		$this->name = $name;
		
        // section 127-0-1-1-2209c6ee:1266b4e4079:-8000:0000000000001E39 end
    }

    /**
     * Short description of method getName
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return string
     */
    public function getName()
    {
        $returnValue = (string) '';

        // section 127-0-1-1--54ddf4d1:12404ee79c9:-8000:0000000000001918 begin
		
		$returnValue = $this->name;
		
        // section 127-0-1-1--54ddf4d1:12404ee79c9:-8000:0000000000001918 end

        return (string) $returnValue;
    }

    /**
     * Short description of method setOptions
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  array options
     * @return mixed
     */
    public function setOptions($options)
    {
        // section 127-0-1-1-2209c6ee:1266b4e4079:-8000:0000000000001E36 begin
		
		$this->options = $options;
		
        // section 127-0-1-1-2209c6ee:1266b4e4079:-8000:0000000000001E36 end
    }

    /**
     * Short description of method getElement
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string name
     * @return tao_helpers_form_FormElement
     */
    public function getElement($name)
    {
        $returnValue = null;

        // section 127-0-1-1-34faf2f6:126dcb3a83d:-8000:0000000000001EAB begin
		
		foreach($this->elements as $element){
			if($element->getName() == $name){
				$returnValue = $element;
				break;
			}
		}
		
        // section 127-0-1-1-34faf2f6:126dcb3a83d:-8000:0000000000001EAB end

        return $returnValue;
    }

    /**
     * Short description of method getElements
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return array
     */
    public function getElements()
    {
        $returnValue = array();

        // section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018AC begin
		
		$returnValue = $this->elements;
		
        // section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018AC end

        return (array) $returnValue;
    }

    /**
     * Short description of method setElements
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  array elements
     * @return mixed
     */
    public function setElements($elements)
    {
        // section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018B1 begin
		
		$this->elements = $elements;
		
        // section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018B1 end
    }

    /**
     * Short description of method addElement
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  FormElement element
     * @return mixed
     */
    public function addElement( tao_helpers_form_FormElement $element)
    {
        // section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018AE begin
		
		if($element->getLevel() == 1){
			$element->setLevel(count($this->elements) + 2);
		}
		$this->elements[] = $element;
		
        // section 10-13-1-45--48e788d1:123dcd97db5:-8000:00000000000018AE end
    }

    /**
     * Short description of method setActions
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  array actions
     * @param  string context
     * @return mixed
     */
    public function setActions($actions, $context = 'bottom')
    {
        // section 127-0-1-1-5e86b639:12689c55756:-8000:0000000000001E49 begin
		
		$this->actions[$context] = array();
		
		foreach($actions as $action){
			if( ! $action instanceof tao_helpers_form_FormElement){
				throw new Exception(" the actions parameter must only contains instances of tao_helpers_form_FormElement ");
			}
			$this->actions[$context][] = $action;
		}
		
        // section 127-0-1-1-5e86b639:12689c55756:-8000:0000000000001E49 end
    }

    /**
     * Short description of method getActions
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string context
     * @return array
     */
    public function getActions($context = 'bottom')
    {
        $returnValue = array();

        // section 127-0-1-1--41373b28:1268dca6296:-8000:0000000000001E6A begin
		
		if(isset($this->actions[$context])){
			$returnValue = $this->actions[$context];
		}
		
        // section 127-0-1-1--41373b28:1268dca6296:-8000:0000000000001E6A end

        return (array) $returnValue;
    }

    /**
     * Short description of method setDecorator
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  Decorator decorator
     * @param  string type
     * @return mixed
     */
    public function setDecorator( tao_helpers_form_Decorator $decorator, $type = 'element')
    {
        // section 127-0-1-1-3ed01c83:12409dc285c:-8000:0000000000001961 begin
		
		$this->decorators[$type] = $decorator;
		
        // section 127-0-1-1-3ed01c83:12409dc285c:-8000:0000000000001961 end
    }

    /**
     * Short description of method setDecorators
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  array decorators
     * @return mixed
     */
    public function setDecorators($decorators)
    {
        // section 127-0-1-1-5e86b639:12689c55756:-8000:0000000000001E3E begin
		
		foreach($decorators as $type => $decorator){
			$this->setDecorator($decorator, $type);
		}
		
        // section 127-0-1-1-5e86b639:12689c55756:-8000:0000000000001E3E end
    }

    /**
     * Short description of method getDecorator
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string type
     * @return tao_helpers_form_Decorator
     */
    public function getDecorator($type = 'element')
    {
        $returnValue = null;

        // section 127-0-1-1-42952c74:1268930e800:-8000:0000000000001E52 begin
		
		if(array_key_exists($type, $this->decorators)){
			$returnValue  = $this->decorators[$type];
		}
		
        // section 127-0-1-1-42952c74:1268930e800:-8000:0000000000001E52 end

        return $returnValue;
    }

    /**
     * render all the form elements
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return string
     */
    public function renderElements()
    {
        $returnValue = (string) '';

        // section 127-0-1-1-3ed01c83:12409dc285c:-8000:0000000000001983 begin
		foreach($this->elements as $element){
			 
			 if($this->getElementGroup($element->getName()) != ''){
			 	continue;	//render grouped elements after  
			 }
			 
			 if(!is_null($this->getDecorator()) && !($element instanceof tao_helpers_form_elements_Hidden)){
			 	$returnValue .= $this->getDecorator()->preRender();
			 }
			 
			 //render element
			 $returnValue .= $element->render();
			 
			 //render error message
			 if(!$this->isValid() && $element->getError() != ''){
			 	if(!is_null($this->getDecorator('error'))){
			 		$returnValue .= $this->getDecorator('error')->preRender();
			 	}
			 	$returnValue .= $element->getError();
				if(!is_null($this->getDecorator('error'))){
			 		$returnValue .= $this->getDecorator('error')->postRender();
			 	}
			 }
			 
			 if(!is_null($this->getDecorator()) && !($element instanceof tao_helpers_form_elements_Hidden)){
			 	$returnValue .= $this->getDecorator()->postRender();
			 }
		}
		
		$subGroupDecorator = null;
		if(!is_null($this->getDecorator('group'))){
			$decoratorClass = get_class($this->getDecorator('group'));
			$subGroupDecorator = new $decoratorClass();
		}
		
		//render group
		foreach($this->groups as $groupName => $group){
		
			if(!is_null($this->getDecorator('group'))){
				$this->getDecorator('group')->setOption('id', tao_helpers_Display::textCleaner($groupName));
				$returnValue .= $this->getDecorator('group')->preRender();
			}
			$returnValue .= $group['title'];
			if(!is_null($subGroupDecorator)){
				$returnValue .= $subGroupDecorator->preRender();
			}
			
			foreach($this->elements as $element){
				 if($this->getElementGroup($element->getName()) == $groupName){
				 
				 	if(!is_null($this->getDecorator()) && !($element instanceof tao_helpers_form_elements_Hidden) ){
					 	$returnValue .= $this->getDecorator()->preRender();
					 }
					 
					 //render element
					 $returnValue .= $element->render();
					 
					 //render error message
					 if(!$this->isValid() && $element->getError() != ''){
					 	if(!is_null($this->getDecorator('error'))){
					 		$returnValue .= $this->getDecorator('error')->preRender();
					 	}
					 	$returnValue .= $element->getError();
						if(!is_null($this->getDecorator('error'))){
					 		$returnValue .= $this->getDecorator('error')->postRender();
					 	}
					 }
					 
					 if(!is_null($this->getDecorator()) && !($element instanceof tao_helpers_form_elements_Hidden) ){
					 	$returnValue .= $this->getDecorator()->postRender();
					 }
				 
				 }
			}
			if(!is_null($subGroupDecorator)){
				$returnValue .= $subGroupDecorator->postRender();
			}
			if(!is_null($this->getDecorator('group'))){
				$returnValue .= $this->getDecorator('group')->postRender();
				$this->getDecorator('group')->setOption('id', '');
			}
		}
        // section 127-0-1-1-3ed01c83:12409dc285c:-8000:0000000000001983 end

        return (string) $returnValue;
    }

    /**
     * Short description of method renderActions
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string context
     * @return string
     */
    public function renderActions($context = 'bottom')
    {
        $returnValue = (string) '';

        // section 127-0-1-1-5e86b639:12689c55756:-8000:0000000000001E4C begin
		
		if(isset($this->actions[$context])){
			
			$decorator = null;
			if(!is_null($this->getDecorator('actions-'.$context))){
			 	$decorator = $this->getDecorator('actions-'.$context);
			}
			else if(!is_null($this->getDecorator('actions'))){
			 	$decorator = $this->getDecorator('actions');
			}
			
			if(!is_null($decorator)){
				$returnValue .= $decorator->preRender();
			}
	
			foreach($this->actions[$context] as $action){
				$returnValue .= $action->render();
			}
			 
			if(!is_null($decorator)){
				$returnValue .= $decorator->postRender();
			}
		
		}
		
        // section 127-0-1-1-5e86b639:12689c55756:-8000:0000000000001E4C end

        return (string) $returnValue;
    }

    /**
     * initialize the elements set
     *
     * @access protected
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return mixed
     */
    protected function initElements()
    {
        // section 127-0-1-1-79c612e8:1244dcac11b:-8000:0000000000001A4E begin
		
		$tosort = array();
		foreach($this->elements as $i => $element){
			$tosort['0'.$element->getLevel()] = $element;	//force string key
		}
		ksort($tosort);											//sort by key
		$this->elements = array();							
		foreach($tosort as $element){
			array_push($this->elements, $element); 
		}
		unset($tosort);
		
        // section 127-0-1-1-79c612e8:1244dcac11b:-8000:0000000000001A4E end
    }

    /**
     * Short description of method hasFileUpload
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return boolean
     */
    public function hasFileUpload()
    {
        $returnValue = (bool) false;

        // section 127-0-1-1-3453b76:1254af40027:-8000:0000000000001CCD begin
		
		foreach($this->elements as $element){
			if($element instanceof tao_helpers_form_elements_File){
				 $returnValue = true;
				 break;
			}
		}
		
        // section 127-0-1-1-3453b76:1254af40027:-8000:0000000000001CCD end

        return (bool) $returnValue;
    }

    /**
     * Enables you to know if the form is valid
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return boolean
     */
    public function isValid()
    {
        $returnValue = (bool) false;

        // section 127-0-1-1-7ebefbff:12428eef00b:-8000:00000000000019D3 begin
		$returnValue = $this->valid;
        // section 127-0-1-1-7ebefbff:12428eef00b:-8000:00000000000019D3 end

        return (bool) $returnValue;
    }

    /**
     * Short description of method isSubmited
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return boolean
     */
    public function isSubmited()
    {
        $returnValue = (bool) false;

        // section 127-0-1-1-7ebefbff:12428eef00b:-8000:00000000000019E0 begin
		$returnValue = $this->submited;
        // section 127-0-1-1-7ebefbff:12428eef00b:-8000:00000000000019E0 end

        return (bool) $returnValue;
    }

    /**
     * Short description of method setValues
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  array values
     * @return mixed
     */
    public function setValues($values)
    {
        // section 127-0-1-1-5e86b639:12689c55756:-8000:0000000000001E43 begin
		
		foreach($values as $key => $value){
			foreach($this->elements as $element){
				if($element->getName() == $key){
					if( $element instanceof tao_helpers_form_elements_Checkbox ||
						(method_exists($element, 'setValues') && is_array($value)) ){
						$element->setValues($value);
					}
					else{
						$element->setValue($value);
					}
					break;
				}
			}
			
		}
		
        // section 127-0-1-1-5e86b639:12689c55756:-8000:0000000000001E43 end
    }

    /**
     * Enables you to know if the form has been submited
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string groupName
     * @return array
     */
    public function getValues($groupName = '')
    {
        $returnValue = array();

        // section 127-0-1-1-7ebefbff:12428eef00b:-8000:00000000000019E6 begin
		
		foreach($this->elements as $element){
			if(!empty($groupName)){
				if(isset($this->groups[$groupName])){
					if(!in_array($element->getName(), $this->groups[$groupName]['elements'])){
						continue;
					}
				}
			}
			$returnValue[$element->getName()] = $element->getValue();
		}
		
        // section 127-0-1-1-7ebefbff:12428eef00b:-8000:00000000000019E6 end

        return (array) $returnValue;
    }

    /**
     * Short description of method getValue
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string name
     * @return boolean
     */
    public function getValue($name)
    {
        $returnValue = (bool) false;

        // section 127-0-1-1--6132c277:1244e864521:-8000:0000000000001A59 begin
		foreach($this->elements as $element){
			if($element->getName() == $name){
				return  $element->getValue();
			}
		}
        // section 127-0-1-1--6132c277:1244e864521:-8000:0000000000001A59 end

        return (bool) $returnValue;
    }

    /**
     * Short description of method createGroup
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string groupName
     * @param  string groupTitle
     * @param  array elements
     * @return mixed
     */
    public function createGroup($groupName, $groupTitle = '', $elements = array())
    {
        // section 127-0-1-1--5420fa6f:12481873cb2:-8000:0000000000001ABB begin
		$this->groups[$groupName] = array(
			'title' 	=> (empty($groupTitle)) ? $groupName : $groupTitle,
			'elements'	=> $elements
		);
        // section 127-0-1-1--5420fa6f:12481873cb2:-8000:0000000000001ABB end
    }

    /**
     * Short description of method addToGroup
     *
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string groupName
     * @param  string elementName
     * @return mixed
     */
    public function addToGroup($groupName, $elementName = '')
    {
        // section 127-0-1-1--5420fa6f:12481873cb2:-8000:0000000000001ACA begin
		
		if(isset($this->groups[$groupName])){
			if(isset($this->groups[$groupName]['elements'])){
				if(!in_array($elementName, $this->groups[$groupName]['elements'])){
					$this->groups[$groupName]['elements'][] = $elementName;
				}
			}
		}
		
        // section 127-0-1-1--5420fa6f:12481873cb2:-8000:0000000000001ACA end
    }

    /**
     * Short description of method getElementGroup
     *
     * @access protected
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @param  string elementName
     * @return string
     */
    protected function getElementGroup($elementName)
    {
        $returnValue = (string) '';

        // section 127-0-1-1--5420fa6f:12481873cb2:-8000:0000000000001ACF begin
		foreach($this->groups as $groupName => $group){
				if(in_array($elementName, $group['elements'])){
					$returnValue = $groupName;
					break;
				}
		}
        // section 127-0-1-1--5420fa6f:12481873cb2:-8000:0000000000001ACF end

        return (string) $returnValue;
    }

    /**
     * evaluate the form inside the current context. Must be overridden, for
     * rendering mode: for example, it's used to populate and validate the data
     * the http request for an xhtml context
     *
     * @abstract
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return mixed
     */
    public abstract function evaluate();

    /**
     * Render the form. Must be overridden for each rendering mode.
     *
     * @abstract
     * @access public
     * @author Bertrand Chevrier, <bertrand.chevrier@tudor.lu>
     * @return string
     */
    public abstract function render();

} /* end of abstract class tao_helpers_form_Form */

?>