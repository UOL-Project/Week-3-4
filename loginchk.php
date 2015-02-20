<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



            include 'connection.php';
            

            $UID = filter_input(INPUT_POST, 'UID', FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
            

//preparation of the SQL Query
$STHCHK = $DBPDO->prepare('SELECT UID, password, fname, bgdpref FROM upref WHERE UID = :UID');
//naming placeholder for statement handle
$STHCHK->bindParam(':UID', $UID);

//execution of the SQL Query and check if ID exists
$STHCHK->execute();
$chckresult = $STHCHK->fetch(PDO::FETCH_OBJ);
$password = ($chckresult->password);
if (! $chckresult) {

echo '<p>User ID does not exists, please try again or <a href="createusr.php">create a new user</a></p>';}
    
    else {
        if (!password_verify($pass,$password)) {

            
 echo '<p>Wrong password, <a href="login.php">please try again</a></p>';
 die;
            
            
            
            
        }
        else {
      $fname = ($chckresult->fname);
                          echo "<p>Succsessfull Logon, Welcome back ".$fname."</p>";
        $bgdpref = ($chckresult->bgdpref);
            include "setcookie.php";
            header("Location:index.php");
        
    }}    
            ?>