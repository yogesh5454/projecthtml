<html>
    <head>
        <title>Contact form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-8">
                       <div class="row">
                            <div class="col-6"><h5>Contacts</h5></div>
                            <div class="col-6">
                                <a href="form.php" class="btn btn-success" style="float:right;">Add Contact</a>
                            </div>
                        </div>
                        <hr/>
                        <?php
                        include('db/connect.php');
                        $query = "SELECT * FROM contact"; 
                        $result = mysqli_query($con,$query);
                        ?>
                        <table class="table">
                            <thead>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </thead>
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>

                            <tr>
                                <td><?php echo $row['name'];  ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['contactno']; ?></td>
                                <td>
                                  <a href="db/delete.php?id=<?php echo $row['id']; ?>">
                                  <i class="fas fa-trash-alt" style="color:red;"></i>
                                </a> |
                                   <a href="update.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a> 
                                </td>
                            </tr>
                            
                        <?php } ?>
                        </table>
                        <?php include('include/msg.php'); ?>
                    </div>
                </div>
            </div>  
    </body>
    <script src="https://kit.fontawesome.com/a74baea4b2.js" crossorigin="anonymous"></script>
</html>

  
  