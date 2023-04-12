<?php

include('ConnexionDB.php');

class Etudiant{
      private $Matricule;
      private $Nom; 
      private $Prenom;
      private $Age;
      private $DateNaiss;



      // la methode get
      public function getMatricule(){
         return $this->Matricule; 
      }
      public function getNom(){
         return $this->Nom; 
      }  
      public function getPrenom(){
         return $this->Prenom; 
      }
      public function getAge(){
         return $this->Age; 
      }
      public function getDateNaiss(){
         return $this->DateNaiss; 
      }
      //  la methode set 
      public function setMatricule($Matricule){
         return $this->Matricule= $Matricule; 
      }

      public function setNom($Nom){

         if(!empty($Nom) and strlen($Nom)>3){
            return $this->Nom=$Nom; 
         }
      }  
      public function setPrenom($Prenom){
         return $this->Prenom=$Prenom; 
      }
      public function setAge($Age){
         return $this->Age=$Age; 
      }
      public function setDatenaiss($DateNaiss){
         return $this->DateNaiss=$DateNaiss; 
      }
         public function salut(){
            echo " bonjour MR".$this->getMatricule()."".$this->getNom()."".$this->getPrenom()."".$this->getAge()."".
            $this->getDateNaiss();

         }
         public function enregistrement(){
         include 'ConnexionDB.php';
         $req=$bdd->prepare("INSERT into Etudiant (Matricule, Nom,Prenom,Age,DateNaiss) Values(:Matricule, :Nom, :Prenom, :Age, :DateNaiss)");
         $req->execute(array(':Matricule'=>$this->getMatricule(),
                              ':Nom'=>$this->getNom(),
                              ':Prenom'=>$this->getPrenom(),
                              ':Age'=>$this->getAge(),
                              ':DateNaiss'=>$this->getDateNaiss()
                        ));
                     echo "etudiant enregistrée reussi!!";
         }
         public function modification(){
            include 'ConnexionDB.php';
            $req=$bdd->prepare("UPDATE Etudiant SET Nom = :Nom, Prenom = :Prenom, Age = :Age, DateNaiss = :DateNaiss WHERE Matricule = :Matricule " );
            $req->execute(array(':Matricule'=>$this->getMatricule(),
                                 ':Nom'=>$this->getNom(),
                                 ':Prenom'=>$this->getPrenom(),
                                 ':Age'=>$this->getAge(),
                                 ':DateNaiss'=>$this->getDateNaiss()
                           ));
                        echo "etudiant modifier reussi!!";
         }

         public function delete(){
            include 'ConnexionDB.php';
            $req = $bdd->prepare("DELETE FROM Etudiant WHERE Matricule = :Matricule");
            $req->execute(array(':Matricule' => $this->getMatricule()));
            echo "Etudiant supprimé avec succès!";
        }
        
   }

?>