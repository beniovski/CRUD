<?php
/**
 * Created by PhpStorm.
 * User: daniel.bednarczuk
 * Date: 2017-03-27
 * Time: 11:19
 */
include_once ('dbConnection.php');

class DeleteUser
{
    private $con;

    public function __construct()
    {
        $this->con = dbConnection::getInstance();
    }

    public function deleteUser($id)
    {
       $query = "DELETE FROM user WHERE id = '$id'";
       $this->con->query($query);
    }
}
