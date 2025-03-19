@extends('layout')

@section('content')
    <!-- Main -->
    <article id="main">
        <header>
            <h2>Contact</h2>
            <p>Laten we kennismaken!</p>
        </header>
        <section class="wrapper style5">
            <div class="inner">

                <h3>Neem contact op voor een vrijblijvend gesprek over jouw weboplossing</h3>
                <p>Heb je een idee voor een website, een vraag over maatwerk weboplossingen of gewoon zin om eens te
                    sparren over de mogelijkheden? We staan altijd open voor een gesprek!</p>
                <p>Of je nu een concreet project hebt of gewoon even wilt kennismaken met een (online) bakkie koffie, je
                    bent van harte welkom. Vul het contactformulier in of bel ons direct. We werken vanuit Assen en
                    Groningen, maar zijn flexibel en denken graag met je mee!</p>

                <section>

                    <h4>Contactformulier</h4>
                    <form method="post" action="{"{route('contact_send')}}">
                        @csrf
                        <div class="row gtr-uniform">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="name" id="name" value="" placeholder="Naam" required>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input type="text" name="phone" id="phone" value="" placeholder="Telefoonnummer">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-12-xsmall">
                                <input type="email" name="email" id="email" value="" placeholder="Email" required>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <textarea name="demo-message" id="demo-message" placeholder="Enter your message"
                                          rows="6"></textarea>
                                @error('message')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" value="Verstuur het bericht" class="primary"></li>
                                </ul>
                            </div>
                        </div>
                    </form>

                    <p><strong>💬 Direct contact?</strong> Stuur ons een bericht of pak de telefoon – we horen graag van
                        je!</p>
                    <p><strong>📍 Locatie:</strong> Assen & Groningen</p>
                    <p><strong>📧 E-mail:</strong> <a href="mailto:contact@trialandvictory.com">contact@trialandvictory.com</a>
                    </p>
                    <p><strong>📞 Telefoon:</strong> <a href="tel:+31631582587">+31 6 31582587</a></p>
                </section>
            </div>
        </section>
    </article>

@endsection
