<?php
include 'connect.php';
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
    <div class="container">
        <button class="btn btn-primary my-5"><a href="book.php" class="text-light">Add Book</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Book ID</th>    
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="Select * from `book`";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $title=$row['title'];
                        $author=$row['author'];
                        $cost=$row['cost'];
                        echo '
                        <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$title.'</td>
                            <td>'.$author.'</td>
                            <td>'.$cost.'</td>
                            <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</button>
                            </td>
                        </tr>
                        ';
                    }
                }
                ?>
   
            </tbody>
        </table>
    </div>
  </body>
</html>