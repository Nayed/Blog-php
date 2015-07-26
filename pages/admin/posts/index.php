<?php 
$posts = App::getInstance()->getTable('Post')->all();
?>

<h1>Manage articles</h1>

<p>
    <a href="?p=posts.add" class="btn btn-success">Add</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->title; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=posts.edit&id=<?= $post->id; ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>