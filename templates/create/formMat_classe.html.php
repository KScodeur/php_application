<h1>mise a jour</h1>
    <form action="" method="POST">
        <div>
            <label for="">Classe</label>
            <select name="classe_id" id="">
                <option value="">Selectionner le professeur</option>
                <?php foreach ($classes as $classe):?>
                <option value="<?=$classe['id']?>"><?=$classe['nom_classe']?></option>
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
        <div>
            <label for="">Coefficient</label>
            <select name="coefficient_id" id="">
            <option value="">Selectionner la matière</option>
            <?php foreach ($coefficients as $coefficient):?>
                <option value="<?=$coefficient['id']?>"><?=$coefficient['coef']?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" name="submit" value="">enregistrer</button>
    </form>