<?php
include "config.php";

session_start();

if(!isset($_SESSION['username'])){
    header("location:{$hostname}/admin/post.php");
}
?>

<?php
include "config.php";

$user_id = $_GET['id'];
$sql = "DELETE FROM user WHERE user_id = '{$user_id}'";

if(mysqli_query($conn, $sql)){
     header("location:{$hostname}/admin/users.php");
}else{
     echo "no delete";
}
?>   