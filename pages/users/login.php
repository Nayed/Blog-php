<?php

if(!empty($_POST)){
    $auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'], $_POST['password'])){
        header('Location: admin.php');
    }
    else{
        ?>
            <div class="alert alert-danger">
                Wrong ID
            </div>
        <?php
    }
} 
$form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Password', ['type' => 'password']); ?>
    <button class="btn btn-primary">Submit</button>
</form>