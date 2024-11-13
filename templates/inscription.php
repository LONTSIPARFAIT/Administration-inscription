<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Inscription</title>
</head>
<body>

  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <form action="insert.php" method="GET">
    <fieldset>
      <legend>Inscription</legend>
    <label for="">Nom</label>
    <input type="text" name="nom" placeholder=" Entrez votre nom"><br>
    
    <label for="">Prenom</label>
    <input type="text" name="prenom" placeholder=" Entrez votre Prenom"><br>
    
        <label for="">Date de Naissance</label>
        <input type="date" name="date"><br><br>
        
            <label for="">Sexe</label>
            <input type="radio" name="gender" value="Homme">Homme
            <input type="radio" name="gender" value="Femme">Femme <br><br>

    <label for="">Contact</label>
    <input type="number" name="tel" placeholder=" Entrez votre numero de telephone"><br>

    <label for="">Bouquet 1</label>
    <select name="" id="">
      <option value="">Ms Word</option>
      <option value="">Ms Excel</option>
      <option value="">Initiation à l'informatique</option>
    </select><br><br>

    <label for="">Bouquet 2</label>
    <select name="" id="">
      <option value="">Infographie</option>
      <option value="">Maintenence</option>
      <option value="">Programmation</option>
    </select><br><br>

    <label for="">CNI parent</label>
    <input type="file" name="file"><br>

    <label for="">Fiche de Localisation</label>
    <input type="file" name="file"><br>

    <input type="submit" value="Valider">
  </fieldset>

  </form>

</body>
</html>