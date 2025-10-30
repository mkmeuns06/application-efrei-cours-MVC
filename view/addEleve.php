<h1>Ajouter des Élèves</h1>

<?php if (isset($error)): ?>
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 15px;">
        ⚠️ <?= htmlspecialchars($error) ?>
    </div>
<?php endif; ?>

<form action="?page=addEleve" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" value="<?= isset($nom) ? htmlspecialchars($nom) : '' ?>" required><br><br>
    
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" value="<?= isset($prenom) ? htmlspecialchars($prenom) : '' ?>" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= isset($email) ? htmlspecialchars($email) : '' ?>" required><br><br>
    
    <label for="mdp">Mot de passe:</label>
    <input type="password" id="mdp" name="mdp" required><br><br>
    
    <label for="niveau">Niveau:</label>
    <select id="niveau" name="id_niveau" required>
        <?php foreach ($niveaux as $niveau): ?>
            <option value="<?= $niveau['id_niveau'] ?>" 
                    <?= (isset($id_niveau) && $id_niveau == $niveau['id_niveau']) ? 'selected' : '' ?>>
                <?= $niveau['niveau'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>
    
    <button type="submit">Ajouter</button>
</form>