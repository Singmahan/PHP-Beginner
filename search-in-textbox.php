<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-7 mt-5">             
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">How to fetch data by id into textbox from database in PHP MySqli</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="get_id" class="form-control" placeholder="Enter Id" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" name="fetch_btn" class="btn btn-primary">Fetch by ID</button>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Edit/Get-Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $connection = mysqli_connect("localhost","root","","php-beginner");
                                        $query = "SELECT * FROM employee";
                                        $query_run = mysqli_query($connection, $query);

                                        if(mysqli_num_rows($query_run) > 0){
                                            while($emprow = mysqli_fetch_array($query_run)){

                                                ?>
                                                <tr>
                                                    <td><?php echo $emprow['id'];?></td>
                                                    <td><?php echo $emprow['name'];?></td>
                                                    <td>
                                                        <form action="" method="POST">
                                                            <input type="hidden" name="newget_id" value="<?php echo $emprow['id'];?>">
                                                            <button type="submit" name="fetch_btn" class="btn btn-info">Edit</button>
                                                        </form>
                                                        
                                                    </td>
                                                </tr>
                                                <?php 
                                            }
                                        }else{
                                            echo "No Record Found";
                                        }
                                    ?> 

                                </tbody>
                            </table>
                        </div>
                    </div>             
            </div>
            <div class="col-md-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        <?php 
                            $connection = mysqli_connect("localhost","root","","php-beginner");
                            if(isset($_POST['fetch_btn']))
                            {
                                $id = $_POST['newget_id'];
                                $query = "SELECT * FROM employee WHERE id='$id'";
                                $query_run = mysqli_query($connection, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    while($row = mysqli_fetch_array($query_run)){
                                        
                                        ?>
                                            <div class="form-group">
                                                <input type="text" name="get_id" class="form-control" value="<?php echo $row['name']; ?>" placeholder="Enter Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="get_id" class="form-control" value="<?php echo $row['phone']; ?>" placeholder="Enter Phone" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="get_id" class="form-control" value="<?php echo $row['designation']; ?>" placeholder="Enter Designation" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="get_id" class="form-control" value="<?php echo $row['gender']; ?>" placeholder="Enter Gender" required>
                                            </div>
                                        <?php 
                                    }
                                }else{
                                    echo "No Record Found";
                                }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>