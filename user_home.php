<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/user_style_slider.css">

    <title>Laundry Management System</title>
  </head>
  <body>
  <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">            
            <div class="sidebar-header">
                <a href="#"><h3>Laundry Management</h3></a>
            </div>
            <ul class="list-unstyled components">  
                <li>
                    <a href="user_dashboard.php"><i class="fa-solid fa-house"></i> Dashboard</a>
                </li>               
                <li>
                    <a href="laundryRequest.php"><i class="fa-solid fa-user-clock"></i> Laundry Request</a>
                </li>               
                <!-- <li>
                    <a href="view_request.php"><i class="fas fa-folder-open"></i> Request Status</a>
                </li>  -->               
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-folder-open"></i> Request Status</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="new_request.php">New Request</a>
                        </li>
                        <li>
                            <a href="accept_request.php">Accept Request</a>
                        </li>
                        <!-- <li>
                            <a href="progress_request.php">Progress Request</a>
                        </li> -->
                        <li>
                            <a href="finish_request.php">Finishd Request</a>
                        </li>
                    </ul>
                </li>
                              
                         
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary text-white">               
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Dashboard/Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <li class="nav-item" >    
                            WELCOME : <?php echo$_SESSION["email"];?> 
                        </li>
                        <ul class="nav navbar-nav ml-auto" id="drop">                           
                            <li class="nav-item dropdown text-white">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-address-book"></i> My Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="user_view_profile.php"><i class="fa-solid fa-eye"></i> View Account</a>
                                    <a class="dropdown-item" href="edit_account.php"><i class="fa-solid fa-user-pen"></i> Edit Account</a>
                                    <a class="dropdown-item" href="change_password.php"><i class="fa-solid fa-key"></i> Change Password</a>
                                </div>
                            </li>  
                            <li class="nav-item">
                            
                                <a class="nav-link" href="logout.php">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<script>    
    $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>