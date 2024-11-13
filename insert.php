<?php 
require_once("database.php");

if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["date"]) && isset($_GET["gender"]) && isset($_GET["tel"]) && isset($_GET["file"])){
    
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $date =$_GET["date"];
    $gender = $_GET["gender"];
    $tel = $_GET["tel"];
    $file = $_GET["file"];

    // $sql =$pdo->preare(  "INSERT INTO users(nom,prenom,dates,gender,tel,files) VALUES ('$nom','$prenom','$date','$gender','$tel','$file')");
    $query =$pdo->prepare(  "INSERT INTO users(nom,prenom,dates,gender,tel,files) VALUES (?,?,?,?,?,?)");
    $query ->execute([$nom,$prenom,$date,$gender,$tel,$file]);

}

?>