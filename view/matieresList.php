<h1>Liste des Matières</h1>
<a href="?page=addMatiere">Ajouter une Matière</a>
<table border="1"> 
    <tr>
        <th>ID</th>
        <th>Matière</th>
    </tr>
    <?php foreach ($matieres as $matiere) { ?>
    <tr>
        <td><?php echo $matiere['id_matiere']; ?></td>
        <td><?php echo $matiere['matiere']; ?></td>
    </tr>
    <?php } ?>
</table>