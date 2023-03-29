<?php

function Hello_Professeur($matricule, $nom, $postnom, $prenom, $sexe, $age, $date) {
    if ($sexe == 'M' || $sexe == 'm') {
        echo "Bonjour Monsieur le professeur " . $nom . " " . $postnom . " " . $prenom . "\n";
    }
    elseif (($sexe == 'F' || $sexe == 'f') && ($age < 18)) {
        echo "Bonjour Mademoiselle Professeur " . $nom . " " . $postnom . " " . $prenom . "\n";
    }
    elseif (($sexe == 'F' || $sexe == 'f') && ($age >= 18)) {
        echo "Bonjour Madame Professeur " . $nom . " " . $postnom . " " . $prenom . " " . $age . "\n";
    }
    else {
        echo "Cas non prévu. Veuillez vérifier vos saisies.\n";
    }
}
?>
