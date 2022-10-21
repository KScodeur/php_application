<main id="main" class=" margin">
    <div class="pagetitle">
        <h1>Professeurs</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">Professeurs</li>
            <li class="breadcrumb-item active"><a href="professeur.php">Liste totale</a></li>
            <li class="breadcrumb-item"><span class="mycolor">Prof et matière</span></li>
            </ol>
        </nav>
        <div>
        <button type="button" class="btn btn-info enregistrer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter un prof à une matière</button>
        </div>
        <div class="card card-body container">
                  <!-- < class="card-title">Liste totale<span></span></> -->
                  <h1 class="card-title">Liste totale<span></span></h1>
                <table class="table table-borderless datatable table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Matière</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($profMat as $profMat):?>
                            <tr>
                                <td><?= $profMat['pm_id']?></td>
                                <td><?= $profMat['nom']?></td>
                                <td><?= $profMat['prenom']?></td>
                                <td>

                                    <?= $profMat['nom_matiere']?>(<?= $profMat['abreviation']?>)</td>
                                <td>
                                    <!-- pour editer -->
                                    <!-- <button type="button" class="btn btn-info enregistrer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        editer
                                    </button> -->
                                    <a href="updateEleve.php?id=<?= $profMat['pm_id']?>" type="button" class="btn btn-info">editer</a>
                                    <button type="button" class="btn btn-danger annuler" data-bs-toggle="modal" data-bs-target="#supprimer">
                                        Supprimer
                                    </button>
                                </td>

                                    <!-- pour la suppression -->
                                    
                                    <!-- Modal de suppression -->
                                    <div class="modal fade" id="supprimer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Supprimer</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Voulez-vous vraiment faire la suppression <?= $prof['id']?> <?= $prof['nom']?>?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info enregistrer" data-bs-dismiss="modal">Non</button>
                                                <a href="" class="btn btn-danger annuler">Oui</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin du suppression -->
                            </tr>
                        <?php endforeach ?> 
                    </tbody>
                </table>
        </div>
    </div><!-- End Page Title -->
    <!-- Modal d'ajout de classe-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ajout d'un prof à une matière</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="createProf_mat.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="" >Professeur</label>
                                <select class="form-select" name="professeur_id" id="">
                                    <option value="">Selectionner le professeur</option>
                                    <?php foreach($profs as $prof):?>
                                        <option value="<?=$prof['id']?>"><?=$prof['nom']?> <?=$prof['prenom']?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="" >Matière</label>
                                <select class="form-select" name="matiere_id" id="">
                                    <option value="">Selectionner la matiere</option>
                                    <?php foreach($matieres as $matiere):?>
                                        <option value="<?=$matiere['id']?>"><?=$matiere['nom_matiere']?>  ( <?=$matiere['abreviation']?>)</option>
                                    <?php endforeach ?>
                                </select>
                            </div>  
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger annuler" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-info enregistrer" name="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</main>