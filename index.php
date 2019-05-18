<?php session_start();

include 'db.php';

if (!isset($_SESSION['ancienspawn'])) {
    $_SESSION['ancienspawn'] = "";
}

if (isset($_GET['new'])) {

    $count = $db->prepare('SELECT COUNT(*) FROM spawn');
    $count->execute();
    $count = $count->fetch();

    $nb = rand(1, $count[0]);
    if ($nb != $_SESSION['ancienspawn']) {
        $req = $db->prepare('SELECT * FROM spawn where idSpawn = ?');
        $req->execute(array($nb));
        $spawn = $req->fetch();
        ?>
Spawn : <?php echo $spawn['nomSpawn'] ?>
<br />
<img src="img/<?php echo $spawn['imgSpawn'] ?>" alt="image du spawn" />
<?php } else {
        while ($nb == $_SESSION['ancienspawn']) {
            $nb = rand(1, $count[0]);

        }
        $req = $db->prepare('SELECT * FROM spawn where idSpawn = ?');
        $req->execute(array($nb));
        $spawn = $req->fetch();?>
Spawn : <?php echo $spawn['nomSpawn'] ?>
<br />
<img src="img/<?php echo $spawn['imgSpawn'] ?>" alt="image du spawn" />
<?php }
    $_SESSION['ancienspawn'] = $nb;
}
?>


<br />
<a href="index.php?new">Random spawn</a>