<?php
namespace BsLocale\Controller;

use BsLocale\Lib\Timezones;
use Zend\View\Model\JsonModel;
use Zend\Mvc\Controller\AbstractActionController;
/**
 *
 * @author jonasgarbuio
 *        
 */
class IndexController extends AbstractActionController
{
    
    public function timezonesJsonAction(){
        
        $timezonesArray = Timezones::fetch();
        return new JsonModel([
            'timezones' => $timezonesArray
        ]);
        
    }
    
}