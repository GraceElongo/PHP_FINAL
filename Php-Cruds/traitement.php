<?php
include'salutation.class.php';

$etud= new Etudiant();
$etud->setMatricule($_POST['txtMat']);
$etud->setNom($_POST['txtNom']);
$etud->setPrenom($_POST['txtPrenom']);
$etud->setAge($_POST['txtAge']);
$etud->setDatenaiss($_POST['txtDateNaiss']);



if(isset($_POST["save"]) && $_POST["save"]=="Save"){
    $etud->enregistrement();
}
elseif(isset($_POST["update"]) && $_POST["update"]=="Update"){
    $etud->modification();
}
elseif(isset($_POST["delete"]) && $_POST["delete"] == "Delete"){
    $etud->delete();
}


?>