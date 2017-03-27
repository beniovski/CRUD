<?php
/**
 * Created by PhpStorm.
 * User: daniel.bednarczuk
 * Date: 2017-03-27
 * Time: 12:08
 */

include ('../Model/ReadUser.php');

class ReadUserController
{
    private $getUserData;

    public function __construct()
    {
        $readUser = new ReadUser();
        $this ->getUserData = $readUser->GetUser($_GET['id']);
    }

    public function ReturnData()
    {

        echo '<tr><th>Imie : </th><th>'.$this->getUserData["imie"].'</th></tr>';
        echo '<tr><th>Nazwisko : </th><th>'.$this->getUserData["nazwisko"].'</th></tr>';
        echo '<tr><th>Data Urodzenia : </th><th>'.$this->getUserData["dataUr"].'</th></tr>';
        echo '<tr><th>Miejscowosc : </th><th>'.$this->getUserData["miejscowosc"].'</th></tr>';
        echo '<tr><th>Adres : </th><th>'.$this->getUserData["adres"].'</th></tr>';

    }

}

$ReadUserCtrl = new ReadUserController();
$ReadUserCtrl->ReturnData();
