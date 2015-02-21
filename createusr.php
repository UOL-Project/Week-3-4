<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>UOL - Make U'R shirt - Create Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UOL Project Week 3-4 Groupe 4, home page">
    <!--
Link to external documents
-->
<link rel="stylesheet" type="text/css" href="css/style.css" />

    <!--
JQuery is used for the slideshow and animated title part
-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/jquery.textillate.js"></script>
        <script type="text/javascript" src="js/jquery.lettering.js"></script>

</head>
    <body>
<div class="fixed">
<?php include ('menu.php');?>
</div>
<div class="main">
        <h2>Enter your informations</h2>
        
        <div class='leftdiv'>
        <form action="create.php" method="post">
        Select your User ID:
        <br><br>
        <input type='text' name='UID' placeholder="User ID - 4 to 8 char" pattern="[A-Za-z0-9]{4,8}" required="required">
        <br><br>
        Enter your password:
        <br><br>
        <input type='password' id="pass1" name='pass1' placeholder="password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
        <br><br>
        Confirm your password:
        <br><br>
        <input type='password' id="pass2" name='pass2' placeholder="password" required="required" onchange="checkpwd()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
        <br><br>
        FirstName:
        <br><br>
        <input type='text' name='fname' placeholder="First name" required="required">
        <br> <br>
        FirstName:
        <br><br>
        <input type='text' name='name' placeholder="Last name" required="required"> 
        <br><br>
        email:
        <br><br>
        <input type='email' name='email' placeholder="email@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required">
        <br><br>
        Select your theme color
        <br><br>
        <select name="bgdpref">
            <option selected="selected" value="style">White</option>
            <option value="bstyle">Blue</option>
            <option value="gstyle">Grey</option>
        </select>
        <br>
        <br>
        <input type="submit">
        <input type="reset">
        </form>
        </div>
<?php

?>
</div>
        <div>
            <?php
            include 'connection.php';
            
            
            
            ?>
        </div>
	<div>
<?php include 'footer.php' ?>
	</div>
    </body>
</html>
