<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cookie = filter_input(INPUT_COOKIE, 'MKUSHIRT', FILTER_SANITIZE_STRING);

if(!isset($cookie)) {
} else {
    $values= explode(',', $cookie);
    $style= $values[0];
    $UID = $values[2];
    return;
}