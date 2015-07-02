<?php foreach ($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>

    <h2>
            <a href="<? $post->getURL; ?>"><?= $post->title; ?></a>
    </h2>

    <p><?= $post->getPreview(); ?></p>



<?php endforeach; ?>