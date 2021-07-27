<?php
    session_start();
    $dbcon = mysqli_connect("localhost","root","","php-beginner");
    if(isset($_POST['del_multiple_data'])){
        $all_id = $_POST['del_chk'];
        $seperate_all_id = implode(",", $all_id);

        $query = "DELETE FROM employee WHERE id IN($seperate_all_id)";
        $query_run = mysqli_query($dbcon, $query);

        if($query_run){
            $_SESSION['status'] = "Delete id's are $seperate_all_id";
            header("Location: multiple-delete.php");
        }else{
            $_SESSION['status'] ="Something went wrong";
            header("Location: multiple-delete.php");
        }
    }
?>