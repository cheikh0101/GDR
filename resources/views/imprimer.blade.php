<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <h1 class="text-center">
                    <u>
                        Liste Des Reclamations LGI2 Semestre 3 et 4
                    </u>
                </h1>
                <table class="table table-bordered ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>N°</th>
                            <th>SEMESTRE</th>
                            <th>MATIERE</th>
                            <th>Type Evaluation</th>
                            <th>COMMENTAIRE</th>
                            <th>Date Création</th>
                            <th>Professeur</th>
                            <th colspan="3">Infos Etudiants</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($reclamations as $reclamation)
                            <tr>
                                <td scope="row">{{++$i}}</td>
                                <td>{{$reclamation->semestre}}</td>
                                <td>{{$reclamation->matiere}}</td>
                                <td>{{$reclamation->typeEvaluation}}</td>
                                <td>{{$reclamation->commentaire}}</td>
                                <td>{{$reclamation->created_at}}</td>
                                <td>{{$reclamation->professeur}}</td>
                                <td> {{$reclamation->prenom}} </td>
                                <td> {{$reclamation->nom}} </td>
                                <td> {{$reclamation->num_dossier}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>