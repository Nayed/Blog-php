<?php
$form = new \Core\HTML\BootstrapForm($_POST);
?>
<form method="post">
    <?= $form->input('title', 'Article\'s title'); ?>
    <?= $form->input('content', 'Content', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Save</button>
</form>