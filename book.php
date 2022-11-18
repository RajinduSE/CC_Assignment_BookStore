<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $author=$_POST['author'];
    $cost=$_POST['cost'];

    $sql="insert into `book` (title,author, cost) values('$title','$author','$cost')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter book title" name="title">
            </div>
            <div class="mb-3">
                <label>Author</label>
                <input type="text" class="form-control" placeholder="Enter author" name="author">
            </div>
            <div class="mb-3">
                <label>Cost</label>
                <input type="text" class="form-control" placeholder="Enter cost" name="cost">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
  </body>
</html>