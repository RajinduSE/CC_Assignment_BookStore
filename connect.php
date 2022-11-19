<?php

$con=new mysqli('rds-mysql-book-store.ceqwfpkm7tzu.ap-southeast-1.rds.amazonaws.com', 'admin', 'Kavinda#98', 'book_store');

if(!$con){
    die(mysqli_error($con));
}

?>