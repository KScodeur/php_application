<main id="main" class=" margin">
    <div class="pagetitle">
        <h1>Professeurs</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">Professeurs</li>
            <li class="breadcrumb-item active">Mise à jour</li>
            </ol>
        </nav> 
    </div>
    <form  method="POST" action="" class="">
        <div class="mb-2">
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Nom</label>
                <input type="text" class="form-control" placeholder="veiller entrer le nom" name="nom" value="<?=$prof['nom']?>">
            </div>
            <div class="col">
                <label for="">Prénom</label>
                <input type="text" class="form-control" placeholder="mettre la description" name="prenom" value="<?=$prof['prenom']?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Sexe</label>
                <select name="sexe" id="" class="form-select" >
                <option value="">Selectionner le sexe</option>
                <option value="F" <?=$prof['sexe']=='f' ? 'selected':''?>>Femme</option>
                <option value="M" <?=$prof['sexe']=='m' ? 'selected':''?>>Homme</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="">Grade</label>
                <input type="text" class="form-control" name="grade" value="<?=$prof['grade']?>">
            </div>
            <div class="col">
                <label for="">specialite</label>
                <input type="text" class="form-control" name="specialite" value="<?=$prof['specialite']?>">
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
            <button type="submit" class="btn btn-info enregistrer" data-bs-toggle="modal" name="editer" >Enregistrer</button>
        </div>
    </form>
</main>