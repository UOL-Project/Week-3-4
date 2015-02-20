<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "getcookie.php";
?>
<html>
<head>
    <title>UOL - Make U'R shirt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UOL Project Week 3-4 Groupe 4, home page">
    <!--
Link to external documents, with CSS sheet selected in function of Cookie content
-->
<link rel="stylesheet" type="text/css" href="css/<?php echo (!$style)?'style.css':rtrim($style," ");?>.css" />
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
    <!-- Definition of the dynamic menu using the HTML <nav> tag and CSS
-->
<div class="fixed">
<?php include ('menu.php');?>
</div>
<div class="main">
    <br>
    <br>
    <h2>Change your preferences</h2>
    
<?php

include "connection.php";
//preparation of the SQL Query
$STH = $DBPDO->prepare('SELECT UID, bgdpref, name, fname, email FROM upref WHERE UID = :UID');
//naming placeholder for statement handle
$STH->bindParam(':UID', $UID);
//execution of the SQL Query
$STH->execute();

//retrieving the outcome of the SQL Query
$result = $STH->fetch(PDO::FETCH_OBJ);
     
echo '<table>';
echo '<tr>';
echo '<td>User ID: </td>';
echo '<td class="tdb"><input type=text name="UID"  class="box"value='.($result->UID).'></td>';
echo '</tr>';
echo '<tr>';
echo '<td>Last Name: </td>';
echo '<td class="tdb"><input type=text name = "name" class="box" value='.($result->name).'></td>';
echo '</tr>';
echo '<tr>';
echo '<td>First Name: </td>';
echo '<td class="tdb"><input type=text name = "fname" class="box" value='.($result->fname).'></td>';
echo '</tr>';
echo '<tr>';
echo '<td>Email: </td>';
echo '<td class="tdb"><input type=email name = "email" class="box" value='.($result->email).'></td>';
echo '</tr>';
echo '</table>';

  ?>
    <div>
<?php include 'footer.php' ?>
	</div>
    </body>

</html>