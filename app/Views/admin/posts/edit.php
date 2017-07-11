<div class="box-header">
    <h1 class="box-title">POST</h1>
</div>
<div class="box-body">
    <form method="post" onsubmit="return validateForm()">
        <?= $form->input('titre', 'Titolo dell\'articolo'); ?>
        <?= $form->summernote('contenu', 'Contenuto'); ?>
        <?= $form->select('category_id', 'Categoria', $categories); ?>
        <button class="btn btn-primary">Salvare</button>
    </form>
</div>

<script>
    function validateForm() {

        testo = $('#summernote').summernote('code');
        document.getElementById('contenu').value = testo;
        console.log(document.getElementById('contenu').value);
        return true;

    }
</script>
