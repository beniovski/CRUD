<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20.03.2017
 * Time: 20:53
 */

class dbConection {


    private $adres = "localhost";
    private $dbname = "crud_db";
    private $password = "";
    private $user = "root";
    private $con = null;

    public function __construct()
    {
        try {
            $this->con = new PDO('mysql:host=' . $this->adres . 'dbname=' . $this->dbname, $this->user, $this->password);
        }
        catch(PDOException $e)
        {
            die();
        }
    }
    public function disconect()
    {
        $this->con = null;
    }

    public function getConString()
    {
        return $this->con;
    }
}