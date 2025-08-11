<?php 
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location:adminlogin.php');
    }
?>
<?php
require '../dbcon.php';
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id = '$id'";
$res = mysqli_query($con,$sql);
if($res){
   header('location:./admindashbord.php');
}
?>