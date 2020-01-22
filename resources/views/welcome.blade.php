<!DOCTYPE html>
    <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mexpress</title>
        <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >

    </head>

<body>
<!-- Navigacijski (top-bar) -->
<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text"><i class="fa fa-truck" aria-hidden="true"></i> Mexpress</li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="#cjenik"><i class="fa fa-money" aria-hidden="true"></i> Cjenik</a></li>
            <li><a href="{{ route('orders.tracking') }}"><i class="fa fa-cubes" aria-hidden="true"></i> Praćenje pošiljke</a></li>
        @if (Route::has('login'))
           @auth
            <li><a href="{{ url('/home') }}"><i class="fa fa-user" aria-hidden="true"></i> Korisnički panel</a></li>
           @else
           <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Prijava</a></li>
           @if (Route::has('register'))
           <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Registracija</a></li>
           @endif
           @endauth
        @endif
        </ul>
    </div>
</div>

<!-- Content ispod navigacijske -->
<div class="callout large">
    <div class="row column text-center">
        <h1>Razbijamo predrasude o brzoj dostavi</h1>
        <p class="lead">Pratite, šaljite i primajte pošiljke uz vaš Mexpress</p>
        <a href="{{ asset('/vizija/vizija.pdf') }}" class="button large">Saznajte više o projektu (vizija)</a>
        <a href="https://github.com/giganttus/RWA_mx" class="button large">Github projekta</a>
    </div>
</div>

<!-- Uvodni slika i tekst -->
<div class="row">
    <div class="medium-6 columns medium-push-6">
        <img class="thumbnail" src="{{ asset('bdl.jpg') }}">
    </div>
    <div class="medium-6 columns medium-pull-6">
        <h2>O nama</h2>
        <p>Naš rad zasnovan je na pouzdanju, brzini i sigurnosti</p>
        <p>Još od 90. godina prošlog stoljeća ispunjavamo vaše želje i potrebe. Zadovoljstvo mnogobrojnih kućanstava
            i poduzeća se vidi na utiscima naših korisnika.
        Iskustvo kroz dugi niz godina doprinosi usavršenju naše usluge</p>
        <p>Naš transport ispunjava sve vaše zahtjeve, kontaktirajte nas te odlučite što želite, a brige su naše</p>
        <p>Bez Vas naša usluga je bezsmislena, gradimo budućnost zajedno</p>
    </div>
</div>
<hr>

<!-- Cjenik Menu  -->
<div class="row">
    <div class="row column text-center" id="cjenik">
        <h1>Cjenik usluga</h1>
    </div>

    <div class="medium-4 columns">
        <h3>XS Paket</h3>
        <p>Cjena: 5,00 KM</p>
        <img class="thumbnail" src="{{ asset('kutije/xs.png') }}">
    </div>

    <div class="medium-4 columns">
        <h3>S Paket</h3>
        <p>Cjena: 9,00 KM</p>
        <img class="thumbnail" src="{{ asset('kutije/s.png') }}">
    </div>

    <div class="medium-4 columns">
        <h3>M Paket</h3>
        <p>Cjena: 13,50 KM</p>
        <img class="thumbnail" src="{{ asset('kutije/m.png') }}">
    </div>

    <div class="medium-4 columns">
        <h3>L Paket</h3>
        <p>Cjena: 18,00 KM</p>
        <img class="thumbnail" src="{{ asset('kutije/l.png') }}">
    </div>

    <div class="medium-4 columns">
        <h3>XL Paket</h3>
        <p>Cjena: 22,50 KM</p>
        <img class="thumbnail" src="{{ asset('kutije/xl.png') }}">
    </div>

    <div class="medium-4 columns">
        <h3>XXL Paket</h3>
        <p>Cjena: "ovisno po vaganju"</p>
        <img class="thumbnail" src="{{ asset('kutije/xxl.png') }}">
    </div>
</div>
<hr>

<!-- Stats footer trake
<div class="row column">
    <ul class="vertical medium-horizontal menu expanded text-center">
        <li><a href="#"><div class="stat">28</div><span>Websites</span></a></li>
        <li><a href="#"><div class="stat">43</div><span>Apps</span></a></li>

    </ul>
</div>
-->

<!-- Footer za cR -->
<div class="row column">
    <a>Designed by:  Mile Leko, Ljubomir Prce, Domagoj Perić</a> <br>
    <a>We used: Laravel framework, Bootstrap(Admin panel), Zurb Foundation(Homepage), Font Awesome (Font & icons)</a>
    <a>Mile Leko:10%, Ljubomir Prce:10%, Domagoj Perić:75, Robert Rozić:5%</a>
    <a>Posebna zahvala Prof. Tomislavu Volariću, asistentu Ivan Krasiću i demonstratoru Robertu Roziću</a>
</div>


<script src="{{ asset('js/foundation.js') }}" defer></script>
<script src="{{ asset('js/jquery-2.1.4.min.js') }}" defer></script>
<script>
    $(document).foundation();
</script>
</body>
</html>


