<!--This PHP file establishes a link to the server,
to get connection with a MySQL database and sets
character encoding to UTF-8 -->

<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "test";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$conn->set_charset("utf8");