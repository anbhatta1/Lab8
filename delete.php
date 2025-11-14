<?php
include("db/conn.php"); 

if (isset($_POST['delete'])) {

    $id = $_POST['client_id'];

    if(empty($id)) {
        die("Error: Client ID is required!");
    }

    $sql = "DELETE FROM client_info WHERE client_id = '$id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0) {
        echo "Record with ID $id has been deleted successfully!";
    } else {
        echo "No record found with ID: $id";
    }
}
?>