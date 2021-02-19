@extends('template_administration')

@section('title')
Tableau de Bord
@endsection

@section('contenu')
    @isset($message)
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong class="text-center">{{$message}}</strong> 
        </div>
    @endisset
    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!-- Nav Item - Dashboard -->
            <li class="nav-item" id="page-top">
                <a class="nav-link" href="#">
                    <i class="fas fa-calendar"></i>
                    <span>{{ date("d/m/Y") }}</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de Bord</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Nouvelles Réclamations
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#jereclame">
                    <i class="fa " aria-hidden="true"> &#xf00c; </i>
                    <span>Je réclame!</span>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <a class="nav-link collapsed" href="#profil">
                    <i class="fa " aria-hidden="true"> &#xf00c; </i>
                    <span>Profil</span>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <a class="nav-link collapsed" href="/">
                    <i class="fas ">&#xf122;</i>
                    <span>Retourner à l'Acceuil</span>
                </a>
                 <!-- Divider -->
                 <hr class="sidebar-divider">
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-3" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        </button>
                    </form>

                    <h1 class="shadow">GESTION DES RECLAMATIONS</h1>
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="dropdown-item" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clock" aria-hidden="true"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{date("h:i:sa")}}</span>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Deconnexion</span>
                            </a>
                        </li>
                        
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @isset($reclamations)
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tableau de mes réclamations</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <div class="row">
                                    <div class="col">
                                     Liste de mes réclamations
                                    </div>
                                    <div class="col">
                                        @foreach ($reclamations as $reclamation)
                                            <h4 class="card-title">
                                                <marquee>
                                                Total RECLAMATIONS :
                                                {{$loop->count}}  
                                                </marquee>
                                            </h4>
                                            @break
                                            @endforeach
                                     </div>
                                </div>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Types d'évaluation</th>
                                            <th>Semestre</th>
                                            <th>Commentaire</th>
                                            <th>Matiere</th>
                                            <th>Créé le</th>
                                        </tr>
                                    </thead>
                                    @foreach ($reclamations as $reclamation)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$reclamation->typeEvaluation}}</td>
                                            <td>{{$reclamation->semestre}}</td>
                                            <td>{{$reclamation->commentaire}}</td>
                                            <td>{{$reclamation->matiere}}</td>
                                            <td>{{$reclamation->created_at}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    @endisset
                </div>
                <!-- /.container-fluid -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @isset($reclamation3)
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tableau de mes réclamations </h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <div class="row">
                                    <div class="col">
                                        Liste de mes réclamations
                                    </div>
                                    <div class="col">
                                        @foreach ($reclamation3 as $reclamation)
                                            <h4 class="card-title">
                                                <marquee>
                                                Total RECLAMATIONS :
                                                {{$loop->count}}  
                                                </marquee>
                                            </h4>
                                            @break
                                            @endforeach
                                        </div>
                                    
                                </div>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Types d'évaluation</th>
                                            <th>Semestre</th>
                                            <th>Commentaire</th>
                                            <th>Matiere</th>
                                        </tr>
                                    </thead>
                                
                                    @foreach ($reclamation3 as $reclamation)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$reclamation->typeEvaluation}}</td>
                                            <td>{{$reclamation->semestre}}</td>
                                            <td>{{$reclamation->commentaire}}</td>
                                            <td>{{$reclamation->matiere}}</td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    @endisset
                </div>
                <!-- /.container-fluid -->
                

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <!-- Formulaire de reclamation -->
                <div id="jereclame">
                   <form action="/etudiant{{--$etudiants->id--}}" method="POST">
                        @csrf
                              <h4 class="modal-title">Formulaire de demande de Réclamation</h4>
                              <div class="row">
                                <div class="col-lg-6 mb-4">
                                  <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                      <h6 class="m-0 font-weight-bold text-primary">Informations Importantes</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="sel1">Semestre</label>
                                            <select class="form-control" name="semestre">
                                                <option value="semestre 3">Semestre 3</option>
                                                <option value="semestre 4">Semestre 4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <select class="form-control" name="user_id" style="display: none" id="">
                                            <option> {{$etudiant[0]->id}} </option>
                                          </select>
                                          <select class="form-control" name="email" style="display: none" id="">
                                            <option> {{$etudiant[0]->email}} </option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Matiere</label>
                                            <select class="form-control" name="matiere" >
                                                <option value="probabilite">Probabilites et Statistiques</option>
                                                <option value="calcul_numerique">Calcul Numerique</option>
                                                <option value="se">Systemes d'Exploitation</option>
                                                <option value="intro_reseaux">Introduction aux réseaux</option>
                                                <option value="si">Analyse et Conception de Systèmes d'Informations</option>
                                                <option value="bdr">Introduction aux Bases de donnees relationnelles</option>
                                                <option value="ppprofessionnel">Projet Personnel Professionnel</option>
                                                <option value="anglais3">Anglais 3</option>
                                                <option value="intro_securite">Introduction à la securité</option>
                                                <option value="reseau_locaux">Réseaux locaux</option>
                                                <option value="poo1">Programmation Orientée Objet 1</option>
                                                <option value="">Analyse et Conception des Systèmes Orientés Objet</option>
                                                <option value="acsoo">Technologies XML</option>
                                                <option value="gestion_projets">Gestion de projets</option>
                                                <option value="leadership">Leadership et développement personnel</option>
                                                <option value="anglais4">Anglais 4</option>
                                                <option value="algo_sd">Algorithmique et Structures de donnees</option>
                                                <option value="dev_web1">Developpement Web 1</option>
                                                <option value="dev_web2">Developpement Web 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sel1">Type d'évaluation</label>
                                            <select class="form-control" name="typeEvaluation" >
                                                <option value="Premier Devoir">Devoir 1</option>
                                                <option value="Deuxieme Devoir">Devoir 2</option>
                                                <option value="Examen premiere session">Examen premiere session</option>
                                                <option value="Examen deuxieme session">Examen deuxieme session</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                  <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                      <h6 class="m-0 font-weight-bold text-primary">Informations Importantes</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Commentaire </label>
                                            <textarea class="form-control" rows="5" name="commentaire"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Professeur </label>
                                            <select class="custom-select" name="professeur" id="">
                                                <option >Mouhamadou Thiam</option>
                                                <option >Papa Diop</option>
                                                <option >Cheikh Sarr</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col"><button type="reset" class="btn btn-danger btn-block">Reset</button></div>
                                  <div class="col"><button class="btn btn-primary btn-lg btn-block" type="submit" >Enregistrer</button></div>
                              </div>
                        </div>
                        </div>
                      </div>
                    </form>
                </div>
                <!--Fin formulaire de reclamation-->
                        </div>
                        <!--debut profil-->
                        <div id="profil">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            Profil
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    Nom :
                                                    <hr>
                                                    Prenom :
                                                    <hr>
                                                    Email :
                                                    <hr>
                                                    Département :
                                                    <hr>
                                                    Niveau :
                                                </div>
                                                <div class="col">
                                                    {{$etudiant[0]->nom}}
                                                    <hr>
                                                    {{$etudiant[0]->prenom}}
                                                    <hr>
                                                    {{$etudiant[0]->email}}
                                                    <hr>
                                                    {{$etudiant[0]->departement}}
                                                    <hr>
                                                    {{$etudiant[0]->niveau}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--fin profil-->
                    </div>
                    
                </div>
                
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <a  data-toggle="modal" class="btn btn-primary" data-target="#myModal" type="button"> Cheikh Tidiane Gueye </a> </span>
                    </div>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
                    
                            <!-- Modal Header -->
                            <div class="modal-header bg-primary">
                            <h4 class="modal-title">A propos de CTG</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                    
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <div class="card shadow" style="width: 18rem;">
                                            <img class="card-img-top" src="img/avataaars.svg" alt="image de profil">
                                            <div class="card-body">
                                            <p class="card-text">
                                                Nom : GUEYE
                                                <hr>
                                                Prenom : Cheikh Tidiane 
                                                <hr>
                                                Numero Dossier : 19030100401
                                                <hr>
                                                Email : ctidiane.gueye1@univ-thies.sn
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>
                    
                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermé</button>
                            </div>
                    
                        </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Se deconnecter?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Cliquez sur "Se deconnecter" si vous etes sures de vouloir se deconnecter</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-primary" href="/loginEtudiant">Se deconnecter</a>
                </div>
            </div>
        </div>
    </div>


@endsection
