<?php

return array(
    'router' => array(
        'routes' => array(
            'timezones-json' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/locale/timezones-json',
                    'defaults' => array(
                        'controller' => 'BsLocale\Controller\Index',
                        'action'     => 'timezonesJson',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'BsLocale\Controller\Index' => 'BsLocale\Controller\IndexController',
        ),
    ),
    'validators' => [
        'factories' => [
            
        ],
        'invokables' => [
            'locale_timezone_validator' => 'BsLocale\\Validator\\TimezoneValidator',
        ]
    ]
)
;
