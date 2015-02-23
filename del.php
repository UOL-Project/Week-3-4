<?php     include "getcookie.php"; ?>
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
    
    <h2>Are you sure you want to delete your account ?</h2>
    <form action="delusr.php" method="post"> 
    <p>If yes, please enter your User ID:</p>
    <input type='text' name='ID' placeholder="User ID - 4 to 8 char" pattern="[A-Za-z0-9]{4,8}" required="required">
    <p>and your password</p>
    <input type="password" name="pass" placeholder="password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
    <input type="submit">
    </form>
    <br><br>
    <a href="pref.php">Go Back to preferences</a>
</body>