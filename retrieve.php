<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>UOL - Make U'R shirt - Shopping Cart</title>
<link rel="stylesheet" type="text/css" href="css/style.css" title="wbgd">
<link rel="alternate stylesheet" type="text/css" href="css/dstyle.css" title="dbgd">
<link rel="stylesheet" type="text/css" href="css/animate.css" title="animate">
    </head>
<body id="bgdcolour" onload="setCSS()" class="whitebgd">
    
<div class="fixed">
<div tabindex="0" class="onclick-menu"><img src="images/Menu-Icon-6.png" alt="menu item" class="menuimg">
    <nav class="onclick-menu-content">
        <ul>
            <li><a href="index.html" class="menu">Home</a></li>
            <li><a href="mshirts.html" class="menu">Men Shirts</a></li>
            <li><a href="wshirts.html" class="menu">Women Shirts</a></li>
            <li><a href="about.html" class="menu">About Us</a></li>
            <li><a href="contact.html" class="menu">Contact</a></li>
            <li><a href="#" class="menu" onclick="setCookiechg()">Change site color</a></li>
        </ul>
    </nav>
</div>
</div>
    <div class="leftdiv">
         <h2 class="tlt">Your Order</h2>
        <?php
$servername = "laureatestudentserver.com";
$username = "laureate_IN103";
$password = "9ock4nyWV4XJ";
$dbname = "laureate_IN103";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// retrieve data from the form
$cnumber = filter_input(INPUT_POST, 'cnumber', FILTER_SANITIZE_NUMBER_INT);

//retrieve last order passed
$sql = 'SELECT * FROM `laureate_IN103`.`orders`';
$rowid = $conn->query($sql);
if ($rowid->num_rows > 0) {
    // output data of each row
    while($data = $rowid->fetch_assoc()) {
        $shirtmodel = $data["shirts"];
        $color = $data["colour"];
        $quantity = $data["quantity"];
        $shirtsize = $data["size"];
        $TextShirt = $data["text"];
        $textcolor = $data["textcolour"];
        $txtpos = $data["position"];
        $logoyn = $data["logo"];
        $time = $data["Dateorder"];
        $status =$data["status"];
        
}}
echo '<div class="leftdiv">';
echo '<p>You have ordered on ' .$time . ', '. $quantity .' ' . $shirtmodel .' sleeve model in '. $color .' colour, size: '. $shirtsize .'</p>';
echo '<p>With the following text: ' . $TextShirt .' in colour: '. $textcolor .' in the '. $txtpos .' </p>';
echo '<p>With logo: ' . $logoyn .'</p>';
echo '<p> The status of your command is: '. $status . '</p>';
echo '</div>';

$conn->close();
?>
    </div>
       <div>
	    <nav>
        <ul class="submenu">
            <li><a href="index.html">Home</a></li>
            <li>-</li>
            <li><a href="mshirts.html">Men Shirts</a></li>
            <li>-</li>
            <li><a href="wshirts.html">Women Shirts</a></li>
            <li>-</li>
            <li><a href="about.html">About Us</a></li>
            <li>-</li>
            <li><a href="#" onclick="setCSS()">Change site color</a></li>
        </ul>
    </nav>	
	</div>
    </body>
</html>
