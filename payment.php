<?php include("database_conn.php");  ?>
<?php include("user_home.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        table tr td {
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    $res = mysqli_query($conn, "select * from pricelist");
    if (($rows = mysqli_fetch_array($res))) {
    ?>

        <div>
            <center>
                <h2>Laundry Price (Per Unit)</h2>
            </center>

            <form action="new_request.php" method="post">
                <table style="width:100%">
                    <tr>
                        <th>Particular</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                      <th>Top Wear Price</th>
                      <td><?php echo$rows[1]; ?></td>
                      <td> <?php
                          if (isset($_POST['topWear'])) {
                              echo $_POST['topWear'];
                          }
                          ?></td>
                      <td><?php echo $rows[1]*$_POST['topWear'] ?></td>
                    </tr>
                    <tr>
                      <th>Bottom Wear Price</th>
                      <td><?php echo$rows[2]; ?></td>
                      <td><?php
                          if (isset($_POST['bottomWear'])) {
                              echo $_POST['bottomWear'];
                          }
                          ?>
                          </td>
                      <td><?php echo $rows[2] * $_POST['bottomWear'];?></td>
                    </tr>
                    <tr>
                      <th>Woolean Price</th>
                      <td><?php echo$rows[3]; ?></td>
                      <td> <?php
                            if (isset($_POST['woolean'])) {
                              echo $_POST['woolean'];
                          }
                          ?></td>
                      <td><?php echo $rows[3]*$_POST['woolean'];?></td>
                    </tr>
                    <tr>
                      <th>Suit</th>
                      <td><?php echo $rows[4]; ?></td>
                      <td><?php
                          if (isset($_POST['suit'])) {
                              echo $_POST['suit'];
                          }
                          ?></td>
                      <td><?php echo $rows[4]*$_POST['suit'];?></td>
                    </tr>
                    <tr>
                      <th>Duvet</th>
                      <td><?php echo $rows[5]; ?></td>
                      <td><?php
                          if (isset($_POST['duvet'])) {
                              echo $_POST['duvet'];
                          }
                          ?></td>
                      <td><?php echo $rows[5]*$_POST['duvet'];?></td>
                    </tr>
                    <tr>
                      <th>Curatains</th>
                      <td><?php echo $rows[6]; ?></td>
                      <td><?php
                          if (isset($_POST['curtains'])) {
                              echo $_POST['curtains'];
                          }
                          ?></td>
                      <td><?php echo $rows[6]*$_POST['curtains'];?></td>
                    </tr>
                    <tr>
                      <th>Carpets</th>
                      <td><?php echo $rows[7]; ?></td>
                      <td> <?php
                          if (isset($_POST['carpets'])) {
                              echo $_POST['carpets'];
                          }
                          ?></td>
                      <td><?php echo $rows[7]*$_POST['carpets'];?></td>
                    </tr>
                    <tr>
                      <th>Other Price</th>
                      <td>-----</td>
                      <td> <?php
                          if (isset($_POST['other'])) {
                              echo $_POST['other'];
                          }
                          ?></td>
                      <td><?php echo 10*$_POST['other'];?></td>
                    </tr>
                    <tr>

                    <tr>
                        <td></td>
                        <th>Approx Grand Total</th>
                        <td></td>
                        <td>
                            <?php
                            echo $rows[1] * $_POST['topWear'] +
                                $rows[2] * $_POST['bottomWear'] +
                                $rows[3] * $_POST['woolean'] +
                                $rows[4] * $_POST['suit'] +
                                $rows[5] * $_POST['duvet'] +
                                $rows[6] * $_POST['curtains'] +
                                $rows[7] * $_POST['carpets'] +
                                10 * $_POST['other'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Payment Mode</th>
                        <td><input type="radio" id="cash" name="payment_mode" value="cash" required="">
                            <label for="cash">Cash on Delivery</label></td>
                    </tr>

                </table>
                <br>
                <div class="col-md-12">
                    <button type="submit" onclick="goToAnotherPage()" name="submit1" class="btn btn-primary btn-block">Send Request</button>
                </div>
            </form>
        </div>

    <?php
    }
    ?>
</body>

</html>
<script>
        function goToAnotherPage() {
            alert("Request Submitted Successfully !!");
            // Use window.location.href to navigate to another page
            window.location.href = 'new_request.php';
        }
    </script>


