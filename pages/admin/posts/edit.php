<?php
$postTable =  App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->update($_GET['id'], [
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ]);
    if($result){
        ?>
            <div class="alert alert-success">Post was updated</div>
        <?php
    }
}

$post = $postTable->find($_GET['id']);
$categories = App::getInstance()->getTable('Categorie')->extract('id', 'title');
$form = new \Core\HTML\BootstrapForm($post);
?>
<form method="post">
    <?= $form->input('title', 'Article\'s title'); ?>
    <?= $form->input('content', 'Content', ['type' => 'textarea']); ?>
    <?= $form->select('categorie_id', 'Categorie', $categories); ?>
    <button class="btn btn-primary">Save</button>
</form>