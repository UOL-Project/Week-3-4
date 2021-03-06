<!DOCTYPE php>
<!--
UOL - Programming the Internet - Group Project
Week 3 - Assignment
Fabien Huraux
Joao Paulo Henriques Remedio  
Kevin Gargo 
-->
<?php
$style= '';
include "getcookie.php";
?>
<php>

<head>
    <title>UOL - Make U'R shirt - Make-it</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UOL Project Week 3-4 Groupe 4, shirt page">
    <script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/<?php echo (!$style)?'style':rtrim($style," ");?>.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" title="animate">

</head>

<body>

    <!-- Definition of the dynamic menu using the HTML <nav> tag and CSS
-->
<div class="fixed">
<?php include 'menu.php'; ?>
</div>
    <div>
        <h2 class="tlt">Make your own shirt</h2>
        <br>
        <p>select the type of shirt you are looking for (long or short sleeves), your logo and/or your text and place your order.</p>
    </div>
    <section class="leftdiv">
        <img src="images/t-shirt-white.png" id="imgcolour" alt="shirt selection">
    </section>

    <div class="rightdivform">
        <form action="cart.php" method="post">
            <p>Select your shirt type</p>
            <select id="shirtmodel" name="shirtmodel" onchange="shirtype()">
                <option value="short">Short Sleeve</option>
                <option value="long">Long Sleeve</option>
            </select>
            <p>Select your shirt color:</p>
            <select id="color" name="color" onchange="shirtcolour()">
                <option value="" selected="selected">Please choose one</option>
                <option value="white">White</option>
                <option value="black">Black</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="red">Red</option>
                <option value="yellow">Yellow</option>
                <option value="pink">Pink</option>
                <option value="orange">Orange</option>
            </select>
            <p>Select the size:</p>
            <select id="shirtsize" name="shirtsize">
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
                <option value="xxl">XXL</option>
            </select>
            <p>Quantity:</p>
            <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
            <p>Type your text (max 50 characters)</p>
            <textarea id='txtshirt' name="TextShirt" maxlength="50"></textarea>
            <p>Text position ?</p>
            <input type="checkbox" name="txtpos" value="front">Front
            <br>
            <input type="checkbox" name="txtpos" value="back" checked="checked">Back
            <br>
            <p>Select your text color:</p>
            <select id="textcolor" name="textcolor" onchange="txtcolor()">
                <option value="" selected="selected">Please choose one</option>
                <option value="black">Black</option>
                <option value="white">White</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="red">Red</option>
                <option value="yellow">Yellow</option>
                <option value="pink">Pink</option>
                <option value="orange">Orange</option>
            </select>
            <p>Apply a logo ?</p>
            <input type="radio" name="logoyn" value="yes">Yes
            <br>
            <input type="radio" name="logoyn" value="no" checked="checked">No
            <br>
            <br>
            <div id="logosquare" ondrop="drop(event)" ondragover="allowDrop(event)">Drop here the logo</div>
            <br>			

                        <p>Please enter your email.</p>
				<input type="email" name="email" required="required">

            <p>
                <input type="submit" name="add2cart" value="Add to Cart" onclick="addtocart()">
                <input type="reset" value="Clear">
            </p>
			<br>

        </form>
    </div>
<div>
    <div id="logonavbar">
        <div id="logopage">
            <ul>
                <li><a href="mshirts.php#logonavbar" id="cat1" onclick="fncategory('cat1')">Abstract</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat2" onclick="fncategory('cat2')">Animals</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat3" onclick="fncategory('cat3')">Emoticons</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat4" onclick="fncategory('cat4')">Fashion</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat5" onclick="fncategory('cat5')">Misc</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat6" onclick="fncategory('cat6')">Romantic</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat7" onclick="fncategory('cat7')">Sexy</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat8" onclick="fncategory('cat8')">Signs</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat9" onclick="fncategory('cat9')">Totem</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat10" onclick="fncategory('cat10')">Vacation</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat11" onclick="fncategory('cat11')">Vintage</a></li>
                <li><a href="mshirts.php#logonavbar" id="cat12" onclick="fncategory('cat12')">Upload</a></li>
            </ul>
            
        </div>
        <iframe src="category/cat4.html" id="catframe" width="610" height="580"></iframe>
    </div>
</div>
<div>
            <br>
<?php include 'footer.php'; ?>
</div>
</body>

</php>