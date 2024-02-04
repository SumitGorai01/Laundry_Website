<?php 
include("database_conn.php");
include("user_home.php");
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }

        table tr td {
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div id='parent'>
       <center> <h2>Your Laundry Cleaning </h2></center>

        <?php
        $id = $_SESSION["user_id"];
        $res = mysqli_query($conn, "SELECT * FROM laundryrequest WHERE ID='$id' AND Status='accept'");

        if ($rows = mysqli_fetch_array($res))
         { 
          ?>
            <table style="width:100%">
            <tr>
                    <th>Date of Order</th>
                    <td><?php echo $rows[2]; ?></td>
                    <th>Date of Delivery</th>
                    <td>
                      <?php
                      // Fetch the date from the database
                      $orderDate = $rows[2];

                      // Add 2 days to the date
                      $deliveryDate = date('Y-m-d', strtotime($orderDate . ' + 2 days'));
                      echo $deliveryDate;
                      ?>

                </td>
                </tr>
                <tr>
                    <th>Top wear</th>
                    <td><?php echo $rows[3]; ?></td>
                    <th>Bottom wear</th>
                    <td><?php echo $rows[4]; ?></td>
                </tr>
                <tr>
            <th>Woolean Clothes</th>
            <td><?php echo $rows[5] ; ?></td>
            <th>Suit</th>
            <td><?php echo $rows[6] ; ?></td>
          </tr>
          <tr>
            <th>Duvet</th>
            <td><?php echo $rows[7] ; ?></td>
            <th>Curtains</th>
            <td><?php echo $rows[8] ; ?></td>
          </tr>
          <tr>
            <th>Carpets</th>
            <td><?php echo $rows[9] ; ?></td>
            <th>Others</th>
            <td><?php echo $rows[10] ; ?></td>
          </tr>
          <tr>
            <th>Service</th>
            <td><?php echo $rows[11] ; ?></td>
            <th>Address</th>
            <td><?php echo $rows[12] ; ?></td>
          </tr>
          <tr>
            <th>Contact Person</th>
            <td><?php echo $rows[13] ; ?></td>
            <th>Description</th>
            <td><?php echo $rows[14] ; ?></td>
          </tr>
          <tr>
            <th>Payment Method</th>
            <td>Cash On Delivery</td>
            <th>Record Status</th>
            <td><?php echo $rows[15] ; ?></td>
          </tr>      
          <?php
          }
          else 
            {
                echo "No finished requests.";
            }
        ?>       
            </table>

            <center><h2>Invoice of Your Order:</h2></center>

            <?php
            $res = mysqli_query($conn, "SELECT * FROM pricelist");
            $res1 = mysqli_query($conn, "SELECT * FROM laundryrequest WHERE ID='$id' AND Status='accept'");

            if ($rows = mysqli_fetch_array($res)) 
            {
                if ($row = mysqli_fetch_array($res1)) 
                { 
                  ?>
                    <table style="width:100%">
                    <tr>
                            <th>Clothes</th>
                            <th>Per Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <th>Top Wear Price</th>
                            <td><?php echo $rows[1]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $rows[1] * $row[3]; ?></td>
                        </tr>
                        <tr>
                      <th>Bottom Wear Price</th>
                      <td><?php echo $rows[2] ; ?></td>
                      <td> <?php echo $row[4] ; ?></td>
                      <td><?php echo $rows[2] * $row[4] ; ?></td>
                    </tr>
                    <tr>
                      <th>Woolean Price</th>
                      <td><?php echo$rows[3] ; ?></td>
                      <td> <?php echo$row[5] ; ?></td>
                      <td><?php echo $rows[3] * $row[5] ; ?></td>
                    </tr>
                    <tr>
                      <th>Suit</th>
                      <td><?php echo $rows[4] ; ?></td>
                      <td> <?php echo$row[6]  ; ?></td>
                      <td><?php echo $rows[4] * $row[6] ; ?></td>
                    </tr>
                    <tr>
                      <th>Duvet</th>
                      <td><?php echo $rows[5] ; ?></td>
                      <td> <?php echo $row[7] ; ?></td>
                      <td><?php echo $rows[5] * $row[7] ; ?></td>
                    </tr>
                    <tr>
                      <th>Curatains</th>
                      <td><?php echo $rows[6] ; ?></td>
                      <td> <?php echo $row[8] ; ?></td>
                      <td><?php echo $rows[6] * $row[8] ; ?></td>
                    </tr>
                    <tr>
                      <th>Carpets</th>
                      <td><?php echo $rows[7] ; ?></td>
                      <td> <?php echo$row[9] ; ?></td>
                      <td><?php echo $rows[7] * $row[9] ; ?></td>
                    </tr>
                    <tr>
                      <th>Other Price</th>
                      <td>10</td>
                      <td> <?php echo$row[10] ; ?></td>
                      <td><?php echo 10 * $row[10] ; ?></td>
                    </tr>
                    <tr>

                    <tr>
                        <td></td>
                        <th>Approx Grand Total</th>
                        <td><?php
                          echo  $row[3] +
                                $row[4]+
                                $row[5] +
                                $row[6] +
                                $row[7] +
                                $row[8] +
                                $row[9] +
                                $row[10];
                            ?></td>
                        <th> <i class="fa-solid fa-indian-rupee-sign"></i>
                            <?php
                          echo  $rows[1] * $row[3] +
                                $rows[2] * $row[4]+
                                $rows[3] * $row[5] +
                                $rows[4] * $row[6] +
                                $rows[5] * $row[7] +
                                $rows[6] * $row[8] +
                                $rows[7] * $row[9] +
                                      10 * $row[10];
                            ?>
                        </th>
                    </tr>
                    </table>

                    <br>
                    <p>
                        <button type='button' value='Print Bill' onclick='printDiv()' class="btn-primary"><i class="fa-solid fa-print"></i> Print </button>
                    </p>
                <?php
                }
            }
            else {
                echo "No requests.";
            }
         ?>
    </div>
</body>
</html>

<script>
    function printDiv() {
        var divContents = document.getElementById('parent').outerHTML;
        var win = window.open('', '', 'height=700,width=700');
        win.document.write('<html><head><title>Print</title>');
        win.document.write('<style>');
        win.document.write('table, th, td { border: 1px solid black; }');
        win.document.write('table tr td { margin: 10px; padding: 10px; }');
        // Include more styles if needed
        win.document.write('</style>');
        win.document.write('</head><body>');
        win.document.write(divContents);
        win.document.write('</body></html>');
        win.document.close();
        win.print();
    }
</script>
