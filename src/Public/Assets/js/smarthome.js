const state = {};
const actorList = document.getElementById("actors-list");
const errorElement = document.getElementsByClassName('not-found');

async function getActors(filter) {
    const formData = new FormData();
    formData.append('search_text', filter);
    fetch('/paskaitos/sql/38p/movies/json', {method: 'POST', body: formData,})
        .then((response) => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error(response.statusText)
            }
        }).then((data) => {
            state["actors"] = data;
            clearNodes(actorList);
            errorElement[0].innerText = '';
            data.forEach((e) => {
                generateHTML(e)
            })
        }
    )
}

function filterByQuery(e) {
    clearNodes(actorList);
    errorElement[0].innerText = '';
    const filter = e.target.value
    e.target.innerText = filter;
    getActors(filter);
}


function generateHTML(actor) {
    const actorList = document.getElementById("actors-list");
    const actorLine = document.createElement("li");
    const actorLink = document.createElement("a");
    actorLink.setAttribute("href", '/paskaitos/sql/38p/movies/actor/' + actor.id)
    actorLink.innerText = actor.first_name + ' ' + actor.last_name;
    actorLine.append(actorLink);
    actorList.append(actorLine);
}

function clearNodes(element) {
    while (element.firstChild) {
        element.removeChild(element.lastChild);
    }
}

getActors('');
document.getElementById('searchInput').addEventListener("keyup", filterByQuery);
console.log(actorList.childElementCount);




