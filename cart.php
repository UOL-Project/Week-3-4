<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$style= '';
include "getcookie.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UOL - Make U'R shirt - Shopping Cart</title>
<link rel="stylesheet" type="text/css" href="css/<?php echo (!$style)?'style':rtrim($style," ");?>.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css" title="animate">
    </head>
    
<body>
<div class="fixed">
<div tabindex="0" class="onclick-menu"><img src="./images/Menu-Icon-6.png" alt="menu item" class="menuimg">
    <nav class="onclick-menu-content">
        <ul>
            <li><a href="mshirts.html" class="menu">Men Shirts</a></li>
            <li><a href="wshirts.html" class="menu">Women Shirts</a></li>
            <li><a href="about.html" class="menu">About Us</a></li>
            <li><a href="contact.html" class="menu">Contact</a></li>
            <li><a href="#" class="menu" onclick="setCSS()">Change site color</a></li>
        </ul>
    </nav>
</div>
</div>
        
        <?php
include "connection.php";


// retrieve data from the form
$shirtmodel = filter_input(INPUT_POST, 'shirtmodel', FILTER_SANITIZE_STRING);
$color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
$shirtsize = filter_input(INPUT_POST, 'shirtsize', FILTER_SANITIZE_STRING);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
$TextShirt = filter_input(INPUT_POST, 'TextShirt', FILTER_SANITIZE_STRING);
$textcolor = filter_input(INPUT_POST, 'textcolor', FILTER_SANITIZE_STRING);
$txtpos = filter_input(INPUT_POST, 'txtpos', FILTER_SANITIZE_STRING);
$logoyn = filter_input(INPUT_POST, 'logoyn', FILTER_SANITIZE_STRING);
$time = date("d m o Y h:i:s A");
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$UID = ltrim($UID, " ");


//Display order info

echo '<h2 class="tlt">Shopping Cart</h2>';
echo '<br>';
echo '<br>';
echo '<p>You have ordered ' . $quantity .' ' . $shirtmodel .' sleeve model in '. $color .' colour, size: '. $shirtsize .'</p>';
echo '<p>With the following text: ' . $TextShirt .' in colour: '. $textcolor .' in the '. $txtpos .' </p>';
echo '<p>With logo: ' . $logoyn .'</p>';
echo '<p> your email is: '. $email .'</p>';


//Insert values into the db

           $STH = $DBPDO->prepare('INSERT INTO orders (shirts, colour, size, quantity, text, position, textcolour, logo, Dateorder, email, UID)
VALUES (:shirtmodel, :color, :shirtsize, :quantity, :TextShirt, :txtpos, :textcolor, :logoyn, :time, :email, :UID)');

//naming placeholder for statement handle
            $STH->bindParam(':shirtmodel', $shirtmodel);
            $STH->bindParam(':color', $color);
            $STH->bindParam(':shirtsize', $shirtsize);
            $STH->bindParam(':quantity', $quantity);
            $STH->bindParam(':TextShirt', $TextShirt);
            $STH->bindParam(':txtpos', $txtpos);
            $STH->bindParam(':textcolor', $textcolor);
            $STH->bindParam(':logoyn', $logoyn);
            $STH->bindParam(':time', $time);
            $STH->bindParam(':email', $email);
            $STH->bindParam(':UID', $UID);
//execute statement
            $STH->execute();



//Check if the insert was ok
      if (!$STH) {
            echo "\nPDO::errorInfo():\n";
            print_r($DBPDO->errorInfo());
        } else {
        

//retrieve last order passed
$STHID = $DBPDO->prepare('SELECT id FROM `laureate_IN103`.`orders` ORDER BY id DESC LIMIT 1;', array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$id = $DBPDO->lastInsertId();
$STHID->execute();

echo "Your command number is: " . $id . '<br>';

//Send confirmation email
 $to = $email;
   $subject = "Your Order at Make UR'Shirt";
   $message = '<h1>Dear Make URShirt User,</h1><br><p>You have ordered ' . $quantity .' ' . $shirtmodel .' sleeves in '. $color .' colour, size: '. $shirtsize . 'with the following text: ' . $TextShirt .
   ' in colour: '. $textcolor .' in the '. $txtpos .'With logo: ' . $logoyn .'<br>Your command number is: ' .$id .'<br>';
   $message .= "<h2>Thanks for your order.</h2>";
   $header = "From: fabien.huraux@my.ohecampus.com\r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail($to,$subject,$message,$header);
   if( $retval == true )
   {
      
   }
   else
   {
      echo "Message could not be sent...";
        }}

?>
    	<div>
	    <nav>
        <ul class="submenu">
            <li><a href="index.html">Home</a></li>
            <li><a href="mshirts.html">Men Shirts</a></li>
            <li><a href="wshirts.html">Women Shirts</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#" onclick="setCSS()">Change site color</a></li>
        </ul>
    </nav>	
	</div>
    </body>
</html>
