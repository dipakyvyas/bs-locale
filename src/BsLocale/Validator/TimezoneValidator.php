<?php
namespace BsLocale\Validator;

use Zend\Validator\AbstractValidator;
use BsLocale\Lib\Timezones;
/**
 *
 * @author jonasgarbuio
 *        
 */
class TimezoneValidator extends AbstractValidator
{
    
    const MSG_TYPE = 'type';
    
    protected $messageTemplates = array(
        self::MSG_TYPE => "'%value%' is not a valid timezone"
    );
    
    /**
     *
     * {@inheritDoc}
     *
     * @see \Zend\Validator\ValidatorInterface::isValid()
     */
    public function isValid($value)
    {
        $this->setValue($value);
        if (! in_array($value, Timezones::fetch())) {
            $this->error(self::MSG_TYPE);
            return false;
        }
        return true;
    }
}