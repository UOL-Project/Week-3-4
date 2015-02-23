<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
       
include "getcookie.php";


$passold = filter_input(INPUT_POST, 'passold', FILTER_SANITIZE_STRING);
$pass1 = filter_input(INPUT_POST, 'pass1', FILTER_SANITIZE_STRING);
    
include "connection.php";

//preparation of the SQL Query
    $STHCHK = $DBPDO->prepare('SELECT password FROM upref WHERE UID = :UID');
//naming placeholder for statement handle
    $ID = ltrim($UID, " ");
    $STHCHK->bindValue(':UID', $ID);

//execution of the SQL Query and check if ID exists
    $STHCHK->execute();
    $chckresult = $STHCHK->fetch(PDO::FETCH_OBJ);
    $passwd = ($chckresult->password);

    if (!$chckresult) {

        echo '<p>Error, please contact your administrator</p>';
    } else {
            if (!password_verify($passold, $passwd)) {
            echo '<p>Wrong password, <a href="chgpwd.php">please try again</a></p>';
            die;}
            
            else { 
    $password = password_hash($pass1,PASSWORD_DEFAULT);
             //retrieving data from the form
           $STH = $DBPDO->prepare("UPDATE upref SET password = :password WHERE UID = :UID ");

//naming placeholder for statement handle
            $STH->bindParam(':UID', $ID);
            $STH->bindParam(':password', $password);
//execute statement
            $STH->execute();}


        if (!$STH) {
            echo "\nPDO::errorInfo():\n";
            print_r($DBPDO->errorInfo());
        } else {
            echo '<script language="javascript">';
            echo 'alert("Password has been changed successfully")';
            echo '</script>';
            header("Location:index.php");
    }}
?>