<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/custom/style.css">
</head>
<body>
    <div class="container">
    <header class="d-flex justify-content-between my-4">
        <h2>Book List</h2>
        <div>
            <a href="create.php" class="btn btn-primary">Add New Book</a>
        </div> 
    </header>
    <?php 
    session_start();
    if(isset($_SESSION['create'])){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['create'];
            unset($_SESSION['create'])
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
        <?php
    }
    if(isset($_SESSION['update'])){
        ?>
       <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['update'];
            unset($_SESSION['update'])?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
        <?php
    }
  if (isset($_SESSION['delete'])){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['delete'];
             unset($_SESSION['delete']) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
        <?php
     }
    ?>
   
    <table class="table table-responsive">
        <thead>
             <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Type</th>
                <th>Action</th>
             </tr>
        </thead>
        <tbody>
            <?php
            include('connect.php');
            $bookList="SELECT * FROM books";
            $resultsBookList=mysqli_query($connect,$bookList);
            while( $row=mysqli_fetch_array($resultsBookList)){
            ?>
            <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['author'] ?></td>
            <td><?php echo $row['type'] ?></td>
            <td>
                <a href="view.php?id=<?php echo $row["id"];?>" class="btn btn-info">Read More</a>
                <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a>
                <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="confirm('Are You sure? ')" name="delete">Delete</a>
            </td>
            </tr>
            <?php
           }
           ?> 
        </tbody>
    </table>
    </div>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>