<?php
include('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
  $deleteData="DELETE  FROM books WHERE id='$id'";
  if(mysqli_query($connect, $deleteData)){
       session_start();
       $_SESSION['delete']="Book Deleted Successfully";
       header("Location:index.php");
  }
  else{
       session_start();
       $_SESSION['delete']="Failed to delete";
       header("Location:index.php");
  }
}
 ?>