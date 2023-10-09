<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projrct1";

$conn  = mysqli_connect($servername, $username,$password,$dbname);

if(!$conn){
     die("Connection failed: ". mysqli_connect_error());
}
// echo "hihi";

$hostname ="http://localhost/news-template/projectwork/news-template/";
?>