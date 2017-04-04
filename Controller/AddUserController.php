<?php
include ('View/UserAddView.php');
include ('Model/AddUser.php');
class AddUserController
{
	
	function __construct()
	{
	 	$ad = new AddUser();
	 	$ad->Add();
	}
}

