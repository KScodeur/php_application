<h1>mise a jour</h1>
    <form action="" method="POST">
        <div>
            <label for="">nom</label>
            <input type="text" name="nom_classe" value="<?=$classe['nom_classe']?>"/>
        </div>
        <div>
            <label for="">prenom</label>
            <input type="text" name="scolarite" value="<?=$classe['scolarite']?>"/>
        </div>
        <button type="submit" name="editer" value="">enregistrer</button>
    </form>