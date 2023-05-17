<?php
    include('connect.php');
        if(isset($_POST['create'])){
            $title=mysqli_real_escape_string($connect,$_POST['title']);
            $author=mysqli_real_escape_string($connect,$_POST['author']);
            $type=mysqli_real_escape_string($connect,$_POST['type']);
            $description=mysqli_real_escape_string($connect,$_POST['description']);

            $sendData="INSERT INTO books (title,author,type,description) VALUES ('$title','$author', '$type', '$description')";
            if(mysqli_query($connect,$sendData)){
                session_start();
                $_SESSION['create']="Book Created Successfully";
                header("Location:index.php");
            }
            else{
                session_start();
                $_SESSION['create']="Failed To Create a New Book";
                header("Location:index.php");
            }

                }
        else if(isset($_POST['update'])){
            $title=mysqli_real_escape_string($connect,$_POST['title']);
            $author=mysqli_real_escape_string($connect,$_POST['author']);
            $type=mysqli_real_escape_string($connect,$_POST['type']);
            $description=mysqli_real_escape_string($connect,$_POST['description']);
            $id=mysqli_real_escape_string($connect, $_POST['id']);

            $updateData="UPDATE books SET title='$title', author='$author', type='$type', description='$description' WHERE id='$id'";
            if(mysqli_query($connect,$updateData)){
            session_start();
            $_SESSION['update']="Book Updated Successfully";
            header("Location:index.php");
            }
            else{
            session_start();
            $_SESSION['update']="Failed to update";
            header("Location:index.php");
            }

        }
        else{
            echo "you dont have access to this page";
        }
?>