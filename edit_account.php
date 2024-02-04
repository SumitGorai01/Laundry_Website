<?php 
include("database_conn.php");
include("user_home.php");

$p = $_SESSION["email"];

$res = mysqli_query($conn, "SELECT * FROM reguser WHERE Email='$p'");
if ($rows = mysqli_fetch_array($res)) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>User Profile</title>
    </head>
    <body>
        <center>
            <h1>Welcome: <?php echo $_SESSION["email"]; ?></h1>
        </center>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span class="font-weight-bold"><?php echo $rows[0]; ?></span>
                        <span class="text-black-50"><?php echo $_SESSION["email"]; ?></span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Edit Your Profile Details</h4>
                        </div>
                        <form action="edit_account.php" method="POST">
                            <div class="row mt-6">
                            <div class="col-md-6"><label class="labels">Student ID:</label><input type="text" class="form-control" placeholder="<?php echo$rows[0]; ?>" name="id" value="" readonly></div>
                    
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?php echo$rows[1]; ?>" name="name" value=""></div>
                                <div class="col-md-6">
                                    <label class="labels">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="<?php echo $rows[2]; ?>" name="mob" value="">
                                </div>
                                 
                    <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="<?php echo$rows[3]; ?>" name="gen" value=""></div>                 
                    
                    <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="<?php echo$rows[4]; ?>" name="em" value="" readonly></div>              
                                <div class="col-md-12">
                                    <label class="labels">Address</label>
                                    <input type="text" class="form-control" placeholder="<?php echo $rows[5]; ?>" name="address" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Password</label>
                                    <input type="text" class="form-control" placeholder="<?php echo $rows[6]; ?>" name="pas" value="">
                                </div>
                                <button type="submit" name="update" class="btn btn-primary">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>

<?php
if (isset($_POST["update"])) {
    $p1 = $_POST["name"];
    $p2 = $_POST["mob"];
    $p3 = $_POST["gen"];
    $p4 = $_SESSION["email"];
    $p5 = $_POST["address"];
    $p6 = $_POST["pas"];

    $stmt = mysqli_prepare($conn, "UPDATE reguser SET Name=?, Mobile=?, Gender=?, Email=?, Address=?, Password=? WHERE Email=?");
    mysqli_stmt_bind_param($stmt, "sssssss", $p1, $p2, $p3, $p4, $p5, $p6, $p4);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo '<script>alert("Profile Details updated Successfully!");</script>';
}
?>
