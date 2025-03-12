@extends('layout')
@section('custom_css')
    <style>
        .service-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        inner {
            width: 100%; /* or set a specific width */
            display: flex;
            justify-content: center; /* Centers the content horizontally */
            align-items: center; /* Centers the content vertically, if needed */
            text-align: center; /* Centers text inside the elements */
        }

        /* Ensure icons are centered */
        .icons.major {
            display: flex;
            justify-content: center; /* Horizontally centers the icons */
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .icons.major li {
            margin: 0 10px; /* Add some spacing between the icons */
        }
    </style>
@endsection
@section('content')
    <!-- Main -->
    <article id="main">
        <header>
            <h2>Onze diensten</h2>
            <p>Maatwerk oplossingen, datadashboards, hosting en nog veel meer!</p>

        </header>
        <section class="wrapper style5">
            <div class="inner">
                <h3>Wat we kunnen</h3>
                <p>Wij zijn gespecialiseerd in het bouwen van websites die niet alleen mooi zijn, maar ook slim. Met
                    onze
                    technische achtergrond in informatiekunde en data-analyse bieden we maatwerkoplossingen die perfect
                    aansluiten bij jouw behoeften. Hieronder vind je een overzicht van de diensten die we aanbieden:</p>
                <ol>
                    <li>Maatwerk Weboplossingen
                        <ul>
                            <li>Of je nu een simpele website nodig hebt of een complexe webapplicatie, wij bouwen alles
                                op maat. Wij zorgen ervoor dat de functionaliteit en het design precies zijn wat jij
                                nodig hebt.
                            </li>
                        </ul>
                    </li>

                    <li>Datadashboards
                        <ul>
                            <li>We helpen bedrijven om data inzichtelijk te maken met op maat gemaakte dashboards. Deze
                                dashboards zijn niet alleen visueel aantrekkelijk, maar ook super effectief in het
                                monitoren van belangrijke KPI’s (Kritieke Prestatie-Indicators).
                            </li>
                        </ul>
                    </li>
                    <li>WordPress Websites
                        <ul>
                            <li>We gaan de uitdaging van WordPress websites niet uit de weg. Of het nu gaat om een
                                eenvoudige blog of een complexe bedrijfswebsite, wij zorgen voor een
                                gebruiksvriendelijke en goed onderhouden WordPress oplossing.
                            </li>
                        </ul>
                    </li>
                    <li>Hosting en Onderhoud
                        <ul>
                            <li>Naast het bouwen van je website bieden wij ook betrouwbare hostingdiensten en het
                                onderhoud dat je nodig hebt om je site altijd up-to-date en veilig te houden.
                            </li>
                        </ul>
                    </li>
                    <li>Website Verbeteren en Optimaliseren
                        <ul>
                            <li>Heb je al een website, maar is deze niet meer up-to-date of kan hij sneller? Wij helpen
                                je bestaande website te verbeteren en optimaliseren, zodat deze beter presteert en
                                voldoet aan de laatste standaarden. Dit omvat snelheidoptimalisatie, SEO verbeteringen,
                                en het verbeteren van de gebruikerservaring (UX).
                            </li>
                        </ul>
                    </li>
                </ol>

                <hr/>

                <div class="row">
                    <div class="col-7">
                        <h4>Maatwerk Weboplossingen</h4>
                        <p>Bij ons krijg je geen standaard website. We luisteren naar je wensen en bouwen een
                            oplossing die
                            precies bij je bedrijf past. Of je nu een website nodig hebt voor een specifiek doel of
                            een
                            applicatie die complexe functies uitvoert, wij zorgen ervoor dat alles soepel
                            draait.</p>

                        <i>Stel je voor: Je bedrijf heeft een klantportal nodig waarmee gebruikers hun bestelling
                            kunnen volgen, facturen kunnen downloaden en ondersteuning kunnen aanvragen. Wij
                            ontwikkelen de functionaliteit en het ontwerp van deze portal om de klantenervaring zo
                            soepel mogelijk te maken. Hierbij zorgen we ervoor dat het systeem ook achter de
                            schermen efficiënt werkt, zodat jij het beheer eenvoudig kunt uitvoeren.</i>
                    </div>
                    <div class="col-5 service-image">
                        <img src="{{asset('images/pic03.jpg')}}" alt=""/>
                    </div>
                </div>

                <hr/>

                <div class="row">
                    <div class="col-5 service-image">
                        <img src="{{asset('images/pic03.jpg')}}" alt=""/>
                    </div>
                    <div class="col-7">
                        <h4>Datadashboards</h4>
                        <p>Met onze datadashboards krijg je de inzichten die je nodig hebt, wanneer je ze nodig hebt. We
                            bouwen dashboards die niet alleen je gegevens presenteren, maar je ook helpen om sneller
                            beslissingen te nemen.</p>

                        <i>Voor een retailbedrijf kunnen we een op maat gemaakt dashboard ontwikkeld dat in real-time de
                            verkoopcijfers toont per locatie, productcategorie en periode. Dit stelt managers in staat
                            om snel bij te sturen en de prestaties van hun winkels te verbeteren. We zorgen ervoor dat
                            de data overzichtelijk wordt gepresenteerd, zodat belangrijke informatie direct zichtbaar
                            is.
                        </i>
                    </div>

                </div>
                <hr/>
                <div class="row">
                    <div class="col-7">
                        <h4>WordPress Websites</h4>
                        <p>We hebben ervaring met alle soorten WordPress websites: van kleine blogjes tot grote
                            zakelijke websites. Wij zorgen ervoor dat je WordPress website snel, veilig en goed
                            onderhouden blijft.</p>

                        <i>Je hebt als lokale ondernemer behoefte aan een eenvoudige, maar professionele website om zijn
                            diensten aan te bieden. Wij zorgen voor een op maat gemaakte WordPress-site die snel laadt,
                            gemakkelijk te onderhouden is, en conversie-optimalisatie bevat, zoals duidelijke
                            call-to-actions en een contactformulier.</i>
                    </div>
                    <div class="col-5 service-image">
                        <img src="{{asset('images/pic03.jpg')}}" alt=""/>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-5 service-image">
                        <img src="{{asset('images/pic03.jpg')}}" alt=""/>
                    </div>
                    <div class="col-7">
                        <h4>Hosting en onderhoud</h4>
                        <p>Het bouwen van je website is slechts het begin. Wij zorgen ervoor dat je website snel draait,
                            altijd online is en veilig blijft. Met onze hosting- en onderhoudsdiensten ben je verzekerd
                            van een site die altijd up-to-date is.</p>

                        <i>Door de continu veranderende markt en de updates van verschillende plugins en pakketten, is
                            het als ondernemer essentieel om je website up-to-date te houden.
                            Wij bieden een service
                            waarbij we maandelijks zorgen voor beveiligingspatches, performance optimalisatie, en het
                            maken van back-ups. Dit geeft de klant gemoedsrust, wetende dat hun website altijd veilig en
                            snel blijft.</i>
                    </div>

                </div>

            </div>
        </section>

        <section class="wrapper style2">
            <div class="inner">
                <header class="major">
                    <h2>Heb je een specifieke vraag of wil je meer informatie over onze diensten?</h2>
                    <p>Neem gerust contact met ons op, we helpen je graag verder!</p>
                </header>
                <ul class="icons major">
                    <li>
                        <a href="mailto:contact@trialandvictory.com" class="icon solid fa-envelope major style1">
                            <span class="label">Email</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+31631582587" class="icon solid fa-phone major style2">
                            <span class="label">Telefoon</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

    </article>

@endsection
