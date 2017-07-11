<div class="box-header">
    <h1 class="box-title">Utenti amministratori</h1>
</div>
<div class="box-body">

    <p>
        <a href="?p=admin.users.add" class="btn btn-success">Ajouter</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>SHA1 Password</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($items as $user): ?>
            <tr>
                <td><?= $user->id; ?></td>
                <td><?= $user->username; ?></td>
                <td><?= $user->password; ?></td>
                <td>
                    <a class="btn btn-primary" href="?p=admin.users.edit&id=<?= $user->id; ?>">Editer</a>
                    <form action="?p=admin.users.delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $user->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>