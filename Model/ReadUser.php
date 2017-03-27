<?php
/**
 * Created by PhpStorm.
 * User: daniel.bednarczuk
 * Date: 2017-03-27
 * Time: 12:09
 */
include_once ('dbConnection.php');

class ReadUser
{
    private $con;

    public function __construct()
    {
        $this->con = dbConnection::getInstance();

    }

    public function GetUser($id)
    {

        $query = "SELECT * FROM user WHERE id='$id'";
        $result = $this->con->query($query);
        $result = $result->fetch();
        return $result;


    }
}