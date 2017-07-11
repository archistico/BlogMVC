<div class="box-header">
    <h1 class="box-title">LOGIN UTENTE</h1>
</div>
<div class="box-body">

    <?php if($errors): ?>
        <div class="alert alert-danger">
            Identifiants incorrects
        </div>
    <?php endif; ?>

    <form method="post">
        <?= $form->input('username', 'Username'); ?>
        <?= $form->input('password', 'Password', ['type' => 'password']); ?>
        <button class="btn btn-primary">Envoyer</button>
    </form>

</div>