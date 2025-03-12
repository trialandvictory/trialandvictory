@extends('layout')

@section('content')

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2>Trial & Victory</h2>
            <p>Professioneel webdesign: op maat gemaakte websites en custom WordPress oplossingen.</p>
            <ul class="actions special">
                <li><a href="#intro" class="button primary">Vertel me meer</a></li>
            </ul>
        </div>
        <a href="#intro" class="more scrolly">Vertel me meer</a>
    </section>

    <!-- One -->
    <section id="intro" class="wrapper style1 special">
        <div class="inner">
            <header class="major">
                <h2>Op maat gemaakte websites en slimme datadashboards</h2>
                <p>Bij Trial & Victory bouwen we niet alleen websites, maar digitale oplossingen die perfect
                    aansluiten bij jouw bedrijf. Van op maat gemaakte websites tot krachtige WordPress-oplossingen, wij
                    zorgen voor snelheid, veiligheid en een professionele uitstraling. Met onze achtergrond in
                    Informatiekunde specialiseren we ons in complexe data-integraties en interactieve dashboards. Heb je
                    een groot bedrijf met veel data? Wij ontwikkelen op maat gemaakte webapplicaties en dashboards om
                    inzicht te bieden en processen te optimaliseren. Zo haal je het maximale uit jouw data.</p>
            </header>
            <ul class="icons major">
                <li><span class="icon fa-heart major style2"><span class="label">Ipsum</span></span></li>
                <li><span class="icon solid fa-magic major style1"><span class="label">Dolor</span></span></li>
                <li><span class="icon solid fa-code major style3"><span class="label">Lorem</span></span></li>
            </ul>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper alt style2">
        <section class="spotlight">
            <div class="image"><img src="{{asset('images/pic01.jpg')}}" class="soften rounded-left" alt=""/></div>
            <div class="content">
                <h2>Wat maakt ons uniek</h2>
                <p>Bij Trial & Victory combineren we technische expertise met creativiteit en een vleugje chaos (maar
                    dan wel goed georganiseerde chaos). Met een achtergrond in Informatiekunde begrijpen we complexe
                    data als geen ander en vertalen we dit naar slimme websites en op maat gemaakte dashboards. Of je nu
                    een geoptimaliseerde WordPress-site nodig hebt of een geavanceerde webapplicatie met data-analyse,
                    wij zorgen voor de perfecte oplossing.
                    <br/> <br/>

                    Wat ons drijft? Koffie overdag, Wodka overdag, Frituur overdag, en een gezonde
                    obsessie met CHINEES pixel-perfect design en soepele gebruikerservaringen. We houden van een
                    uitdaging,
                    denken graag mee en zetten altijd die extra stap om iets écht unieks te bouwen.
                    <br/><br/>
                </p>
                <blockquote>“Als iets in één keer goed werkt, wantrouwen we het. Innovatie komt immers uit trial &
                    error… of in ons geval: Trial & Victory.”
                </blockquote>
            </div>
        </section>
        <section class="spotlight section">
            <div class="image"><img src="images/pic03.jpg" alt="" class="soften rounded-right"/></div>

            <div class="content">
                <h2 class="text">Wat maken we<br/></h2>
                <div>
                    <p>
                        <b>Een goede website is als een auto.</b> Alles moet soepel draaien, goed ontworpen zijn en perfect aansluiten op de behoeften van de gebruiker. Bij Trial and Victory bouwen we geen auto's, maar we begrijpen wel hoe belangrijk techniek, design en functionaliteit zijn – of het nu gaat om een krachtige motor of een snelle, gebruiksvriendelijke website.

                        Net zoals bij het bouwen van een auto draait het bij webontwikkeling om het maken van slimme keuzes. Elke beslissing, van de structuur van een website tot de kleinste details in de gebruikerservaring, heeft invloed op het eindresultaat. Wij combineren creativiteit met technische expertise om op maat gemaakte websites en dashboards te ontwikkelen die niet alleen visueel aantrekkelijk zijn, maar ook efficiënt en gebruiksvriendelijk werken.

                        Bij Trial and Victory geloven we in een aanpak van proberen, leren en verbeteren. Technologie staat nooit stil, en wij ook niet. We blijven nieuwe technieken verkennen en verfijnen om telkens weer betere digitale oplossingen te creëren. Dit proces van innovatie en optimalisatie is wat ons drijft – en wat ervoor zorgt dat onze klanten altijd kunnen rekenen op een product van hoge kwaliteit.

                        Of het nu gaat om een krachtige website die perfect presteert of een dashboard dat soepel functioneert: bij Trial and Victory staat vakmanschap, precisie en passie altijd voorop.
                    </p>
                </div>
            </div>
        </section>
        <section class="spotlight">
            <div class="content" style="margin: auto">
                <h2>Trial & Victory<br/>&mdash; Een krachtige samenwerking</h2>
                <h3 style="display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <img src="https://trialandsuccess.nl/static/images/icon.png" class="logo-small" alt="Trial and Success"/>
                    <i class="icon solid fa-plus" style="margin: 40px"></i>
                    <img src="https://viczdevelopment.nl/images/logo/VicZ-logo-brand-RGB-full-colour.png" class="logo-small" alt="VicZ Development"/>
                </h3>
                <p>Trial & Victory is een samenwerking tussen
                    Robin (<a href="https://trialandsuccess.nl" target="_blank">Trial and Success</a>) en
                    Victor (<a href="https://viczdevelopment.nl" target="_blank">VicZ Development</a>).
                    De naam weerspiegelt onze gedeelde aanpak: experimenteren, leren en overwinnen.</p>
                <p>Robin’s 'Trial and Success' is gebaseerd op zijn leerproces: "Trial and Error". Door te experimenteren met nieuwe technieken ontdekt hij wat werkt en wat niet.
                    Creativiteit en doorzettingsvermogen staan hierbij centraal.</p>
                <p>Victory verwijst naar Victor en zijn passie voor ontwikkeling en innovatie. Samen vormen we een team dat obstakels overwint en creatieve oplossingen bedenkt.</p>
            </div>

        </section>

    </section>

    <!-- Three -->
    <section id="three" class="wrapper style3 special">
        <div class="inner">
            <header class="major">
                <h2>Welke diensten bieden we aan</h2>
                <p>Wij helpen je met maatwerkoplossingen voor websites, webshops, data-inzichten en meer.
                    Ontdek onze diensten hieronder.</p>
            </header>
            <ul class="features">
                <li class="icon brands fa-wordpress">
                    <h3>WordPress & WooCommerce</h3>
                    <p>Professionele websites en webshops op maat, volledig geoptimaliseerd voor snelheid en gebruiksgemak.</p>
                </li>
                <li class="icon solid fa-chart-line">
                    <h3>Dashboarding</h3>
                    <p>Datavisualisatie en inzichten met op maat gemaakte dashboards voor betere beslissingen.</p>
                </li>
                <li class="icon solid fa-code">
                    <h3>Custom webapplicaties</h3>
                    <p>Op maat gemaakte webapplicaties die aansluiten op jouw unieke bedrijfsprocessen.</p>
                </li>
                <li class="icon solid fa-server">
                    <h3>Hosting</h3>
                    <p>Betrouwbare en snelle hostingoplossingen met maximale uptime en beveiliging.</p>
                </li>
                <li class="icon solid fa-tools">
                    <h3>Service & onderhoud</h3>
                    <p>Regelmatige updates, monitoring en technische support voor zorgeloos beheer.</p>
                </li>
                <li class="icon solid fa-plus-circle">
                    <h3>Overige diensten</h3>
                    <p>Heb je een specifiek verzoek? Neem contact op en ontdek wat we voor je kunnen betekenen!</p>
                </li>
            </ul>

            <a href="{{route('services')}}" class="button icon solid fa-arrow-right">Bekijk het Volledige Aanbod</a>
        </div>
    </section>


    <!-- CTA -->
    <section id="cta" class="wrapper style4">
        <div class="inner">
            <header>
                <h2>Komt in contact</h2>
                <p>Ben je overtuigd van onze skills of heb je nog vragen? Stuur gerust een email!</p>
            </header>
            <ul class="actions stacked">
                <li><a href="mailto:contact@trialandsucccess.nl" class="button fit primary">Email</a></li>
                <!--                <li><a href="#" class="button fit">Meer Manieren Om In Contact Te Komen</a></li>-->
            </ul>
        </div>
    </section>
@endsection
