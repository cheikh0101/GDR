@extends('template_bienvenue')

@section('title')
Bienvenue | GDR
@endsection

@section('contenu')

<div id="acceuil" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4 py-5">
                                    <div class="card-body">
                                        <h6><i class="fa " aria-hidden="true">&#xf05a;</i><b>Gestion Des Réclamations</b></h6>
                                        <p>
                                        <i class="fa" aria-hidden="true">&#xf10d;</i>
                                         La <b>Gestion des Réclamations </b> est une application Web qui vise à informatiser le processus des demandes de réclamation au sein du département Informatique de l'UFR SET de l'Université de Thies.
                                         <i class="fa" aria-hidden="true">&#xf10e;</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="techUtilisee">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4 py-5">
                                    <div class="card-body">
                                        <h6> <i class="fa " aria-hidden="true">&#xf05a;</i> <b>Technologies Utilisées</b></h6>
                                        <p>
                                            <i class="fa " aria-hidden="true">&#xf068;</i>
                                            Dans le cadre de ce projet différentes technologies ont été utilisées
                                            plus particulièrement le Framework PHP <u> <a href="https://laravel.com/docs/8.x"> Laravel </a> .</u>
                                            
                                            <br>
                                            <i class="fa " aria-hidden="true">&#xf068;</i>
                                            Pour offrir à l'utilisateur un service de  nous avons utiliser concernant l'aspect visuel le Framework CSS <u> <a href="https://getbootstrap.com/"> Bootstrap</a></u> plus particulièrement &nbsp;  la version 4.5.

                                            <br>
                                            <i class="fa " aria-hidden="true">&#xf068;</i>
                                            Pour mieux versionner l'application et aussi partager le code source nous avons utiliser les outils <a href="https://github.com/cheikh0101/projet_reclamation"> Git et GitHub </a>.

                                            <br>
                                            <i class="fa " aria-hidden="true">&#xf068;</i>
                                            Concernant l'hébergement nous avons opter pour un hébergeur de qualité permettant un chargement plus rapide de nos pages à savoir 
                                            <a href="https://dashboard.heroku.com/">Heroku</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="maquette">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4 py-5">
                                    <div class="card-body">
                                        <h6><i class="fa " aria-hidden="true">&#xf05a;</i><b>Maquette</b></h6>
                                        <p>
                                            Dans le cadre de ce projet plusieurs interfaces ont été développé à savoir celle de l'<a href="#">ACCEUIL</a> qui permet de mieux comprendre le but du projet et comment il a été réalisé.

                                             <div class="card border-0 shadow">
                                                <img src="img/acceuil.png" class="card-img-top" alt="page d'acceuil">
                                                <div class="card-body text-center">
                                                  <h5 class="card-title mb-0"> Acceuil</h5>
                                                  <div class="card-text text-black-50">
                                                    <p>
                                                        Page d'ACCEUIL.
                                                    </p>
                                                  </div>
                                                </div>
                                            </div>
                                        </p>

                                        <p>
                                            Nous disposons d'une page <a href="#">CONNEXION</a> composée d'une partie réservée à l' <u> ADMINISTRATION </u> et une partie réservée aux <u> ETUDIANTS </u>.
                                            <div class="row">
                                                <div class="col">
                                                    <div class="card-body text-center">
                                                        <img src="img/connexion_etudiant.png" class="card-img-top" alt="page de connexion etudiant">
                                                      <h5 class="card-title mb-0"> Etudiant</h5>
                                                      <div class="card-text text-black-50">
                                                        <p>
                                                            Page de Connexion Etudiant.
                                                        </p>
                                                       </div>
                                                    </div>
                                                </div>   

                                                <div class="col">
                                                    <div class="card-body text-center">
                                                        <img src="img/connexion_administration.png" class="card-img-top" alt="page de connexion administration">
                                                      <h5 class="card-title mb-0"> Administration</h5>
                                                      <div class="card-text text-black-50">
                                                        <p>
                                                           Page de Connexion Administration.
                                                        </p>
                                                       </div>
                                                    </div>
                                                </div>     
                                            </div>
                                               
                                        </p>

                                        <p>
                                            Et de 2 Tableaux de Bord l'un permettant à l'étudiant de faire toutes les actions en rapport avec la demande de réclamation et une autre réservée à l'administration.

                                            <div class="row">
                                                <div class="col">
                                                    <div class="card-body text-center">
                                                        <img src="img/etudiant.png" class="card-img-top" alt="espace etudiant">
                                                      <h5 class="card-title mb-0"> Etudiant</h5>
                                                      <div class="card-text text-black-50">
                                                        <p>
                                                            Espace ETUDIANT.
                                                        </p>
                                                       </div>
                                                    </div>
                                                </div>   

                                                <div class="col">
                                                    <div class="card-body text-center">
                                                        <img src="img/administration.png" class="card-img-top" alt="espace administration">
                                                      <h5 class="card-title mb-0"> Administration</h5>
                                                      <div class="card-text text-black-50">
                                                        <p>
                                                            Espace ADMINISTRATION.
                                                        </p>
                                                       </div>
                                                    </div>
                                                </div>     
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<footer class="sticky-footer bg-white mb-5 shadow-lg">
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

@endsection
