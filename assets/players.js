import playersArray from './script.js'; 


const PlayersList = document.getElementById("players-all");

// Fetch Depuis Json
fetch("./assets/players.json")
  .then((response) => response.json())
  .then((data) => {
    playersArray = data.players;
    DisplayPlayers(playersArray);
  });

function DisplayPlayers(items) {
  PlayersList.innerHTML = CreatePlayers(items);
}

function CreatePlayers(items) {
  let htmlItems = "";

  items.forEach((player, index) => {
    htmlItems += `<div style="position: relative">
                <div class="card-full">
                    <img src="assets/icons/player-card.webp" class="first-image" alt="">
                                <div class="card" >
                                    <div class="card-inner">
                                        <div class="card-top">
                                            <div class="info">
                                                <div class="value">${
                                                  player.rating
                                                }</div>
                                                <div class="position">${
                                                  player.position
                                                }</div>
                                            </div>
                                            <div class="image">
                                                <img src="${
                                                  player.photo
                                                }" alt="">
                                            </div>
                                        </div>
                                        <div class="card-bottom">
                                            <div class="name">${
                                              player.name
                                            }</div>
                                            <div class="stats">
                                                <div>${
                                                  player.position !== "GK"
                                                    ? `<ul>
                                                        <li><span>PAC</span><span>${player.pace}</span></li>
                                                        <li><span>SHO</span><span>${player.shooting}</span></li>
                                                        <li><span>PAS</span><span>${player.passing}</span></li>
                                                        <li><span>DRI</span><span>${player.dribbling}</span></li>
                                                        <li><span>DEF</span><span>${player.defending}</span></li>
                                                        <li><span>PHY</span><span>${player.physical}</span></li>
                                                    </ul> `
                                                    : `<ul>
                                                        <li><span>DIV</span><span>${player.diving}</span></li>
                                                        <li><span>HAN</span><span>${player.handling}</span></li>
                                                        <li><span>KIC</span><span>${player.kicking}</span></li>
                                                        <li><span>REF</span><span>${player.reflexes}</span></li>
                                                        <li><span>SPD</span><span>${player.speed}</span></li>
                                                        <li><span>POS</span><span>${player.positioning}</span></li>
                                                    </ul>`
                                                }
                                                </div>
                                            </div>
                                            <div class="country-club">
                                                <div class="country">
                                                    <img src="${
                                                      player.flag
                                                    }" alt="">
                                                </div>
                                                <div class="club">
                                                    <img src="${
                                                      player.logo
                                                    }" alt="">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Buttons">
                                        <button class="btn btn-danger" data-index="${index}"  onclick="deletePlayer(${index})">Delete</button>
                                        <button class="btn btn-warning" data-index="${index}" data-bs-toggle="modal" data-bs-target="#playerModal" onclick="getPlayer(${index})">Edit</button>
                            </div>
                            </div>
                
                                `;
  });

  return htmlItems;
}

function addPlayer() {
  // if (!validateFieldsAdd()) {
  //     return;
  // }

  playerInput = {
    name: document.getElementById("name").value,
    photo: document.getElementById("photo").value,
    nationality: document.getElementById("country").value,
    flag: document.getElementById("flag").value,
    club: document.getElementById("club").value,
    logo: document.getElementById("logo").value,
    rating: document.getElementById("rating").value,
    position: document.getElementById("positionSelect").value,
    pace: document.getElementById("pace").value,
    shooting: document.getElementById("shooting").value,
    passing: document.getElementById("passing").value,
    dribbling: document.getElementById("dribbling").value,
    defending: document.getElementById("defending").value,
    physical: document.getElementById("physical").value,
  };

  let newPlayer = {
    name: playerInput.name,
    photo: playerInput.photo,
    position: playerInput.position,
    nationality: playerInput.nationality,
    flag: playerInput.flag,
    club: playerInput.club,
    logo: playerInput.logo,
    rating: playerInput.rating,
    pace: playerInput.pace,
    shooting: playerInput.shooting,
    passing: playerInput.passing,
    dribbling: playerInput.dribbling,
    defending: playerInput.defending,
    physical: playerInput.physical,
  };

  console.log(newPlayer);

  playersArray.unshift(newPlayer);
  DisplayPlayers(playersArray);
}

function deletePlayer(index) {
  playersArray.splice(index, 1);
  DisplayPlayers(playersArray);
}

function getPlayer(index) {
  document.getElementById("name").value = playersArray[index].name;
  document.getElementById("photo").value = playersArray[index].photo;
  document.getElementById("country").value = playersArray[index].nationality;
  document.getElementById("flag").value = playersArray[index].flag;
  document.getElementById("club").value = playersArray[index].club;
  document.getElementById("logo").value = playersArray[index].logo;
  document.getElementById("rating").value = playersArray[index].rating;
  document.getElementById("positionSelect").value =
    playersArray[index].position;
  document.getElementById("pace").value = playersArray[index].pace;
  document.getElementById("shooting").value = playersArray[index].shooting;
  document.getElementById("passing").value = playersArray[index].passing;
  document.getElementById("dribbling").value = playersArray[index].dribbling;
  document.getElementById("defending").value = playersArray[index].defending;
  document.getElementById("physical").value = playersArray[index].physical;

  const ModalButton = document.getElementById("ModalButton");
  ModalButton.textContent = "Edit";
  ModalButton.setAttribute("onclick", `editPlayer(${index})`);
}

function editPlayer(index) {
  console.log(playersArray[index]);
  playersArray[index] = {
    name: document.getElementById("name").value,
    photo: document.getElementById("photo").value,
    nationality: document.getElementById("country").value,
    flag: document.getElementById("flag").value,
    club: document.getElementById("club").value,
    logo: document.getElementById("logo").value,
    rating: document.getElementById("rating").value,
    position: document.getElementById("positionSelect").value,
    pace: document.getElementById("pace").value,
    shooting: document.getElementById("shooting").value,
    passing: document.getElementById("passing").value,
    dribbling: document.getElementById("dribbling").value,
    defending: document.getElementById("defending").value,
    physical: document.getElementById("physical").value,
  };

  DisplayPlayers(playersArray);
}


function GoBack(){
  document.getElementById("stade").style.display = "grid";
  document.getElementById("players_aside").style.display = "block";
  document.getElementsByClassName("players")[0].style.display = "none"
}

