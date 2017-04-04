<?php
include ('Model/GetUsers.php');

Class GetUsersController
{
	private $data;
	
	public function __construct()
	{
		$GetUsers = new GetUsers();
		$this->data = $GetUsers->select();		
	}
	
	Public function ReturnData()
	{
				
		foreach($this->data as $row)
		{
			echo "<tr>";
			echo '<th> '.$row["imie"].'</th>';
			echo '<th> '.$row["nazwisko"].'</th>';
			echo '<th> '.$row["telefon"].'</th>';
			echo '<th> '.$row["dataUr"].'</th>';
			echo '<th> '.$row["miejscowosc"].'</th>';
			echo '<th> '.$row["adres"].'</th>';
			echo '<td><a class="btn btn-primary" href="../?action=ReadUser&id='.$row['id'].'">Wyswietl</a>
					  <a class="btn btn-danger" href="../?action=Delete&id='.$row['id'].'">Usun</a>
					  <a class="btn btn-warning" href="../View/EditUserView.php?id='.$row['id'].'">Edycja</a>					
				  </td>';
			echo "</tr>";
		}
		
		
	}
	
}


$GetUserController = new GetUsersController();
$GetUserController->ReturnData();


