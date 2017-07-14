<div class="box-header">
    <h1 class="box-title">AGGIUNGI CLIENTE</h1>
</div>
<div class="box-body">
    <form method="post">
        <?= $form->input('denominazione', 'Denominazione'); ?>
        <?= $form->input('indirizzo', 'Indirizzo'); ?>
        <?= $form->input('telefono', 'Telefono'); ?>
        <?= $form->input('email', 'Email'); ?>
        <?= $form->input('piva', 'Partita iva'); ?>
        <?= $form->input('cf', 'Codice fiscale'); ?>
        <button class="btn btn-primary">Salvare</button>
    </form>
</div>