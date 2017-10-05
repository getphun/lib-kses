<?php
/**
 * lib-kses config file
 * @package lib-kses
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'lib-kses',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/lib-kses',
    '__files' => [
        'modules/lib-kses' => ['install','remove','update']
    ],
    '__dependencies' => [],
    '_services' => [],
    '_autoload' => [
        'classes' => [
            'kses5' => 'modules/lib-kses/third-party/kses/php5.class.kses.php'
        ],
        'files' => []
    ]
];