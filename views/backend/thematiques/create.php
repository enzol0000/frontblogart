<?php
include '../../../header.php';
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouvelle Thématique</h1>
        </div>
        <div class="col-md-12">
           <!-- Affichage des messages d'erreur -->
           <?php if (isset($_GET['error'])): ?>
                <?php if ($_GET['error'] == 'exists'): ?>
                    <div class="alert alert-danger" role="alert">
                        Cette thématique existe déjà.
                    </div>
                <?php elseif ($_GET['error'] == 'empty'): ?>
                    <div class="alert alert-warning" role="alert">
                        Le champ thématique est vide. Veuillez saisir une thématique avant de confirmer.
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/thematiques/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Nom de la thématique</label>
                    <input id="libThem" name="libThem" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-success">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>