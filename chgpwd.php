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
<?php
echo '<body>
    <form>
<p>Enter Current password:</p>
<input type="password" id="passold" name="passold" placeholder="password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
<p>Enter your new password:</p>
<input type="password" id="pass1" name="pass1" placeholder="password" required="required" onchange="checkpwd()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
<p>Confirm your new password:</p>
<input type="password" id="pass2" name="pass2" placeholder="password" required="required" onchange="checkpwd()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
<br><br>
<input type="submit" onclick="chk()">
<input type="reset">
    </form>';
        
$UID = filter_input(INPUT_POST, 'UID', FILTER_SANITIZE_STRING);
$passold = filter_input(INPUT_POST, 'passold', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'pass1', FILTER_SANITIZE_STRING);
$pass2 = filter_input(INPUT_POST, 'pass2', FILTER_SANITIZE_STRING);

function chk(){
    
include "connection.php";
//preparation of the SQL Query
    $STHCHK = $DBPDO->prepare('SELECT password FROM upref WHERE UID = :UID');
//naming placeholder for statement handle
    $STHCHK->bindValue(':UID', $UID);

//execution of the SQL Query and check if ID exists
    $STHCHK->execute();
    $chckresult = $STHCHK->fetch(PDO::FETCH_OBJ);
    $password = ($chckresult->password);

    if (!$chckresult) {

        echo '<p>Error, please contact your administrator</p>';
    } else {
        if (!password_verify($passold, $password)) {

            echo '<p>Wrong password, <a href="pref.php">please try again</a></p>';
        die;}
        
        else { rst();
        }
}}
        
function rst(){
    include "connection.php";
             //retrieving data from the form
           $STH = $DBPDO->prepare("UPDATE upref SET password = :password WHERE UID = :UID ");

//naming placeholder for statement handle
            $STH->bindParam(':UID', $UID);
            $STH->bindParam(':password', $password);
//execute statement
            $STH->execute();
        


        if (!$STH) {
            echo "\nPDO::errorInfo():\n";
            print_r($DBPDO->errorInfo());
        } else {
            echo '<p>Password has been changed successfully</p>';
          //  header("Location:index.php");
}}


?>