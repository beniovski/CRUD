<?php
include_once ('../Model/dbConnection.php');

$var = new dbConnection();
$query = "SELECT * FROM user";
$result = $var->getCon()->query($query);

foreach($result as $row)
{
    echo "<tr>";
    echo '<th> '.$row["imie"].'</th>';
    echo '<th> '.$row["nazwisko"].'</th>';
    echo '<th> '.$row["telefon"].'</th>';
    echo '<th> '.$row["dataUr"].'</th>';
    echo '<th> '.$row["miejscowosc"].'</th>';
    echo '<th> '.$row["adres"].'</th>';
    echo "</tr>";
}