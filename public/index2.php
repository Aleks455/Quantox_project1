<?php
$request = $_SERVER['REQUEST_URI'];
echo $request;
echo  "<hr>";
echo __DIR__;
// switch ($request) {
//     case '/' :
//         require __DIR__ . '/views/index.php';
//         break;
//     case '' :
//         require __DIR__ . '/views/index.php';
//         break;
//     case '/about' :
//         require __DIR__ . '/views/about.php';
//         break;
//     default:
//         http_response_code(404);
//         require __DIR__ . '/views/404.php';
//         break;

// }

// echo __DIR__;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello</p>
</body>
</html>

