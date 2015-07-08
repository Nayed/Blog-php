<?php

use App\App;
use App\Table\Article;
use App\Table\Categorie;

$post = Article::find($_GET['id']);
if($post === false){
    App::notFound();
}
$categorie = Categorie::find($post->categorie_id);

?>

<h1><?= $post->title; ?></h1>

<p>
    <em><?= $categorie->title; ?></em>
</p>

<h2><?= $post->content; ?></h2>