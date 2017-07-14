<div class="box-header">
    <h1 class="box-title">LISTA FATTURE</h1>
</div>
<div class="box-body">

    <p>
        <a href="?p=admin.fatture.add" class="btn btn-success">Ajouter</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>Oggetto</td>
            <td>Cliente</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($items as $fattura): ?>
            <tr>
                <td><?= $fattura->id; ?></td>
                <td><?= $fattura->oggetto; ?></td>
                <td><?= $fattura->denominazione; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.fatture.edit&id=<?= $fattura->id; ?>">Editer</a>
                    <form action="?p=admin.fatture.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $fattura->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>