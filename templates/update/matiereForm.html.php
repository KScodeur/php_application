<h1>mise a jour</h1>
    <form action="" method="POST">
        <div>
            <label for="">la matière</label>
            <input type="text" name="nom_matiere" value="<?=$matiere['nom_matiere']?>"/>
        </div>
        <div>
            <label for="">abreviation</label>
            <input type="text" name="abreviation" value="<?=$matiere['abreviation']?>"/>
        </div>
        
        <button type="submit" name="editer" value="">enregistrer</button>
    </form>