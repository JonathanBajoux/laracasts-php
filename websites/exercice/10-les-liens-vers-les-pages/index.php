<?php

//la fonction php est relier au fichier index.php
require "function.php";
//require "router.php";
require "Database.php";

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$posts = $db->query($query, ['id' => $id])->fetch();

dd ($posts);
