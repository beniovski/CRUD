<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20.03.2017
 * Time: 20:53
 */

    class dbConnection
    {
        private static $adres = "127.0.0.1";
        private static $dbname = "crud_db";
        private static $password = "";
        private static $user = "root";
        private static $instance;
       
        private function __construct() {}
        private function __clone() {}
               
        public static function getInstance() {
        		if(self::$instance === null) {
        			self::$instance = new PDO('mysql:host='.self::$adres.';'.'dbname='.self::$dbname, self::$user, self::$password);
        		}
        		return self::$instance;
        	}
        }
        
        
        
        
       
    
