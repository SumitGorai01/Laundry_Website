<?php include("database_conn.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style_hidden.css">
    <link rel="stylesheet" type="text/css" href="css/user_modal.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
       
    <!-- <a href="https://www.freepik.com/free-vector/dads-housework-abstract-concept-illustration_10782439.htm#query=dry%20clean%20svg&position=34&from_view=search&track=ais&uuid=e638dd29-7f21-46dd-ba87-68fb4a70df4f">Image by vectorjuice</a> on Freepik -->

    <script src="js/slider.js"></script>

</head>

    <title >DRY CLEAN - A Laundry Service</title>
  </head>
  <body>
    
  <section id="header">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="navbar">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/logo.svg" alt="" width="15%">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-center text-center" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home1">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Service">Our Services</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="#how-it-works">How it works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_login.php" >Login</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</a>
             
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  
  <section class="home1 "> 
    <div class="home" id="home1" >
        <div class="homeHeading">
            <div class="title">
                <h3>Welcome to</h3>
                <h1><div>
                  <a class="link">Dry Clean</span>
                  </a>
                </div> </h1>
                <h2>To wash your cloths</h2>
                <h3>Get your Laundry and dry cleaning done within 24hr</h3>  
            </div>
            <div class="description">
              <p>Just <b>smile</b> &amp; <b>relax</b>, we'll do the Good work.</p>
            </div>
            <a class="link" id="butn" href="#contact"><button type="button" class="btn btn-primary"><i class="fa fa-paper-plane iconLeft"></i>Start Here</button></a>
        </div>
        <div class="image">
          <img src="images/hero.svg" alt="" width="100%" height="100%">
        </div>
    </div>
</section>



<!-- how-it-works -->
<section class="how-it-works" id="how-it-works">
  <div class="how-it-works">
      <div class="container">
          <h1>How it works</h1>
          <p>This is our process for customers</p>
          <div class="row1">
              <div class="card">
                <span class="material-symbols-outlined">
                  currency_rupee
                  </span>
                  <h1>Get a Price</h1>
                  <p>Tell us about you, how you like your cloths and your dry cleaning needs.</p>
              </div>
              <div class="card">
                <span class="material-symbols-outlined">
                  local_shipping
                  </span>
                  <h1>Book a PickUp</h1>
                  <p>Tell us about you, how you like your cloths and your dry cleaning needs.</p>
              </div>
              <div class="card">
                <span class="material-symbols-outlined">
                  self_improvement
                  </span>
                  <h1>Breath & Relax</h1>
                  <p>Tell us about you, how you like your cloths and your dry cleaning needs.</p>
              </div>
          </div>
          <a href="#">Get a Price estimate</a>
      </div>
      
  </div>
</section>


<section id="Service">
  <div class="Service">
      <div class="heading">
          <h1>Our Srevices and Pricing</h1>
          <p>...We can provide these service for our customers...</p>
      </div>
  <div class="serviceLayout">
      <div class="serviceCards">
          <div class="servicePic">
              <img src="images/bottomWear.jpg" alt="" >
          </div>
          <div class="serviceDesc">
            <span class="material-symbols-outlined">
              currency_rupee 15
              </span> 
              <h4>Boottom Wear Price</h4>
              <!-- <p>Tell us about you, how you like your cloths and your dry cleaning needs.</p> -->
          </div>
      </div>
      <div class="serviceCards">
        <div class="servicePic">
            <img src="images/topWear.jpg" alt="" >
        </div>
        <div class="serviceDesc">
          <span class="material-symbols-outlined">
            currency_rupee 25
            </span> 
            <h4>Top Wear Price</h4>
            <!-- <p>Tell us about you, how you like your cloths and your dry cleaning needs.</p> -->
        </div>
    </div>
    <div class="serviceCards">
      <div class="servicePic">
          <img src="images/dryClean.jpg" alt="" >
      </div>
      <div class="serviceDesc">
        <span class="material-symbols-outlined">
          currency_rupee 50
          </span> 
          <h4>Dry Clean</h4>
          <!-- <p>Tell us about you, how you like your cloths and your dry cleaning needs.</p> -->
      </div>
  </div>
  <div class="serviceCards">
    <div class="servicePic">
        <img src="images/iron1.jpg" alt="" >
    </div>
    <div class="serviceDesc">
      <span class="material-symbols-outlined">
        currency_rupee 50
        </span> 
        <h4>Ironing</h4>
        <!-- <p>Tell us about you, how you like your cloths and your dry cleaning needs.</p> -->
    </div>
</div>
    </div>
  </div>
  </div>
</section>
<section id="contact">
    <div class="contact">
        <div class="heading">
            <h1>Contact Us</h1>
            <p>... Please feel free to connect with our team ...</p>
        </div>
        <div class="contactDiv">
          <div class="contactInfoDiv">
            <div class="contactInfo">
                <div class="contactIcon">
                  <span class="material-symbols-outlined">
                    source_environment
                    </span>
                </div>
              <div class="contactDetail">
                Dry Clean Service 
            </div>
          </div>
            <div class="contactInfo">
              <div class="contactIcon">
                <i class="fa fa-phone" style="color: #1fd634;"></i>             
               </div>
            <div class="contactDetail">
              +91 - 0000000000
          </div>
        </div>

          <div class="contactInfo">
            <div class="contactIcon">
              <i class="fa fa-envelope" style="color: #305697;"></i>
            </div>
          <div class="contactDetail">
            <a href="mailto:youremail--@gmail.com?subject=subject text">youremail--@gmail.com</a>
        </div>

            </div>

          </div>
          <div class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3386.9343994457977!2d85.37532614023775!3d23.329776223140545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e37c6e704669%3A0x7b8ca17ec8cfbc5e!2sNamkum%20Bus%20Stop!5e1!3m2!1sen!2sin!4v1699550231039!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>
    </div>
</section>


<footer class="text-center" id="footer">
  <!-- Grid container -->
  <div class="container">
    <!-- Section: Social media -->
    <section >
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating "
      
        href="#!"
        role="button"
        ><i class="fa fa-facebook-f"></i
      ></a>

    <!-- telegram -->
      <a
        class="btn text-white btn-floating"
        href="#!"
        role="button"
        ><i class="fa fa-telegram"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating"
        href="#!"
        role="button"
        ><i class="fa fa-instagram"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-2" id="Copyright">
    Copyright &copy; TechTitans IT Services - 2023 - All Rights Reserved
    <!-- <a class="text-white" href="#"></a> -->
  </div>
</footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>

<!-- register modal -->
<!-- Modal -->
<div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Registration Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="index.php" method="post">
  <div class="form-row">
<div class="form-group col-md-12">Enter Name<font size="5px" color="red">*</font>
      <input type="text" name="n" class="form-control" placeholder="Your Name" required>
    </div>
<div class="form-group col-md-12">Phone Number<font size="5px" color="red">*</font>
      <input type="tel" name="mob" class="form-control" placeholder="Phone Number" required>
    </div>
<div class="form-group col-md-12">Gender<font size="5px" color="red">*</font>
      <input type="text" name="gen" class="form-control" placeholder="Gender" required>
    </div>

    <div class="form-group col-md-12">
      <label for="inputEmail4">Email<font size="5px" color="red">*</font></label>
      <input type="email" name="e" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-12">
    <label for="inputAddress">Address</label>
    <input type="text" name="add" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Create Password<font size="5px" color="red">*</font></label>
      <input type="password" name="pass" class="form-control" id="inputPassword4" placeholder="Create Password" required>
    </div>
<div class="form-group col-md-12">
  <label for="inputPassword4">Confirm Password<font size="5px" color="red">*</font></label>
  <input type="password" name="confirm_pass" class="form-control" id="inputPassword4" placeholder="Confirm Password" required>
</div>
 
  <button type="submit" class="cta"  name="reg">
<!--<a href="#" class="cta" >-->
  <span>Register</span>
  <svg width="10px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
<!--</a>-->
</button>&nbsp;&nbsp;&nbsp;
    <button type="reset" class="cta" name="reset"><span>Reset</span>
  <svg width="10px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg></button>
</form>
      </div>
    </div>
  </div>
</div>

<?php
if (isset($_POST["reg"])) {
    $name = $_POST["n"];
    $mobile = $_POST["mob"];
    $gender = $_POST["gen"];
    $email = $_POST["e"];
    $address = $_POST["add"];
    $password = $_POST["pass"];

    // Check if the email already exists
    $checkEmailStmt = mysqli_prepare($conn, "SELECT Email FROM reguser WHERE Email = ?");
    mysqli_stmt_bind_param($checkEmailStmt, "s", $email);
    mysqli_stmt_execute($checkEmailStmt);
    mysqli_stmt_store_result($checkEmailStmt);

    // If the email exists, show an error message
    if (mysqli_stmt_num_rows($checkEmailStmt) > 0) {
        echo '<script>alert("Email already exists. Please choose a different email.")</script>';
    } else {
        // If the email doesn't exist, proceed with the insertion
        $insertStmt = mysqli_prepare($conn, "INSERT INTO reguser (Name, Mobile, Gender, Email, Address, Password) VALUES (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($insertStmt, "sissss", $name, $mobile, $gender, $email, $address, $password);
        mysqli_stmt_execute($insertStmt);
        mysqli_stmt_close($insertStmt);

        echo '<script>alert("Registration Successful")</script>';
    }

    // Close the statement for checking email
    mysqli_stmt_close($checkEmailStmt);
}
?>