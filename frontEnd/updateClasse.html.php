<main id="main" class=" ">
    <div class="pagetitle">
        <nav>
            <h1 id="ajouter"> Scolarité par classe</h1>
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">Scolarité par classe</li>
            <li class="breadcrumb-item active">Mise à jour</li>
            </ol>
        </nav>
    </div>
    <form  method="POST" action="" class="">
                <div class="row mb-3">
                    <div class="col">
                        <label for="">Classe</label>
                        <input type="text" class="form-control" placeholder="veiller entrer le nom" name="nom_classe"  value="<?=$classe['nom_classe']?>">
                    </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="">Scolarité</label>
                        <input type="text" class="form-control" placeholder="mettre la description" name="scolarite"  value="<?=$classe['scolarite']?>">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <a href="/Niceadmin/scolarite.php" type="button" class="btn btn-danger annuler" data-bs-dismiss="modal">Annuler</a>
                    <button type="submit" class="btn btn-info enregistrer" data-bs-toggle="modal" name="editer">Enregistrer</button>
                </div>
    </form>
       
</main>