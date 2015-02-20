<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connection.php';

$UID = filter_input(INPUT_POST, 'UID', FILTER_SANITIZE_STRING);
$pass1 = filter_input(INPUT_POST, 'pass1', FILTER_SANITIZE_STRING);
$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$bgdpref = filter_input(INPUT_POST, 'bgdpref', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash($pass1,PASSWORD_DEFAULT);
//check if the user already exists.

//preparation of the SQL Query
$STHCHK = $DBPDO->prepare('SELECT UID FROM upref WHERE UID = :UID');
//naming placeholder for statement handle
$STHCHK->bindParam(':UID', $UID);
//execution of the SQL Query and check if ID exists
$STHCHK->execute();
$chckresult = $STHCHK->fetch(PDO::FETCH_OBJ);
if (! $chckresult) {

    
// Insert values into the DB
$STH = $DBPDO->prepare("INSERT INTO upref (UID, password, bgdpref, name, fname, email) VALUES (:UID, :password, :bgdpref, :name, :fname, :email)");
//naming placeholder for statement handle
$STH->bindParam(':UID', $UID);
$STH->bindParam(':password', $password);
$STH->bindParam(':bgdpref', $bgdpref);
$STH->bindParam(':name', $name);
$STH->bindParam(':fname', $fname);
$STH->bindParam(':email', $email);

//execute statement
$STH->execute();

if (! $STH) {
    echo '<p>Error during the creation of your User, please contact the site administrators</p>';
    echo '<br>';
    echo '<a href=contact.php>Contact</a>';
}
else {
    echo '<p>You user has been successfully created</p>';
    echo '<br>';
    echo '<a href=index.php>Back Home</a>'; 
    
}

}

else {
echo '<p>User ID already exists, please select a new one</p>';
    
}

?>