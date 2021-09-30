<?php

spl_autoload_register('myAutoloader');

function myAutoloader($className) 
{
    // $className = ltrim($className, '\\');
    // $fullPath = '';
    // $namespace = '';

    // if($lastNsPos = strpos($className, '\\')) {
    //     $namespace = substr($className, 0, $lastNsPos);
    //     $namespace = '\\'.$namespace;
    //     $className = substr($className, $lastNsPos+1);
    //     $fullPath = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    // }
    // $extention = '.class.php';
    // $fullPath = str_replace('-', DIRECTORY_SEPARATOR, $className). $extention;
    // $fullPath = BASE_PATH .'/'. $fullPath;
  
    $basePath = realpath(dirname(__DIR__));
    $file = $basePath . '/' . $className . '.class.php';
    $file = str_replace('\\', '/', $file); 
    
    if(!file_exists($file)) {
        return false; 
    }
    include $file;
}
