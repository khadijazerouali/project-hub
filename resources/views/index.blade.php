<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>abonnement-iptvpremium</title> --}}
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="container_fluid">
        <div class="row">

            <section>
                <div class="row" style="margin-left:12px;">
                    <div class="col-md-12 d-flex align-items-center full-width-text py-4">
                        <i class="bi bi-globe-asia-australia me-2 ball-icon"></i>
                        <h1 class="mb-0 titre">Les meilleurs Abonnements iptv en France et en Europe​</h1>
                        <i class="bi bi-globe-asia-australia ms-2 ball-icon"></i>
                    </div>
                </div>
            </section>
            
            <section>
                <div class="row" style="margin-left: 10px;">
                    <div class="col-md-6 pre-text">
                       <p>
                       <strong>Abonnement iptvpremium </strong>est le fournisseur le plus connus dans le marché d’IPTV ,<br>
                        nous offrons les meilleur <strong>abonnements IPTV</strong>de haute qualité et garanti sans <br>     
                        coupure avec 10 ans d’expérience.
                       </p>
                       <p>
                        Nos abonnements IPTV à le meilleur prix au marche de l’IPTV en Europe et dans le monde entier .
                       </p>
                       <br>
                       <p>
                        La liste de chaines de notre <strong>Code IPTV</strong>et disposent d’une playlist de plus de 69,000 chaines francophones et Internationaux en 4K/FHD/HD/SD , et un Catalogue de Vods très riche , avec la dernière mise à jour 2023 / 2024 de films et séries à la demande .
                       </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/tv_section.png') }}" alt="" width="100%" height="auto">
                    </div>
                </div>
            </section>

            <section>
                <div class="col-md-12">
                <h1 class="mini-titre py-4">DÉCOUVREZ LES PACK DE NOS ABONNEMENTS IPTV.</h1>
                </div>
            </section>

            <section>
                <div class="row justify-content-center g-1"  style="margin-left:45px;">
                    <div class="col-md-3 content">
                        <div class="logo-container">
                            <i class="bi bi-tv icon"></i> 
                        </div>
                        <h3 class="h2">Pack Gold</h3>
                        <h4 class="h3">12 Mois</h4>
                        <div class="price">
                            <sup style="font-size: large; font-weight: bolder;">€</sup>
                            <h1 style="font-weight: bolder;">49</h1>                           
                        </div>
                        <div class="checklist">
                            <div class="item">
                                <span>+ 14000 Chaines </span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>+ 50000 Vods multilingue</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Connexion simultanément</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Qualité FHD/HD/SD</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Technologie Antifreeze</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Chaines en Replay</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Satisfait ou Remboursé</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Support Technique 24h/7 par</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>email ou <a href="https://web.whatsapp.com/" id="whatsapp">whatsapp</a> </span>
                            </div>
                        </div>                    
                     
                        <div class="button-container">
                            <button class="button" style="background-image: url('{{ asset('images/black.jpg') }}');" >
                                <a  class="acommande" href="{{ route('Renouvelment2') }}"><span>COMMANDER</span></a>
                                <div class="icon-container">
                                    <i class="bi bi-cart-fill cart"></i>
                                </div>
                            </button>
                        </div>
                        

                    </div>

                    <div class="col-md-3 content background-image" style="color: rgb(255, 247, 240); background-image: url('{{ asset('images/black.jpg') }}');">
                        <div class="logo-container">
                            <i class="bi bi-tv icon"></i> 
                        </div>
                        <h3 class="h2">Pack Gold</h3>
                        <h4 class="h3">12 Mois</h4>
                        <div class="price">
                            <sup style="font-size: large; font-weight: bolder;color: white;">€</sup>
                            <h1 style="font-weight: bolder; color: white;">59</h1>                           
                        </div>
                        <div class="checklist">
                            <div class="item">
                                <span>+ 14000 Chaines </span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>+ 50000 Vods multilingue</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Connexion simultanément</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Qualité FHD/HD/SD</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Technologie Antifreeze</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Chaines en Replay</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Satisfait ou Remboursé</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Support Technique 24h/7 par</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>email ou <a href="https://web.whatsapp.com/" id="whatsapp">whatsapp</a> </span>
                            </div>
                        </div>                    
                     
                        <div class="button-centre">
                            <button class="C-button" >
                                <a class="acommande" href="{{ route('Renouvelement') }}" style="color: black;"><span>COMMANDER</span></a>
                                <div class="icon-container">
                                    <i class="bi bi-cart-fill cart"></i>
                                </div>
                            </button>
                        </div>
                    </div>


                    <div class="col-md-3 content">
                        <div class="logo-container">
                            <i class="bi bi-tv icon"></i> 
                        </div>
                        <h3 class="h2">Pack Gold</h3>
                        <h4 class="h3">12 Mois</h4>
                        <div class="price">
                            <sup style="font-size: large; font-weight: bolder;">€</sup>
                            <h1 style="font-weight: bolder;">79</h1>                           
                        </div>
                        <div class="checklist">
                            <div class="item">
                                <span>+ 14000 Chaines </span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>+ 50000 Vods multilingue</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Connexion simultanément</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Qualité FHD/HD/SD</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Technologie Antifreeze</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Chaines en Replay</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Satisfait ou Remboursé</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>Support Technique 24h/7 par</span>
                                <i class="bi bi-check2 checkmark"></i>
                            </div>
                            <div class="item">
                                <span>email ou <a href="https://web.whatsapp.com/" id="whatsapp">whatsapp</a> </span>
                            </div>
                        </div>                    
                     
                        <div class="button-container">
                            <button class="button" style="background-image: url('{{ asset('images/black.jpg') }}');">
                                <a  class="acommande" href="{{ asset('renouvelement3') }}"><span>COMMANDER</span></a>
                                <div class="icon-container">
                                    <i class="bi bi-cart-fill cart"></i>
                                </div>
                            </button>
                        </div>
                        

                    </div>
                </div>   
            </section>
          
            <section>
                <div id="imageCarousel" class="carousel slide mx-5 my-5" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner d-flex">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-2"><img src="{{ asset('images/1.png') }}" class="img-fluid" alt="Image 1"></div>
                                <div class="col-md-2"><img src="{{ asset('images/2.png') }}" class="img-fluid" alt="Image 2"></div>
                                <div class="col-md-2"><img src="{{ asset('images/3.png') }}" class="img-fluid" alt="Image 3"></div>
                                <div class="col-md-2"><img src="{{ asset('images/4.png') }}" class="img-fluid" alt="Image 4"></div>
                                <div class="col-md-2"><img src="{{ asset('images/5.png') }}" class="img-fluid" alt="Image 5"></div>
                                <div class="col-md-2"><img src="{{ asset('images/6.png') }}" class="img-fluid" alt="Image 6"></div>
                            </div>
                            
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-2"><img src="{{ asset('images/5.png') }}" class="img-fluid" alt="Image 7"></div>
                                <div class="col-md-2"><img src="{{ asset('images/8.png') }}" class="img-fluid" alt="Image 8"></div>
                                <div class="col-md-2"><img src="{{ asset('images/1.png') }}" class="img-fluid" alt="Image 1"></div>
                                <div class="col-md-2"><img src="{{ asset('images/2.png') }}" class="img-fluid" alt="Image 2"></div>
                                <div class="col-md-2"><img src="{{ asset('images/3.png') }}" class="img-fluid" alt="Image 3"></div>
                                <div class="col-md-2"><img src="{{ asset('images/4.png') }}" class="img-fluid" alt="Image 4"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            
            <section>
                <div class="container py-4">
                    <div class="section">
                        <i class="bi bi-android2 icon"></i>
                        <h3>Satisfait ou Remboursé</h3>
                        <hr class="divider">
                        <p class="px-2">
                            Satisfait ou Remboursé
                            Nous sommes sûrs que vous serez satisfait de notre abonnement IPTV.
                            Dans le cas échéant, nous procéderons au remboursement de votre abonnement IPTV.
                            A condition que ce soit signalé sous 48h aprés l'installation de votre abonnement IPTV.
                        </p>                      
                    </div>
                    <div class="section">
                        <i class="bi bi-rocket-takeoff-fill icon"></i>
                        <h3>Satisfait ou Remboursé</h3>
                        <hr class="divider">
                        <p class="px-2">
                            Satisfait ou Remboursé
                            Nous sommes sûrs que vous serez satisfait de notre abonnement IPTV.
                            Dans le cas échéant, nous procéderons au remboursement de votre abonnement IPTV.
                            A condition que ce soit signalé sous 48h aprés l'installation de votre abonnement IPTV.
                        </p>     
                    </div>
                    <div class="section">
                        <i class="bi bi-gear icon"></i>
                        <h3>Satisfait ou Remboursé</h3>
                        <hr class="divider">
                        <p class="px-2">
                            Satisfait ou Remboursé
                            Nous sommes sûrs que vous serez satisfait de notre abonnement IPTV.
                            Dans le cas échéant, nous procéderons au remboursement de votre abonnement IPTV.
                            A condition que ce soit signalé sous 48h aprés l'installation de votre abonnement IPTV.
                        </p>     
                    </div>
                </div>
            </section>

            <section>
                <div class="row px-4">
                <h1 style="font-weight: bolder;">Nos Produit.</h1>
                <p>Warning: Undefined array key "products_gap_tablet" in /home/ismail/public_html/wp-content/plugins/starlitte-core/includes/elementor/templates/wgl-products-grid.php on line 266 Warning: Undefined array key "products_gap_mobile" in /home/ismail/public_html/wp-content/plugins/starlitte-core/includes/elementor/templates/wgl-products-grid.php on line 267</p>
                </div>
            </section>

            <section>
                <div class="container-fluid mt-5"> 
                    <div id="carouselExample" class="carousel slide" data-bs-ride="false"> 
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row g-0"> 
                                    <div class="col-md-2 text-center">
                                        <a href="Renouvelment2.html">
                                        <img src="{{ asset('images/img1.png') }}" class="img-fluid fill-image" alt="">
                                        </a>
                                        <p class="image-description">
                                            Abbonnement IPTV Gold - I Smart TV, MAG - Formulaire, Android - iOS Apple TV, PC
                                        </p>
                                        <span class="span1">
                                            12.00€
                                            <br>
                                            49.00€
                                        </span>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <a href="{{ route('Renouvelment2') }}">
                                            <img src="{{ asset('images/img1.png') }}" class="img-fluid fill-image" alt="">
                                            </a>
                                        <p class="image-description">
                                            Abbonnement IPTV Gold - I Smart TV, MAG - Formulaire, Android - iOS Apple TV, PC
                                        </p>
                                        <span class="span1">
                                            12.00€
                                            <br>
                                            49.00€
                                        </span>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <a href="{{ route('renouvelement3') }}">
                                        <img src="{{ asset('images/img2.png') }}" class="img-fluid fill-image" alt="">
                                        </a>
                                        <p class="image-description">
                                            Abbonnement IPTV Gold - I Smart TV, 
                                        </p>
                                        <span class="span1">
                                            12.00€
                                            <br>
                                            49.00€
                                        </span>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <a href="{{ route('Renouvelement') }}">
                                        <img src="{{ asset('images/img3.png') }}" class="img-fluid fill-image" alt="">
                                       </a>
                                        <p class="image-description">
                                            Abbonnement IPTV Gold - I Smart TV, MAG 
                                        </p>
                                        <span class="span1">
                                            12.00€
                                            <br>
                                            49.00€
                                        </span>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <a href="{{ route('Renouvelment2') }}">
                                            <img src="{{ asset('images/img1.png') }}" class="img-fluid fill-image" alt="">
                                        </a>                                        
                                        <p class="image-description">
                                            Abbonnement IPTV Gold - I Smart TV, MAG - Formulaire, Android - iOS Apple TV, PC
                                        </p>
                                        <span class="span1">
                                            12.00€
                                            <br>
                                            49.00€
                                        </span>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <a href="{{ route('Renouvelment2') }}">
                                            <img src="{{ asset('images/img1.png') }}" class="img-fluid fill-image" alt="">
                                        </a>  
                                        <p class="image-description">
                                            Abbonnement IPTV Gold - I Smart TV, MAG - Formulaire, Android 
                                        </p>
                                        <span class="span1">
                                            12.00€
                                            <br>
                                            49.00€
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row g-0"> 
                                    <div class="col-md-2 text-center">
                                        <a href="{{ route('Renouvelment2') }}">
                                            <img src="{{ asset('images/img1.png') }}" class="img-fluid fill-image" alt="">
                                        </a>  
                                        <p class="image-description">
                                            Abbonnement IPTV Gold - I Smart TV, MAG - Formulaire, Android - iOS Apple TV, PC
                                        </p>
                                        <span class="span1">
                                            12.00€
                                            <br>
                                            49.00€
                                        </span>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <a href="{{ asset('Renouvelment2') }}">
                                            <img src="{{ asset('images/img1.png') }}" class="img-fluid fill-image" alt="">
                                        </a>  
                                        <p class="image-description">
                                            Abbonnement IPTV Gold - I Smart TV, MAG - Formulaire, Android - iOS Apple TV, PC
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"></span>
                        </button>
                    </div>
                </div>
            </section>    
            
        </div>
    </div>
    @endsection
</body>
</html>
