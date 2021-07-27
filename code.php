<?php
    session_start();
    $dbcon = mysqli_connect("localhost","root","","php-beginner");
    if(isset($_POST['save_data']))
    {
        $name = $_POST['emp_name'];
        $phone = $_POST['emp_phone'];
        $designation = $_POST['designation'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];

        $query = "INSERT INTO employee(name,phone,designation,address,gender) VALUES ('$name','$phone','$designation','$address','$gender')";
        $query_run = mysqli_query($dbcon, $query);

        if($query_run){
            $_SESSION['status'] = "Data Inserted";
            header("Location: insert.php");
        }else{
            $_SESSION['status'] = "Data Not Inserted";
            header("Location: insert.php");
        }


    }

    
?>