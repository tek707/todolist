<?php
session_start();


//connecting to database
$servername= 'localhost';
$username='root';
$password='';
$dbname = 'todolist';

$update=false;
$mysqli = new mysqli($servername, $username,$password,$dbname)or die (mysqli_error($mysqli));



$item = " ";
//save  into databse

if (isset($_POST['send'] )){
  $item= $_POST['item'];

  $mysqli->query("INSERT INTO list( item) VALUES ('$item')") or
 die ($mysqli->error);

 header("location:index.php");
// delete database

}elseif(isset($_GET['delete'])){
  $list_id = $_GET['delete'];
    $mysqli->query("DELETE FROM `list` WHERE  list_id=$list_id") or die($mysqli->error);
   
    header("location:index.php");
    

// update database

  }elseif(isset($_POST['Update'])){
    $update=false;
    $item= $_POST['item'];
$list_id = $_POST['list_id'];
   
  
  $mysqli-> query("UPDATE `list` SET item='$item' WHERE   list_id=$list_id") or die($mysqli->error);
 
       //get the url which opened this file
        $location = $_SERVER["HTTP_REFERER"];

       //remove anything that comes after a question mark
       $location = explode("?",$location);
       $location = "index.php";

       //redirect to previous page
       header("location:$location");
        
    }else {

    }







  




?>