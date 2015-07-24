<?php
$postTable =  App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $postTable->update($_GET['id'], [
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ]);
}

$post = $postTable->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($post);
?>
<form method="post">
    <?= $form->input('title', 'Article\'s title'); ?>
    <?= $form->input('content', 'Content', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Save</button>
</form>