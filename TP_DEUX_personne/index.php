<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP A DEUX 💚 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-2">
                    <div class="card-header text-center" >
                        <h4>FORMULAIRE DE SAISIE</h4>
                    </div>
                    <div class="card-body">

                        <form action="professeur.clase.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="nom">Matricule :</label> 
		                        <input type="text" id="matricule" name="matricule" class="form-control" >
                            <div class="form-group mb-3">
                                <label for="nom">Nom :</label>
		                        <input type="text" id="nom" name="nom" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Post_Nom :</label>
		                        <input type="text" id="postnom" name="postnom" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Prenom :</label>
		                        <input type="text" id="prenom" name="prenom" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">Sexe :</label>
		                        <input type="text" id="sexe" name="sexe" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="nom">age :</label>
		                        <input type="text" id="age" name="age" class="form-control" >
                            </div>
                            <div class="form-group mb-2">
                                <label for="nom">Date d'engagement :</label>
		                        <input type="text" id="dateEng" name="dateEng" class="form-control" >
                            </div>
                            </div> <br>
                            <div class="form-group mb-1 text-center">
                                <input type="submit" value="Envoyer" class="btn btn-primary">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

