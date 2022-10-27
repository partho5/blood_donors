<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbHelper
 *
 * @author partho
 */
require 'connection.php';

class dbHelper extends connection{
    var $con;
    public function __construct() {
        parent::setVar();
        
        $host=  $this->host;
        $user=  $this->user;
        $pass=  $this->pass;
        $db=  $this->db;
        
        try {
            $this->con=new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function insertRegData($fname,$lname,$email,$password,$phone,$weight,$blood_group,$gender,$birthday) {
        $q="INSERT INTO user_data(fname, lname, email, pass, phone, weight, blood, gender, birthday) ";
        $q.="VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt=  $this->con->prepare($q);
        
        $stmt->bindParam('1', $fname);
        $stmt->bindParam('2', $lname);
        $stmt->bindParam('3', $email);
        $stmt->bindParam('4', $password);
        $stmt->bindParam('5', $phone);
        $stmt->bindParam('6', $weight);
        $stmt->bindParam('7', $blood_group);
        $stmt->bindParam('8', $gender);
        $stmt->bindParam('9', $birthday);
        
        
        $stmt->execute();
        $this->con=null;
    }
    
    /**
     * Parameters(4): 
     *                1. A single column name
     *                2. Table name
     *                3. A key field name(for WHERE query)
     *                4. Value of the key
     *      
     *  Returns: A single column value
     */
    function getDataWhere($columnName,$tableName, $keyName, $keyVal){
        $q="SELECT $columnName FROM $tableName WHERE $keyName=?";
        $stmt=  $this->con->prepare($q);
        $stmt->bindParam('1', $keyVal);
        
    }
    
    /*
     * Parameter:
     *      user_id
     * Returns:
     *      all profile info
     */
    function getProfileInfo($user_email){
        $info=array();
        $q="SELECT * FROM user_data WHERE email=?";
        $stmt=  $this->con->prepare($q);
        $stmt->bindParam('1', $user_email);
        $stmt->execute();
        $rawData=$stmt->fetchAll();
        $col=  count($rawData[0])/2;
        for($i=0;$i<$col;$i++){
            $info[$i]=$rawData[0][$i];
        }
        return $info;
    }
    
    function loginValid($emailOrPhone, $pass){
        $q="SELECT count(*) FROM user_data WHERE (email=:emailOrPhone OR phone=:emailOrPhone) AND pass=:pass";
        $res=  $this->con->prepare($q);
        $res->bindParam(':emailOrPhone', $emailOrPhone, PDO::PARAM_STR);
        $res->bindParam(':emailOrPhone:', $emailOrPhone, PDO::PARAM_STR);
        $res->bindParam(':pass', $pass, PDO::PARAM_STR);
        $res->execute();
        return $res->fetchColumn(0)==1;
    }
    
    /*
     * Parameter:
     * 
     * returns:
     * 
     */
    function adminLoginValid($email, $pass){
        $q = "SELECT count(ID) FROM `admin` WHERE email=:email and password=:pass ";
        $res = $this->con->prepare($q);
        $res->bindParam(':email', $email, PDO::PARAM_STR);
        $res->bindParam(':pass', $pass, PDO::PARAM_STR);
        $res->execute();
        return $res->fetchColumn(0) == 1;
    }
    
    function howTimesDonate($user_id){
        $q="SELECT COUNT(ID) FROM donation_info WHERE user_id=:id";
        $res=  $this->con->prepare($q);
        $res->bindParam(':id', $user_id, PDO::PARAM_STR);
        try {
            $res->execute();
            return $res->fetchColumn(0);
        } catch (Exception $exc) {
            return 0;
        }
    }
    
    function calcAge($birthDay){
        $tz = new DateTimeZone('Asia/Dhaka');
        $age = DateTime::createFromFormat('d/m/Y', $birthDay, $tz)->diff(new DateTime('now', $tz))->y;
        return $age;
    }
    
    /*
     * invoked by X-editable 
     * Parameters:
     *      name, pk, value
     * Returns:
     *      no value
     */
    function updateProfileTd($name, $pk, $val){
        $q="UPDATE user_data SET $name=:val WHERE ID=$pk";
        
        //mail is degugging purpose
        //mail("partho8181bd@gmail.com", "UPDATE user_data SET $name=$val WHERE ID=$pk", "msg");
        
        $stmt=  $this->con->prepare($q);
        $stmt->bindValue(':val', $val, PDO::PARAM_STR);
        $stmt->execute();
    }
    
    
    function saveBloodRequest($user_id,$patientName,$age,$disease,$hospital,$blood_group,$noOfBags,$phone,$within){
        $q="INSERT INTO blood_request(user_id, patient_name, age, disease, hospital, blood_group, bags, phone, within, post_time) ";
        $q.=" VALUES(:user_id, :patient_name, :age, :disease, :hospital, :blood_group, :bags, :phone, :within, NOW())";
        $stmt=  $this->con->prepare($q);
        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
        $stmt->bindValue(':patient_name', $patientName, PDO::PARAM_STR);
        $stmt->bindValue(':age', $age, PDO::PARAM_STR);
        $stmt->bindValue(':disease', $disease, PDO::PARAM_STR);
        $stmt->bindValue(':hospital', $hospital, PDO::PARAM_STR);
        $stmt->bindValue(':blood_group', $blood_group, PDO::PARAM_STR);
        $stmt->bindValue(':bags', $noOfBags, PDO::PARAM_STR);
        $stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindValue(':within', $within, PDO::PARAM_STR);
        
        $stmt->execute();
        
        @header("Location:index.php");
    }
    
    function fetchPosts(){
        $info = array();
        $q = "SELECT r.*, u.fname AS posted_by FROM blood_request AS r INNER JOIN user_data AS u ON r.user_id=u.ID WHERE  r.got_blood=0";
        $stmt = $this->con->prepare($q);
        //$stmt->bindParam('1', $user_id);
        $stmt->execute();
        $rawData = $stmt->fetchAll();
        $row=  count($rawData);
        $col = count($rawData[0]) / 2;
        for ($i = 0; $i < $row; $i++) {
            for($j=0;$j<$col;$j++){
                $info[$i][$j]=$rawData[$i][$j];
            }
        }
        return $info;
    }
    
    
    
    
    
    /*
     * Parameters:
     *      1.small date($start)
     *      2.large date($end)
     * Returns differnce between two dates (in days)
     * 
     */
    /*
    function difference($start, $end){
        return ;
    }
     * 
     */
    
    
    function getAllIDs($blood_group, $lastId){
        $q="SELECT DISTINCT ID FROM user_data WHERE blood=:blood_group AND ID>$lastId ";
        $stmt=  $this->con->prepare($q);
        $stmt->bindValue(':blood_group', $blood_group);
        $stmt->execute();
        $rawData=$stmt->fetchAll();
        $row=  count($rawData);
        $IDs=array();
        for($i=0;$i<$row;$i++){
            $IDs[$i]=$rawData[$i][0];
        }
        return $IDs;
    }
    
    function getLastDonateTimeOf($id){
        $q="select max(donate_time) from donation_info where user_id=:id " ;
        $stmt=  $this->con->prepare($q);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $rawData=$stmt->fetchAll();
        return $rawData[0][0];
    }
    
    
    function retrieveSingleDonor($user_id){
        $rawInfo=array();
        $q = "select u.fname, u.lname, u.blood, u.phone, u.dept, u.ID, d.donate_time, d.other_info from user_data as u inner join donation_info as d on u.id=d.user_id where d.user_id=:id ";
        $stmt = $this->con->prepare($q);
        $stmt->bindParam(':id', $user_id);
        $stmt->execute();
        $rawData = $stmt->fetchAll();
        $row = count($rawData);
        $col = count($rawData[0]) / 2;
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                $rawInfo[$i][$j] = $rawData[$i][$j];
            }
        }
        return $rawInfo;
    }
    
    
    /*
     * Parameters:
     *      1.blood_group
     *      2.date (within blood is required)
     * 
     * Returns:
     *      2D array containing matching donors list who donated at least 4 months ago
     */
    function fetchDonors($blood_group, $last_date, $lastId){
        $diff= intval(  (strtotime($last_date)-time()) ) ;//in seconds
        
        
        $lastDonateInfo = array();
        $IDs = $this->getAllIDs($blood_group, $lastId);
        $row = count($IDs);
        for ($i = 0; $i < $row; $i++) {
            $lastDonate = $this->getLastDonateTimeOf($IDs[$i]);
            if( strtotime($lastDonate) < (time()-120*24*3600+$diff) || $lastDonate==NULL){
                //$lastDonateInfo[$IDs[$i]] = ($lastDonate == NULL) ? "Never Donated(or we don't have this information)" : $lastDonate;
                $lastDonateInfo[$IDs[$i]] = ($lastDonate);
                
                //degugging purpose
                //$lastDonateInfo[$IDs[$i]]=strtotime($lastDonate)."--".(time()-120*24*3600+$diff);
            }
        }
        /* now we got last donate info */

        $info = array();
        
        $i=-1;
        foreach ($lastDonateInfo as $availableId=> $val){
            $info[++$i]=  $this->retrieveSingleDonor($availableId);
        }
        
        
        return $info;
    }
    
}
