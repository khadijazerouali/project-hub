<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abonnement-iptvpremium / Toturiels</title>
    <link href="{{ asset('css/toturiel.css') }}" rel="stylesheet">
  
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <div class="container-fluid">
        <div class="row">

            <section>
                <div class="container-fluid item-container" style="background-image: url('{{ asset('images/tutoriel.png') }}');">
                    <div class="button-container">
                        <button class="action-btn" onclick="alert('Button clicked!')">tutoriel</button>
                        <p class="description-X">Comment configurer l’application Set IPTV ?! </p>
                    </div>
                
                    <hr class="divider my-4">
                
                    <div class="extra-info">
                        <span class="date">
                            <ul>
                                <li>mars 3, 2022</li>
                                <li>0 Comments</li>
                                <li>By admin_lgp75j0j</li>
                            </ul>
                        </span>
                        <span class="like-button" onclick="toggleLike()">
                            <i class="bi bi-heart" id="like-icon"></i> 
                            <span id="like-count">0</span>
                        </span>
                    </div>
                </div>
                
            </section>

            <section>
                <h1 style="text-align: center; font-size: xx-large; font-weight: bolder;padding: 40px;">
                    Set iptv configuration
                </h1>
                <p style="color: rgb(63, 63, 63); margin-left: 15px; line-height: 2;">
                    Set IPTV est une nouvelle application pour IPTV qui permet de lire davantage de contenus et de streaming. L’application ne fournit pas directement d’abonnement ni de chaînes. C’est une interface qui vous aide à les gérer, mais seulement pour les chaînes vidéos et les contenus vidéos. C’est simplement lecteur multimédia pour IPTV, qui vous permet de créer une liste de lecture rapide et automatique. Ainsi, vous devriez avoir un abonnement IPTV avant de l’utiliser.
                </p>
                <h1 style="font-size: xx-large; font-weight: bolder;padding: 40px;">
                    Méthode de configuration 1 : Basé sur le lien M3u
                </h1>
                <p style="color: rgb(63, 63, 63); margin-left: 20px;">
                    1- Chercher l’application Set IPTV  dans le store de votre smart TV ou votre TV Box et installer là , après l’installation ouvrez votre application pour avoir l’adresse Mac .Set ip
                </p>
            </section>

            <section>

                <img src="{{ asset('images/ziz.png') }}" alt="" width="1000px" style="margin-left: 20px;">
                <p style="color: rgb(63, 63, 63); margin-left: 15px;padding: 15px;">
                    2 – une fois l’adresse Mac est récupérer , connecter vous dans le site officiel de l’application Set IPTV https://setsysteme.com/set.app
                </p>
                <hr>
            </section>

            <section>

                <img src="{{ asset('images/titt.png') }}" alt="" width="1000px" style="margin-left: 20px;">
                <p style="color: rgb(63, 63, 63); margin-left: 15px;padding: 15px;">
                    Mettez l’adresse Mac de votre application dans le champ 1 , le lien m3u de votre abonnement IPTV dans le champ 2 ,  cochez la vérification captcha pour autoriser l’envoie du Playlist et enfin cliquer sur le bouton SEND en haut .

                    3 – Après ses étapes , votre Playlist a été bien envoyé vers votre application , i vous suffit juste de redémarrer cette dernière et attendre le chargement de votre liste de chaines et vods .                </p>
                <hr>
            </section>

            <section>

                <img src="{{ asset('images/yy.png') }}" alt="" width="1000px" style="margin-left: 20px;">
                <h1  style="font-size: xx-large; font-weight: bolder;padding: 40px;">
                    Méthode de configuration 2 : Basé sur les Codes Xtream (recommandé)
                </h1>
                <p style="color: rgb(63, 63, 63); margin-left: 15px;padding: 15px;">
                    1 – après la récupération de l’adresse Mac et l’ouverture du site de l’application Set IPTV commande dans la première méthode , vous devez cliquer sur l’option Xtream codes infos .                </p>
                <hr>
            </section>

            <section>
                <div class="row" style="background-color: rgb(225, 225, 225);">
                  <div class="container py-3 px-5">
                      <form>
                        <div class="form-group">
                            <h1 style="font-weight: bolder; font-size: xx-large;">
                                Laisser un commentaire
                            </h1>
                          <p>
                            Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont indiqués avec *
                          </p>
                     
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
            
            </section>
        </div>
    </div>
    @endsection
</body>
</html>