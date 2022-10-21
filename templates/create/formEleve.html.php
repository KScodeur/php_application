<h1>enregistrer un élève</h1>
    <form action="" method="POST">
        <div>
            <label for="">nom</label>
            <input type="text" name="nom"/>
        </div>
        <div>
            <label for="">prenom</label>
            <input type="text" name="prenom"/>
        </div>
        <div>
            <label for="">sexe</label>
            <select name="sexe" id="">
                <option value="">selectionner le sexe</option>
                <option value="m">Garçon</option>
                <option value="f">Fille</option>
            </select>
        </div>
        <div>
            <label for="">classe</label>
            <select name="classe_id" id="">
            <option value="">selectionner la classe</option>
            <?php foreach ($classes as $key => $classe):?>
                <option value="<?=$classe['id']?>">
                    <?=$classe['nom_classe']?>
                </option>
            <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="">annee</label>
            <select name="annee_id" id="">
            <option value="">selectionner l'année</option>
                <?php foreach ($annees as $annee):?>
                    <option value="<?=$annee['id']?>">
                        <?=$annee['libelles']?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit">enregistrer</button>
    </form>