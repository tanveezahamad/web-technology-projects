let input = document.getElementById("searchInput");
let results = document.getElementById("searchResults");


function createandappend(response) {
let input = document.getElementById("searchInput");
let results = document.getElementById("searchResults");


    let container = document.createElement("div");

    let img = document.createElement("img");
    img.classList.add("image");
    img.setAttribute("src", response.imageLink);

    let p = document.createElement("p");
    p.textContent = response.author;

    container.appendChild(img);
    container.appendChild(p);

    results.appendChild(container);
}

function searchbook() {
let input = document.getElementById("searchInput");
let results = document.getElementById("searchResults");


        results.textContent = "";

        let value = input.value;
        let url = "https://apis.ccbp.in/book-store?title=" + value;
        let options = {
            method: "GET"
        };
        fetch(url, options)
            .then(function(response) {
                return response.json();
            })
            .then(function(response) {
                console.log(response);
                for (let i of response.search_results) {
                    console.log(i)
                    createandappend(i);
                }
            });
    
}
