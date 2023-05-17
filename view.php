<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/custom/style.css">
   
</head>
<style>
    .book-details{
        background-color: #f5f5f5;
        padding:4rem;
    }
</style>
<body>
    <div class="container">    
        <header class="d-flex justify-content-between my-4">
            <h2>Book Details</h2>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div> 
        </header>
        <div class="book-details my-4">
            <?php 
               if(isset($_GET['id'])){
                $id=$_GET['id'];
                include('connect.php');
                $selectData="SELECT * FROM books WHERE id=$id";
                $resultSelectData=mysqli_query($connect, $selectData);
                $row=mysqli_fetch_array($resultSelectData);
                ?>
                <h2>Title</h2>
                <p><?php echo $row["title"]?></p>
                <h2>Author</h2>
                <p><?php echo $row["author"]?></p>
                <h2>Type</h2>
                <p><?php echo $row["type"]?></p>
                <h2>Description</h2>
                <p><?php echo $row["description"]?></p>
                <?php
               }
            ?>
            
        </div>
    </div>

<link rel="stylesheet" href="./assets/js/bootstrap.js">
</body>
</html>