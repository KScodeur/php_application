<?php
function getPdo(){
    $dbhost='localhost';
    $dbport='3308';
    $dbuser='root';
    $dbpass='root';
    $dbname='school_php';

    try{
    $con= new PDO ('mysql:host='.$dbhost.':'.$dbport.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
    }catch(Exception $e){
        die('Erreur : ' .$e -> getMessage());
    };
    return $con;
};

//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< DELETE >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>   


function deleteMatiere($id){
    $con = getPdo();
    $delete = $con->prepare('DELETE FROM matieres WHERE id =?');
    $result= $delete->execute([$id]);
    return $result;
};

function deleteClasse($id){
    $con = getPdo();
    $delete = $con->prepare('DELETE FROM classes WHERE id =?');
    $result= $delete->execute([$id]);
    return $result;
};

function deleteProf($id){
    $con = getPdo();
    $delete = $con->prepare('DELETE FROM professeurs WHERE id =?');
    $result= $delete->execute([$id]);
    return $result;
}

function deleteCoef($id){
    $con = getPdo();
    $delete = $con->prepare('DELETE FROM coefficients WHERE id =?');
    $result= $delete->execute([$id]);
    return $result;
}
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< INSERT >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< UPDATE >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
function updateEleve($id){
    $con = getPdo();
    $stmt=$con->prepare("UPDATE eleves SET nom=:nom ,prenom=:prenom, sexe=:sexe, classe_id=:classe_id, annee_id=:annee_id,updated_at=NOW() WHERE elv_id=:elv_id");                             
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
function updateMatiere($id){
    $con = getPdo();
    $stmt=$con->prepare("UPDATE matieres SET nom_matiere=:nom_matiere, abreviation=:abreviation, updated_at=NOW() WHERE id=$id");
    // SELECT * FROM eleves JOIN classes ON  eleves.classe_id =classes.id  JOIN annees ON eleves.annee_id=annees.id");                                 
    $stmt->bindParam(':nom_matiere', $_POST['nom_matiere']);     
    $stmt->bindParam(':abreviation', $_POST['abreviation']);     

    $result = $stmt->execute();
    return $result;
}
function updateProfMat($id){
    $con = getPdo();
    $query=$con->prepare("UPDATE professeur_matiere SET professeur_id=:professeur_id, matiere_id=:matiere_id , updated_at=NOW() WHERE pm_id=:pm_id");
    $array=[
        'pm_id'=>$id,
        'professeur_id'=>$_POST['professeur_id'],
        'matiere_id'=>$_POST['matiere_id']
    ];
    $result=$query->execute($array);
    return $result;
} 

function updateClasse ($id){
    $con = getPdo();
    $stmt=$con->prepare("UPDATE classes SET nom_classe=:nom_classe ,scolarite=:scolarite ,updated_at=NOW() WHERE id=$id");
    // SELECT * FROM eleves JOIN classes ON  eleves.classe_id =classes.id  JOIN annees ON eleves.annee_id=annees.id");                                 
    $stmt->bindParam(':nom_classe', $_POST['nom_classe']);     
    $stmt->bindParam(':scolarite', $_POST['scolarite']);    
    
    $result = $stmt->execute();
    return $result;
}

function updateCoef ($id){
    $con = getPdo();
    $stmt=$con->prepare("UPDATE coefficients SET coef=:coef,updated_at=NOW() WHERE id=$id");
    $stmt->bindParam(':coef', $_POST['coef']);      

    $result = $stmt->execute();
    return $result;
}

function updateProf ($id){
    $con = getPdo();
    $stmt=$con->prepare("UPDATE professeurs SET nom=:nom, prenom=:prenom,grade=:grade, specialite=:specialite, updated_at=NOW() WHERE id=$id");
    // SELECT * FROM eleves JOIN classes ON  eleves.classe_id =classes.id  JOIN annees ON eleves.annee_id=annees.id");                                 
    $stmt->bindParam(':nom', $_POST['nom']);     
    $stmt->bindParam(':prenom', $_POST['prenom']);     
    $stmt->bindParam(':grade', $_POST['grade']);     
    $stmt->bindParam(':specialite', $_POST['specialite']);     
    
    $result = $stmt->execute();
    return $result;
}
function updateMat_classe ($id){
    $con = getPdo();
    $query=$con->prepare("UPDATE matiere_classe SET classe_id=:classe_id, matiere_id=:matiere_id ,coefficient_id=:coefficient_id, updated_at=NOW() WHERE mc_id=:mc_id");
    // var_dump($query);
    // $query->bindParam(':mc_id',$id);
    // $query->bindParam(':classe_id',$_POST['classe_id']);
    // $query->bindParam(':matiere_id',$_POST['matiere_id']);
    // $query->bindParam(':coefficient_id',$_POST['coefficient_id']);
    $array=[
        'mc_id'=> $id,
        'classe_id'=>$_POST['classe_id'],
        'matiere_id'=>$_POST['matiere_id'],
        'coefficient_id'=>$_POST['coefficient_id']
    ];
    $result=$query->execute($array);
    return $result;
}

//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< SELECT >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

//return le nombre des garçons
function findGarcons(){
    $con=getPdo();
    $query= $con->prepare("SELECT * FROM eleves WHERE sexe='m'");
    $query->execute();
    $garconscount=count($query->fetchAll());
    return $garconscount;

};

//return le nombre des filles
function findFilles(){
    $con=getPdo();
    $query= $con->prepare("SELECT * FROM eleves WHERE sexe='f'");
    $query->execute();
    $fillescount=count($query->fetchAll());

    return $fillescount;

};

//liste des professeurs et matieres enseignés
function profMat(){
    $con = getPdo();
    $query= $con->prepare("SELECT * FROM professeur_matiere JOIN professeurs ON  professeur_matiere.professeur_id =professeurs.id  JOIN matieres ON professeur_matiere.matiere_id=matieres.id");
    $query->execute();
    $profMat=$query->fetchAll();
    return $profMat;
};

//liste des matiere, classes et coefficient
function matiereClasse(){
    $con = getPdo();
    $query= $con->prepare("SELECT * FROM matiere_classe JOIN classes ON  matiere_classe.classe_id=classes.id  JOIN matieres ON matiere_classe.matiere_id=matieres.id JOIN coefficients ON matiere_classe.coefficient_id=coefficients.id ORDER BY nom_classe desc");
    $query->execute();
    $matiereClasse=$query->fetchAll();
    return $matiereClasse;
}




?>