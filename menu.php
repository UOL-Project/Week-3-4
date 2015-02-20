<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($values)){
 echo '<div tabindex="0" class="onclick-menu"><img src="./images/Menu-Icon-6.png" alt="menu item" class="menuimg">
    <nav class="onclick-menu-content">
        <ul>
            <li><a href="index.php" class="menu">Home</a></li>
            <li><a href="mshirts.php" class="menu">Men Shirts</a></li>
            <li><a href="wshirts.php" class="menu">Women Shirts</a></li>
            <li><a href="about.php" class="menu">About Us</a></li>
            <li><a href="contact.php" class="menu">Contact</a></li>
            <li><a href="pref.php" class="menu">Preferences</a></li>
        </ul>
    </nav>
</div>';}

else {
 echo '<div tabindex="0" class="onclick-menu"><img src="./images/Menu-Icon-6.png" alt="menu item" class="menuimg">
    <nav class="onclick-menu-content">
        <ul>
            <li><a href="index.php" class="menu">Home</a></li>
            <li><a href="mshirts.php" class="menu">Men Shirts</a></li>
            <li><a href="wshirts.php" class="menu">Women Shirts</a></li>
            <li><a href="about.php" class="menu">About Us</a></li>
            <li><a href="contact.php" class="menu">Contact</a></li>
            <li><a href="login.php" class="menu">Login</a></li>
        </ul>
    </nav>
</div>';}
   
?>