<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($values)){
echo '<nav>
        <ul class="submenu">
            <li><a href="mshirts.php">Men Shirts</a></li>
            <li>-</li>
            <li><a href="wshirts.php">Women Shirts</a></li>
            <li>-</li>
            <li><a href="about.php">About Us</a></li>
            <li>-</li>
            <li><a href="contact.php">Contact</a></li>
            <li>-</li>
            <li><a href="pref.php">Preferences</a></li>
            <li>-</li>
            <li><a href="index.php" onclick="logout()">Log out</a></li>
        </ul>
    </nav>';}

else {
 echo '<nav>
        <ul class="submenu">
            <li><a href="mshirts.php">Men Shirts</a></li>
            <li>-</li>
            <li><a href="wshirts.php">Women Shirts</a></li>
            <li>-</li>
            <li><a href="about.php">About Us</a></li>
            <li>-</li>
            <li><a href="contact.php">Contact</a></li>
            <li>-</li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>';}
   
?>
