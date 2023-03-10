<?php


session_start();

spl_autoload_register('autoload');

function autoload($class_name)
{

    $array_paths = array(
        'database/',
        'app/classes/',
        'models/',
        'controllers/'
    );


    foreach ($array_paths as $path) {

        $file = sprintf($path . '%s.php', $class_name);

        if (is_file($file)) {
            include_once $file;
        }
    }
}
