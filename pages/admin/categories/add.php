<?php
$postTable =  App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->create([
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'categorie_id' => $_POST['categorie_id']
    ]);

    if($result){
        header('Location: admin.php?p=posts.edit&id=' . App::getInstance()->getDb()->lastInsertId());
    }
}

$categories = App::getInstance()->getTable('Categorie')->extract('id', 'title');
$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('title', 'Article\'s title'); ?>
    <?= $form->input('content', 'Content', ['type' => 'textarea']); ?>
    <?= $form->select('categorie_id', 'Categorie', $categories); ?>
    <button class="btn btn-primary">Save</button>
</form>