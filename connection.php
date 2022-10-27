<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of connection
 *
 * @author partho
 */
class connection {
    public $host;
    public $user;
    public $pass;
    public $db;
    
    /**
     * assigns connection variables
     */
    public function setVar(){
        $this->host="localhost";
        $this->user="root";
        $this->pass="password";
        $this->db="badhan"; 
    }
}
