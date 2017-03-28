<?php
include_once ('dbConnection.php');

class AddUser
{	
	private $con;
	
	public function __construct()
	{
		$this->con= dbConnection::getInstance();	
	}
	
	
	public function Add()
	{
		$imie = $_POST["imie"];
		$nazwisko = $_POST["nazwisko"];
		$miejscowosc = $_POST["miejscowosc"];
		$adres = $_POST["adres"];
		$dataUrodzenia = $_POST["dataUrodzenia"];
		$telefon = $_POST["telefon"];
		
		$exec = $this->con->prepare("INSERT INTO user(imie, nazwisko, miejscowosc, adres, dataUr, telefon)VALUES('$imie','$nazwisko','$miejscowosc','$adres', '$dataUrodzenia', '$telefon')");
		
		$exec->execute();
		
	}
}
$addUser = new AddUser();
$addUser->Add($_POST);











