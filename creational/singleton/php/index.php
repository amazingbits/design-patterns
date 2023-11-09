<?php

use Src\Core\Connection;

require_once "./vendor/autoload.php";

$conn = Connection::getInstance();
$conn2 = Connection::getInstance();
echo "<pre>";
var_dump($conn, $conn2);
