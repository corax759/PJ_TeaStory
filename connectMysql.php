<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'teastory';

$link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());        
$result = mysqli_query($link, "set names utf8");
mysqli_select_db($link, "teastory");

?>