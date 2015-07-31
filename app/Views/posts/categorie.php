<?php

$app = App::getInstance();

$categorie = $app->getTable('Categorie')->find($_GET['id']);
if($categorie === false){
    $app->notFound();
}
$articles = $app->getTable('Post')->lastByCategorie($_GET['id']);
$categories = $app->getTable('Categorie')->all();

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
            <?php foreach ($categories as $categorie): ?>
                <li>
                    <a href="<?= $categorie->url; ?>"><?= $categorie->title; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>