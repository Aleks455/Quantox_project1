<?php

    // // //we want to add here database connection, approot, url root

    //defining absoluth path
    define('ROOTPATH', __DIR__);


    if (file_exists(ROOTPATH.'/quantox_project1/index.php')) {
        // return ROOTPATH.'/quantox_project1/index.php';
    }
    
    // //let's echo out magic function __FILE__
    // //APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));



//1.primer
// define('SITE_ROOT', dirname(__FILE__));
// $file_path = SITE_ROOT . '/Texts/MyInfo.txt'; 

//2.primer
// $root = dirname( __FILE__ );
// $root = __DIR__;
// $filePath = realpath(dirname(__FILE__));
// $rootPath = realpath($_SERVER['DOCUMENT_ROOT']);
// $htmlPath = str_replace($root, '', $filePath);


//3.primer
// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= "/subdir1/yourdocument.txt";


    //URLROOT (Dynamic links)
    define('URLROOT', 'http://localhost/quantox_project1');

    // //Sitename - usually we put the company name
    define('SITENAME', 'Quantox - News portal');

    // eCRUDE??
?>