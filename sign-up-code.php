<?php
    session_start();
    $connection = mysqli_connect("localhost","root","","php-beginner");

    if(isset($_POST['signup_btn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['confirm_password'];

        $emailquery = "SELECT * FROM signup WHERE email='$email'";
        $check_email = mysqli_query($connection, $emailquery);
        if(mysqli_num_rows($check_email) > 0)
        {
            $_SESSION['status'] = "Email Already Exit.! Please another one.";
            header("Location: sign-up.php");
        }else{
            
            if($password == $c_password){
                $reg_query = "INSERT INTO signup (username,email,password) VALUE ('$username','$email','$password')";
                $reg_query_run = mysqli_query($connection, $reg_query);

                if($reg_query_run){
                    $_SESSION['status'] = "Successfully Registerrd";
                    header("Location: sign-up.php");
                }else{
                    $_SESSION['status'] = "Someting went wrong. !";
                    header("Location: sign-up.php");
                }
            }else{
                $_SESSION['status'] = "Password and Confirm Password Dons Not Match";
                header("Location: sign-up.php");
            }
        }
    }
?>