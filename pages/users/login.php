<?php 
$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->password('password', 'Password'); ?>
    <button class="btn btn-primary">Submit</button>
</form>