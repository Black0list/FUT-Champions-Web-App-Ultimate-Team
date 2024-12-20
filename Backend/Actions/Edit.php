<?php 
ob_start();
require_once "../connection.php";

    if(isset($_POST["submitEdit"])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $photo = $_POST['photo'];
        $country = $_POST['country'];
        $club = $_POST['club'];
        $position = $_POST['position'];
        $rating = $_POST['rating'];
        $pace = $_POST['pace'];
        $shooting = $_POST['shooting'];
        $passing = $_POST['passing'];
        $dribbling = $_POST['dribbling'];
        $defending = $_POST['defending'];
        $physical = $_POST['physical'];

        $sqledit = "UPDATE Players SET name = '$name', photo = '$photo', id_equipe = '$country', id_nationalite = '$club', position = '$position', rating = '$rating' WHERE id = '$id'";
        $sqlstats = "UPDATE Statistics SET pace = '$pace', shooting = '$shooting', passing = '$passing', dribbling  = '$dribbling', defending = '$defending', physical = '$physical'  WHERE id = '$id'";
        if (mysqli_query($connection, $sqledit) && mysqli_query($connection, $sqlstats)) {
            header("location: ../../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }

    ob_end_flush();
?>