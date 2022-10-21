<?php
require_once('libraires/models/Model.php');
class Annee extends Model
{
    protected $table= "annees";
    protected $column="id";
    
    public function update($id){
        $stmt=$this->con->prepare("UPDATE annees SET libelles=:libelles,updated_at=NOW() WHERE id=$id");
        $stmt->bindParam(':libelles', $_POST['libelles']);     

        $result = $stmt->execute();
        return $result; 
    }
}