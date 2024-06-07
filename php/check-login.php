<?php
    session_start();
    include "../db_connection.php";
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])){
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $role = test_input($_POST['role']);

        if(empty($email)){
            header("location: ../index.php?error=Email is required");
        }
        elseif(empty($password)){
            header("location: ../index.php?error=Password is required");
        }
        else{
            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['password'] === $password && $row['role'] == $role){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['role'] = $row['role'];

                    if($row['role'] == "admin"){
                        header("location:../admin/home.php");
                    }
                    else{
                        header("location:../user/home.php");
                    }
                    
                }
                else{
                    header("location: ../login.php");
                }
            }
        }
    }
    else{
        header("location: ../login.php");
    }
?>