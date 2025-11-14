<?php
require_once './db/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Client Records</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>Client ID</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Province</th>
            <th>Postal Code</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM client_info";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['client_id']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['city']}</td>";
                echo "<td>{$row['Province']}</td>";
                echo "<td>{$row['postalcode']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6' class='text-center'>No Records Found</td></tr>";
        }
        ?>
        </tbody>
    </table>

    <div class="text-center mt-3">
        <a href="index.php" class="btn btn-secondary">Back to Home</a>
    </div>
</div>

</body>
</html>
