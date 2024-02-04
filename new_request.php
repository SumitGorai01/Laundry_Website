<?php include("database_conn.php"); ?>
<?php include("user_home.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Request</title>
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
    <table style="width:100%">

        <?php
        $id = $_SESSION["user_id"];

        // Fetch data for status "pending"
        $resPending = mysqli_query($conn, "SELECT * FROM laundryrequest WHERE ID='$id' AND Status='pending'");
        
        if (mysqli_num_rows($resPending) > 0) {
            ?>
            <tr>
                <th>S. No.</th>
                <th>Date Of Laundry</th>
                <th>Full Name</th>
                <th>Mobile No.</th>
                <th>Action</th>
            </tr>

            <?php
            $i = 1;

            while ($rows = mysqli_fetch_array($resPending)) {
                $laundryDate = $rows[2];

                // Fetch full name and mobile number from the 'reguser' table based on the user ID
                $userDataQuery = mysqli_query($conn, "SELECT Name, Mobile FROM reguser WHERE ID='$id'");
                $userDataRow = mysqli_fetch_array($userDataQuery);
                $fullName = $userDataRow['Name'];
                $contactNo = $userDataRow['Mobile'];

                // Display the retrieved data in the table
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $laundryDate; ?></td>
                    <td><?php echo $fullName; ?></td>
                    <td><?php echo $contactNo; ?></td>
                    <td><a href="view_request.php"><button type="button" class="btn-primary">View Request <i class="fa-solid fa-bars"></i></button></a></td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo "No pending requests.";
        }
        ?>
    </table>
</body>
</html>
