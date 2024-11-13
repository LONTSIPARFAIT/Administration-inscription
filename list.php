<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List user</title>

  <style>
    body{
      width: 50%;
      margin: auto;
    }
    table{
      border-collapse : collapse;
      margin: 25px 0;
      padding: 5px;
      font-size: 0.9rem;
      font-family: sans-serif;
      box-shadow: 0 0 20px rgba(0,0,0,.2);
    }
    td,th{
      padding: 10px;
      text-align: center;
    }
    thead{
      padding: 30px;
    }
    tbody tr{
      border-bottom: 1px solid #dddddd;
    }
    thead tr, tfoot tr td{
      background-color: #009879;
      color: #ffffff;
      text-align: center;
    }
    tbody tr.active-row{
      font-weight: bold;
      color: #009879;
    }
    tbody tr:nth-of-type(even){
      background-color: #f3f3f3;
    }
    input[type="submit"]{
      width: 8em;
      background-color: #4caf50;
      border: none;
      border-radius: 4px;
      color: #fff;
      text-align: center;
      padding: 6px;
      font-weight: bold;
      margin: 5px;
    }

  </style>

</head>
<body>

  <h1>Liste des utilisateurs</h1>
  <table>
  <thead>
  <tr>
    <th>Identifiant</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Date de naissance</th>
    <th>Sexe</th>
    <th>tel</th>
    <th>Action</th>
    <th>Bouquet</th>
  </tr>
  </thead>

  <?php 
require_once("database.php");
$query = $pdo->prepare("SELECT * FROM users");
$query->execute();

while($row = $query->fetch(PDO::FETCH_ASSOC)){
?>
<tbody>
<tr>
  <td><?php echo htmlspecialchars($row["id"]); ?></td>
  <td><?php echo htmlspecialchars($row["nom"]); ?></td>
  <td><?php echo htmlspecialchars($row["prenom"]); ?></td>
  <td><?php echo htmlspecialchars($row["date"]); ?></td>
  <td><?php echo htmlspecialchars($row["gender"]); ?></td>
  <td><?php echo htmlspecialchars($row["tel"]); ?></td>
  <td>
    <form action="detail.php" method="POST">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($row["id"]); ?>">
      <input type="submit" value="Detail">
    </form>
    <form action="delete.php" method="POST">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($row["id"]); ?>">
      <input type="submit" value="supprimer">
    </form>
  </td>
</tr>
</tbody>
<?php } ?>

  <tfoot>
    <tr>
      <td colspan = "7">
      Utilisateurs Inscrits
      </td>
    </tr>
  </tfoot>


  </table>
</body>
</html>