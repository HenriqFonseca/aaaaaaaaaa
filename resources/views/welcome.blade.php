<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
<link rel="manifest" href="'{{ '/manifest.json' }}">

    <!-- CSS DO BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JAVASCRIPT DO BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FONTS -->

    <!-- ME PERMITE FAZER A TRANSIÇÃO DA NAV-BAR -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <!-- STYLES -->
    <link href="homecss/style.css" rel="stylesheet">

    <!-- SCRIPTS -->
    <script defer src="js/script_index.js"></script>

    <!-- PWA -->
    <title>IronWorks</title>

    @livewireStyles
</head>

<body>
    <!----------NAV-BAR------------->
    <header>
        <!----------NAV-BAR------------->
        <nav class="nav-bar">
            <div class="nav-logo-box">
                <svg width="200" height="25.877456789880426" viewBox="0 0 350.00000000000006 52.00029776817928" c>
                    <defs id="SvgjsDefs3341">
                        <linearGradient id="SvgjsLinearGradient3346">
                            <stop id="SvgjsStop3347" stop-color="#8f5e25" offset="0"></stop>
                            <stop id="SvgjsStop3348" stop-color="#fbf4a1" offset="0.5"></stop>
                            <stop id="SvgjsStop3349" stop-color="#8f5e25" offset="1"></stop>
                        </linearGradient>
                        <linearGradient id="SvgjsLinearGradient3350">
                            <stop id="SvgjsStop3351" stop-color="#8f5e25" offset="0"></stop>
                            <stop id="SvgjsStop3352" stop-color="#fbf4a1" offset="0.5"></stop>
                            <stop id="SvgjsStop3353" stop-color="#8f5e25" offset="1"></stop>
                        </linearGradient>
                    </defs>
                    <g id="SvgjsG3342" featurekey="33DNMO-0"
                        transform="matrix(2.9055290123486506,0,0,2.9055290123486506,-3.9515194983580906,-18.885937194802032)"
                        fill="url(#SvgjsLinearGradient3346)">
                        <path
                            d="M1.36 20 l0 -13.22 l3.36 0 l0 13.22 l-3.36 0 z M7.44 20 l0 -13.22 l5.08 0 c3.66 0 4.96 1.58 4.96 3.7 c0 1.98 -1.12 3.1 -2.34 3.68 c0.52 0.28 0.9 0.8 1.24 1.74 c0.28 0.8 0.42 1.56 1.86 1.5 l-0.58 2.72 c-3.16 0.4 -3.9 -1.64 -4.44 -3.1 c-0.56 -1.52 -0.78 -1.68 -1.9 -1.68 l-0.52 0 l0 4.66 l-3.36 0 z M12.440000000000001 9.6 l-1.64 0 l0 2.92 l1.64 0 c1.22 0 1.68 -0.76 1.68 -1.54 c0 -0.98 -0.56 -1.38 -1.68 -1.38 z M25.799999999999997 20.28 c-4.3 0 -6.52 -2.92 -6.52 -6.92 c0 -4.1 2.32 -6.86 6.64 -6.86 c4.08 0 6.54 2.46 6.54 6.7 c0 4.1 -2.32 7.08 -6.66 7.08 z M25.86 17.5 c1.88 0 3.06 -1.24 3.06 -4.16 c0 -2.88 -1.14 -4.06 -3.02 -4.06 c-1.94 0 -3.08 1.26 -3.08 4.1 c0 2.88 1.16 4.12 3.04 4.12 z M34.519999999999996 20 l0 -13.22 l3.26 0 l3.66 5.38 c0.54 0.8 1.24 1.9 1.88 2.96 c-0.06 -1.18 -0.1 -2.46 -0.1 -3.42 l0 -4.92 l3.2 0 l0 13.22 l-3.28 0 l-4.08 -5.96 c-0.4 -0.58 -0.94 -1.48 -1.44 -2.38 c0.06 1.08 0.1 2.18 0.1 2.94 l0 5.4 l-3.2 0 z M56.38 20 l-4.78 -13.22 l3.54 0 l2.28 6.4 c0.18 0.46 0.36 1.26 0.5 2.1 c0.18 -0.82 0.36 -1.64 0.54 -2.1 l1.36 -3.74 l-1.02 -2.66 l3.4 0 l2.32 6.4 c0.16 0.4 0.34 1.1 0.5 1.84 c0.14 -0.74 0.3 -1.42 0.46 -1.84 l2.16 -6.4 l3.26 0 l-4.52 13.22 l-2.68 0 l-2.38 -6.54 c-0.14 0.48 -0.28 0.94 -0.42 1.34 l-1.84 5.2 l-2.68 0 z M78.12 20.28 c-4.3 0 -6.52 -2.92 -6.52 -6.92 c0 -4.1 2.32 -6.86 6.64 -6.86 c4.08 0 6.54 2.46 6.54 6.7 c0 4.1 -2.32 7.08 -6.66 7.08 z M78.18 17.5 c1.88 0 3.06 -1.24 3.06 -4.16 c0 -2.88 -1.14 -4.06 -3.02 -4.06 c-1.94 0 -3.08 1.26 -3.08 4.1 c0 2.88 1.16 4.12 3.04 4.12 z M86.84 20 l0 -13.22 l5.08 0 c3.66 0 4.96 1.58 4.96 3.7 c0 1.98 -1.12 3.1 -2.34 3.68 c0.52 0.28 0.9 0.8 1.24 1.74 c0.28 0.8 0.42 1.56 1.86 1.5 l-0.58 2.72 c-3.16 0.4 -3.9 -1.64 -4.44 -3.1 c-0.56 -1.52 -0.78 -1.68 -1.9 -1.68 l-0.52 0 l0 4.66 l-3.36 0 z M91.84 9.6 l-1.64 0 l0 2.92 l1.64 0 c1.22 0 1.68 -0.76 1.68 -1.54 c0 -0.98 -0.56 -1.38 -1.68 -1.38 z M99.34 20 l0 -13.22 l3.36 0 l0 4.94 l0.6 0 l3.42 -4.94 l3.92 0 l-4.5 6.34 l4.68 6.88 l-4.04 0 l-3.5 -5.26 l-0.58 0 l0 5.26 l-3.36 0 z M111.28000000000002 16.34 l3.3 -0.68 c0.02 1.4 1.1 1.84 2.2 1.84 c1.04 0 1.64 -0.38 1.64 -1 c0 -2.1 -6.78 -1.14 -6.78 -5.94 c0 -2.64 2.04 -4.06 5.1 -4.06 c3.08 0 5.02 1.46 4.92 3.58 l-3.3 0.68 c-0.02 -0.54 -0.14 -1.48 -1.7 -1.48 c-1.08 0 -1.62 0.44 -1.62 1.04 c0 2.18 6.78 1.04 6.78 5.82 c0 2.4 -1.7 4.14 -5.08 4.14 c-3.6 0 -5.58 -1.96 -5.46 -3.94 z">
                        </path>
                    </g>
    
                </svg>
            </div>
            <button id="btn-menu">
                <img src="img/outline_menu_white_48dp.png" alt="">
            </button>
            <div id="nav-item-box">
                <ul class="nav-list">
                    <li class="item-box">
                        <a class="nav-link active-item" href="">item
                        </a>
                    </li>
                    <li class="item-box sub-menu-box">
                        <a class="nav-link" href="">item
    
                        </a>
                    </li>
                </ul>
                <a href=""><button class="login-button">
                        Fazer Login
                    </button></a>
    
            </div>
        </nav>
    </header>

    <main>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/8225.jpg" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/897.jpg" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/lulaxbolso.jpg" alt="New York" class="d-block w-100">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!--Carousrel end-->


        <div class="btn-container">
            <div class="btn-row">
                <div class="btn-box">
                    <button class="btn-small">
                        <img src="img/dumbbell.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="btn-small">
                        <img src="img/sportsman.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="btn-small">
                        <img src="img/location.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
            </div>
            <div class="btn-row">
                <div class="btn-box">
                    <button class="btn-medium">
                        <img src="img/chat.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="btn-medium">
                        <img src="img/invoice.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
            </div>
            <div class="btn-row">
                <div class="btn-box">
                    <button class="btn-large">
                        <img src="img/calendar.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
                <div class="btn-box">
                    <button class="btn-large">
                        <img src="img/note.png" alt="">
                    </button>
                    <div class="btn-caption">
                        <h3>Algum Texto</h3>
                    </div>
                </div>
            </div>
        </div>
        <div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>

    </main>


    <footer>
        <div class="nav-footer">
            <nav>
                <h2>Navegue no site</h2>
                <ul>
                    <li><a href="#">Capa</a></li>
                    <li><a href="#">História dos instrumentos de metal</a></li>
                    <li><a href="#">Seja um colaborarador</a></li>
                    <li><a href="#">Quem somos</a></li>
                </ul>
            </nav>
            <nav>
                <h2>Fique conectado !</h2>
                <ul>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </nav>
        </div>
        <small>IronWorks Copyright © 2077 </small>
    </footer>

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
    if ('serviceWorker' in navigator) {
        // Register a service worker hosted at the root of the
        // site using the default scope.
        navigator.serviceWorker.register('/sw.js').then((registration) => {
          console.log('Service worker registration succeeded:', registration);
        }, /*catch*/ (error) => {
          console.error(`Service worker registration failed: ${error}`);
        });
      } else {
        console.error('Service workers are not supported.');
      }
</script>
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

:root {
    --btn-color: #ffd9a1a1;
    --btn-large: #ffc297a1;
    --black: #000000;
    --gold: #C1A45F;
    --scroll-effect-color: rgba(151, 151, 151, 0.158);
    --footer-color: rgba(102, 102, 102, 0.541);
    --gold-semitransparent: #c1a45fd7;
    --gold-transparent: #fdf5d33a;
}

body {
    font-family:Arial, Helvetica, sans-serif;
    background-image: url('/img/background.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: whitesmoke;
}

a {
    text-decoration: none;
    color: white;
}


/* ----HEADER STYLE---- */

header {
    z-index: 100;
    position: fixed;
    width: 100%;
    height: 5rem;
}


/* ----NAV BAR STYLE---- */

.nav-bar {
    height: 100%;
    background-color: var(--black);
    display: flex;
    align-items: center;
    justify-content: space-around;
}

#nav-item-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 100%;
    gap: 3rem;
}

.nav-logo-box {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav-list {
    list-style: none;
    display: flex;
    align-items: center;
    height: 100%;
    margin: 0;
    padding: 0;
}


/* ----NAV ITEMS STYLE---- */

.item-box {
    height: 100%;
    width: 5rem;
    transition: 0.15s ease-in-out;
}

.nav-link {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    position: relative;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.active-item {
    color: var(--gold);
}

.active-item::after {
    content: " ";
    height: 3px;
    background-color: var(--gold);
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
}


/* -------- LOGIN BUTTON STYLE -------- */

.login-button {
    background-color: #ffe19a77;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 8px;
    font-size: 1.1rem;
    font-family: 'Fjalla One', sans-serif;
    transition: 0.15s ease-in-out;
}

.login-button:hover {
    background-color: var(--gold-semitransparent);
    color: var(--black);
}

.login-button-scroll-effect {
    color: var(--black);
}


/* ----NAV ITEMS HOVER EFFECT---- */

.nav-link::after {
    content: " ";
    height: 3px;
    background-color: var(--gold);
    position: absolute;
    left: 0;
    bottom: 0;
}

.nav-link:hover {
    color: var(--gold);
}

.nav-link:hover::after {
    width: 100%;
}

.item-box:hover {
    background-color: var(--gold-transparent);
}


/* ----SUB MENU---- */

.sub-menu-box {
    display: block;
}

.sub-menu-box:hover .sub-menu {
    display: block;
}

.sub-menu {
    display: none;
    background-color: var(--black);
    list-style: none;
    position: absolute;
    z-index: 1000;
    margin: 0.2rem;
    padding: 0.2rem;
}

.sub-menu-link {
    text-decoration: none;
    color: white;
}

.sub-menu-link:hover {
    color: var(--gold);
}


/*--------BTN-MENU--------*/

#btn-menu {
    cursor: pointer;
    display: none;
    border: none;
    background-color: transparent;
}

#btn-menu>img {
    width: 4rem;
}


/*--------HIDE/SHOW-NAV-ITEMS--------*/

@media(max-width:860px) {
    #nav-item-box {
        width: 100%;
        display: none;
        position: absolute;
        top: 4rem;
    }
    .nav-list {
        width: 100%;
        display: flex;
        flex-direction: column;
        background-color: var(--black);
    }
    .item-box {
        width: 100%;
    }
    .sub-menu {
        height: auto;
    }
    #btn-menu {
        display: block;
    }
}

#nav-item-box.menu-expanded {
    display: flex;
}

footer {
    display: flex;
    justify-content: space-between;
}


/* AREA DE TESTES */

.nav-scroll-effect {
    background-color: var(--scroll-effect-color);
    transition: 0.3s ease-in;
    backdrop-filter: blur(10px);
}

.link-scroll-effect {
    color: var(--black);
}

.nav-bar {
    transition: 0.3s ease-out;
}

main {
    padding-top: 5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 3rem;
}

.btn-container {
    width: 50%;
    min-width: 420px;
    gap: 2.5rem;
    color: var(--black);
    display: flex;
    align-items: center;
    flex-direction: column;
}

.btn-row {
    width: 100%;
    gap: 2rem;
    display: flex;
}

.btn-box {
    width: 100%;
    color: var(--black);
    display: flex;
    align-items: center;
    flex-direction: column;
    border-radius: 0.8rem;
}

.btn-box:hover {
    background: linear-gradient(130deg, rgba(255, 218, 161, 0)0%, 80%, rgba(213, 255, 235, 0.7) 100%);
    transform: scale(102%);
}

.btn-caption {
    text-align: center;
    backdrop-filter: blur(4px);
    background-color: rgba(255, 255, 255, 0.219);
    width: 100%;
    display: flex;
    justify-content: center;
    border-radius: 0 0 0.8rem 0.8rem;
}

.btn-small {
    width: 100%;
    max-height: 10rem;
    padding: 1rem;
    background-color: var(--btn-color);
    border: none;
    border-radius: 0.8rem 0.8rem 0 0;
    backdrop-filter: blur(4px);
}

.btn-medium {
    width: 100%;
    max-height: 10rem;
    padding: 1rem;
    background-color: var(--btn-color);
    border: none;
    border-radius: 0.8rem 0.8rem 0 0;
    backdrop-filter: blur(4px);
}

.btn-large {
    width: 100%;
    min-height: 15rem;
    max-height: 20rem;
    padding: 3rem;
    background-color: var(--btn-large);
    border: none;
    border-radius: 0.8rem 0.8rem 0 0;
    backdrop-filter: blur(4px);
}

.btn-small>img,
.btn-medium>img,
.btn-large>img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

footer {
    width: 100%;
    display: flex;
    align-items: center;
    border-radius: 1rem 1rem 0 0;
    flex-direction: column;
    background-color: var(--footer-color);
    backdrop-filter: blur(10px);
}

.nav-footer {
    width: 80%;
    display: flex;
    justify-content: space-around;
}


/* AREA DE TESTES */
</style>
@livewireScripts
</body>
<!-- ATRIBUIÇÕES DE IMAGEM -->
<!--                       -->
<!-- <a href="https://br.freepik.com/vetores-gratis/pagina-de-destino-isometrica-de-ginasio-equipamento-de-fitness_7062176.htm#query=gym&position=42&from_view=search">Imagem de upklyak</a> no Freepik  


<a href="https://br.freepik.com/vetores-gratis/atletas-fazendo-exercicios-de-fitness-no-ginasio-com-janelas-panoramicas-isolaram-ilustracao-vetorial-plana-desenhos-animados-cardio-treinamento-e-levantamento-de-peso_10172354.htm#query=gym&position=16&from_view=search">Imagem de pch.vector</a> no Freepik

<a href="https://www.flaticon.com/br/icones-gratis/academia" title="academia ícones">Academia ícones criados por Icongeek26 - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/conversacao" title="conversação ícones">Conversação ícones criados por Icongeek26 - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/negocios-e-financas" title="negócios e finanças ícones">Negócios e finanças ícones criados por Icongeek26 - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/esportes-e-competicao" title="esportes e competição ícones">Esportes e competição ícones criados por Icongeek26 - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/academia" title="academia ícones">Academia ícones criados por Freepik - Flaticon</a>

<a href="https://www.flaticon.com/br/icones-gratis/calendario" title="calendario ícones">Calendario ícones criados por Icongeek26 - Flaticon</a>-->


</html>