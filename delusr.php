<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    include "connection.php";
    include "getcookie.php";
    
             
            $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
            $ID = filter_input(INPUT_POST, 'ID', FILTER_SANITIZE_STRING);
            $UID = ltrim($UID, " ");
            if ($UID !== $ID) {                     
                echo '<p>Please specify your OWN account ID <a href="del.php">please try again</a></p>';
 die;
            }
            else {
//preparation of the SQL Query
$STHCHK = $DBPDO->prepare('SELECT password FROM upref WHERE UID = :UID');
//naming placeholder for statement handle
$STHCHK->bindParam(':UID', $UID);

//execution of the SQL Query and check if ID exists
$STHCHK->execute();
$chckresult = $STHCHK->fetch(PDO::FETCH_OBJ);
$password = ($chckresult->password);
if (! $chckresult) {

echo '<p>User ID does not exists, please try again or <a href="del.php">Go back</a></p>';}
    
    else {
        if (!password_verify($pass,$password)) {

            
 echo '<p>Wrong password, <a href="login.php">please try again</a></p>';
 die;
        }
        else {
               $STH = $DBPDO->prepare("DELETE FROM upref WHERE UID = :UID ");

//naming placeholder for statement handle
            $STH->bindParam(':UID', $UID);
//execute statement
            $STH->execute();}
}
 if (!$STH) {
            echo "\nPDO::errorInfo():\n";
            print_r($DBPDO->errorInfo());
        } else {
            echo '<script language="javascript">';
            echo 'alert("Your account has been successfully deleted")';
            echo '</script>';
            setcookie("MKUSHIRT", "", time()-3600);
            header("Location:index.php");
            }}
        