<?php

$pdo = new PDO('mysql:dbname=blog-php;host=localhost', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$count = $pdo->exec('INSERT INTO articles SET title="My title", date="' . date('Y-m-d H:i:s') . '"');
var_dump($count);