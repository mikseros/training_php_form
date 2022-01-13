
<div id="table" class="listing"><?php require __DIR__ . '/table.php'; ?></div>

<form method="POST">
    <h3>Formulaire d'enregistrement</h3>
    <div>
        <label for="name">Nom*</label>
        <input type="text" name="name" placeholder="nom" required/>
    </div>
    <div>
        <label for="surname">Prenom*</label>
        <input type="text" name="surname" placeholder="prenom" required/>
    </div>
    <div>
        <label for="name">Email*</label>
        <input type="email" name="email" placeholder="votre@email.com" required/>
    </div>
    <div>
        <label for="password">Mot de passe*</label>
        <input type="password" name="password" required/>
    </div>
    <div>
        <label for="dob">Date de Naissance*</label>
        <input type="date" name="dob" required/>
    </div>
    <div>
        <input type="radio" id="homme" name="gender" value="Homme">
        <label for="homme">Homme</label><br>
        <input type="radio" id="femme" name="gender" value="Femme">
        <label for="femme">Femme</label><br>
    </div>
    <div>
        <label for="nationality">Nationalite*</label>
        <select id="nationality" name="nationality" required>
            <option value="French">FR</option>
            <option value="USA">US</option>
            <option value="Europe">EU</option>
            <option value="China">CH</option>
        </select>
    </div>
    <div>
        <label for="comment">Commentaires*</label>
        <input type="text" name="comment" required/>
    </div>
    <div id="reset">
        <button type="submit">S'enregistrer</button>
        <input type="reset" value="Reset">
    </div>

</form>