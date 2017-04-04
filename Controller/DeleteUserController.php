<?php
include ('View/DeleteUserView.php');
include ('Model/DeleteUser.php');

class DeleteUserController
{
    public function __construct()
    {
        $DeleteUser = new DeleteUser();
        $DeleteUser->deleteUser($_GET['id']);
    }

}
//$DelUsCtrl = new DeleteUserController();