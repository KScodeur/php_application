<?php
require_once("libraires/database.php");

abstract class Model 
{
    protected $con;
    protected $table;
    protected $column;
    protected $join;

    public function __construct(){
        $this->con=getPdo();
    }
    //return un items
    public function find($id){
        $sql=$this->con->prepare("SELECT * FROM {$this->table} where {$this->column}=:{$this->column}");
        $sql->execute(["{$this->column}"=>$id]);
        $eleve=$sql->fetch();
        return $eleve;
    }
    //return la liste des items
    public function findAll(){
        $query= $this->con->prepare("SELECT * FROM {$this->table} {$this->join}");
        $query->execute();
        $items=$query->fetchAll();

        return $items;
    }
    //supprime un item
    public function delete($id){
        $delete = $this->con->prepare("DELETE FROM {$this->table} WHERE {$this->column}=?");
        $item= $delete->execute([$id]);
        return $item;
    }

}