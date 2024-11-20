<?php
ob_start();
require_once "../classes/crud_produit.php";
$crud = new crud_produit();
$lesProduits = $crud->findAll();
?>
<div class="container mt-5">
    <table class="table">
        <tr class="table-light">
            <th>Identifiant</th>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th colspan=3>Action</th>
        </tr>
        <?php
        foreach ($lesProduits as $val) {
            echo "<tr>
        <td>$val[0]</td>
        <td>$val[1]</td>
        <td>$val[2]</td>
        <td>$val[3]</td>
        <td><a href='detail.php?id=$val[0]' class='btn btn-info'>voir les détails</a></td>
        <td><a href='Delete.php?id=$val[0]' class='btn btn-danger'>Supprimer</a></td>
        <td><a href='edit.php?id=$val[0]' class='btn btn-dark'>Editer</a></td>
      </tr>";
        }
        ?>
    </table>
</div>
<?php
$contenu = ob_get_clean();
$titre = "Liste de Produit";
include "layout.php";
?>