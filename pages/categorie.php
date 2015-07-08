<?php

use App\Table\Article;
use App\Table\Categorie;
use App\App;

$categorie = Categorie::find($_GET['id']);
if($categorie === false){
    App::notFound();
}
$articles = Article::lastByCategorie($_GET['id']);
$categories = Categorie::all();

?>

<h1><?= $categorie->title; ?></h1>

<div class="row">
    <div class="col-sm-8">
        <?php foreach ($articles as $post): ?>
            <h2>
                <a href="<?= $post->url ?>"><?= $post->title; ?></a>
            </h2>
            <p>
                <em><?= $post->categories; ?></em>
            </p>
            <p><?= $post->preview; ?></p>
        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">
        <ul>
            <?php foreach (\App\Table\Categorie::all() as $categories): ?>
                <li>
                    <a href="<?= $categories->url; ?>"><?= $categories->title; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>