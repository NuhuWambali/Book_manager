<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/custom/style.css">
</head>
<body>
   <div class="container">
   <header class="d-flex justify-content-between my-4">
        <h2>Edit Book</h2>
        <div>
            <a href="index.php" class="btn btn-primary">Back</a>
        </div> 
    </header>
    <?php 
    include('connect.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $getUpdateData="SELECT * FROM books WHERE id=$id";
        $result=mysqli_query($connect,$getUpdateData);
        $row=mysqli_fetch_array($result);

    }
    ?>
       <form action="process.php" method="post">
           <div class="form-element my-4">
               <input type="text" name="title" placeholder="Add book title" value="<?php echo $row['title'] ?>" class="form-control">
           </div> 
            <div class="form-element my-4">
               <input type="text" name="author" placeholder="Enter author name" value="<?php echo $row['author'] ?>" class="form-control">
           </div> 
            <div class="form-element my-4">
               <select name="type">
                    <option value="">Select Book Type </option>
                    <option value="Comedy" <?php if($row['type']=='Comedy'){echo "selected";}?>>Comedy</option>
                    <option value="Personal Growth" <?php if($row['type']=='Personal Growth'){echo "selected";}?>>Personal Growth</option>
                    <option value="Horror" <?php if($row['type']=='Horror'){echo "selected";}?>>Horror </option>
                    <option value="Adventure" <?php if($row['type']=='Adventure'){echo "selected";}?>>Adventure </option>
                    <option value="Fantansy" <?php if($row['type']=='Fantansy'){echo "selected";}?>>Fantansy</option>
                    <option value="Education" <?php if($row['type']=='Education'){echo "selected";}?>>Education</option>
               </select>
           </div> 
            <div class="form-element my-4">
               <input type="text" name="description" placeholder="Enter book description" value="<?php echo $row['description']?>" class="form-control">
           </div>
           <input type="hidden" name="id" value="<?php echo $row['id']?>">
           <div class="form-element my-4">
               <input type="submit" class="btn btn-success" name="update" class="form-control" value="Update Book">
           </div>
       </form>
   </div> 
    <script src="./assets/js/bootstrap.js"></script>
</body>
</html>