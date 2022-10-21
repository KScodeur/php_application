<h1>mise a jour</h1>
    <form action="" method="POST">
        <div>
            <label for="">Nom</label>
            <input type="text" name="nom" value="<?=$professeur['nom']?>"/>
        </div>
        <div>
            <label for="">Prénom</label>
            <input type="text" name="prenom" value="<?=$professeur['prenom']?>"/>
        </div>
        <div>
            <label for="">Prénom</label>
            <input type="text" name="grade" value="<?=$professeur['grade']?>"/>
        </div>
        <div>
            <label for="">Prénom</label>
            <input type="text" name="specialite" value="<?=$professeur['specialite']?>"/>
        </div>
        
        <button type="submit" name="editer" value="">enregistrer</button>
    </form>