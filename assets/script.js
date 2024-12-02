const playersList = document.getElementById("playersList");
const playersList2 = document.getElementById("players-all");
const boxesHtml = document.getElementsByClassName("playerEmptyCard");
const boxes = Array.from(boxesHtml);
const selectPlayer = document.getElementsByClassName("form-select")[1];
const ModalButton = document.getElementById("ModalButton");

let playersArray = [];
let StadeMap = new Map();

let playerInput = {
    name : document.getElementById("name").value,
    photo : document.getElementById("photo").value,
    nationality : document.getElementById("country").value,
    flag : document.getElementById("flag").value,
    club : document.getElementById("club").value,
    logo : document.getElementById("logo").value,
    rating : document.getElementById("rating").value,
    position : document.getElementById("positionSelect").value,
    pace : document.getElementById("pace").value,
    shooting : document.getElementById("shooting").value,
    passing : document.getElementById("passing").value,
    dribbling : document.getElementById("dribbling").value,
    defending : document.getElementById("defending").value,
    physical : document.getElementById("physical").value
}

// Fetch Depuis Json
fetch("./assets/players.json")
    .then((response) => response.json())
    .then((data) => {playersArray = data.players; display(playersArray);DisplayPlayers(playersArray)});

function display(items) {
    playersList.innerHTML = htmlContent(items);

    const itemElements = document.querySelectorAll(".item");
        let selected;
        let position;
        let parent;
        let PlayerSelectedIndex
    itemElements.forEach((item, index) => {
        item.addEventListener("dragstart", (e) => {
            selected = e.currentTarget;
            position = selected.children[2].children[0].textContent;
            parent = selected.parentElement;
        })

        boxes.forEach((box) => {
            box.addEventListener("dragover", (e) => {
                if((box.id.includes(position))){
                    e.preventDefault();
                }
            });

            box.addEventListener("drop", (e) => {
                (box.children[0]?.nodeName === "svg") || box.children.length === 0 ? console.log("skip svg") : parent.appendChild(box.children[0]);
                box.innerHTML = ""
                box.appendChild(selected)
                StadeMap.set("id", PlayerSelectedIndex);
            });
        });
    });
}




function htmlContent(items) {
    let htmlItems = "";

        items.forEach((item, index) => {
            htmlItems += 
            `<div class="item" draggable="true" style="margin-top: 5px; display:flex; justify-content: center; border-radius: 10px; width: 100%">
                    <div class="player_photo">
                        <div class="rating" style="left: 25%; top: 10%;">${item.rating}</div>
                        <img src="${item.photo}" alt="">
                    </div>
                    <div class="player_name">${item.name}</div>
                    <div class="player_NationClub"><div>${item.position}</div><img src="${item.flag}"/><img src="${item.logo}"/><div></div></div>
                    <div class="player_stats" style="display : none">
                        <div class="column-stats">
                            <p>${item.pace ? "PAC" : "DIV"}</p>
                            <p>${item.pace || item.diving}</p>
                        </div>
                        <div class="column-stats">
                            <p>${item.shooting ? "SHO" : "HAN"}</p>
                            <p>${item.shooting || item.handling}</p>
                        </div>
                        <div class="column-stats">
                            <p>${item.passing ? "PAS" : "KIC"}</p>
                            <p>${item.passing || item.kicking}</p>
                        </div>
                        <div class="column-stats">
                            <p>${item.dribbling ? "DRI" : "REF"}</p>
                            <p>${item.dribbling || item.reflexes}</p>
                        </div>
                        <div class="column-stats">
                            <p>${item.defending ? "DEF" : "SPD"}</p>
                            <p>${item.defending || item.speed}</p>
                        </div>
                        <div class="column-stats">
                            <p>${item.physical ? "PHY" : "POS"}</p>
                            <p>${item.physical || item.positioning}</p>
                        </div>
                    </div>
            </div>`;
        });

    return htmlItems;
}

function validateFieldsAdd() {
    
    const nameValid = /^[a-zA-Z\s]+$/.test(playerInput.name.trim());
    const photoValid = playerInput.photo.startsWith("http") && /\.(jpg|jpeg|png|gif)$/.test(playerInput.photo.trim());
    const countryValid = /^[a-zA-Z\s]+$/.test(playerInput.country.trim());
    const flagValid = playerInput.flag.startsWith("http") && /\.(jpg|jpeg|png|gif)$/.test(playerInput.flag.trim());
    const clubValid = /^[a-zA-Z\s]+$/.test(playerInput.club.trim());
    const logoValid = playerInput.logo.startsWith("http") && /\.(jpg|jpeg|png|gif)$/.test(playerInput.logo.trim());
    const ratingValid = /^[1-9][0-9]?$|^100$/.test(playerInput.rating.trim()); 
    const paceValid = /^[1-9][0-9]?$|^100$/.test(playerInput.pace.trim()); 
    const shootingValid = /^[1-9][0-9]?$|^100$/.test(playerInput.shooting.trim()); 
    const passingValid = /^[1-9][0-9]?$|^100$/.test(playerInput.passing.trim()); 
    const dribblingValid = /^[1-9][0-9]?$|^100$/.test(playerInput.dribbling.trim()); 
    const defendingValid = /^[1-9][0-9]?$|^100$/.test(playerInput.defending.trim()); 
    const physicalValid = /^[1-9][0-9]?$|^100$/.test(playerInput.physical.trim()); 

    document.getElementById("nameError").textContent = nameValid ? '' : 'Invalid name. Only letters and spaces are allowed.';
    document.getElementById("photoError").textContent = photoValid ? '' : 'Invalid photo URL. Must start with http and end with jpg, jpeg, png, or gif.';
    document.getElementById("countryError").textContent = countryValid ? '' : 'Invalid country name. Only letters and spaces are allowed.';
    document.getElementById("flagError").textContent = flagValid ? '' : 'Invalid flag URL. Must start with http and end with jpg, jpeg, png, or gif.';
    document.getElementById("clubError").textContent = clubValid ? '' : 'Invalid club name. Only letters and spaces are allowed.';
    document.getElementById("logoError").textContent = logoValid ? '' : 'Invalid logo URL. Must start with http and end with jpg, jpeg, png, or gif.';
    document.getElementById("ratingError").textContent = ratingValid ? '' : 'Invalid rating. Must be between 1 and 100.';
    document.getElementById("paceError").textContent = paceValid ? '' : 'Invalid pace. Must be between 1 and 100.';
    document.getElementById("shootingError").textContent = shootingValid ? '' : 'Invalid shooting. Must be between 1 and 100.';
    document.getElementById("passingError").textContent = passingValid ? '' : 'Invalid passing. Must be between 1 and 100.';
    document.getElementById("dribblingError").textContent = dribblingValid ? '' : 'Invalid dribbling. Must be between 1 and 100.';
    document.getElementById("defendingError").textContent = defendingValid ? '' : 'Invalid defending. Must be between 1 and 100.';
    document.getElementById("physicalError").textContent = physicalValid ? '' : 'Invalid physical. Must be between 1 and 100.';

    return (
        nameValid 
        && countryValid 
        && clubValid 
        && ratingValid 
        && paceValid 
        && shootingValid 
        && passingValid 
        && dribblingValid 
        && defendingValid 
        && physicalValid
    );
}

selectPlayer.addEventListener("change", (e) => {
    if(selectPlayer.value === "GK"){
        document.getElementById("pace").previousElementSibling.textContent = "Diving"
        document.getElementById("shooting").previousElementSibling.textContent = "Handling"
        document.getElementById("passing").previousElementSibling.textContent = "Kicking"
        document.getElementById("dribbling").previousElementSibling.textContent = "Reflexes"
        document.getElementById("defending").previousElementSibling.textContent = "Speed"
        document.getElementById("physical").previousElementSibling.textContent = "Positioning"
    } else {
        document.getElementById("pace").previousElementSibling.textContent = "Pace"
        document.getElementById("shooting").previousElementSibling.textContent = "Shooting"
        document.getElementById("passing").previousElementSibling.textContent = "Passing"
        document.getElementById("dribbling").previousElementSibling.textContent = "Dribbling"
        document.getElementById("defending").previousElementSibling.textContent = "Defending"
        document.getElementById("physical").previousElementSibling.textContent = "Physical"
    }
})

function PlayerList(){
    document.getElementById("stade").style.display = "none";
    document.getElementById("players_aside").style.display = "none";
    document.getElementsByClassName("players")[0].style.display = "flex";
    DisplayPlayers(playersArray)
}



// ======================= playerslIST ==============================
function DisplayPlayers(items) {
    playersList2.innerHTML = CreatePlayers(items);
  }
  
  function CreatePlayers(items) {
    let htmlItems = "";
  
    items.forEach((player, index) => {
      htmlItems += `<div style="display:flex;flex-direction: column; align-items:center">
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
                                                  <div>
                                                        <ul>
                                                          <li><span>${player.position == "GK" ? "DIV" : "PAC"}</span><span>${player.pace}</span></li>
                                                          <li><span>${player.position == "GK" ? "HAN" : "SHO"}</span><span>${player.shooting}</span></li>
                                                          <li><span>${player.position == "GK" ? "KIC" : "PAS"}</span><span>${player.passing}</span></li>
                                                          <li><span>${player.position == "GK" ? "DEF" : "DRI"}</span><span>${player.dribbling}</span></li>
                                                          <li><span>${player.position == "GK" ? "SPD" : "DEF"}</span><span>${player.defending}</span></li>
                                                          <li><span>${player.position == "GK" ? "POS" : "PHY"}</span><span>${player.physical}</span></li>
                                                      </ul>
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

    console.log(document.getElementsByTagName("form")[0])
    
  
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
    document.getElementById("positionSelect").value = playersArray[index].position;
    document.getElementById("pace").value = playersArray[index].pace;
    document.getElementById("shooting").value = playersArray[index].shooting;
    document.getElementById("passing").value = playersArray[index].passing;
    document.getElementById("dribbling").value = playersArray[index].dribbling;
    document.getElementById("defending").value = playersArray[index].defending;
    document.getElementById("physical").value = playersArray[index].physical;
  
    ModalButton.textContent = "Edit";
    ModalButton.setAttribute("onclick", `editPlayer(${index})`);
  }
  
  function editPlayer(index) {
    
    let player = {
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

    playersArray[index] = player
  
    DisplayPlayers(playersArray);
  }
  
  
  function GoBack(){
    document.getElementById("stade").style.display = "grid";
    document.getElementById("players_aside").style.display = "block";
    document.getElementsByClassName("players")[0].style.display = "none";
    display(playersArray)
  }
  
  
