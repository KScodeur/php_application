<h1>mise a jour</h1>
    <form action="" method="POST">
        <div>
            <label for="">nom</label>
            <input type="text" name="nom" value="<?=$eleve['nom']?>"/>
        </div>
        <div>
            <label for="">prenom</label>
            <input type="text" name="prenom" value="<?=$eleve['prenom']?>"/>
        </div>
        <div>
            <label for="">sexe</label>
            <select name="sexe" id="">
                <option value="">selectionner le sexe</option>
                <option value="m" <?=$eleve['sexe']=='m' ? 'selected':''?>>Garçon</option>
                <option value="f" <?=$eleve['sexe']=='f' ? 'selected':''?>>Fille</option>
            </select>
        </div>
        <div> 
            <label for="">classe</label>
            <select name="classe_id" id="">
            <option value="">selectionner la classe</option>
            <?php foreach ($classes as $key => $classe):?>
                <option value="<?=$classe['id']?>"  <?=$classe['id'] == $eleve['classe_id'] ? 'selected':''?>>
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
                    <option value="<?=$annee['id']?>" <?=$annee['id']==$eleve['annee_id']? 'selected':''?>>
                        <?=$annee['libelles']?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <button type="submit" name="editer" value="">enregistrer</button>
    </form>