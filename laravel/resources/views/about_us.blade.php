@extends('layout')

@section('content')
    <!-- One -->
    <section id="intro" class="wrapper style1 special">
        <div class="inner">
            <header class="major">
                <h2>Over ons</h2>
                <p>Bij Trial & Victory bouwen we niet alleen websites, maar digitale oplossingen die perfect
                    aansluiten bij jouw bedrijf. Van op maat gemaakte websites tot krachtige WordPress-oplossingen, wij
                    zorgen voor snelheid, veiligheid en een professionele uitstraling. Met onze achtergrond in
                    Informatiekunde specialiseren we ons in complexe data-integraties en interactieve dashboards. Heb je
                    een groot bedrijf met veel data? Wij ontwikkelen op maat gemaakte webapplicaties en dashboards om
                    inzicht te bieden en processen te optimaliseren. Zo haal je het maximale uit jouw data.</p>
            </header>
            <ul class="icons major">
                <li><span class="icon fa-gem major style1"><span class="label">Lorem</span></span></li>
                <li><span class="icon fa-heart major style2"><span class="label">Ipsum</span></span></li>
                <li><span class="icon solid fa-code major style3"><span class="label">Dolor</span></span></li>
            </ul>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper alt style2">
        <section class="spotlight">
            <div class="image"><img src="images/pic02.jpg" alt=""/></div>
            <div class="content">
                <h2>Trial & Victory</h2>
                <h3>Een Sterk Team voor Jouw Website</h3>
                <p>Wij zijn Robin en Victor – twee ervaren webontwikkelaars die al meer dan tien jaar samenwerken. Wat
                    ons uniek maakt? We combineren onze technische expertise met een diepgewortelde samenwerking en
                    vriendschap.<br>
                    <br>
                    Onze reis begon op de middelbare school en zette zich voort aan de universiteit in Groningen, waar
                    we samen studeerden. Door de jaren heen hebben we talloze projecten opgepakt, waardoor we precies
                    weten hoe we effectief kunnen samenwerken en elkaars sterke punten kunnen benutten.<br>
                    <br>
                    Met ieder een eigen onderneming in webontwikkeling was het een logische stap om onze krachten te
                    bundelen. Wij vullen elkaar naadloos aan: van strategie en ontwerp tot ontwikkeling en
                    optimalisatie. Dankzij onze gedeelde visie en jarenlange ervaring bouwen we niet alleen mooie en
                    functionele websites, maar ook duurzame digitale oplossingen die echt werken voor jouw bedrijf.<br>
                    <br>
                    Waarom kiezen voor ons?<br>
                <ul>
                    <li>Ervaring & samenwerking: Meer dan 10 jaar samenwerkend aan webprojecten.</li>
                    <li>Krachtige combinatie: Technische expertise + strategisch inzicht.</li>
                    <li>Maatwerk & resultaatgericht: Websites die niet alleen mooi zijn, maar ook converteren.</li>
                </ul>

                Op zoek naar een betrouwbare partner voor jouw website? Wij helpen je graag verder! <br><br>
                <a href="{{route('contact')}}" class="button secondary">Neem nu contact met ons op!</a>

                </p>
            </div>
        </section>
        <section class="spotlight section">
            <div class="content">
                <h2 class="text">Over Victor<br/></h2>
                <div>
                    <p>Met een achtergrond in Informatiekunde en een passie voor data, webontwikkeling en serverbeheer
                        is Victor een echte probleemoplosser. Al van jongs af aan gefascineerd door computers, begon hij
                        ruim zes jaar geleden met webdevelopment en heeft sindsdien talloze projecten gerealiseerd.
                        <br> <br>
                        Data wordt vaak vergeleken met ruwe olie: pas als je het goed verwerkt, wordt het echt
                        waardevol. Dat is precies waar Victor in uitblinkt. Of het nu gaat om complexe dataverwerking,
                        maatwerk dashboards of efficiënte weboplossingen, hij weet hoe je ruwe data omzet in bruikbare
                        inzichten.
                        <br> <br>
                        Zijn favoriete tools? Python en PHP, waarmee hij geavanceerde oplossingen bouwt. Maar ook
                        WordPress met custom code schrikt hem niet af. Dankzij zijn brede technische kennis en
                        jarenlange ervaring weet hij altijd een slimme, schaalbare en effectieve oplossing te vinden.
                        <br> <br>
                        Wil je een krachtige, data-gedreven website of een maatwerk dashboard? Dan ben je bij Victor aan
                        het juiste adres.</p>
                </div>
            </div>
            <div class="image"><img src="images/pic01.jpg" alt=""/></div>

        </section>
        <section class="spotlight">
            <div class="image"><img src="images/pic01.jpg" alt=""/></div>
            <div class="content">
                <h2>Over Robin</h2>
                <p>Robin is een developer in hart en nieren. Sommigen zeggen dat hij geboren is achter een computer,
                    anderen noemen hem een <i>developgod</i>. Eén ding is zeker: met meer dan 14 jaar
                    programmeerervaring en
                    een achtergrond in Informatiekunde aan de Universiteit van Groningen, weet hij als geen ander hoe je
                    slimme, efficiënte en schaalbare software bouwt. <br/><br/>

                    Zijn favoriete taal? Python. Zijn grootste vijand? Java. Robin werkt graag aan complexe projecten,
                    van geavanceerde webapplicaties tot machine learning modellen. In zijn vrije tijd sleutelt hij aan
                    innovatieve zijprojecten, zoals developer tooling en een nieuwssite. <br/><br/>

                    Met zijn diepgaande kennis en scherpe probleemoplossende vaardigheden is Robin de ontwikkelaar die
                    zelfs de lastigste technische uitdagingen moeiteloos oplost. <br/><br/>

                    Op zoek naar een betrouwbare en briljante developer? Robin staat klaar.
                    <br/><br/>
                </p>
                <blockquote>“Als iets in één keer goed werkt, wantrouwen we het. Innovatie komt immers uit trial &
                    error… of in ons geval: Trial & Victory.”
                </blockquote>
                <blockquote>“Werken doe je maar in je vrije tijd, het is nu tijd voor koffie!”
                </blockquote>
            </div>
        </section>

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
