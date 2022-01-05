<?php
try 
{
    $log_file = fopen(ROOT_DIR . "logging.txt", "a");
    $log_message = $_SERVER['REMOTE_ADDR'] . "\t" . date("d/m/Y H:i:s") . "\t" . $_SERVER['REQUEST_URI'] . "\r\n";
    fwrite($log_file, $log_message);
    fclose($log_file);
}
catch (Exception $e)
{
    //Don't handle exception
}