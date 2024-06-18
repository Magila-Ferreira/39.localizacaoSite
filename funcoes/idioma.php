<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

$acceptLang = ['es', 'en', 'pt']; 
$lang = in_array($lang, $acceptLang) ? $lang : 'en';
            
require_once "localizacao/{$lang}.php"; 