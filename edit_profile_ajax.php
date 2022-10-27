<?php
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); // HTTP/1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

require 'dbHelper.php';

$name=$_POST['name'];
$pk=$_POST['pk'];
$value=$_POST['value'];


$dbHelper=new dbHelper();

try {
    $dbHelper->updateProfileTd($name, $pk, $value);
    echo "ok";
} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    echo "error";
}

//mail("partho8181bd@gmail.com", $name."--".$pk."--".$value, "msg");