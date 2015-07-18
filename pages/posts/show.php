<?php

$app = App::getInstance();
$post = $app->getTable('Post')->find($_GET['id']);

if($post === false){
    $app->notFound();
}

$app->title = $post->title;

?>

<h1><?= $post->title; ?></h1>

<p>
    <em><?= $post->categories; ?></em>
</p>

<h2><?= $post->content; ?></h2>