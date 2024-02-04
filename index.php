<?php

declare (strict_types = 1);

namespace Book;

error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'vendor/autoload.php';

echo "<h1>Exceptions and error handling</h1>";
//-------------------------------------------------------


use Book\Extra\Controller\MainController;
$conn = new MainController;

try {
    
    $conn->connect();
    echo "Connected!";
} catch (\Exception $ex) {
    
    echo $ex->getMessage();
}