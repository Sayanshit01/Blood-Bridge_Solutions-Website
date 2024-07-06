<?php
include 'conn.php';

if (isset($_POST['id'])) {
    $query_id = $_POST['id'];
    $sql = "UPDATE contact_query SET query_status = 1 WHERE query_id = {$query_id}";
    if (mysqli_query($conn, $sql)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
