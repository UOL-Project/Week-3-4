/* 
 * UOL - Programming the Internet - Group Project
 * Week 3 - Assignment
 * Fabien Huraux
 * Joao Paulo Henriques Remedio
 * Kevin Gargo
 */


/* 
Use of title effect provided by https://github.com/jschr/textillate Fabien
 */

$(function () {
    $('.tlt').textillate({ in : {
            effect: 'flipInX',
            shuffle: 'true'
        },
        out: {
                effect: 'bounceOutRight',
                shuffle: 'true'
            },
            loop: 'true'
    });
event.stopPropagation();
});

/* drag and drop functions */
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }
    
    /* Change the shirt type by Joao & Fabien */

function shirtype() {
    switch (document.getElementById("shirtmodel").value) {
    case "short":
        document.getElementById("imgcolour").src = "images/t-shirt.png";
        break;
    case "long":
        document.getElementById("imgcolour").src = "images/hoodies.png";
        break;
    }
}


/* change the shirt colour by Joao & Fabien */
function shirtcolour() {

    var type = document.getElementById("shirtmodel").value;
    if (type === "short") {
        switch (document.getElementById("color").value) {
        case "white":
            document.getElementById("imgcolour").src = "images/t-shirt.png";
            break;
        case "black":
            document.getElementById("imgcolour").src = "images/t-shirt_black.png";
            break;
        case "blue":
            document.getElementById("imgcolour").src = "images/t-shirt_blue.png";
            break;
        case "green":
            document.getElementById("imgcolour").src = "images/t-shirt_green.png";
            break;
        case "red":
            document.getElementById("imgcolour").src = "images/t-shirt_red.png";
            break;
        case "yellow":
            document.getElementById("imgcolour").src = "images/t-shirt_yellow.png";
            break;
        case "pink":
            document.getElementById("imgcolour").src = "images/t-shirt_pink.png";
            break;
        case "orange":
            document.getElementById("imgcolour").src = "images/t-shirt_orange.png";
            break;
        default:
            document.getElementById("imgcolour").src = "images/t-shirt.png";
        }
    } else {
        switch (document.getElementById("color").value) {
        case "white":
            document.getElementById("imgcolour").src = "images/hoodies.png";
            break;
        case "black":
            document.getElementById("imgcolour").src = "images/hoodies-black.png";
            break;
        case "blue":
            document.getElementById("imgcolour").src = "images/hoodies-blue.png";
            break;
        case "green":
            document.getElementById("imgcolour").src = "images/hoodies-green.png";
            break;
        case "red":
            document.getElementById("imgcolour").src = "images/hoodies-red.png";
            break;
        case "yellow":
            document.getElementById("imgcolour").src = "images/hoodies-yellow.png";
            break;
        case "pink":
            document.getElementById("imgcolour").src = "images/hoodies-pink.png";
            break;
        case "orange":
            document.getElementById("imgcolour").src = "images/hoodies-orange.png";
            break;
        default:
            document.getElementById("imgcolour").src = "images/hoodies.png";
        } /*switch*/

    } /*else*/


}

/*function addtocart by Joaor*/

function addtocart() {
    alert("Your request was sucessfully processed");
};