<?php include("database_conn.php"); ?>
<?php include("user_home.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laundry Management System</title>

    <style>
        /* Define a grid container */
        .table-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two columns with equal width */
            gap: 10px; /* Gap between columns and rows */
        }

        /* Style for table cells */
        .table-cell {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .card-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card {
            width: 23%;
        }
    </style>
</head>

<body>
    <!-- Cards for request status -->
    <div class="card-container">
        <div class="card text-white text-center bg-success py-3">
            <div class="card-header bg-info">Request</div>
            <div class="card-body text-white">
                <p class="card-text">Request: 0<br></p>
                <a href="#" class="btn btn-primary">View Details <i class="fa fa-navicon"></i></a>
            </div>
        </div>

        <div class="card text-white text-center bg-success py-3">
            <div class="card-header bg-info">Accept</div>
            <div class="card-body text-white">
                <p class="card-text">Accept: 0<br></p>
                <a href="#" class="btn btn-primary">View Details <i class="fa fa-navicon"></i></a>
            </div>
        </div>

        <div class="card text-white text-center bg-success py-3">
            <div class="card-header bg-info">Progress</div>
            <div class="card-body text-white">
                <p class="card-text">In Progress: 0<br></p>
                <a href="#" class="btn btn-primary">View Details <i class="fa fa-navicon"></i></a>
            </div>
        </div>

        <div class="card text-white text-center bg-success py-3">
            <div class="card-header bg-info">Finished</div>
            <div class="card-body text-white">
                <p class="card-text">Finished: 0<br></p>
                <a href="#" class="btn btn-primary">View Details <i class="fa fa-navicon"></i></a>
            </div>
        </div>
    </div>

    <!-- Laundry Price Table -->
    <?php
    $res = mysqli_query($conn, "select * from pricelist");
    if (($rows = mysqli_fetch_array($res))) {
    ?>
        <div>
            <center>
                <h1>Laundry Price (Per Unit in Rs.)</h1>
            </center>
        </div>

        <div class="table-container">
            <!-- Rows for Laundry Price Table -->
            <?php
            $priceItems = array(
                "Top Wear Price" => $rows[1],
                "Bottom Wear Price" => $rows[2],
                "Woolean Price" => $rows[3],
                "Suit Price" => $rows[4],
                "Duvet Price" => $rows[5],
                "Curtains Price" => $rows[6],
                "Carpets Price" => $rows[7],
                "Other Price" => "Other Price depends upon variety (Other above than categories)"
            );

            foreach ($priceItems as $itemName => $itemPrice) {
                echo '<div class="table-cell">' . $itemName . '</div>';
                echo '<div class="table-cell">' . $itemPrice . '</div>';
            }
            ?>
        </div>
    <?php
    }
    ?>

</body>

</html>
