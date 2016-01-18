<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'tododb';
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn){
   $create_db="CREATE DATABASE tododb";
   mysqli_query($conn,$create_db);
}
?># My_Project
# My_Project
#To-do action2.php display.php
