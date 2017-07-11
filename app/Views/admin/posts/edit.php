<div class="box-header">
    <h1 class="box-title">POST</h1>
</div>
<div class="box-body">
    <form method="post">
        <?= $form->input('titre', 'Titolo dell\'articolo'); ?>
        <?= $form->input('contenu', 'Contenuto', ['type' => 'textarea']); ?>
        <?= $form->select('category_id', 'Categoria', $categories); ?>
        <button class="btn btn-primary">Salvare</button>
    </form>
</div>