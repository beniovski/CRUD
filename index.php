<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20.03.2017
 * Time: 20:51
 */


$action = $_GET["action"];
 
	 
	if(!isset($_GET["action"]))
	{
		include 'Controller/HomeViewController.php';
		$hvc = new HomeViewController();
	}

	
	 if ($action == "ReadUser")
	{
		include '/View/ReadUserView.php';
		$action = new  ReadUserController();
		
	}
	
     if ($action == "Delete")
	{
		include '/Controller/DeleteUserController.php';
		$action = new  DeleteUserController();
		
	}
	
	if ($action == "AddUser")
	{
		include '/Controller/AddUserController.php';
		$action = new  AddUserController();
		
	}

 
