<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <!-- statistiques -->
    <div class="row margin-bottom">
            <!-- cadres de couleur bleu(primary) -->
      <div class="col-md-2 mb-3">
        <div class="card text-white bg-primary h-100" >
          <div class="card-header" >Total d'élèves</div>
          <div class="card-body">
            <h1 class="card-title me-2 white"><?=count($eleves)?></h1>
          </div>
        </div>
      </div>
      <!-- cadres de couleur bleu(primary) -->
      <div class="col-md-2 mb-3">
        <div class="card text-white bg-warning h-100">
          <div class="card-header">Garçons</div>
          <div class="card-body">
            <h1 class="card-title align-end"><?=$garconscount?></h1>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <div class="card text-white bg-success h-100">
          <div class="card-header">Filles</div>
          <div class="card-body">
            <h1 class="card-title"><?=$fillescount?></h1>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <div class="card text-white bg-danger h-100">
          <div class="card-header">Classes</div>
          <div class="card-body">
            <h1 class="card-title"><?=count($classes)?></h1>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <div class="card text-white bg-danger h-100">
          <div class="card-header">Professeurs</div>
          <div class="card-body">
            <h1 class="card-title"><?=count($professeurs)?></h1>
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <div class="card text-white bg-danger h-100">
          <div class="card-header">Matieres</div>
          <div class="card-body">
            <h1 class="card-title"><?=count($matieres)?></h1>
          </div>
        </div>
      </div>
    </div>
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8 width">
          <div class="row">
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card">
                <div class="filter">
                  <!-- <button class="icon btn-ajout"><a href="" class="a">Ajouter un élèves</a></button> -->
                  <button type="button" class="btn btn-primary m-3 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Ajouter un élève
                  </button>
                </div>
                <!-- modal inscription -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog .modal-dialog-scrollable.modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ajout d'un élève</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                        <form action="createElevedashboard.php" method="POST">
                          <div class="modal-body">
                              <div class="row mb-3">
                                <div class="col">
                                    <label for="">Nom</label>
                                    <input type="text" class="form-control" name="nom">
                                </div>
                                <div class="col">
                                    <label for="">Prénom</label>
                                    <input type="text" class="form-control" name="prenom">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col">
                                    <label for="">Sexe</label>
                                    <select name="sexe" id="" class="form-select">
                                      <option value="">Selectionner le sexe</option>
                                      <option value="F" name="sexe">Fille</option>
                                      <option value="M" name="sexe">Garçons</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Classe</label>
                                    <select name="classe_id" id="" class="form-select">
                                      <option>Selectionner la classe</option>
                                    <?php foreach ($classes as $classe):?>
                                      <option value="<?=$classe['id']?>"><?=$classe['nom_classe']?></option>
                                    <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col">
                                  <label for="">annee</label>
                                  <select name="annee_id" id="" class="form-select" require>
                                  <option value="">selectionner l'année</option>
                                      <?php foreach ($annees as $annee):?>
                                          <option value="<?=$annee['id']?>">
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
                                      <input type="text" class="form-control" name="nationalite" >
                                  </div>
                                  <div class="col">
                                      <label for="">Nom du père</label>
                                      <input type="text" class="form-control" name="nom_pere" >
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <div class="col">
                                      <label for="">Profession du père</label>
                                      <input type="text" class="form-control" name="pere_profession" >
                                  </div>
                                  <div class="col">
                                      <label for="">Numero du père</label>
                                      <input type="tel" class="form-control" name="tel">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <div class="col">
                                      <label for="">Nom de la mère</label>
                                      <input type="text" class="form-control" name="nom_mere" >
                                  </div>
                                  <div class="col">
                                      <label for="">Profession de la mère</label>
                                      <input type="text" class="form-control" name="mere_profession" >
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col">
                                      <label for="" >Email</label>
                                      <input type="text" class="form-control" name="email" >
                                  </div>  
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger annuler"  data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-info enregistrer" data-bs-toggle="modal">Enregistrer</button>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
                  
                  


                <div class="card-body container">
                  <h5 class="card-title">Top des dix(10) derniers inscrit(e)(s)<span></span></h5>

                  <table class="table table-borderless datatable table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">sexe</th>
                        <th scope="col">classe</th>
                        <th scope="col">Année</th>
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
                           
                        </tr>
                    <?php endforeach ?> 
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->


          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">





        </div><!-- End Right side columns -->

      </div>
    </section>

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

