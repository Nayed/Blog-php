<?php

$post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);

?>

<h1><?= $post->title; ?></h1>

<h2><?= $post->content; ?></h2>