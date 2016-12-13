<?php
namespace BsLocale\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\ServiceManager\ServiceManager;

/**
 *
 * @author matwright
 *        
 */
class BsLocale extends AbstractPlugin
{

    private $sm;
    private $mvcTranslator;

    public function __construct(ServiceManager $sm)
    {
        $this->sm = $sm;
        $this->setMvcTranslator($sm->getServiceLocator ()->get('MvcTranslator'));
    }
    
    public function __invoke()
    {
    	return $this;
    }
    
    public function translate($message){
    
       return $this->getMvcTranslator()->translate($message);
    
    }
	/**
	 * @return the $sm
	 */
	public function getServiceManager() {
		return $this->sm;
	}

	/**
	 * @return \Zend\Mvc\I18n\Translator $mvcTranslator
	 */
	public function getMvcTranslator() {
		return $this->mvcTranslator;
	}

	/**
	 * @param ServiceManager $sm
	 */
	public function setServiceManager(ServiceManager $sm) {
		$this->sm = $sm;
	}

	/**
	 * @param \Zend\Mvc\I18n\Translator $mvcTranslator
	 */
	public function setMvcTranslator(\Zend\Mvc\I18n\Translator $mvcTranslator) {
		$this->mvcTranslator = $mvcTranslator;
	}

}

?>