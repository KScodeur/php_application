<h1>mise a jour</h1>
    <form action="" method="POST">
        <div>
            <label for="">classe</label>
            <select name="classe_id" id="">
                <?php foreach ($classes as $classe):?>
                <option value="<?=$classe['id']?>" <?=$classe['id']==$matiere_classe['classe_id']? 'selected' : ''?>><?=$classe['nom_classe']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="">Matière</label>
            <select name="matiere_id" id="">
            <?php foreach ($matieres as $matiere):?>
                <option value="<?=$matiere['id']?>" <?=$matiere['id']==$matiere_classe['matiere_id']? 'selected' : ''?>><?=$matiere['nom_matiere']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="">coefficient</label>
            <select name="coefficient_id" id="">
            <?php foreach ($coefficients as $coefficient):?>
                <option value="<?=$coefficient['id']?>" <?=$coefficient['id']==$matiere_classe['coefficient_id']? 'selected' : ''?>><?=$coefficient['coef']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" name="editer" value="">enregistrer</button>
    </form>