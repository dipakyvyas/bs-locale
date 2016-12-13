<?php
namespace BsLocale\Lib;

/**
 *
 * @author matwright
 *        
 */
class Timezones
{

    public $timezones;

    function __constructor()
    {
        $this->timezones = self::toArray();
    }

    /**
     * Builds an array of available timezones using md5 hash for keys.
     * If an $id argument is provided function returns the matching value
     * otherwise the array of all key/values is returned.
     * 
     * @param string $id
     * @return array $timezonesSelectArray | string $timezone
     */
    static function fetch($id=null)
    {
        $timezones = \DateTimeZone::listIdentifiers();
        $timezonesSelectArray = array();
        foreach ($timezones as $timezone) {
            if($id && $id===md5($timezone)){
                return $timezone;
            }
            $timezonesSelectArray[md5($timezone)] = $timezone;
        }
        return $timezonesSelectArray;
    }
}

?>