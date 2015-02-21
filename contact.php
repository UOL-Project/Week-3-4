<!DOCTYPE html>
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
<html>

<head>
    <title>UOL - Make U'R shirt - Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UOL Project Week 3-4 Groupe 4, contact page">
<link rel="stylesheet" type="text/css" href="css/<?php echo (!$style)?'style':rtrim($style," ");?>.css" />
    <link rel="stylesheet" href="js/animate.css" type="text/css" />

    <script type="text/javascript" src="js/script.js"></script>
</head>

<body id="bgdcolour" onload="checkCookie()" class="whitebgd">
     <div class="fixed">
<?php include 'menu.php'; ?>
     </div>
    <div class="leftdiv">
        <h2>Want's to leave us a message ?</h2>
        <p>feel in the following form, and don't forget to leave us your email:</p>
        <form>
            <ul>
                <li>Having an order ID ?</li>
            </ul>
            <input type='text' class='formbox' placeholder="Order ID" name="cnumber">
            <ul>
                <li>Leave us your message:</li>
            </ul>
            <textarea class='formtxt' id='txtmsg' placeholder="I love your site" name="TextMsg"></textarea>
            <ul>
                <li>an email for us to reply ?</li>
            </ul>
            <input type='email' class='formbox' id='email' placeholder="toto@toto.com" name="email" required="required">
            <br><ul>
                <li>Having an order ID ?</li>
            </ul>
            <br>
            <input type="submit">
            <input type="reset">
        </form>
        <h2>Want's to know the status of your command ?</h2>
        <form action="retrieve.php" method="get">
            <ul>
                <li>Enter your order id</li>
            </ul>
            <input type='text' class='formbox' id='cnumber' placeholder="Order ID" name="cnumber">
            <br>
            <br>
            <input type="submit">
            <input type="reset">
        </form>
    </div>
    <div class="rightdiv">
        <img src='images/Internet_is_Full.jpg' alt='Internet is full'>
    </div>
    	<div>
<?php include 'footer.php'; ?>	
	</div>
</body>

</html>