<?php
    include "../db_connection.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE id=$id ";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:home.php?msg=Your record deleted successfully.");
    }
    else{
        echo "Failed.";
    }
?>