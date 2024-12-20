<?php 
    require_once "../connection.php";
    echo $_GET['id'];
    $sql = "SELECT Players.*, Statistics.id_player, Statistics.pace, Statistics.shooting, Statistics.passing, Statistics.defending, Statistics.dribbling, Statistics.physical FROM Statistics, Players WHERE Players.id = " .$_GET['id']. " LIMIT 1";
    $result1 = mysqli_fetch_assoc(mysqli_query($connection, $sql));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIFA Formation Selector</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body style="padding: 20px">
<form class="row g-3 needs-validation" action="./Edit.php" method="post">
                    <input style="display:none;" id="id" name="id" value="<?php echo $result1['id']; ?>" >
                    <!-- Player Name -->
                    <div class="col-md-6">
                        <label for="name" class="form-label">Player's Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="e.g., Cristiano Ronaldo" value="<?php echo $result1['name']; ?>" required>
                        <div class="red" id="nameError"></div>
                    </div>

                    <!-- Player Photo Link -->
                    <div class="col-md-6">
                        <label for="photo" class="form-label">Player's Photo Link</label>
                        <input type="url" class="form-control" id="photo" name="photo" placeholder="e.g., https://example.com/player-photo.png" value="<?php echo $result1['photo']; ?>" required>
                        <div class="red" id="photoError"></div>
                    </div>

                    <!-- Player Nationality -->
                    <div class="col-md-6">
                        <label for="country" class="form-label">Player's Nationality</label>
                        <select id="countryID" name="country" class="form-select" aria-label="Select Nation" required>
                            <?php 
                                // require_once "../connection.php";

                                $sql = "SELECT id,country FROM Nationalites";
                                if($result = mysqli_query($connection, $sql)){
                                    while($row = mysqli_fetch_assoc($result)){?>
                                        <option value=<?php echo $row["id"] ?>> <?php echo $row["country"] ?> </option>
                                    <?php }
                                }
                            ?>
                        </select>
                        <div class="red" id="countryError"></div>
                    </div>

                    <!-- Player's Club -->
                    <div class="col-md-6">
                        <label for="club" class="form-label">Player's Club</label>
                        <select id="clubID" name="club" class="form-select" aria-label="Select club" required>
                            <?php 
                                $sqls = "SELECT id,logo,club FROM Equipes";
                                if($result = mysqli_query($connection, $sqls)){
                                    while($row = mysqli_fetch_assoc($result)){?>
                                        <option value=<?php echo $row["id"] ?>><?php echo $row["club"] ?></option>
                                    <?php }
                                }
                            ?>
                        </select>
                        <div class="red" id="clubError"></div>
                    </div>

                    <!-- Player's Position -->
                    <div class="col-md-6">
                        <label for="positionSelect" class="form-label">Player's Position</label>
                        <select id="positionSelect" name="position" class="form-select" aria-label="Select position" required>
                        <option value="ST">ST</option>
                            <option value="RW">RW</option>
                            <option value="LW">LW</option>
                            <option value="LB">LB</option>
                            <option value="RB">RB</option>
                            <option value="CB">CB</option>
                            <option value="CM">CM</option>
                            <option value="SS">SS</option>
                            <option value="AM">AM</option>
                            <option value="LM">LM</option>
                            <option value="RM">RM</option>
                            <option value="DM">DM</option>
                            <option value="GK">GK</option>
                            <option value="CDM">CDM</option>
                        </select>
                        <div class="red" id="positionError"></div>
                    </div>

                    <!-- Player's Rating -->
                    <div class="col-md-6">
                        <label for="rating" class="form-label">Player's Rating</label>
                        <input  class="form-control" id="rating" name="rating" placeholder="e.g., 91" required value="<?php echo $result1['rating'] ?>">
                        <div class="red" id="ratingError"></div>
                    </div>

                    <!-- Player's Stats -->
                    <div class="col-md-4">
                        <label for="pace" class="form-label">Pace</label>
                        <input value=<?php echo $result1['pace'] ?> type="number" class="form-control" id="pace" name="pace" placeholder="e.g., 84" required>
                        <div class="red" id="paceError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="shooting" class="form-label">Shooting</label>
                        <input value=<?php echo $result1['shooting'] ?> type="number" class="form-control" id="shooting" name="shooting" placeholder="e.g., 94" required>
                        <div class="red" id="shootingError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="passing" class="form-label">Passing</label>
                        <input value=<?php echo $result1['passing'] ?> type="number" class="form-control" id="passing" name="passing" placeholder="e.g., 84" required>
                        <div class="red" id="passingError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="dribbling" class="form-label">Dribbling</label>
                        <input value=<?php echo $result1['dribbling'] ?> type="number" class="form-control" id="dribbling" name="dribbling" placeholder="e.g., 83" required>
                        <div class="red" id="dribblingError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="defending" class="form-label">Defending</label>
                        <input value=<?php echo $result1['defending'] ?> type="number" class="form-control" id="defending" name="defending" placeholder="e.g., 37" required>
                        <div class="red" id="defendingError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="physical" class="form-label">Physical</label>
                        <input value=<?php echo $result1['physical'] ?> type="number" class="form-control" id="physical" name="physical" placeholder="e.g., 77" required>
                        <div class="red" id="physicalError"></div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <input type="submit" name="submitEdit" class="btn btn-primary">
                    </div>
</form>
</body>
</html>