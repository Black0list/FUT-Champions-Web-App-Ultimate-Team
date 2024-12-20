<?php
    ob_start();
    require_once "../connection.php";

    $id = $_GET["id"];
    $queryD = "DELETE FROM Players WHERE id = $id";
    if (mysqli_query($connection, $queryD)) {
        header("location: ../../index.php");
        echo $id;
    } else {
         echo "Something went wrong. Please try again later.";
    }

    ob_end_flush();
?>