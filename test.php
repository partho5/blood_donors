<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'dbHelper.php';

$dbHelper=new dbHelper();
$i=41;
$dbHelper->insertRegData((++$i)." partho ", "Protim", (time())."@gmail.com", "123456", "017xxxx", "66", "A Positive", "Male", "9/8/1995");

@session_start();

//@session_destroy();
