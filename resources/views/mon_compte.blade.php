<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abonnement-iptvpremium / mon_compte</title>
    <link href="{{ asset('css/mon_compte.css') }}" rel="stylesheet">
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container-fluid">
        <div class="row">
            <section> 
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="Mh1">Se connecter</h1>
                    </div>
                    <div class="col-md-6">
                        <h1 class="Mh1">S’enregistrer</h1>
                    </div>
                </div>            
            </section>

            <section>
                
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
        
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-6 form-container-c">
                            <form method="POST" action="{{ route('login.submit') }}"> 
                                @csrf
                                
                                <label for="login-email" class="label">Identifiant ou e-mail *</label>
                                <input type="email" id="login-email" name="email" class="input-field" required>
                                
                                
                                <label for="login-password" class="label">Mot de passe *</label>
                                <div class="password-container">
                                    <input type="password" id="login-password" name="password" class="input-field" required>
                                    <span class="toggle-password" onclick="togglePassword()"><i class="fas fa-eye-slash"></i></span> 
                                </div>
                
                               
                                <div class="button-container-c">
                                    <button type="submit" class="submit-button">Se connecter</button>
                                    <label class="save-button">
                                        <input type="checkbox" name="save-option" value="save">
                                        Se souvenir de moi
                                    </label>
                                </div>
                                
                                <p class="forgot-password">Mot de passe oublié ?</p>
                            </form>
                        </div>
                
                        
                        <div class="col-md-6 form-container-c">
                            <form method="POST" action="{{ route('register.submit') }}">
                                @csrf
                                
                                <label for="register-email" class="label">E-mail *</label>
                                <input type="email" id="register-email" name="email" class="input-field" required>
                
                                <p class="paragraphe">
                                    Un lien permettant de définir un nouveau mot de passe sera envoyé 
                                    à votre adresse e-mail. <br>
                                    Vos données personnelles seront utilisées pour soutenir 
                                    votre expérience sur ce site Web, pour gérer l'accès à
                                    votre compte et à d'autres fins décrites dans 
                                    notre <a href="{{ url('/politique_confidentialite') }}" id="politique">politique de confidentialité.</a>
                                </p>
                
                           
                                <button type="submit" class="submit-button mb-2" style="margin-top: -10px; margin-left: 15px;">S’enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                
            </section>

        </div>
    </div>
    @endsection
</body>
</html>
