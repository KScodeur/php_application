<main id="main" class=" margin">

    <div class="pagetitle">
        <nav>
            <h1 id="ajouter">Ajouter Elèves</h1>
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">les Inscrits</li>
            <li class="breadcrumb-item"><a href="eleves.php">liste totale</a></li>
            <li class="breadcrumb-item"><a href=""><span class="mycolor">Ajouter</span></a></li>
            <li class="breadcrumb-item"><a href="">liste par classe</a></li>
            </ol>
        </nav>
        <form  method="POST"  class="">
          <div class="row mb-3">
            <div class="col">
                <label for="">Nom</label>
                <input type="text" class="form-control" placeholder="veiller entrer le nom" name="nom" required>
            </div>
            <div class="col">
                <label for="">Prénom</label>
                <input type="text" class="form-control" placeholder="mettre la description" name="prenom" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
                <label for="">Sexe</label>
                <select name="sexe" id="" class="form-select" required>
                  <option value="">Selectionner le sexe</option>
                  <option value="F" name="sexe">Fille</option>
                  <option value="M" name="sexe">Garçons</option>
                </select>
            </div>
            <div class="col">
                <label for="">Classe</label>
                <select name="classe_id" id="" class="form-select" required>
                  <option>Selectionner la classe</option>
                    <?php foreach ($classes as $key => $classe):?>
                        <option value="<?=$classe['id']?>">
                            <?=$classe['nom_classe']?>
                        </option>
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
                <input type="date" class="form-control" placeholder="mettre la date de naissance" name="date_naissance">
              </div>
              <div class="col">
                <label for="">Lieu de naissance</label>
                <input type="text" class="form-control" placeholder="mettre la date de naissance" name="lieu_naissance">
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
            <a href="/Niceadmin/eleves.php" type="button" class="btn btn-danger annuler">Annuler</a>
            <button type="submit" class="btn btn-info enregistrer" data-bs-toggle="modal" name="ajout">Enregistrer</button>
          </div>
        </form>
      
    </div>
</main>