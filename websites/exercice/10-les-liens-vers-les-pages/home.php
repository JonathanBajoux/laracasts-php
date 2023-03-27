<?php
$heading = "Home";

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}
echo $_SERVER['REQUEST_URI'];
require "view/home.view.php";
