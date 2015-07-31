<?php
$table =  App::getInstance()->getTable('Categorie');
if(!empty($_POST)){
    $result = $table->create([
        'title' => $_POST['title']
    ]);

    if($result){
        header('Location: admin.php?p=categories.index');
    }
}

$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('title', 'Category\'s title'); ?>
    <button class="btn btn-primary">Save</button>
</form>