<?php
$conectare = new mysqli('localhost','root','','login');

if(!$conectare)
{
	die('Nu a reusit conectarea la baza de date!');
}

?>