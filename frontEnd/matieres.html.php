<main id="main" class=" margin">
    <div class="pagetitle">
        <h1>Matières</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Matière</li>
            <li class="breadcrumb-item"><a>Les matieres et coefficient par classe</a></li>
            
            </ol>
        </nav>
        <div>
        <button type="button" class="btn btn-info enregistrer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter une matière</button>
        </div>
        <div class="card card-body container">
                  <!-- < class="card-title">Liste totale<span></span></> -->
                  <h1 class="card-title">Liste totale<span></span></h1>
                <table class="table table-borderless datatable table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">La matiere</th>
                            <th scope="col">abréviation</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($matieres as $matiere):?>
                            <tr>
                                <td><?= $matiere['id']?></td>
                                <td><?= $matiere['nom_matiere']?></td>
                                <td><?= $matiere['abreviation']?></td>
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
                                                <h4>Voulez-vous vraiment faire la suppression <?= $matiere['id']?> <?= $eleve['nom_matiere']?>?</h4>
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
    </div>
     <!-- Modal d'ajout de matière-->
     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ajouter une matière</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="createMatiere.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="" >La matiere</label>
                                <input type="text" class="form-control" name="nom_matiere">
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="" >abréviation</label>
                                <input type="text" class="form-control" name="abreviation">
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
    <!-- fin du modal d'ajout de matière -->
    </div>
</main>