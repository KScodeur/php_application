<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        a{
            margin-right: 10px;
        }
        .container,.container2{
            display: flex;
            
        }
        div{
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>L'index de la page</h1>
    <br>
    hello <?=$_SESSION['name']?>
    <div>enregistrer: 
        <a href="createProf.php">PROFESSEURS</a>
        <a href="createClasse.php">CLASSES</a>
        <a href="createMatiere.php">MATIERES</a>
        <a href="createEleve.php">ELEVES</a>
        <a href="createAnnee.php">ANNEES</a>
        <a href="createCoefficient.php">COEF</a>
    </div>
    <div>
        les tables intermediaire :
        <a href="createProf_mat.php">Les prof et matiere</a>
        <a href="createMat_classe.php">Matière classe et coefficient</a>
    </div>
    <h2>Statistiques</h2>
    <div>le nombre totales d'élèves <?=count($eleves)?></div>

    <div>le nombre totales de garçons <?=$garconscount[0]?> 
            <>le nombre totales de filles <?=$fillescount[0]?>
            <>le nombre totales de classe <?=count($classes)?>
            <>le nombre totales de professeurs <?=count($professeurs)?>
    </div>
    <div class="container">
        <!-- liste des classes -->
        <div>
            <h2>liste des classes</h2>
            <table border="1px">
                <thead>
                    <tr>
                        <th>numero</th>
                        <th>la classe</th>
                        <th>scolarité</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($classes as $classe):?>
                        <tr>
                            <td><?=$classe['id']?></td>
                            <td><?=$classe['nom_classe']?></td>
                            <td><?=$classe['scolarite']?></td>
                            <td>
                                <a href="updateClasse.php?id=<?=$classe['id']?>">editer</a>
                                <a href="deleteClasse.php?id=<?=$classe['id']?>">supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
         <!-- coefficient -->
         <div>
            <h2>Liste des coefficient</h2>
            <table border="1px">
                <thead>
                    <tr>
                        <th>numero</th>
                        <th>coef</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($coefficients as $coefficient):?>
                        <tr>
                            <td><?=$coefficient['id']?></td>
                            <td><?=$coefficient['coef']?></td>
                            <td>
                                <a href="updateCoefficient.php?id=<?=$coefficient['id']?>">editer</a>
                                <a href="deleteCoefficient.php?id=<?=$coefficient['id']?>">supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
          <!-- années -->
        <div>
            <h2>liste des années</h2>
            <table border="1px">
                <thead>
                    <tr>
                        <th>numero</th>
                        <th>libellés</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($annees as $annee):?>
                        <tr>
                            <td><?=$annee['id']?></td>
                            <td><?=$annee['libelles']?></td>
                            <td>
                                <a href="updateAnnee.php?id=<?=$annee['id']?>">editer</a>
                                <a href="deleteAnnee.php?id=<?=$annee['id']?>">supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
        <!-- la liste des matieres -->
        <div>
            <h2>liste des matiere</h2>
            <table border="1px">
                <thead>
                    <tr>
                        <th>numero</th>
                        <th>matiere</th>
                        <th>Abréviation</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($matieres as $matiere):?>
                        <tr>
                            <td><?=$matiere['id']?></td>
                            <td><?=$matiere['nom_matiere']?></td>
                            <td><?=$matiere['abreviation']?></td>
                            <td>
                                <a href="updateMatiere.php?id=<?=$matiere['id']?>">editer</a>
                                <a href="deleteMatiere.php?id=<?=$matiere['id']?>">supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
         <!-- la liste des professeurs -->
         <div>
            <h2>liste des professeurs</h2>
            <table border="1px">
                <thead>
                    <tr>
                        <th>numero</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>grade</th>
                        <th>specialite</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($professeurs as $professeur):?>
                        <tr>
                            <td><?=$professeur['id']?></td>
                            <td><?=$professeur['nom']?></td>
                            <td><?=$professeur['prenom']?></td>
                            <td><?=$professeur['grade']?></td>
                            <td><?=$professeur['specialite']?></td>
                            <td>
                                <a href="updateProf.php?id=<?=$professeur['id']?>">editer</a>
                                <a href="deleteProf.php?id=<?=$professeur['id']?>">supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div> 
    </div>
<!-- ......................................................................................................... -->
<!-- ......................................................................................................... -->
    <div class="container2">
        <!-- la liste des eleves -->
        <div>
            <h2>la liste des eleves</h2>
            <table border="1px">
                <thead>
                    <tr>
                        <th>numero</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>sexe</th>
                        <th>classe</th>
                        <th>année</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach($eleves as $eleve):?>
                        <tr>
                            <td><?= $eleve['elv_id']?></td>
                            <td><?= $eleve['nom']?></td>
                            <td><?= $eleve['prenom']?></td>
                            <td><?= $eleve['sexe']?></td>
                            <td><?= $eleve['nom_classe']?></td>
                            <td><?= $eleve['libelles']?></td>
                            <td>
                                <a href="updateEleve.php?id=<?=$eleve['elv_id']?>" type="button">editer</a>
                                <a href="deleteEleve.php?id=<?= $eleve['elv_id']?>"   type="button">supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach ?> 
                </tbody>
                
            </table>
        </div> 
           <!-- liste des professeurs et leurs matieres-->
        <div>      
            <h2>la liste des professeurs</h2>
            <table border="1px">
                <thead>
                    <tr>
                        <th>numero</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>grade</th>
                        <th>specialite</th>
                        <th>nom_matiere</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($profMat as $profMat):?>
                        <tr>
                            <td><?=$profMat['pm_id']?></td>
                            <td><?=$profMat['nom']?></td>
                            <td><?=$profMat['prenom']?></td>
                            <td><?=$profMat['grade']?></td>
                            <td><?=$profMat['specialite']?></td>
                            <td><?=$profMat['nom_matiere']?></td>
                            <td>
                                <a href="updateProf_mat.php?id=<?=$profMat['pm_id']?>">Editer</a>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
        <!-- la liste des matiieres et leur  coefficient par classe -->
        <div>
            <h2>la liste des matiieres et leur  coefficient par classe</h2>
            <table border="1px">
                <thead>
                    <tr>
                        <th>numero</th>
                        <th>classe</th>
                        <th>matiere</th>
                        <th>coefficient</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($matiereClasse as $matiereClasse):?>
                    <tr>
                        <td><?=$matiereClasse["mc_id"]?></td>
                        <td><?=$matiereClasse["nom_classe"]?></td>
                        <td><?=$matiereClasse["nom_matiere"]?></td>
                        <td><?=$matiereClasse["coef"]?></td>
                        <td>
                            <a href="updateMat_classe.php?id=<?= $matiereClasse['mc_id']?>">Editer</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    
        
    </div>
    
    
</body>
</html>