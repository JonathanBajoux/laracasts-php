<?php
$heading = "Home";

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}
require "view/home.view.php";
?>