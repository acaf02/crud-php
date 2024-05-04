<?php
include "db_connection.php";
$id = $_GET['id'];

    $sql = "DELETE FROM `crud` WHERE id = $id";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header("Location: index.php?msg=Record delete successfully");
    } else {
        echo "Failed: " . mysqli_error($connection);
    }
?>
