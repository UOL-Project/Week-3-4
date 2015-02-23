<head>
    <title>UOL - Make U'R shirt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UOL Project Week 3-4 Groupe 4, home page">
    <!--
Link to external documents, with CSS sheet selected in function of Cookie content
    -->
    <link rel="stylesheet" type="text/css" href="css/<?php echo (!$style) ? 'white.css' : rtrim($style, " "); ?>.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" title="animate">
</head>
<body>

    <?php
    include ('connection.php');

    $UID = filter_input(INPUT_POST, 'UID', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $bgdpref = filter_input(INPUT_POST, 'bgdpref', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    //preparation of the SQL Query
    $STHCHK = $DBPDO->prepare('SELECT password FROM upref WHERE UID = :UID');
//naming placeholder for statement handle
    $STHCHK->bindValue(':UID', $UID);

//execution of the SQL Query and check if ID exists
    $STHCHK->execute();
    $chckresult = $STHCHK->fetch(PDO::FETCH_OBJ);
    $password = ($chckresult->password);

    if (!$chckresult) {

        echo '<p>User ID does not exists, please try again or <a href="createusr.php">create a new user</a></p>';
    } else {
        if (!password_verify($pass, $password)) {

            echo '<p>Wrong password, <a href="pref.php">please try again</a></p>';
            die;
        } else {
            //retrieving data from the form
           $STH = $DBPDO->prepare("UPDATE upref SET name = :name, fname = :fname, bgdpref = :bgdpref, email = :email WHERE UID = :UID ");

//naming placeholder for statement handle
            $STH->bindParam(':UID', $UID);
            $STH->bindParam(':bgdpref', $bgdpref);
            $STH->bindParam(':name', $name);
            $STH->bindParam(':fname', $fname);
           $STH->bindParam(':email', $email);
//execute statement
            $STH->execute();
        }


        if (!$STH) {
            echo "\nPDO::errorInfo():\n";
            print_r($DBPDO->errorInfo());
        } else {
            echo '<script language="javascript">';
            echo 'alert("Database has been updated successfully")';
            echo '</script>';
            include "setcookie.php";
            header("Location:index.php");
        }
    }
    ?>

</body>