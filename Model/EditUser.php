<?php
/**
 * Created by PhpStorm.
 * User: daniel.bednarczuk
 * Date: 2017-03-27
 * Time: 13:55
 */
include_once ('dbConnection.php');

class EditUser
{
    private $con;

    public function __construct()
    {
        $this->con= dbConnection::getInstance();
    }


    public function Edit($id)
    {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $miejscowosc = $_POST["miejscowosc"];
        $adres = $_POST["adres"];
        $dataUrodzenia = $_POST["dataUrodzenia"];
        $telefon = $_POST["telefon"];

        $exec = $this->con->prepare("UPDATE user SET imie='$imie', nazwisko='$nazwisko' , miejscowosc='$miejscowosc', adres='$adres', dataUr='$dataUrodzenia', telefon='$telefon' WHERE  id='$id'");

        $exec->execute();

    }
}

$EditUser = new EditUser();
$EditUser ->Edit($_GET["id"]);