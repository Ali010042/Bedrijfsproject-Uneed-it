<x-layout>
    <body>
        
    <div class="SC1-head">
    <div class="text-container">
        Welkom bij Uneed-IT, de IT specialist met een rijke <br>historie op gebied van PC reparatie en onderhoud.
        <button class="button-head" type="button" onclick="window.location='{{ url('overons') }}'">Leer ons kennen</button>
         </div>
        </div>
        
    
        <div class="SC1">
            <div class="text-container">
                <h2 class="H2W">Vraag uw offerte aan!</h2>
                <br>
                <p>Wij bieden een breed assortiment smartphones, accessoires en reparatieservices, Ook kunt u bij ons terecht voor zakelijke 
                    <br>netwerkbeheer en aanschaf van nieuwe hardware.</p>
            </div>
            <div class="IMGW">
                <img src="{{ Vite::asset('public/Photos/uneedi01.jpg') }} " alt="img">
            </div>
            <button class="button1" type="button" onclick="window.location='{{ url('zakelijk') }}'">Offerte aanvragen</button>
        </div>

        <div class="SC1">
            <div class="text-container">
                <h2 class="H2W">Wat bieden wij?</h2>
                <br>
                <p>Wij bieden snelle telefoonreparaties, hulp bij het overzetten van gegevens, en installatie van nieuwe toestellen.
                    <br>Daarnaast adviseren wij over abonnementen en simkaarten.</p>
            </div>
            <div class="IMGW">
                <img src="{{ Vite::asset('public/Photos/uneedit02.jpg') }} " alt="img">
            </div>
            <button class="button1" type="button" onclick="window.location='{{ url('diensten') }}'">Bekijk onze services</button>
        </div>

        <header>
            <div class="container">
                <div class="container__left">
                    <h1>Lees wat onze klanten over ons zeggen</h1>
                    <p>
                        Meer dan 200 bedrijven uit diverse sectoren schakelen ons in om de
                        gebruikerservaring van hun producten en diensten te verbeteren.
                    </p>
                    <p>
                        We hebben bedrijven geholpen hun klantenbestand uit te breiden en
                        de omzet te verhogen met onze diensten.
                    </p>
                    <img src="{{ Vite::asset('public/Photos/certificate1.png') }} " alt="img">
                </div>
                <div class="container__right">
                    <div class="card">
                        <div class="card__content">
                            <span><i class="ri-double-quotes-l"></i></span>
                            <div class="card__details">
                                <p>
                                    Uneed IT heeft ons echt geholpen om de efficiëntie van onze
                                    IT-systemen te verbeteren. Een aanrader!
                                </p>
                                <h4>- Jeroen van Dijk</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__content">
                            <span><i class="ri-double-quotes-l"></i></span>
                            <div class="card__details">
                                <p>
                                    Dankzij Uneed IT hebben we onze klanttevredenheid aanzienlijk
                                    kunnen verhogen. Hun service is geweldig!
                                </p>
                                <h4>- Laura de Boer</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__content">
                            <span><i class="ri-double-quotes-l"></i></span>
                            <div class="card__details">
                                <p>
                                    De samenwerking met Uneed IT was fantastisch. Hun team is
                                    zeer deskundig en professioneel.
                                </p>
                                <h4>- Mark Jansen</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  


            <div class="layout-container">
                <div class="info-section">
                    <h1 class="main-heading">Onze aanpak: Uw succes</h1>
                    <p class="description">Bij Uneed IT is ons werkproces gericht op transparantie, efficiëntie en klantgerichtheid. Ontdek hoe wij het verschil maken.</p>
                    <div class="service-list">
                        <div class="service-item">
                            <div class="service-icon">🔍</div>
                            <div class="service-content">
                            <b><h3 class="service-title">Klantgerichte analyse</h3></b>
                                <p class="service-description">We starten met een grondige behoefteanalyse om uw specifieke IT-uitdagingen te begrijpen.</p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-icon">📅</div>
                            <div class="service-content">
                            <b> <h3 class="service-title">Op maat gemaakte oplossingen</h3></b>
                                <p class="service-description">Elk project krijgt een unieke aanpak, afgestemd op uw wensen en IT-vereisten.</p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-icon">🛠️</div>
                            <div class="service-content">
                            <b><h3 class="service-title">Efficiënte implementatie</h3></b>
                                <p class="service-description">Ons team zorgt voor een vlotte en effectieve implementatie van uw IT-systemen.</p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-icon">🚨</div>
                            <div class="service-content">
                            <b><h3 class="service-title">24/7 Servicedienst</h3></b>
                                <p class="service-description">Na de implementatie blijven we betrokken voor ondersteuning om de kwaliteit van uw IT-diensten te garanderen.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="visual-section">
                    <img src="{{ Vite::asset('public/Photos/overons.jpg') }}" alt="Uneed IT Visual" class="service-image">
                </div>
            </div>




                </div>
            </div>
</header>

    </body>


 </x-layout>

