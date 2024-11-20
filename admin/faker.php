<?php
require_once "../connexion.php";

$connexion = new connexion();
$pdo = $connexion->getConnexion();
$pdo->exec("delete from produit");
$sql = "";
for ($i = 1; $i < 110; $i++) {
    $lib = "Lasmer 7050 N* $i";
    $pu = rand(100, 1000);
    $qte = rand(1, 10054);
    $img = "https://fastly.picsum.photos/id/955/200/200.jpg?hmac=_m3ln1pswsR9s9hWuWrwY_O6N4wizKmukfhvyaTrkjE";
    $des = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum perferendis mollitia illo porro sint voluptates explicabo iure, voluptatibus optio nemo repudiandae, vel eaque! Ratione natus veniam dolores id assumenda tempora eveniet provident accusamus alias. Vitae sit animi architecto totam quidem asperiores inventore aliquid, dignissimos repudiandae voluptatibus commodi beatae voluptate voluptates pariatur minus. Suscipit temporibus repellat, cumque rerum veniam eligendi nihil tempore. Repudiandae veniam maxime modi laudantium aliquid. Possimus doloribus ratione commodi sed adipisci a ipsam magnam consequuntur quisquam facere consequatur, sunt tenetur assumenda? Atque fuga sint maiores esse voluptas. Quod tempore corporis architecto quam. Deleniti, nisi cumque! Ea, nulla repellat?";
    $pro = random_int(0, 1);
    $sql .= "insert into produit values(NULL,'$lib',$pu,$qte,
    '$des','$img',$pro);";
}
$res = $pdo->exec($sql);
if ($res) {
    echo "succes";
} else {
    echo " failed";
}
