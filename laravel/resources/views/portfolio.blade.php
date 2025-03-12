@extends('layout')
@section("title", "Portfolio | Trial & Victory")

@section('custom_css')
    <style>
        .tile {
            background-color: #3b4752;
            border: 1px solid #4b5b68;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: #ffffff;
        }

        .tile img {
            max-height: 200px;
            width: 100%;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .row {
            margin-bottom: 20px;
        }
    </style>
@endsection


@section('content')
    <!-- Main -->
    <article id="main">
        <header>
            <h1>Portfolio</h1>
            <p>Onze passie voor maatwerk weboplossingen komt tot leven in elk project dat we uitvoeren.</p>
        </header>
        <section id="three" class="wrapper style2 special">
            <div class="inner">
                <header class="major">
                    <h2>Onze werkzaamheden</h2>
                    <p>We zijn trots op de diversiteit van de projecten die we hebben gerealiseerd en de impact die ze
                        hebben op onze klanten. Van op maat gemaakte webapplicaties tot gebruiksvriendelijke WordPress
                        websites en interne dashboards, hier kun je een aantal van onze projecten
                        ontdekken.</p>
                </header>

                <div class="row">
                    <div class="col-6">
{{--                        <a href="https://www.voorbeeldwebsite.nl" target="_blank">--}}
                        <div class="tile">
                            <img src="{{asset('images/pic01.jpg')}}" alt="Image Description" class="img-fluid">
                            <h5 class="mt-3">Zaalenzo</h5>
                            <p>Zaalenzo is een programma dat wordt gebruikt om deelnemers van een bridgeprogramma live
                                te volgen voor bestellingen, gebaseerd op een vooraf ingevuld wedstrijdschema. Dit
                                maatwerk systeem zorgt voor een naadloze ervaring voor zowel deelnemers als
                                organisatoren, met realtime gegevensverwerking en een gebruiksvriendelijke
                                interface. Zo kon de eigenaar met minder personeel, toch efficient blijven werken.</p>
                        </div>
{{--                        </a>--}}
                    </div>
                    <div class="col-6">
                        <a href="https://beeworkzambulant.nl" target="_blank">
                        <div class="tile">
                            <img src="{{asset('images/portfolio/beeworkz.png')}}" alt="Image Description" class="img-fluid">
                            <h5 class="mt-3">Beeworkz Ambulant</h5>
                            <p>Voor Beeworkz Ambulant hebben we een WordPress website ontwikkeld voor een ambulante
                                zorgpartij. De website biedt zorgverleners eenvoudig toegang tot hun diensten en
                                informatie, met een schone, professionele uitstraling en gebruiksvriendelijke navigatie.
                                De website is volledig responsief en voldoet aan de laatste webstandaarden.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="https://lamojo.nl" target="_blank">
                        <div class="tile">
                            <img src="https://trialandsuccess.nl/static/images/gallery/screenshots/lamojo.png" alt="Image Description" class="img-fluid">
                            <h5 class="mt-3">La Mojo</h5>
                            <p>Yogavrouw no 1</p>
                        </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://archief.trialandsuccess.nl/ratsbroek.nl/" target="_blank">
                        <div class="tile">
                            <img src="{{asset('https://trialandsuccess.nl/static/images/gallery/screenshots/ratsbroek.png')}}" alt="Image Description" class="img-fluid">
                            <h5 class="mt-3">Ratsbroek</h5>
                            <p>Rats. Broek.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
{{--                        <a href="https://www.duumaa.nl" target="_blank">--}}
                        <div class="tile">
                            <img src="{{asset('images/pic01.jpg')}}" alt="Image Description" class="img-fluid">
                            <h5 class="mt-3">Duumaa Tafels</h5>
                            <p>DuuMaa Tafels is een intern dashboard waarmee medewerkers alle bestellingen kunnen
                                bekijken en doorsturen naar verschillende API's. Dit systeem helpt bij het stroomlijnen
                                van het bestelproces en zorgt ervoor dat bestellingen snel en efficiënt worden verwerkt.
                                Het dashboard biedt een overzichtelijke en efficiënte manier om de workflow te
                                beheren.</p>
                        </div>
{{--                    </a>--}}
                    </div>
                    <div class="col-6">
                        <a href="{{route('contact')}}" target="_blank">
                        <div class="tile">
                            <img src="{{asset('images/pic01.jpg')}}" alt="Image Description" class="img-fluid">
                            <h5 class="mt-3">Jouw nieuwe website?</h5>
                            <p>Staat jouw nieuwe website hier zometeen ook bij? Schroom niet om contact op te nemen over de mogelijkheden en wat we voor elkaar kunnen betekenen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </article>

@endsection
