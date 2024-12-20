<?php 
ob_start();
require_once "../connection.php";

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $photo = $_POST['photo'];
    $country = $_POST['country'];
    $flag = $_POST['flag'];
    $club = $_POST['club'];
    $logo = $_POST['logo'];
    $position = $_POST['position'];
    $rating = $_POST['rating'];
    $pace = $_POST['pace'];
    $shooting = $_POST['shooting'];
    $passing = $_POST['passing'];
    $dribbling = $_POST['dribbling'];
    $defending = $_POST['defending'];
    $physical = $_POST['physical'];

    $identifier = mysqli_num_rows(mysqli_query($connection, "SELECT id FROM Players")) + 1;
    echo "Hello" . $identifier;

    if($name != ""){
        $sql = "INSERT INTO Players(id, name,  photo, rating, position, id_equipe, id_nationalite) VALUES($identifier, '$name', '$photo', $rating, '$position', 1, 1)";
        $sql2 = "INSERT INTO Statistics (id_player, pace, shooting, passing, defending, dribbling, physical) VALUES($identifier, $pace, $shooting, $passing, $defending, $dribbling, $physical)";
        if (mysqli_query($connection, $sql) && mysqli_query($connection, $sql2)) {
            header("location: ../../index.php");
        } else {
             echo "Something went wrong. Please try again later.";
        }
    }else{
        echo "Name, Class and Marks cannot be empty!";
    }
}

ob_end_flush();
?>