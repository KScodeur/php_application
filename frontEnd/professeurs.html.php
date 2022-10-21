<main id="main" class=" margin">
    <div class="pagetitle">
        <h1>Professeurs</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">Professeurs</li>
            <li class="breadcrumb-item active"><span class="mycolor">Liste totale</span></li>
            <li class="breadcrumb-item"><a href="prof_mat.php">Prof et matière</a></li>
            </ol>
        </nav>
        <div>
        <button type="button" class="btn btn-info enregistrer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter un prof</button>
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
                            <th scope="col">grade</th>
                            <th scope="col">Spécialité</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($profs as $prof):?>
                            <tr>
                                <td><?= $prof['id']?></td>
                                <td><?= $prof['nom']?></td>
                                <td><?= $prof['prenom']?></td>
                                <td><?= $prof['grade']?></td>
                                <td><?= $prof['specialite']?></td>
                                <td>
                                    <!-- pour editer -->
                                    <!-- <button type="button" class="btn btn-info enregistrer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        editer
                                    </button> -->
                                    <a href="updateProf.php?id=<?= $prof['id']?>" type="button" class="btn btn-info">editer</a>
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog .modal-dialog-scrollable.modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ajout d'un professeur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form  method="POST" action="createProf.php" class="container-fluid">
                        <div class="mb-2">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="">Nom</label>
                                <input type="text" class="form-control" placeholder="veiller entrer le nom" name="nom" >
                            </div>
                            <div class="col">
                                <label for="">Prénom</label>
                                <input type="text" class="form-control" placeholder="mettre la description" name="prenom" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="">Sexe</label>
                                <select name="sexe" id="" class="form-select" >
                                <option value="">Selectionner le sexe</option>
                                <option value="F" name="sexe">Femme</option>
                                <option value="M" name="sexe">Homme</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="">Grade</label>
                                <input type="text" class="form-control" name="grade" >
                            </div>
                            <div class="col">
                                <label for="">specialite</label>
                                <input type="text" class="form-control" name="specialite" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="">date de naissance</label>
                                <input type="date" class="form-control" placeholder="mettre la date de naissance" name="date_naissance" >
                            </div>
                            <div class="col">
                                <label for="">Lieu de naissance</label>
                                <input type="text" class="form-control" placeholder="mettre la date de naissance" name="lieu_naissance" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="">Nationalité</label>
                                <input type="text" class="form-control" name="nationalite" >
                            </div>
                            <div class="col">
                                <label for="">Numero</label>
                                <input type="text" class="form-control" name="" >
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col">
                                <label for="" >Email</label>
                                <input type="text" class="form-control" name="email" >
                            </div>  
                        </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger annuler" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-info enregistrer" data-bs-toggle="modal">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>