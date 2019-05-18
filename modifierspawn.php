<?php
include 'db.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $req = $db->prepare('SELECT * FROM spawn WHERE idSpawn = ?');
    $req->execute(array($id));
    $data = $req->fetch();
}
?>


<form method="POST" action="modif.php">
    <input type="text" name="nomModifie" value="<?php echo $data['nomSpawn'] ?>" />
    <input type="text" name="imgModifie" value="<?php echo $data['imgSpawn'] ?>" />
    <input type="hidden" name="id" value="<?php echo $data['idSpawn'] ?>" />
    <button type="submit">Ajouter</button>
</form>