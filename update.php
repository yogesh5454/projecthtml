<?php
  if(isset($_GET['id'])){
    include('db/connect.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM contact WHERE id='$id'";
    $result = mysqli_query($con,$query);
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if($num_row!=1){
       die("no records found with this id");
    }
  }else{
      die("please pass the id to update");
  }

?>



<html>
    <head>
        <title>Update Contact form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <div class="row">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6"><h5>Update Contact Form</h5></div>
                            <div class="col-6">
                                <a href="view.php" class="btn btn-success" style="float:right;">View Contact</a>
                            </div>
                        </div>
                        <hr/>
                        <form method="POST" action="db/update.php">
                           <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                             <input type="text" class="form-control" value="<?php echo $row['name'];?>" name="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                           <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Contact no</span>
                             <input type="text" value="<?php echo $row['contactno'] ?>"  class="form-control" name="contactno" placeholder="Contact no" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                           <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                             <input type="text" value="<?php echo $row['email'];?>" class="form-control" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                          <input type="hidden" name="id" value="<?php echo $id;?>" ?>
                          <button type="submit" class="btn btn-success">Update</button>
                        </form>

                        <?php include('include/msg.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>