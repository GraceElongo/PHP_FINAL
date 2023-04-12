<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire ❤️</title>
    <link rel="stylesheet" href="styled.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <center><h1 class="text-primary">ETUDIANT</h1></center>
                    </div>
                    <div class="card-body">
                
                        <form action="traitement.php" method="post">
                            <center><h3>Identité</h3></center>
                            <label for="">Matricule</label>
                            <input type="text" name="txtMat" class="form-control">
                            <label for="">Nom</label>
                            <input type="text" name="txtNom" class="form-control">
                            <label for="">Prenom</label>
                            <input type="text" name="txtPrenom" class="form-control" >
                            <label for="">Age</label>
                            <input type="text" name="txtAge" class="form-control">
                            <label for="">Date Naissance</label>
                            <input type="date" name="txtDateNaiss" class="form-control">
                            <center><h3>Operation</h3></center>
                            <center>
                                <input type="submit" name="save" value="Save"  class="btn btn-primary">
                                <input type="submit" name="update" value="Update" class="btn btn-primary">
                                <input type="submit" name="delete" value="Delete"  class="btn btn-primary">
                                <input type="submit" name="cancel" value="Cancel" class="btn btn-primary">
                            </center>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>