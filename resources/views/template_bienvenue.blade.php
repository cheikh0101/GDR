<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
  <body>

    <nav class="navbar navbar-expand-md bg-primary fixed-top navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">GESTION DES RECLAMATIONS</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#acceuil">Acceuil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#techUtilisee">Technologies Utilisees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#maquette">Maquette des interfaces</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Connexion
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="loginEtudiant"> <i class="fa" aria-hidden="true">&#xf406;</i>Etudiant</a>
                    <a class="dropdown-item" href="loginAdministration"><i class="fa" aria-hidden="true">&#xf2bd;</i>Administration</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline" action="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class='fas fa-calendar-alt' style='font-size:18px'></i>
                &nbsp;{{date("Y/m/d")}} || &nbsp;<i class='fas fa-clock' style='font-size:24px'></i> {{date("h:m:sa")}}
            </form>
        </div>

       
    </nav>


    @yield('contenu')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script>
        $(document).ready(function(){
           $("#searchInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#lessonList .col-12").filter(function() {
                 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
           });
        });
     </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
