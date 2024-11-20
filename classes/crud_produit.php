<?php
include_once "produit.php";
require_once "../connexion.php";
class crud_produit
{
    private $pdo;
    function __construct() {
        $connexion=new connexion();
        $this->pdo=$connexion->getConnexion();
    }
    function add() {}
    function delete($id) {
        $sql="delete from produit where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;

    }
    function update() {}
    function find($id) {}
    function findAll() {
        $sql="select * from produit";
       $res= $this->pdo->query($sql);
       return $res->fetchAll(PDO::FETCH_NUM);
    }
}
