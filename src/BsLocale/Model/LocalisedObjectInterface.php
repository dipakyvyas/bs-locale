<?php
namespace BsLocale\Model;

/**
 *
 * @author mat_wright
 *
 */
interface LocalisedObjectInterface
{

    /**
     *
     * @return string a BCP 47 compliant language tag. example: de-DE
     */
    public function getLocale();
}