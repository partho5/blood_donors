<?php
require 'dbHelper.php';

$blood_group=$_POST['blood_group'];
$last_date=$_POST['last_date'];
$lastId=$_POST['lastId'];

$dbHelper=new dbHelper();
echo json_encode($dbHelper->fetchDonors($blood_group, $last_date, $lastId));