<?php

require "function.php";

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/laracasts-php/websites/exercice/10-les-liens-vers-les-pages/home.php') {
    require 'controllers/home.php';
}