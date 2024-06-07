<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "code-test";

    $conn = mysqli_connect($servername,$user,$password,$dbname);

    if(!$conn){
        die("Your connection is filed.");
    }
    else{
        //echo "Connected";
    }
?>