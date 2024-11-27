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
    itemElements.forEach((item, index) => {
        item.addEventListener("dragstart", (e) => {
            let selected = e.target;

            boxes.forEach((box) => {
                box.addEventListener("dragover", (e) => {
                    if(box.id.includes(selected.children[3].children[1].textContent) && (box.children[0].nodeName === "svg" || box.children.length == 0)){
                        e.preventDefault();
                    }
                });

                box.addEventListener("drop", (e) => {
                    if(box.id.includes(selected.children[3].children[1].textContent) && (box.children[0].nodeName === "svg")){
                        const position = document.createElement("div");
                        position.innerHTML = selected.children[3].children[1].textContent
                        position.style.color = "red"

                        box.innerHTML = ""
                        box.appendChild(selected.children[1].children[0]);
                        box.innerHTML += selected.children[3].children[0].children[0].textContent;
                        box.appendChild(position);
                        playersList.removeChild(selected)
                        box.style.display = "flex";
                        box.style.flexDirection = "column";
                    }
                });
            });
        })
    });
}

function htmlContent(items) {
    let htmlItems = "";

    for (let element in items) {
        items[element].forEach(item => {
            htmlItems += 
            `<div class="item" draggable="true" style="background-color:#1E1E1E; display:flex; justify-content: center; margin-top: 5px; border-radius: 10px; width: 100%">
                    <div class="col-1"></div>
                <div class="col-2" style=margin-top:1.2vh;>
                    <img src="${item.photo}" ; width="60vh"/> 
                </div>
                    <div class="col-1"></div>
                <div class="col-10 ">
                    <div class="row" style="margin-top:1vh"><h3>${item.name}</h3></div>
                    <div class="row"><h5>${item.position}</h5></div>
                </div>
            </div>`;
        });
    }

    return htmlItems;
}