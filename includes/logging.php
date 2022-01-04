<?php
try 
{
    $log_file = fopen("logging.txt", "a");
    $log_message = $_SERVER['REMOTE_ADDR'] . " " . $_SERVER['REQUEST_URI'] . " " . date("d/m/Y H:i:s") . "\r\n";
    fwrite($log_file, $log_message);
    fclose($log_file);
}
catch (Exception $e)
{
    //Don't handle exception
}