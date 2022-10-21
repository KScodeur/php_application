<?php
require_once("libraires/models/Model.php");
class Eleve extends Model{

    protected $table= "eleves";
    protected $column="elv_id";
    protected $join= "JOIN classes ON  eleves.classe_id =classes.id  JOIN annees ON eleves.annee_id=annees.id";
   
    public function update($id){
        $stmt=$this->con->prepare("UPDATE eleves SET nom=:nom ,prenom=:prenom, sexe=:sexe, classe_id=:classe_id, annee_id=:annee_id,updated_at=NOW() WHERE elv_id=:elv_id");                             
        // $stmt->bindParam(':nom', $_POST['nom']);     
        // $stmt->bindParam(':prenom', $_POST['prenom']);    
        // $stmt->bindParam(':sexe', $_POST['sexe']);
        // $stmt->bindParam(':classe_id', $_POST['classe_id']); 
        // $stmt->bindParam(':annee_id', $_POST['annee_id']);
        // var_dump($stmt);
        $array=[
            'elv_id'=>$id,
            'nom'=>$_POST['nom'],
            'prenom'=>$_POST['prenom'],
            'sexe'=>$_POST['sexe'],
            'classe_id'=>$_POST['classe_id'],
            'annee_id'=>$_POST['annee_id']
        ];
        
        $result = $stmt->execute($array);
        return $result;
    }
}