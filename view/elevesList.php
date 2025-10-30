<h1 class="mb-4">Liste des Élèves</h1>

<?php
// ✅ Affichage du message de succès
if (isset($_SESSION['success'])): ?>
    <div style="background-color: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 15px;">
        ✅ <?= htmlspecialchars($_SESSION['success']) ?>
    </div>
    <?php unset($_SESSION['success']); // Supprimer après affichage ?>
<?php endif; ?>

<a href="?page=formEleve" class="btn btn-success mb-3">Ajouter un élève</a>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Niveau</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($eleves as $eleve): ?>
        <tr>
            <td><?= htmlspecialchars($eleve['nom']) ?></td>
            <td><?= htmlspecialchars($eleve['prenom']) ?></td>
            <td><?= htmlspecialchars($eleve['email']) ?></td>
            <td><?= htmlspecialchars($eleve['niveau']) ?></td>
            <td>
                <a href="?page=editEleve&id=<?= $eleve['id_eleves'] ?>" class="btn btn-sm btn-primary">E</a>
                <a href="?page=deleteEleve&id=<?= $eleve['id_eleves'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer cet élève ?')">D</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
