<?php

$table =  App::getInstance()->getTable('Categorie');
if(!empty($_POST)){
    $result = $table->update($_GET['id'], [
        'title' => $_POST['title']
    ]);
    if($result){
        ?>
            <div class="alert alert-success">Category was updated</div>
        <?php
    }
}

$categorie = $table->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($categorie);
?>


<form method="post">
    <?= $form->input('title', 'Category\'s title'); ?>
    <button class="btn btn-primary">Save</button>
</form>