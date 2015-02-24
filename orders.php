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
        <title>UOL - Make U'R shirt - View last orders</title>
<link rel="stylesheet" type="text/css" href="css/<?php echo (!$style)?'white':rtrim($style," ");?>.css" />
<link rel="stylesheet" type="text/css" href="css/animate.css" title="animate">
    </head>
<body>
    
<div class="fixed">
<?php include "menu.php" ?>
</div>
</div>
    <div class="leftdiv">
         <h2 class="tlt">Your Orders</h2>
        <?php
include 'connection.php';

$UID = ltrim($UID, " ");

//retrieve last order passed
$STH = $DBPDO->prepare('SELECT id, shirts, colour, size, quantity, text, position, textcolour, logo, Dateorder, status  FROM `laureate_IN103`.`orders` WHERE UID = :UID');
$STH->bindParam(':UID', $UID);
//execution of the SQL Query
$STH->execute();
$rowid = $STH->fetchAll();

  // Create the beginning of HTML table, and the first row with colums title
  $html_table = '<table border="1" cellspacing="0" cellpadding="2" style="margin-left:10em;"><tr><th>ID</th><th>Shirt Type</th><th>Colour</th><th>Size</th><th>Quantity</th><th>Text</th><th>Position</th><th>Text Colour</th><th>Logo</th><th>Date</th><th>status</th></tr>';
    // Parse the result set, and adds each row and colums in HTML table
    foreach($rowid as $row) {
  $html_table .= '<tr><td>' .$row['id']. '</td><td>' .$row['shirts']. '</td><td>' .$row['colour']. '</td><td>' .$row['size']. '</td><td>' .$row['quantity']. '</td><td>' .$row['text']. '</td><td>' .$row['position']. '</td><td>' .$row['textcolour']. '</td><td>' .$row['logo']. '</td><td>' .$row['Dateorder']. '</td><td>' .$row['status']. '</td></tr>';

    }
              // ends the HTML table
      $html_table .= '</table>'; 
  echo $html_table;        // display the HTML table
  echo '<br>';
      ?>
    </div>
       <div>
	  <?php include "footer.php" ?>
	</div>
    </body>
</html>
