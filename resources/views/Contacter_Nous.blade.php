<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abonnement-iptvpremium / Contacter-Nous</title>
    <link href="{{ asset('css/contacter_nous.css') }}" rel="stylesheet">
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <div class="container-fluid">
        <div class="row">


            <section>                    
                <div class="full-width-div mb-4">
                    <p class="centered-text">Contacter-Nous</p>
                </div>                       
            </section>

            <section>
                <div class="row m-4">
                    <div class="col-md-6 contact">
                        <div class="flex-container">
                            <hr class="hr-contacter">
                            <h3 style="font-weight: bolder;">Nous contacter.</h3>
                            <p class="py-4">
                                Appelez-nous, envoyez-nous un e-mail ou remplissez le formulaire de contact et nous vous répondrons.
                            </p>
                        </div>
                    
                        <div class="icon-container mt-4"> 
                            <div class="icon-item">
                                <div class="icon-circle" id="telegram-icon">
                                    <i class="bi bi-envelope-at"></i>
                                </div>
                                <span class="span-contacter"> notre mail de contact: <br> Commande@abonnement-iptvpremium.com</span> 
                            </div>
                            <div class="icon-item">
                                <div class="icon-circle" id="phone-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <span class="span-contacter">Téléphone: <br> +123456789</span> 
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-6 form-container pt-4">     
                        <label for="name" class="label">Nom*</label>
                        <input type="text" id="name" class="input-field">
                    
                        <label for="password" class="label">E-mail *</label>
                        <input type="email" id="e-mail" class="input-field">

                        <div class="form-group custom-form-group">
                            <label for="selectExample" class="label">Type de demande*</label>
                            <select class="form-select custom-select" id="selectExample">
                                <option selected>commercial</option>
                                <option value="1">Technique</option>
                                <option value="2">Revendeur</option>
                            </select>
                        </div>
                        
                        <div class="form-group mt-3 custom-form-group">
                            <label for="textareaExample" class="label">Votre message*</label>
                            <textarea class="form-control custom-textarea" id="textareaExample" rows="3" placeholder="Écrivez votre message ici..."></textarea>
                        </div>
                        
                        
                        

                        <button class="submit-button">Envoyer</button>
                     
                </div>
                </div>
            </section>
            
        </div>
    </div>
    
@endsection

</body>
</html>