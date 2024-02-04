<?php 
  include("database_conn.php"); 
  include("user_home.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
<form action="payment.php"  method="post">
<div class="row">
    <div class="col-md-6 ">
        <div class="form-group">
			<label>Pick Up / Drop Date:</label>
			<input type="date" name="date" class="form-control" required="">
		</div>               
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<label>Book TopWear(Tshirt,Top,Shirt Eg-2. If No clothes , Enter 0 ):</label>
			<input type="number" name="topWear" class="form-control" required="" >
		</div>               
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<label>BottomWear(Lower,Jeans,Leggins   Eg-2. If No clothes , Enter 0 ):</label>
			<input type="number" name="bottomWear" class="form-control" required="">
		</div>               
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<label>Woolean Clothes (Eg-2. If No clothes , Enter 0 ):</label>
			<input type="number" name="woolean" class="form-control" required="">
		</div>               
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<label>Suit(Eg-2. If No clothes , Enter 0 ):</label>
			<input type="number" name="suit" class="form-control" required="">
		</div>               
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<label>Duvet (Eg-2. If No clothes , Enter 0 ):</label>
			<input type="number" name="duvet" class="form-control" required="">
		</div>               
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<label>Curtains (Eg-2. If No clothes , Enter 0 ):</label>
			<input type="number" name="curtains" class="form-control" required="">
		</div>               
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<label>Carpets (Eg-2. If No clothes , Enter 0 ):</label>
			<input type="number" name="carpets" class="form-control" required="">
		</div>               
    </div>

	<div class="col-md-12">
		<div class="form-group text-center">
			<label>Others Clothes (Eg-2. If No clothes , Enter 0 ) :</label>
			<input type="number" name="other" class="form-control" required="">
		</div>
	</div>

    <div class="form-group col-md-6">
      <label for="inputState">Service Type</label>
        <select id="inputService" name="service" class="form-control" required="">
            <option selected>--Select Service--</option >
                <option>PickUp / Drop Both</option>
                <option>Pick Up Service</option>
                <option>Drop Service</option>
        </select>
    </div>
    <div class="col-md-6">
        <div class="form-group">
			<label>Contact Person No.:</label>
			<input type="tel" name="contact" class="form-control" required="">
		</div>               
    </div>
    <div class="col-md-12">
		<div class="form-group">
			<label>Address:</label>
			<input type="text" name="address" class="form-control" required="">
		</div>
	</div>

    <div class="col-md-12">
		<div class="form-group">
			<label>Description (if any): </label>
			<input type="text" name="desc" class="form-control">
		</div>
	</div>

    <div class="col-md-6">       
    <button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fa-solid fa-indian-rupee-sign"></i> Proceed for payment</button>	               	               
    </div>  
    <div class="col-md-6">       
        <button type="reset" class="btn btn-primary btn-block" name="reset"><i class="fa-solid fa-trash-arrow-up"></i> Reset</button>
    </div>  
                   
 </div>
</div>
</form>  

</body>
</html>


<?php
// Process form submission
if (isset($_POST["submit"])) {
    // Collect form data
    $id = $_SESSION["user_id"];
    $date = $_POST["date"];
    $topWear = $_POST["topWear"];
    $bottomWear = $_POST["bottomWear"];
    $woolean = $_POST["woolean"];
    $suit = $_POST["suit"];
    $duvet = $_POST["duvet"];
    $curtains = $_POST["curtains"];
    $carpets = $_POST["carpets"];
    $other = $_POST["other"];
    $service = $_POST["service"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $desc = $_POST["desc"];
     
    // SQL query to insert data into the database
    $query = "INSERT INTO laundryrequest (ID,DateOfLaundry,TopWare, BottomWear, WoolenCloth, Suit, Duvet, Curtains, Carpets, Other, Service, ContactPerson, PickupAddress, Description)
            VALUES ($id,'$date', '$topWear', '$bottomWear', '$woolean', '$suit', '$duvet', '$curtains', '$carpets', '$other', '$service', '$contact', '$address', '$desc')";

//error uncomment
    if (mysqli_query($conn, $query)) {   
        // If the insertion was successful, redirect to another page
        header("Location: payment.php");
        exit; // Ensure that no more code is executed after the redirect header
    }
     else {
        // Handle the case where the insertion failed
        echo "Error: " . mysqli_error($conn);
    }
}
?>
