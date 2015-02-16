<!DOCTYPE html>
<!--
UOL - Programming the Internet - Group Project
Week 3 - Assignment
Fabien Huraux
Joao Paulo Henriques Remedio  
Kevin Gargo 
-->
<html>

<head>
    <title>UOL - Make U'R shirt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UOL Project Week 3-4 Groupe 4, home page">
    <!--
Link to external documents
-->
<link rel="stylesheet" type="text/css" href="css/style.css" title="wbgd">
<link rel="alternate stylesheet" type="text/css" href="css/dstyle.css" title="dbgd">
<link rel="stylesheet" type="text/css" href="css/animate.css" title="animate">

    <!--
JQuery is used for the slideshow and animated title part
-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>        
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/jquery.textillate.js"></script>
        <script type="text/javascript" src="js/jquery.lettering.js"></script>

</head>

<body id="bgdcolour" onload="checkCookie()">

    <!-- Definition of the dynamic menu using the HTML <nav> tag and CSS
-->
<div class="fixed">
<?php include ('menu.php');?>
</div>

    <br>
    <br>
    <h2 class="tlt">Style Yourself.     Let your imagination at play,     and build your own shirt.</h2>
    <!--
Slideshow
-->
<div id="slideshow">
        <div>
            <img class="resize" src="./images/shirts.jpg" alt="shirts image">
        </div>
        <div>
            <img class="resize" src="./images/shirt-iron.jpg" alt="example of shirt">
        </div>
        <div>
            <img class="resize" src="./images/shirts.jpg" alt="shirts image">
        </div>
    </div>
    <!-- Definition of the submenu to be displayed at the bottom of the page in case of issue with webbrowers for displaying previous menu
-->
	<div>
<?php include 'footer.php' ?>
	</div>
	
<script>
    $("#slideshow > div:gt(0)").hide();
        setInterval(function () {
            $('#slideshow > div:first')
                .fadeOut(1500)
                .next()
                .fadeIn(1500)
                .end()
                .appendTo('#slideshow');
        }, 5000);
</script>
</body>

</html>