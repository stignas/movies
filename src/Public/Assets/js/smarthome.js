const state = {};
const actorList = document.getElementById("actors-list");
const errorElement = document.getElementsByClassName('not-found');

async function getActors(filter) {
    const formData = new FormData();
    formData.append('search_text', filter);
    try {
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
            data.forEach((e) => {
                generateHTML(e)
            })
            errorElement[0].innerText = '';
            if (actorList.childElementCount < 1) {
                errorElement[0].innerHTML = "Nothing found..."
            }
        })
    } catch (e) {
        console.log(e);
    }
}

function filterByQuery(e) {
    clearNodes(actorList);
    const filter = e.target.value
    e.target.innerText = filter;
    getActors(filter);
}

function generateHTML(actor) {
    const actorList = document.getElementById("actors-list");
    const actorLine = document.createElement("li");
    const actorLink = document.createElement("a");
    actorLink.setAttribute("href", '/paskaitos/sql/38p/movies/actor/' + actor.id)
    let firstName = actor.first_name.charAt(0).toUpperCase() + actor.first_name.slice(1).toLowerCase();
    let lastName = actor.last_name.charAt(0).toUpperCase() + actor.last_name.slice(1).toLowerCase();
    actorLink.innerText = firstName + ' ' + lastName
    actorLine.append(actorLink);
    actorList.append(actorLine);
}

function clearNodes(element) {
    while (element.firstChild) {
        element.removeChild(element.lastChild);
    }
}

try {
    getActors('');
    document.getElementById('searchInput').addEventListener("keyup", filterByQuery);
} catch (e) {
    console.log(e);
}
