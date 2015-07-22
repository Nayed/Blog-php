<?php
$post = App::getInstance()->getTable('Post')->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($post);
?>
<form method="post">
    <?= $form->input('title', 'Article\'s title'); ?>
    <?= $form->input('content', 'Content', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Save</button>
</form>