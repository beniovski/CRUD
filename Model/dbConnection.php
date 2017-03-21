<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20.03.2017
 * Time: 20:53
 */


    class dbConnection
    {
        private $adres = "127.0.0.1";
        private $dbname = "crud_db";
        private $password = "";
        private $user = "root";
        private $con = null;

        public function __construct()
        {
            try {
                $this->con = new PDO('mysql:host='.$this->adres.';'.'dbname='.$this->dbname, $this->user, $this->password);
            } catch (PDOException $e) {
                die();
            }
        }

        public function disconnect()
        {
            $this->con = null;
        }

        public function getCon()
        {
            return $this->con;
        }
    }
