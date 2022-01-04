<!--This PHP file establishes a link to the server,
to get connection with a MySQL database and sets
character encoding to UTF-8 -->

<?php

//include_once '../config.php';

$dbServername = DB_SERVERNAME;
$dbUsername = DB_USERNAME;
$dbPassword = DB_PASSWORD;
$dbName = DB_NAME;

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connection to server failed. Try again later.");
$conn->set_charset("utf8");