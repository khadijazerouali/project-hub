<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abonnement-iptvpremium / Renouvelement</title>
    <link href="{{ asset('css/Renouvellement.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          @extends('layouts.app')

          @section('content')

            <section>   
                <div class="row py-5 px-3">
                    <div class="col-md-3">
                    <div class="image-container">
                        <img src="{{ asset('images/img3.png') }}" alt="" class="thumbnail" onclick="openModal()">
                        <span class="zoom-icon" onclick="openModal()"><i class="bi bi-search"></i></span>
                      </div>
                      
                      <div id="myModal" class="modal" onclick="closeModal()">
                        <span class="close">&times;</span>
                        <img class="modal-content mt-5" id="fullImage">
                      </div>
                    </div>
                    <div class="col-md-9">
                        <h1 class="h1R">Renouvellement d’abonnement</h1>
                        <div class="rating py-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span style="color: rgb(84, 82, 82);">(1 avis client)</span>
                          </div>
                          <h2 class="h2R">12.00 € – 59.00 €</h2>
                          <div class="form-group custom-form-group">
                            <select class="form-select custom-select" id="selectExample" onchange="updatePrice()">
                              <option selected>choisir une option</option>
                              <option value="1">1mois</option>
                              <option value="2">12mois</option>
                              <option value="3">3mois</option>
                              <option value="4">6mois</option>
                            </select>
                            <div id="priceDisplay" class="price-display"></div>
                          </div>
                        <div class="Nécessaire-button py-3">
                          <label for="Nécessaire" class="label mb-3">N° de la commande à renouveler <span id="Nécessaire">(Nécessaire)</span></label><br>
                          <input type="text" id="Nécessaire" class="Nécessaire">
                        </div>

                        <p id="p">
                            merci de nous fournir votre numéro de commande à renouveler svp .
                        </p>
                        <hr class="hr">
                        <hr class="hr">
                         
                        <div class="quantity-container  mx-5 py-3">
                            <div class="group-quantity">
                              <button class="quantity-button" onclick="decreaseQuantity()">
                                <i class="bi bi-chevron-down"></i>
                              </button>
                              <span id="quantity">5</span>
                              <button class="quantity-button" onclick="increaseQuantity()">
                                <i class="bi bi-chevron-up"></i>
                              </button>
                            </div>
                            <button id="orderButton" onclick="placeOrder()">
                              Commander Maintenant
                             <span class="order-icon">+</span>
                            </button>
                          </div>
                          <div id="alertMessage" class="alert-message" style="display: none;">
                            Veuillez remplir toutes les informations requises.
                          </div>
                          
                          <hr class="hr">

                         <div class="row px-5 py-3">
                          <p><strong>SKU:</strong>N/A</p><br>
                          <p><strong>Categories</strong><a class="A" href="{{ url('https://abonnement-iptvpremium.com/?product_cat=abonnement-iptv">   Abonnement IPTV</a>, <a class="A" href="https://abonnement-iptvpremium.com/?product_cat=abonnement-iptv">IPTV</a>,<a class="A" href="https://abonnement-iptvpremium.com/?product_cat=iptv-premium') }}"> IPTV Premium</a></p>
                        </div>
                    </div>
                </div>          
            </section>

            <section>
                <div class="row">
                  <div class="review-container py-3 px-5">
                    <button id="toggleButton" onclick="toggleForm()">() Avis</button>
                    <div id="reviewForm" class="hidden mt-4">
                      <h3>Add a review</h3>
                      <div id="reviewsContainer"></div>
                      <form onsubmit="addReview(event)">
                        <div class="form-group">
                          <p>
                            Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont indiqués avec *
                          </p>
                          <label for="stars">Your rating:</label>
                          <div class="stars" id="stars">
                            <span class="star" onclick="setRating(1)">★</span>
                            <span class="star" onclick="setRating(2)">★</span>
                            <span class="star" onclick="setRating(3)">★</span>
                            <span class="star" onclick="setRating(4)">★</span>
                            <span class="star" onclick="setRating(5)">★</span>
                          </div>
                          <input type="hidden" id="rating" value="0">
                        </div>
                        <div class="input-container">
                          <input type="text" id="name" class="input-field" placeholder="name" required>
                          <input type="email" id="email" class="input-field" placeholder="email" required>
                        </div>
                        <div class="form-group">
                          <textarea id="comment" class="textarea" placeholder="your review" required></textarea>
                        </div>
                        <div class="button-container">
                          <label class="save-button">
                            <input type="radio" name="save-option" value="save">
                            Enregistrer mon nom, mon e-mail et mon site dans le navigateur pour mon prochain commentaire.
                          </label><br>
                          <button type="submit" class="submit-button">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </section>

            <section>
              <div class="container-fluid mt-5">
                <h2 class="Related py-3">Related products</h2> 
                <div id="carouselExample" class="carousel slide" data-bs-ride="false"> 
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-0"> 
                                <div class="col-md-3 text-center">
                                  <a href="{{ route('Renouvelment2') }}"><img src="{{ asset('images/img1.png') }}" class="img-fluid fill-image"></a>
                                    <p class="image-description">
                                        Abbonnement IPTV Gold - I Smart TV, MAG - Formulaire, Android - iOS Apple TV, PC
                                    </p>
                                    <span class="span1">
                                        12.00€
                                        <br>
                                        49.00€
                                    </span>
                                </div>
                                <div class="col-md-3 text-center">
                                  <a href="{{ route('Renouvelment2') }}"><img src="{{ asset('images/img1.png') }}" class="img-fluid fill-image"></a>
                                    <p class="image-description">
                                        Abbonnement IPTV Gold - I Smart TV, MAG - Formulaire, Android - iOS Apple TV, PC
                                    </p>
                                    <span class="span1">
                                        12.00€
                                        <br>
                                        49.00€
                                    </span>
                                </div>
                                <div class="col-md-3 text-center">
                                   <a href="{{ route('renouvelement3') }}"><img src="{{ asset('images/img2.png') }}" class="img-fluid fill-image"></a>
                                    <p class="image-description">
                                        Abbonnement IPTV Gold - I Smart TV, 
                                    </p>
                                    <span class="span1">
                                        12.00€
                                        <br>
                                        49.00€
                                    </span>
                                </div>
                                <div class="col-md-3 text-center">
                                  <a href="{{ route('Renouvelment2') }}"><img src="{{ asset('images/img1.png') }}" class="img-fluid fill-image"></a>
                                    <p class="image-description">
                                        Abbonnement IPTV Gold - I Smart TV, MAG 
                                    </p>
                                    <span class="span1">
                                        12.00€
                                        <br>
                                        49.00€
                                    </span>
                                    
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            </section>

        </div>
    </div>
    @endsection
</body>
</html>