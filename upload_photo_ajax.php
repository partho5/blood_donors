<?php
@ob_start();
@session_start();

$email=$_SESSION['user_email'];
$user_id=$_SESSION['user_id'];
require 'dbHelper.php';
$dbHelper=new dbHelper();

if ($_FILES['fileToUpload']['error'] > 0) {
    echo "Error!";
}  else {
    $file_name = $_FILES['fileToUpload']['name'];
    $path = 'uploaded_files/' . $file_name;
    $file_name = str_replace(' ', '-', $file_name);
    $file_format = pathinfo($path, PATHINFO_EXTENSION);
    $base_name = basename($path, '.' . $file_format);
    
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'uploaded_files/'.$email.".".$file_format)) {
        $dbHelper->updateProfileTd("pp_url", $user_id,   $email.".".$file_format);
        echo "Upload successful !";
    } else {
        echo "Couldn't upload. Try again";
    }
}