<?php
 session_start();

//Database configure
$db_host="localhost";
$db_username="root";
$db_pass="root";
$db_name="laundry";

///create database connection
$conn=new mysqli($db_host,$db_username,$db_pass,$db_name);

//check connection
if($conn->connect_error){
    die("Connection failed : ".$conn->connect_error);
}
?>