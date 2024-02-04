<?php 
include("database_conn.php");
include("user_home.php");

if (isset($_REQUEST["upd"])) {
    $currentPassword = $_REQUEST["cp"];
    $newPassword = $_REQUEST["np"];
    $confirmPassword = $_REQUEST["cnp"];
    $email = $_SESSION["email"];
    $dbPassword = "";

    $res = mysqli_query($conn, "SELECT * FROM reguser WHERE Email='$email'");

    if ($rows = mysqli_fetch_array($res)) {
        $dbPassword = $rows["Password"];

        if ($dbPassword == $currentPassword) {
            if ($newPassword == $confirmPassword) {
                mysqli_query($conn, "UPDATE reguser SET Password='$newPassword' WHERE Email='$email'");
                echo '<script>alert("Password updated successfully!");</script>';
            } else {
                echo '<script>alert("New Password and Confirm Password do not match!");</script>';
            }
        } else {
            echo '<script>alert("Your Current Password does not match!");</script>';
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>  
        .pass_show {
            position: relative
        } 
        .pass_show .ptxt {
            position: absolute; 
            top: 50%; 
            right: 10px; 
            z-index: 1; 
            color: #f36c01; 
            margin-top: -10px; 
            cursor: pointer; 
            transition: .3s ease all; 
        } 
        .pass_show .ptxt:hover {
            color: #333333;
        }
    </style>    
    <script>
        $(document).ready(function(){
            $('.pass_show').append('<span class="ptxt">Show</span>');  
        });
        $(document).on('click','.pass_show .ptxt', function(){           
            $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 
            $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 
        });  
    </script>
    <title>User_Login</title>
</head>
<body>
    <center>
        <h1>Welcome: <?php echo $_SESSION["email"]; ?></h1>   
    </center>

    <div class="container">
        <div class="col-md-2"></div>
        <div class="row-10">
            <form action="change_password.php" method="POST">
                <div class="col-sm-4">		    
                    <label>Current Password</label>
                    <div class="form-group pass_show"> 
                        <input type="password" value="" name="cp" class="form-control" placeholder="Current Password"> 
                    </div> 
                    <label>New Password</label>
                    <div class="form-group pass_show"> 
                        <input type="password" value="" name="np" class="form-control" placeholder="New Password"> 
                    </div> 
                    <label>Confirm Password</label>
                    <div class="form-group pass_show"> 
                        <input type="password" value="" name="cnp" class="form-control" placeholder="Confirm Password"> 
                    </div> 
                    <button class="btn btn-primary" name="upd" type="submit">Update Password</button>
                </div> 
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>
