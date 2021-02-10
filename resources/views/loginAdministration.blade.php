@extends('template_login')

@section('title')
Login Administration | GDR
@endsection

@section('contenu')
    <div class="container">

        <div class="forms-container">
            <div class="signin-signup">
                <form action="/loginAdministration" method="POST" class="sign-in-form">
                    @csrf
                    @isset($message)
                    <div class="alert alert-warning alert-dismissible fade show" style="background-color: red; height:50px;" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong >{{$message}}</strong> 
                      </div>    
                      <script>
                        $(".alert").alert();
                      </script>
                      @endisset
                    <h2 class="title">Administration</h2>
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
                        Bienvenue cher Membre de l'Administration,
                        ce portail a été mis en place pour simplifier la gestion des réclamations
                        auprès du département informatique de l'université de Thiés.
                        <br>
                        <a href="/">Retourner à l'Acceuil</a>
                    </p>
                </div>
            </div>
           
        </div>
    </div>

    <script>
        alert('Login : cheikh@gmail.com || Mot de Passe:123456 ');
    </script>

@endsection
