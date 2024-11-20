<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container d-flex justify-content-between align-items-center">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="{{ route('index') }}" class="logo-button">
            <div class="logo-section d-flex align-items-center">
                <img src="{{ asset('images/4K.png') }}" alt="Logo" id="logo-img">
                <div>
                    <div class="logo-text-light">PREMIUM</div>
                    <div class="logo-text-dark">IPTV</div>
                </div>
            </div>
        </a>

        <button class="btn order-button me-auto" type="button"> 
            <i class="bi bi-chevron-double-right d-none d-lg-block icon-start"></i> Commander <br> maintenant 
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav d-flex align-items-center me-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-4" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="dot"></span>REVENDEUR<br>ASSISTANTE
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('mon_compte') }}">Mon Compte</a></li>
                        <li><a class="dropdown-item" href="{{ route('Renouvelement') }}">Renouvellement</a></li>
                        <li><a class="dropdown-item" href="{{ route('contacter_nous') }}">Contacter-Nous</a></li>
                        <li><a class="dropdown-item" href="{{ route('tutoriels') }}">Tutoriels</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('test_ipvt') }}"><span class="dot"></span>TEST IPTV</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('chaines_vods') }}"> <span class="dot"></span>CHAINES&VODS</a></li>
            </ul>
        </div>

        <i class="bi bi-cart-fill ms-3  d-none d-lg-block cart-icon"></i>
    </div>
</nav>
