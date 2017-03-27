<?php
include_once ('dbConnection.php');

class GetUsers
{
	private $con;
	
	public function __construct()
	{
		$this->con = dbConnection::getInstance();
		
	}
	
	public function select()
	{
		$query = "SELECT * FROM user";
		$result = $this->con->query($query);
		return $result;
    }
	
}
