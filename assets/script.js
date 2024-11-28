const playersList = document.getElementById("playersList");
const boxesHtml = document.getElementsByClassName("playerEmptyCard");
const boxes = Array.from(boxesHtml);

let playersArray = [];



fetch("./assets/players.json")
    .then((response) => response.json())
    .then((data) => {playersArray = data; display(playersArray)});

function display(items) {
    playersList.innerHTML = htmlContent(items);

    const itemElements = document.querySelectorAll(".item");
    let selected;
    let position;
    itemElements.forEach((item, index) => {
        item.addEventListener("dragstart", (e) => {
            selected = e.currentTarget;
            position = selected.children[2].children[0].textContent;
        })

        boxes.forEach((box) => {
            box.addEventListener("dragover", (e) => {
                if(box.id.includes(position)){
                    e.preventDefault();
                }
            });

            box.addEventListener("drop", (e) => {
                    box.innerHTML = "";
                    box.appendChild(selected)
            });

        });
    });
}

function htmlContent(items) {
    let htmlItems = "";

    for (let element in items) {
        items[element].forEach(item => {
            htmlItems += 
            `<div class="item" draggable="true" style="display:flex;  justify-content: center; border-radius: 10px; width: 100%">
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
    }

    return htmlItems;
}