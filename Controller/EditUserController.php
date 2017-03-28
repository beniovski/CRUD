<?php


include ('../View/EditUserView.php');
include ('../Model/EditUser.php');

class EditUserController
{
    public function __construct()
    {
        $editUser = new EditUser();
        $editUser->Edit($_GET['id']);
    }

}

