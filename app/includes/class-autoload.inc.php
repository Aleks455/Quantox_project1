<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className) 
{
    $basePath = realpath(dirname(__DIR__));
    $file = $basePath . '/' . $className . '.class.php';
    $file = str_replace('\\', '/', $file); 
    
    if(!file_exists($file)) {
        return false; 
    }
    include $file;
}
