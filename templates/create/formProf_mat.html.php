<h1>mise a jour</h1>
    <form action="" method="POST">
        <div>
            <label for="">Professeur</label>
            <select name="professeur_id" id="">
                <option value="">Selectionner le professeur</option>
                <?php foreach ($professeurs as $professeur):?>
                <option value="<?=$professeur['id']?>"><?=$professeur['nom']?> <?=$professeur['prenom']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="">Matière</label>
            <select name="matiere_id" id="">
            <option value="">Selectionner la matière</option>
            <?php foreach ($matieres as $matiere):?>
                <option value="<?=$matiere['id']?>"><?=$matiere['nom_matiere']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" name="submit" value="">enregistrer</button>
    </form>