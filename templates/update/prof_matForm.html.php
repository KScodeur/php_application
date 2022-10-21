<h1>mise a jour</h1>
    <form action="" method="POST">
        <div>
            <label for="">Professeur</label>
            <select name="professeur_id" id="">
                <?php foreach ($professeurs as $professeur):?>
                <option value="<?=$professeur['id']?>" <?=$professeur['id']==$prof_mat['professeur_id']? 'selected' : ''?>><?=$professeur['nom']?> <?=$professeur['prenom']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="">Matière</label>
            <select name="matiere_id" id="">
            <?php foreach ($matieres as $matiere):?>
                <option value="<?=$matiere['id']?>" <?=$matiere['id']==$prof_mat['matiere_id']? 'selected' : ''?>><?=$matiere['nom_matiere']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" name="editer" value="">enregistrer</button>
    </form>