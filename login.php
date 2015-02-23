<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>UOL - Make U'R shirt - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UOL Project Week 3-4 Groupe 4, home page">
    <!--
Link to external documents
-->
<link rel="stylesheet" type="text/css" href="css/white.css">
<link rel="stylesheet" type="text/css" href="css/animate.css" title="animate">

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
        <h2>Please Login</h2>
        
        <div class='leftdiv'>
            <form method="post" action="loginchk.php">
        Enter your User ID:
        <br>
        <input type='text' name='UID' placeholder="User ID">
        <br>
        Enter your password:
        <br>
        <input type='password' name='pass' placeholder="password" required='required'>
        <br>
        <input type="submit">
        <input type="reset">
            </form>
            <br>
            <p><a href='createusr.php' alt='create user'>No User ID ?? Please create one. </a></p>
            <br>

        </div>

</div>
        <div>

        </div>
	<div>
<?php include 'footer.php' ?>
	</div>
    </body>
</html>
