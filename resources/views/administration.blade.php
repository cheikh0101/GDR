@extends('template_administration')

@section('title')
TB Administration | GDR
@endsection

@section('contenu')


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item" id="page-top">
                <a class="nav-link" href="#">
                    <i class="fas fa-calendar"></i>
                    <span>Date : {{ date("d/mY") }}</span></a>
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
                SEMESTRES
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#semestre3">
                    <span><i class="fa " aria-hidden="true">&#xf161;</i> Semestre 3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#semestre4">
                    <span><i class="fa " aria-hidden="false">&#xf161;</i>Semestre 4</span>
                </a>
            </li>
             <!-- Divider -->
             <hr class="sidebar-divider">
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#MaquetteLI.pdf">
                     <span> <i class="fas ">&#xf06e;</i>Voir la maquette</span>
                 </a>
             </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="/">
                    <span> <i class="fas ">&#xf122;</i>Retournez à l'acceuil?</span>
                </a>
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
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    <h3>Gestion Des Réclamations</h3>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#"  aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <i class="fa fa-clock" aria-hidden="true"></i> Heure : {{ date("h:i:sa") }}</span>
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{$administration->prenom}} {{$administration->nom}}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profilModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Deconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-body">
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
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des reclamations</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Matiere</th>
                                            <th>Semestre</th>
                                            <th>Types d'évaluation</th>
                                            <th>Commentaire</th>
                                            <th>Créée le</th>
                                            <th colspan="2" > <center> Infos Etudiants(prenom et n°dossier) </center></th>
                                        </tr>
                                    </thead>
                                    @if (count($reclamations) == 0)
                                    <p class="text-center font-weight-bold text-primary">AUCUNE RECLAMATION</p>
                                    @endif
                                   @foreach ($reclamations as $reclamation)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$reclamation->matiere}} </td>
                                        <td>{{$reclamation->semestre}} </td>
                                        <td>{{$reclamation->typeEvaluation}}</td>
                                        <td> {{$reclamation->commentaire}}</td>
                                        <td>{{$reclamation->created_at}}</td>
                                        <td>{{$reclamation->prenom}} {{$reclamation->nom}} </td>
                                        <td>{{$reclamation->num_dossier}} </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer py-2">
                            <a class="m-0 font-weight-bold text-primary" href="imprimer">Imprimer la liste</a>
                        </div>
                    </div>

                    <div id="semestre3">
                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <div class="row">
                                    <div class="col">
                                     Liste des reclamations du semestre 3
                                    </div>
                                    <div class="col">
                                     Total Reclamations :
                                     @foreach ($reclamations3 as $reclamation)
                                         {{$loop->count}}
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
                                            <th>Matiere</th>
                                            <th>Semestre</th>
                                            <th>Types d'évaluation</th>
                                            <th>Commentaire</th>
                                            <th colspan="2" > <center> Infos Etudiants(prenom et n°dossier) </center></th>
                                        </tr>
                                    </thead>
                                    @if (count($reclamations3) == 0)
                                    <p class="text-center font-weight-bold text-primary">AUCUNE RECLAMATION</p>
                                    @endif
                                    <div style="display: none">{{$i=0}}</div>
                                    @foreach ($reclamations3 as $reclamation3)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$reclamation3->matiere}} </td>
                                        <td>{{$reclamation3->semestre}} </td>
                                        <td>{{$reclamation3->typeEvaluation}}</td>
                                        <td> {{$reclamation3->commentaire}}</td>
                                        <td>{{$reclamation3->prenom}} {{$reclamation3->nom}}</td>
                                        <td>{{$reclamation3->num_dossier}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer py-2">
                            <a class="m-0 font-weight-bold text-primary" href="imprimer3">Imprimer la liste</a>
                        </div>
                    </div>
                    

                    <div id="semestre4">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">
                                   <div class="row">
                                       <div class="col">
                                        Liste des reclamations du semestre 4
                                       </div>
                                       <div class="col">
                                        Total Reclamations :
                                        @foreach ($reclamations4 as $reclamation)
                                            {{$loop->count}}
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
                                            <th>Matiere</th>
                                            <th>Semestre</th>
                                            <th>Types d'évaluation</th>
                                            <th>Commentaire</th>
                                            <th colspan="2" > <center> Infos Etudiants(prenom et n°dossier) </center></th>
                                        </tr>
                                    </thead>
                                    @if (count($reclamations4) == 0)
                                    <p class="text-center font-weight-bold text-primary">AUCUNE RECLAMATION</p>
                                    @endif
                                    <div style="display: none">{{$i=0}}</div>
                                    @foreach ($reclamations4 as $reclamation4)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$reclamation4->matiere}} </td>
                                        <td>{{$reclamation4->semestre}} </td>
                                        <td>{{$reclamation4->typeEvaluation}}</td>
                                        <td> {{$reclamation4->commentaire}}</td>
                                        <td> {{$reclamation4->prenom}} {{$reclamation4->nom}}</td>
                                        <td> {{$reclamation4->num_dossier}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                               </div>
                           </div>
                           <div class="card-footer py-2">
                            <a class="m-0 font-weight-bold text-primary" href="imprimer4">Imprimer la liste</a>
                        </div>
                       </div>
                       <!--fin semestre 4-->
                       <div class="row">
                           <div class="col"></div>
                           <div class="col">
                               <div id="MaquetteLI.pdf">
                                <embed src=img/MaquetteLI.pdf width=800 height=500 type='application/pdf'/>
                               </div>
                           </div>
                           <div class="col"></div>
                       </div>
                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Cheikh Tidiane GUEYE </a></span>
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
                    <a class="btn btn-primary" href="loginAdministration">Se deconnecter</a>
                </div>
            </div>
        </div>
    </div>

      <!-- Profil Modal-->
      <div class="modal fade" id="profilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informations sur le Profil</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="card">
                            <div class="card-header">
                                <p class="text-center"> UFR {{$administration->ufr}} | Département {{$administration->departement}} </p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p> Prénom : {{$administration->prenom}} </p>
                                        <p> Email : {{$administration->email}} </p>
                                        <p> Fonction : {{$administration->fonction}} </p>
                                    </div>
                                    <div class="col">
                                        <p> Nom : {{$administration->nom}} </p>
                                        <p>Année Académique : 2019-2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Fermé</button>
                </div>
            </div>
        </div>
    </div>

    @endsection
