<main id="main" class=" margin">
    <div class="pagetitle">
        <h1>Eleves</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">les Inscrits</li>
            <li class="breadcrumb-item"><a href="" class="mycolor"><span class="mycolor">Liste totale</span></a></li>
            <li class="breadcrumb-item"><a href="createEleve.php" >Ajouter</a></li>
            <li class="breadcrumb-item"><a href="">liste par classe</a></li>
            </ol>
        </nav>
        <div class="card card-body container">
                  <h1 class="card-title">Liste totale<span></span></h1>
                <table class="table table-borderless datatable table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">sexe</th>
                            <th scope="col">classe</th>
                            <th scope="col">Année</th>
                            <th scope="col">Action</th>
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
                                    <!-- pour editer -->
                                    <!-- <button type="button" class="btn btn-info enregistrer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        editer
                                    </button> -->
                                    <a href="updateEleve.php?id=<?= $eleve['elv_id']?>" type="button" class="btn btn-info">editer</a>
                                    <button type="button" class="btn btn-danger annuler" data-bs-toggle="modal" data-bs-target="#supprimer">
                                        Supprimer
                                    </button>
                                </td>
                                    <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog .modal-dialog-scrollable.modal-dialog">
                                            <form method="POST">
                                                
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="text-align-center">Mise a jour d'élève</h1>

                
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                
                                                        <div class="row mb-3 ">
                                                            <div class="col">
                                                                <label for="">Nom</label>
                                                                <input type="text" class="form-control" name="nom" value="<?=$eleve['nom']?>">
                                                            </div>
                                                            <div class="col">
                                                                <label for="">Prénom</label>
                                                                <input type="text" class="form-control" name="prenom" value="<?=$eleve['prenom']?>">
                                                        </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="">Sexe</label>
                                                            <select name="sexe" id="" class="form-select">
                                                                <option value="">Selectionner le sexe</option>
                                                                <option value="F" <?=$eleve['sexe']=='f' ? 'selected':''?>>Fille</option>
                                                                <option value="M"  <?=$eleve['sexe']=='m' ? 'selected':''?>>Garçons</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Classe</label>
                                                            <select name="classe_id" id="" class="form-select">
                                                                <option>Selectionner la classe</option>
                                                                <?php foreach ($classes as $key => $classe):?>
                                                                    <option value="<?=$classe['id']?>"  <?=$classe['id'] == $eleve['classe_id'] ? 'selected':''?>>
                                                                        <?=$classe['nom_classe']?>
                                                                    </option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Année</label>
                                                            <select name="annee_id" id="" class="form-select">
                                                            <option value="">selectionner l'année</option>
                                                            <?php foreach ($annees as $annee):?>
                                                                <option value="<?=$annee['id']?>" <?=$annee['id']==$eleve['annee_id']? 'selected':''?>>
                                                                    <?=$annee['libelles']?>
                                                                </option>
                                                            <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                        <label for="">date de naissance</label>
                                                        <input type="date" class="form-control" name="date_naissance" >
                                                        </div>
                                                        <div class="col">
                                                        <label for="">Lieu de naissance</label>
                                                        <input type="text" class="form-control"name="lieu_naissance" >
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="">Nationalité</label>
                                                            <input type="text" class="form-control" name="nationalite">
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Nom du père</label>
                                                            <input type="text" class="form-control" name="nom_pere">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="">Profession du père</label>
                                                            <input type="text" class="form-control" name="pere_profession">
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Numero du père</label>
                                                            <input type="tel" class="form-control" name="tel">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <label for="">Nom de la mère</label>
                                                            <input type="text" class="form-control" name="nom_mere">
                                                        </div>
                                                        <div class="col">
                                                            <label for="">Profession de la mère</label>
                                                            <input type="text" class="form-control" name="mere_profession">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="" >Email</label>
                                                            <input type="text" class="form-control" name="email">
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger annuler"  data-bs-dismiss="modal">Annuler</button>
                                                    <button type="submit" name="editer" class="btn btn-info enregistrer" data-bs-toggle="modal">Enregistrer</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div> -->
                                    <!-- fin du modal editer -->

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
                                                <h4>Voulez-vous vraiment faire la suppression <?= $eleve['elv_id']?> <?= $eleve['nom']?> <?= $eleve['prenom']?>?</h4>
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
</main>