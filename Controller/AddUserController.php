<?php
include_once ('../Model/dbConnection.php');

$var = new dbConnection();

$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$miejscowosc = $_POST["miejscowosc"];
$adres = $_POST["adres"];
$dataUrodzenia = $_POST["dataUrodzenia"];
$telefon = $_POST["telefon"];

$exec = $var->getCon()->prepare("INSERT INTO user(imie, nazwisko, miejscowosc, adres, dataUr, telefon)VALUES('$imie','$nazwisko','$miejscowosc','$adres', '$dataUrodzenia', '$telefon')");

$exec->execute();



