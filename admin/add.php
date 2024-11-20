<?php
ob_start();
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form-control">
    <label for=""></label>Libellé<input type="text" name="lib" id="" class="form-control"><br />
    <label for=""></label>Prix<input type="text" name="pu" id="" class="form-control"><br />
    <label for=""></label>Quantité<input type="text" name="qu" id="" class="form-control"><br />
    <label for=""></label>Description<input type="text" name="des" id="" class="form-control"><br />
    <label for=""></label>Image<input type="text" name="" id="img" class="form-control"><br />
    <label for="">En promotion</label><input type="text" name="pro" id="" value="0" class="form-control"><br />
    <input type="submit" value="Ajoutrer" name="ok" class="btn-success btn-xl">
</form>
<?php
if ($_POST['ok']) {
    require_once "../classes/crud_produit.php";
    $crud = new crud_produit();
    $res = $crud->add($produit);
    if ($res) {
        header("location:all.php");
        exit;
    } else {
        echo "pb d'insertion";
    }
}
?>
<?php
$titre = "Ajout d'un prdouit";
$contenu = ob_get_clean();
include "layout.php";
?>