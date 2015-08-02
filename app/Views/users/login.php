<?php if($errors): ?>
    <div class="alert alert-danger">
        Wrong ID
    </div>
<?php endif; ?>

<form method="post">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Password', ['type' => 'password']); ?>
    <button class="btn btn-primary">Submit</button>
</form>