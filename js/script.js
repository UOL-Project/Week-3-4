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
        document.getElementById("imgcolour").src = "images/t-shirt-white.png";
        break;
    case "long":
        document.getElementById("imgcolour").src = "images/hoodies-white.png";
        break;
    }
}


/* change the shirt colour by Joao & Fabien */
/* (Joao) added the variable shirtcolor and reduced the code to only two dynamic lines */
function shirtcolour() {

    var type = document.getElementById("shirtmodel").value;
    var shirtcolor = document.getElementById("color").value;
    
    if (type === "short") {
        document.getElementById("imgcolour").src = "images/t-shirt-" + shirtcolor + ".png";
        }
    else {
        document.getElementById("imgcolour").src = "images/hoodies-" + shirtcolor + ".png";
    } 
}

/*function addtocart by Joao*/

function addtocart() {
    var type = document.getElementById("shirtmodel").value;
    var col = document.getElementById("color").value;
    var size = document.getElementById("shirtsize").value;
    var qtty = document.getElementById("quantity").value;
    var txt = document.getElementById("txtshirt").value;
    var pos =  document.getElementsByName("txtpos");
    var txtcol = document.getElementById("textcolor").value;
    var logo = document.getElementsByName("logoyn");
    
   for (i=0; i < pos.length; i++) {
            if (pos[i].checked===true) {     
            posval = pos[i].value;};}
      
    for (i=0; i < logo.length; i++) {
            if (logo[i].checked===true) {     
            logoval = logo[i].value;};}
    
    
    alert("You asked for " + type + " sleeves and colour: " + col + " in size " + size + " " + qtty + " " + txt + " " + posval + " " + txtcol + " " + logoval);
    
};

function fncategory(menuid){
    /* first clean up any previous styling */
    
    for (var i = 1; i < 13; i++) {
        document.getElementById("cat" + i).className = "logobarinactive";
    }

    /* apply the custom syle for a selected tab */
    var logourl = "category/" + menuid + ".html";
    document.getElementById(menuid).className = "logobaractive";
    document.getElementById("catframe").src = logourl;
}
