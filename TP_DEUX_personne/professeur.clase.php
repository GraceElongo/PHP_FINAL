<?php
include('traitement.php');

if(isset($_POST['nom'])) {
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $age = $_POST['age'];
    $date = $_POST['dateEng'];

    Hello_Professeur($matricule, $nom, $postnom, $prenom, $sexe, $age, $date);
}

?>