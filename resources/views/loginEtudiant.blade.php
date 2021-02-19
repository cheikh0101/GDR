@extends('template_login')

@section('title')
    Login Etudiant | GDR
@endsection

@section('contenu')

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="/loginEtudiant" method="POST" class="sign-in-form">
                    @csrf
                    @isset($message)
                    <div class="alert alert-warning alert-dismissible fade show" style="background-color: #d63031; height:50px;" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong >{{$message}}</strong> 
                      </div>    
                      <script>
                        $(".alert").alert();
                      </script>
                      @endisset
                    <h2 class="title">Etudiant</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" required placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" required name="password" placeholder="Mot de Passe" />
                    </div>
                    <!--<input type="submit" value="Se Connecter" class="btn solid" />-->

                    <button class="btn solid" type="submit">
                        Se connecter
                    </button>

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h2 class="title">Information</h2>
                    <p>
                        Bienvenue cher étudiant,
                        ce portail a été mis en place pour simplifier vos démarches de réclamation des notes
                        auprès du département informatique de l' <a href="https://www.univ-thies.sn/"> Université de Thies </a>.
                         Vous pouvez dés maintenant vous connecter afin de pouvoir effectuer votre réclamation.

                        <br>
                        <a href="/">Retourner à l'Acceuil</a>
                    </p>
                </div>
            </div>
           
        </div>
    </div>

    <script>
        alert('Login1 :cheikh@gmail.com || Mot de Passe:123456 // Login2:fatima@gmail.com || Mot de passe:123456 ');
    </script>

@endsection

