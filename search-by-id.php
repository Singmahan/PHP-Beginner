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
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">How to fetch/search data by its id from database in php mysqli</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="get_id" class="form-control" placeholder="Enter ID" required>
                                        </div>
                                        <button type="submit" name="search_by_id" class="btn btn-primary">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <thead>
                                    
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Gender</th>
                                    </tr>
                                               
                                </thead>
                                <tbody>
                                <?php 
                                $connection = mysqli_connect("localhost","root","","php-beginner");

                                if(isset($_POST['search_by_id'])){
                                    $id = $_POST['get_id'];
                                    $query = "SELECT * FROM employee WHERE id='$id'";
                                    $query_run = mysqli_query($connection, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        while($row = mysqli_fetch_array($query_run))
                                        {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['phone'];?></td>
                                        <td><?php echo $row['designation'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['gender'];?></td>
                                    </tr>
                                    <?php 
                                        }
                                    }else{
                                        ?>
                                            <tr>
                                                <td colspan="6" class="text-center">No Data Found</td>
                                            </tr>
                                        <?php
                                    }
                                }
                                     ?> 
                                 </tbody>
                            </table>
                            </div>
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