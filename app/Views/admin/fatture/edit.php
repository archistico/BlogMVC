<div class="box-header">
    <h1 class="box-title">FATTURE</h1>
</div>
<div class="box-body">
    <form method="post">
        <?= $form->input('oggetto', 'Oggetto'); ?>
        <?= $form->select('cliente_id', 'Cliente', $clienti); ?>
        <button class="btn btn-primary">Salvare</button>
    </form>
</div>
