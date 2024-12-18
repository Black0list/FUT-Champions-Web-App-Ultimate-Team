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
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <main id="stade" style="display: none;">
        <div class="playerEmptyCard position" id="GK"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="LB"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="RB"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="CB1"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="CB2"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="CM1"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="CM2"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="CM3"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="LW"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="RW"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
        <div class="playerEmptyCard position" id="ST"><svg width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M9 12H12M15 12H12M12 12V9M12 12V15" stroke="#000000" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                        d="M11.7 1.1732C11.8856 1.06603 12.1144 1.06603 12.3 1.17321L21.2263 6.3268C21.4119 6.43397 21.5263 6.63205 21.5263 6.84641V17.1536C21.5263 17.3679 21.4119 17.566 21.2263 17.6732L12.3 22.8268C12.1144 22.934 11.8856 22.934 11.7 22.8268L2.77372 17.6732C2.58808 17.566 2.47372 17.3679 2.47372 17.1536V6.84641C2.47372 6.63205 2.58808 6.43397 2.77372 6.32679L11.7 1.1732Z"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>
    </main>
    <aside id="players_aside" style="display: none;">
        <div class="actions">
            <h1>Ultimate Team</h1>
            <select class="form-select" id="formationSelect" aria-label="Formation Select">
                <option value="4-3-3">4-3-3</option>
            </select>
            <div id="playersList">
                <?php 
                    require_once "./Backend/connection.php";

                    $sql_query = "SELECT Players.*, Equipes.*, Nationalites.*, Statistics.* FROM Players JOIN Statistics ON Statistics.id_player = Players.id JOIN Nationalites ON Nationalites.id = Players.id_nationalite JOIN Equipes ON Equipes.id = Players.id_equipe;";
                    if ($result = mysqli_query($connection, $sql_query)) {
                        while ($row = mysqli_fetch_assoc($result)) {  ?>
                            <div class="item" draggable="true" style="margin-top: 5px; display:flex; justify-content: center; border-radius: 10px; width: 100%;">
                            <div class="player_photo">
                           <div class="rating" style="left: 25%; top: 10%;"><?php echo $row['rating']?></div>
                           <img src=<?php echo $row['photo']?> alt="">
                       </div>
                       <div class="player_name"><?php echo $row['name']?></div>
                       <div class="player_NationClub">
                           <div><?php echo $row['position']?></div>
                           <img src=<?php echo $row['flag']?> alt="" />
                           <img src=<?php echo $row['logo']?> alt="" />
                           <div></div>
                       </div>
                       <div class="player_stats" style="display : none">
                           <div class="column-stats">
                               <p>pace</p>
                               <p><?php echo $row['pace']?></p>
                           </div>
                           <div class="column-stats">
                               <p>shooting</p>
                               <p><?php echo $row['shooting']?></p>
                           </div>
                           <div class="column-stats">
                               <p>passing</p>
                               <p><?php echo $row['passing']?></p>
                           </div>
                           <div class="column-stats">
                               <p>dribbling</p>
                               <p><?php echo $row['dribbling']?></p>
                           </div>
                           <div class="column-stats">
                               <p>speed</p>
                               <p><?php echo $row['speed']?></p>
                           </div>
                           <div class="column-stats">
                               <p>physical</p>
                               <p><?php echo $row['physical']?></p>
                           </div>
                       </div>
                    </div>
                    <?php
                        } 
                    } 
               ?>
            </div>
            <div class="btn-group" role="group">
                <button type="submit" class="btn btn-primary" onclick="PlayerList()">
                    See Players List
                </button>
            </div>
        </div>
    </aside>

    <section class="players" style="display: flex;">
        <div class="players-heading">
            <h1 class="main-title">Ultimate Team</h1>
            <div class="players-actions">
                <a  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#playerModal"
                aria-expanded="true" onclick="changeTextContent()">Add new player</a>
                <a type="button" class="btn btn-warning" onclick="GoBack()" class="secondary-button">Back to Stadium</a>
            </div>
        </div>
        <div class="players-main">
            <div class="players-all" id="players-all">
            <table class="table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>name</th>
                                <th>position</th>
                                <th>Club</th>
                                <th>Country</th>
                                <th>rating</th>
                                <th>Pace</th>
                                <th>Shooting</th>
                                <th>Passing</th>
                                <th>Dribbling</th>
                                <th>Defending</th>
                                <th>Physical</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql_query = "SELECT Players.*, Equipes.*, Nationalites.*, Statistics.* FROM Players JOIN Statistics ON Statistics.id_player = Players.id JOIN Nationalites ON Nationalites.id = Players.id_nationalite JOIN Equipes ON Equipes.id = Players.id_equipe;";
                                if ($result = mysqli_query($connection, $sql_query)) {
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <th><img src= <?php echo $row["photo"]?> alt=""></th>
                                        <th><?php echo $row["name"]?></th>
                                        <th><?php echo $row["position"]?></th>
                                        <th><?php echo $row["club"]?></th>
                                        <th><?php echo $row["country"]?></th>
                                        <th><?php echo $row["rating"]?></th>
                                        <th><?php echo $row["pace"]?></th>
                                        <th><?php echo $row["shooting"]?></th>
                                        <th><?php echo $row["passing"]?></th>
                                        <th><?php echo $row["dribbling"]?></th>
                                        <th><?php echo $row["defending"]?></th>
                                        <th><?php echo $row["physical"]?></th>
                                        <th><a href="deletedata.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></th>
                                        <th><a href="updatedata.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Edit</a></th>
                                    </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
            </div>
        </div>


<!-- Modal Default Player -->
<div class="modal fade" id="playerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-fullscreen-sm-down">
        <div class="modal-content" style="background-color: #1E1E1E;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Default Player Modal</h1>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" action="./Backend/Actions/Create.php" method="post">
                    <!-- Player Name -->
                    <div class="col-md-6">
                        <label for="name" class="form-label">Player's Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="e.g., Cristiano Ronaldo" required>
                        <div class="red" id="nameError"></div>
                    </div>

                    <!-- Player Photo Link -->
                    <div class="col-md-6">
                        <label for="photo" class="form-label">Player's Photo Link</label>
                        <input type="url" class="form-control" id="photo" name="photo" placeholder="e.g., https://example.com/player-photo.png" required>
                        <div class="red" id="photoError"></div>
                    </div>

                    <!-- Player Nationality -->
                    <div class="col-md-6">
                        <label for="country" class="form-label">Player's Nationality</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="e.g., Portugal" required>
                        <div class="red" id="countryError"></div>
                    </div>

                    <!-- Player Flag Link -->
                    <div class="col-md-6">
                        <label for="flag" class="form-label">Player's Country Flag Link</label>
                        <input type="url" class="form-control" id="flag" name="flag" placeholder="e.g., https://example.com/flag.png" required>
                        <div class="red" id="flagError"></div>
                    </div>

                    <!-- Player's Club -->
                    <div class="col-md-6">
                        <label for="club" class="form-label">Player's Club</label>
                        <input type="text" class="form-control" id="club" name="club" placeholder="e.g., Al Nassr" required>
                        <div class="red" id="clubError"></div>
                    </div>

                    <!-- Player's Club Logo Link -->
                    <div class="col-md-6">
                        <label for="logo" class="form-label">Player's Club Logo Link</label>
                        <input type="url" class="form-control" id="logo" name="logo" placeholder="e.g., https://example.com/club-logo.png" required>
                        <div class="red" id="logoError"></div>
                    </div>

                    <!-- Player's Position -->
                    <div class="col-md-6">
                        <label for="positionSelect" class="form-label">Player's Position</label>
                        <select id="positionSelect" name="position" class="form-select" aria-label="Select position" required>
                            <option value="RB">RB</option>
                            <option value="CB">CB</option>
                            <option value="CDM">CDM</option>
                            <option value="GK">GK</option>
                            <option value="CM">CM</option>
                            <option value="CAM">CAM</option>
                            <option value="RM">RM</option>
                            <option value="LM">LM</option>
                            <option value="RW">RW</option>
                            <option value="LW">LW</option>
                            <option value="CF">CF</option>
                            <option value="ST">ST</option>
                            <option value="SS">SS</option>
                        </select>
                        <div class="red" id="positionError"></div>
                    </div>

                    <!-- Player's Rating -->
                    <div class="col-md-6">
                        <label for="rating" class="form-label">Player's Rating</label>
                        <input type="number" class="form-control" id="rating" name="rating" placeholder="e.g., 91" required>
                        <div class="red" id="ratingError"></div>
                    </div>

                    <!-- Player's Stats -->
                    <div class="col-md-4">
                        <label for="pace" class="form-label">Pace</label>
                        <input type="number" class="form-control" id="pace" name="pace" placeholder="e.g., 84" required>
                        <div class="red" id="paceError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="shooting" class="form-label">Shooting</label>
                        <input type="number" class="form-control" id="shooting" name="shooting" placeholder="e.g., 94" required>
                        <div class="red" id="shootingError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="passing" class="form-label">Passing</label>
                        <input type="number" class="form-control" id="passing" name="passing" placeholder="e.g., 84" required>
                        <div class="red" id="passingError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="dribbling" class="form-label">Dribbling</label>
                        <input type="number" class="form-control" id="dribbling" name="dribbling" placeholder="e.g., 83" required>
                        <div class="red" id="dribblingError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="defending" class="form-label">Defending</label>
                        <input type="number" class="form-control" id="defending" name="defending" placeholder="e.g., 37" required>
                        <div class="red" id="defendingError"></div>
                    </div>

                    <div class="col-md-4">
                        <label for="physical" class="form-label">Physical</label>
                        <input type="number" class="form-control" id="physical" name="physical" placeholder="e.g., 77" required>
                        <div class="red" id="physicalError"></div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="submit" id="ModalButton" value="Add" onclick="addPlayer()" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        </div>
    </section>

    <script src="./assets/script.js"></script>

</body>

</html>

