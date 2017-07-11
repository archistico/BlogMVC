<div class="box-header">
    <h1 class="box-title">AGGIUNGI UTENTE</h1>
</div>
<div class="box-body">
    <form method="post">
        <?= $form->input('username', 'Username'); ?>
        <?= $form->input('password', 'Password', ['type' => 'password']); ?>
        <button class="btn btn-primary">Salvare</button>
    </form>
</div>