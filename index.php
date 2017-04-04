<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 20.03.2017
 * Time: 20:51
 */


 
 
if(!isset($GET_["action"]))
{
	include 'View/HomeView.php';
}
else 
{
	$action = $_GET["action"];
	
	if ($action == "ReadUser")
	{
		include 'Controller/ReadUserController.php';
		$action = new  ReadUserController();
		$action->ReturnData();
	}
	
	if ($action == "Delete")
	{
		include 'Controller/DeleteUserController.php';
		$action = new  DeleteUserController();
		
	}
}
 
 