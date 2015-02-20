/* 
 * UOL - Programming the Internet - Group Project
 * Week 3 - Assignment
 * Fabien Huraux
 * Joao Paulo Henriques Remedio
 * Kevin Gargo
 */

 /*
  * Function checkcookie and setcookie for background color under development
 */ 
  function checkCookie() {
  /*
      var cookie = getCookie("mkurshirt");
  if  (cookie === "style") {
      var col = 'style';
      setCSS(col);
  }
  if (cookie === "dstyle") {
      var col = 'dstyle';
      setCSS(col);
  }
  if (cookie === "undefined"){
var col = "style";
setCSS(col);
  return col; 
	  }
          */}
 
 function setCookiechg(col) {
    var d = new Date();
	d.setTime(d.getTime() + (24*60*60*1000));
    var expires = "expires="+d.toUTCString();
		document.cookie = "mkurshirt" + "=" + col + "; " + expires;
		} 

  function getCookie(mkurshirt) {
	var name = mkurshirt + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)===' ') c = c.substring(1);
        if (c.indexOf(name) === 0) return c.substring(name.length, c.length);
    }
    return "";
}

function setCSS(col) {
    
    /*
    getCookie("mkurshirt");
    if (str !== "style" & str !== "dstyle") {
            var col = "style";
        setCookiechg(col);}
    else {
	var actual = document.styleSheets;
	for (i=0; i < actual.length; i++) {
            if (actual[i].href === null){
            }
            else {
	var str = actual[i].href;
	var str = str.substring(str.lastIndexOf("."),str.lastIndexOf("/")+1);
        alert(str);
        if (str === col){
			actual[i].disabled = false;
			}
	else actual[i].disabled = true;
        setCookiechg(col);
	}}	
}*/
    alert("Function under development");
}
 
/*
	 * Function to Change the default CSS stylesheed , by enabling/disabling the sheets.
 */

 
 function changeCSS(col, cssLinkIndex) {
	var actual = document.styleSheets;
	for (i=0; i < actual.length; i++) {
	var str = actual[i].href;
	var str = str.substring(str.lastIndexOf("."),str.lastIndexOf("/"));
	if (str === col) {
			actual[i].disabled = true;
			}
	else actual[i].disabled = false;
	}
     if (col === "dstyle") {
		var col = "style";
   setCookiechg(col); }
   
        else {
		var col = "dstyle";
   setCookiechg(col);
		
		}
            }
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
        if (shirtcolor === txtcolor) { alert("Warning !! Text color and shirt color are the same");
    }
     else {
document.getElementById("imgcolour").src = "images/hoodies-" + shirtcolor + ".png";
if (shirtcolor === txtcolor) { alert("Warning !! Text color and shirt color are the same");
    }
        } /*switch*/

    } /*else*/}
    
 function txtcolor() {

    var txtcolor = document.getElementById("textcolor").value;
    var txtbox = document.getElementById("txtshirt");
    var shirtcolor = document.getElementById("color").value;
    if (shirtcolor === txtcolor) { alert("Warning !! Text color and shirt color are the same");
    }
        else {
        txtbox.setAttribute("style", "color: " + txtcolor +";" + "background-color: " + shirtcolor +";");
        }
 }
    
function fncategory(menuid){
    /* first clean up any previous styling */
    
    for (var i = 1; i < 13; i++) {
        document.getElementById("cat" + i).className = "logobarinactive";
    }

    /* apply the custom syle for a selected tab */
    var logourl = "category/" + menuid + ".hml";
    document.getElementById(menuid).className = "logobaractive";
    document.getElementById("catframe").src = logourl;
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
    var conf="";
    var time = Date();
    var uuid = "";
    validateForm(txt);
    
    
   for (i=0; i < pos.length; i++) {
            if (pos[i].checked===true) {     
            posval = pos[i].value;};}
      
    for (i=0; i < logo.length; i++) {
            if (logo[i].checked===true) {     
            logoval = logo[i].value;};}
    
    if (logoval === "yes") {
    var conf = confirm("Please confirm that You asked for "+ qtty + " "+ type + " sleeves shirt(s) of colour: " + col + " in size " + size + " with the following text: " + txt + " in position:" + posval + " and text color" + txtcol + " with a logo.");
    }
    else {
        
    var conf = confirm("Please confirm that You asked for "+ qtty + " "+ type + " sleeves shirt(s) of colour: " + col + " in size " + size + " with the following text: " + txt + " in position:" + posval + " and text color" + txtcol + " without a logo.");
    }}

function checkpwd (){
    var password = $("#pass1").val();
    var confirmPassword = $("#pass2").val();

    if (password !== confirmPassword){
        $("#pass1").css('background-color', 'red');
        $("#pass2").css('background-color', 'red');}
    else{
        $("#pass1").css('background-color', '#D7F2E0');
        $("#pass2").css('background-color', '#D7F2E0');}
}



