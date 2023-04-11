<?php

//la fonction php est relier au fichier index.php
require "function.php";
//require "router.php";
require "Database.php";

$db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll();

dd ($posts);
