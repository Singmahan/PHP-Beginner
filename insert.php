<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php 
                        if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Hie!</strong> <?php echo $_SESSION['status']; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                            unset($_SESSION['status']); 
                        }
                    ?>
                    <div class="card-header text-center">
                        <h3>How to Insert Data into Database using PHP and Mysql</h3>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">
                        <div class="form-group">
                            <label>Emp Name</label>
                            <input type="text" name="emp_name" class="form-control" placeholder="Enter Emp Name">
                        </div>
                        <div class="form-group">
                            <label>Emp Phone No</label>
                            <input type="text" name="emp_phone" class="form-control" placeholder="Enter Phone No">
                        </div>
                        <div class="form-group">
                            <label>Emp Designation</label>
                            <input type="text" name="designation" class="form-control" placeholder="Enter Designation">
                        </div>
                        <div class="form-group">
                            <label>Emp Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address">
                        </div>
                        <!-- <div class="form-group">
                            <input type="radio" name="gender" value="Male" required> Male
                            <input type="radio" name="gender" value="Female" class="ml-5"> Female
                        </div> -->
                        <div class="form-group">
                            <select name="gender" class="form-control">
                                <option value="">--Select Gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" name="save_data" class="btn btn-danger">Insert/Save Data</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>