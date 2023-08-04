let getTimeBody = document.querySelector(".welcome");

let newElement = document.createElement("h1");
let date = new Date();
let currenthour = date.getHours();
let createText;
if (currenthour >= 4 && currenthour < 12) {
    createText = "Good morning:-)";
} else if (currenthour > 12 && currenthour <= 17) {
    createText = "Good Afternoon";
} else if (currenthour > 18 && currenthour <= 21) {
    createText = "Good evening";
} else if (currenthour > 21) {
    createText = "Good evening :)";

} else {
    createText = "Good evening";
}
let newcontent = document.createTextNode(createText);
newElement.appendChild(newcontent);
getTimeBody.appendChild(newElement);
newElement.setAttribute("class", "message");
newElement.style.cssText = " position:top;"

//the hover section of the playlists and the songs
let getPlay = document.getElementsById("play");
let getAfrikan = document.getElementById("afrikan");
getPlay.addEventListener('mouseenter', function() {
    getAfrikan.style.cssText = "color:green;";
});


// expanding the library section when clicked

function change_library_width() {
    let leftBody = document.querySelector(".left_body");

    leftBody.style.cssText = "width: 25%; visibility:hidden;";
}

// toggle picked for you section with all the suggestions