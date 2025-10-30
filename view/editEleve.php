<h1 class="mb-4">Modifier l'élève</h1>
<?php if (!empty($message)) : ?>
    <div class="alert alert-danger"><?= $message ?></div>
<?php endif; ?>

<form action="" method="post" class="w-50">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?= htmlspecialchars($eleve['nom']) ?>" required>
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="<?= htmlspecialchars($eleve['prenom']) ?>" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($eleve['email']) ?>" required>
    </div>

    <div class="mb-3">
        <label for="niveau" class="form-label">Niveau :</label>
        <select class="form-select" id="niveau" name="id_niveau" required>
            <?php foreach ($niveaux as $niveau): ?>
                <option value="<?= $niveau['id_niveau'] ?>" <?= $niveau['id_niveau'] == $eleve['id_niveau'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($niveau['niveau']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
    <a href="?page=eleves" class="btn btn-secondary">Annuler</a>
</form>
