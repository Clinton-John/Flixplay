let getTimeBody = document.querySelector(".welcome");

let newElement = document.createElement("h1");
let date = new Date();
let currenthour = date.getHours();
let createText;
if (currenthour >= 4 && currenthour <= 13) {
    createText = "Good morning:-)";
} else if (currenthour > 13 && currenthour <= 17) {
    createText = "Good Afternoon";
} else if (currenthour > 17 && currenthour <= 21) {
    createText = "Good evening";
} else if (currenthour > 21) {
    createText = "Good evening :)";

} else {
    createText = "Late night vibes";
}
let newcontent = document.createTextNode(createText);
newElement.appendChild(newcontent);
getTimeBody.appendChild(newElement);
newElement.setAttribute("class", "message");
newElement.style.cssText = " position:top;"