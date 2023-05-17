<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Book</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/custom/style.css">
</head>
<body>
   <div class="container">
   <header class="d-flex justify-content-between my-4">
        <h2>Add New Book</h2>
        <div>
            <a href="index.php" class="btn btn-primary">Back</a>
        </div> 
    </header>
       <form action="process.php" method="post">
           <div class="form-element my-4">
               <input type="text" name="title" placeholder="Add book title" class="form-control">
           </div> 
            <div class="form-element my-4">
               <input type="text" name="author" placeholder="Enter author name" class="form-control">
           </div> 
            <div class="form-element my-4">
               <select name="type">
                    <option value="">Select Book Type </option>
                    <option value="Comedy">Comedy</option>
                    <option value="Personal Growth">Personal Growth</option>
                    <option value="Horror">Horror </option>
                    <option value="Adventure">Adventure </option>
                    <option value="Fantansy">Fantansy</option>
                    <option value="Education">Education</option>
               </select>
           </div> 
            <div class="form-element my-4">
               <input type="text" name="description" placeholder="Enter book description" class="form-control">
           </div>
           <div class="form-element my-4">
               <input type="submit" class="btn btn-success" name="create" class="form-control" value="Add Book">
           </div>
       </form>
   </div>




    <script src="./assets/js/bootstrap.js"></script>
</body>
</html>