<?php 

include("database_conn.php");
include("user_home.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <title>User_Profile</title>
  </head>
  <body>
    <center>
      <h1>Welcome: <?php echo $_SESSION["email"]; ?></h1> 
    </center>

    <?php
    $p = $_SESSION["email"];
    $res = mysqli_query($conn, "select * from reguser where EMAIL='$p'");
    if (($rows = mysqli_fetch_array($res))) {
    ?>
      <div class="container rounded bg-white mt-5 mb-5">
          <div class="row">
              <div class="col-md-3 border-right">
                  <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                      <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                      <span class="font-weight-bold">ID: <?php echo $rows[0]; ?></span>
                      <span class="text-black-50"><?php echo $_SESSION["email"]; ?></span>
                  </div>
                  <?php
                      $_SESSION["user_id"] = $rows[0];
                  ?>
              </div>
              <div class="col-md-5 border-right">
                  <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4 class="text-right">Profile Details</h4>
                      </div>
                      <div class="row mt-6">
                          <div class="col-md-6"><label class="labels">Customer ID:</label><input type="text" class="form-control" placeholder="<?php echo$rows[0]; ?>" readonly value=""></div>
                          <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?php echo$rows[1]; ?>" readonly value=""></div>
                          <!-- ... (repeat for other fields) ... -->
                          
                    <div class="col-md-6"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="<?php echo$rows[2]; ?>" readonly value=""></div>
                    <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="<?php echo$rows[3]; ?>" readonly value=""></div>
                    
                     <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="<?php echo$rows[4]; ?>" readonly value=""></div>
                     <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="<?php echo$rows[5]; ?>" readonly value=""></div>
                     <div class="col-md-6"><label class="labels">Password</label><input type="text" class="form-control" placeholder="<?php echo$rows[6]; ?>" readonly value=""></div>                   
                     <div class="col-md-6"><label class="labels">Register Date</label><input type="text" class="form-control" placeholder="<?php echo$rows[7]; ?>" readonly value=""></div>                   
                            
                    
                  </div>
              </div> 
          </div>
      </div>
    <?php
    }
    ?>
  </body>
</html>
