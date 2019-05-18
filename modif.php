<?php
session_start();
include 'db.php';
if (isset($_POST['nom']) && isset($_POST['image'])) {
    $nom = $_POST['nom'];
    $image = $_POST['image'];
    $req = $db->prepare('INSERT INTO spawn(nomSpawn,imgSpawn)
                  VALUES(?,?)');
    $req->execute(array($nom, $image));
} else if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $req = $db->prepare('DELETE FROM spawn WHERE idSpawn = ?');
    $req->execute(array($id));
} else if (isset($_POST['id'])) {
    $nom = $_POST['nomModifie'];
    $image = $_POST['imgModifie'];
    $id = $_POST['id'];
    $req = $db->prepare('UPDATE spawn SET nomSpawn = ?, imgSpawn= ? WHERE idSpawn = ?');
    $req->execute(array($nom, $image, $id));
}
?>

<table>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom du spawn</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$req = $db->prepare('SELECT * FROM spawn');
$req->execute();
$data = $req->fetchAll();
foreach ($data as $spawn) {?>
        <tr>
            <th scope="row"><?php echo $spawn['idSpawn']; ?></th>
            <td><?php echo $spawn['nomSpawn']; ?></td>
            <td><?php echo $spawn['imgSpawn']; ?></td>
            <td><a href="modif.php?delete=<?php echo $spawn['idSpawn'] ?>">SUPPRIMER</a>
                <a href="modifierspawn.php?id=<?php echo $spawn['idSpawn'] ?>">MODIFIER</a>
            </td>
        </tr>
        <?php }
?>
    </tbody>
</table>

<form method="POST">
    <input type="text" name="nom" />
    <input type="text" name="image" />
    <button type="submit">Ajouter</button>
</form>