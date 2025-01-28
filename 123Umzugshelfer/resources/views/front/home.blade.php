@extends('layout.index')
@extends('front.nav')
@extends('front.footer')


@section('front.home')
    {{-- hero section --}}

    <section class="w-full h-auto z-1 py-10 bg-white">
        <div class="w-full flex flex-col md:flex-row justify-center gap-6 px-4">

            <!-- Left Content Box -->
            <div class="w-full md:w-1/2 bg-white py-1 px-6 ">
                <h1 class="text-center text-3xl md:text-4xl font-bold text-[#212529]">
                    Wir machen <span class="text-[red] relative Deinen">Deinen</span> <br> Umzug!
                </h1>

                <!-- Orange Button -->
                <div
                    class="flex flex-col md:flex-row justify-center items-center gap-4 md:gap-6 bg-[#FF7D00] w-full md:w-[80%] mx-auto rounded-xl mt-8 py-4 px-4 text-white cursor-pointer calculater">
                    <div class="text-center md:text-left">
                        <h1 class="text-2xl md:text-3xl font-bold">Umzugs-Kostenrechner</h1>
                        <p class="text-lg">errechne in 3 Sekunden deine Umzugskosten!</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-arrow-right bg-white p-4 rounded-full text-[black]"></i>
                    </div>
                </div>

                <!-- Features List -->
                <div class="mx-auto w-full md:w-[80%] mt-8">
                    <ul class="flex flex-col gap-3">
                        <li class="text-lg md:text-xl">
                            <i class="fa-solid fa-check text-sm bg-[#329D64] px-2 py-1 text-white rounded-full"></i>
                            Keine Subunternehmer
                        </li>
                        <li class="text-lg md:text-xl">
                            <i class="fa-solid fa-check text-sm bg-[#329D64] px-2 py-1 text-white rounded-full"></i>
                            100% Eigene Mitarbeiter
                        </li>
                        <li class="text-lg md:text-xl">
                            <i class="fa-solid fa-check text-sm bg-[#329D64] px-2 py-1 text-white rounded-full"></i>
                            Festpreis Buchbar
                        </li>
                        <li class="text-lg md:text-xl">
                            <i class="fa-solid fa-check text-sm bg-[#329D64] px-2 py-1 text-white rounded-full"></i>
                            Regional bei Ihnen!
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Image Box -->
            <div class="w-full md:w-1/2">
                <img class="w-full h-full md:h-[400px] rounded-lg shadow-lg" src="{{ asset('storage/img/baner.jpg') }}"
                    alt="Banner">
            </div>

        </div>
    </section>

    {{-- hero section --}}


    {{-- Bereits section --}}
    <section class="w-full bg-[#EEF4F7] py-12 ">
        <h1 class="text-center text-3xl md:text-4xl font-bold text-[#073360] mb-8">
            Bereits 10.000 Menschen bewegt
        </h1>

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center text-center">
                    <img class="w-[40px] mb-4" src="{{ asset('storage/img/msg.png') }}" alt="">
                    <h2 class="text-2xl font-medium text-[#212529]">Schnell & Einfach</h2>
                    <p class="text-[#212529] text-sm">Stellen Sie einfach eine Anfrage und erhalten Sie innerhalb von
                        wenigen Minuten ein individuelles Umzugsangebot per E-Mail.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center text-center">
                    <img class="w-[40px] mb-4" src="{{ asset('storage/img/user.png') }}" alt="">
                    <h2 class="text-2xl font-medium text-[#212529]">Zuverlässig</h2>
                    <p class="text-[#212529] text-sm">Dank unseres hoch-technologischen Touren-Planungssystems wird kein
                        Umzug übersehen. Unser Team begleitet Ihren Umzug vom Start bis Ende in Echtzeit.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center text-center">
                    <img class="w-[65px] mb-4" src="{{ asset('storage/img/Capture.png') }}" alt="">
                    <h2 class="text-2xl font-medium text-[#212529]">Flexibel</h2>
                    <p class="text-[#212529] text-sm">Auch nach der Auftragsabwicklung können wir auf Wunsch Ihren Umzug
                        verschieben oder Änderungen im Auftrag vornehmen.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center text-center">
                    <img class="w-[60px] mb-4" src="{{ asset('storage/img/Capture2.png') }}" alt="">
                    <h2 class="text-2xl font-medium text-[#212529]">Transparent</h2>
                    <p class="text-[#212529] text-sm">Sie können Ihren Umzug stets nachverfolgen und die wichtigsten
                        Informationen zu Ihrem Umzug online abrufen.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- Bereits section --}}


    {{-- heding section --}}

    <section class="w-full h-full bg-white py-8">
        <div class="md:w-[50%] w-[100%] h-[100px] flex justify-center place-items-center mx-auto  bg-white">
            <h1 class="text-3xl text-center">Wieso sind wir so beliebt? <br>
                Sehen Sie selbst</h1>
        </div>

    </section>
    {{-- heding section --}}



    {{-- card section  --}}

    <section class="w-full min-h-screen  py-6 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-center">

                <!-- Card 1 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-100 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/c1_1c541_umzugshelfer_op_fafd1.jpg') }}"
                        alt="">
                    <h1 class="text-2xl mt-3 font-medium text-[#0D3864]">Stressfreiere Privatumzüge</h1>
                    <p class="mt-3 text-gray-600">Sparen Sie Zeit sowie Nerven und letztlich auch Geld. Wir sind Ihre
                        Fachleute für Privatumzüge.</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-200 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/p2_op_66945.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium text-[#0D3864]">Professionellere Firmenumzüge</h1>
                    <p class="mt-3 text-gray-600">Die Organisation eines Firmenumzugs ist keine einfache Sache. Damit
                        ein nahtloser Übergang möglich wird, planen wir Ihren Firmenumzug detailliert.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-300 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/c3_op_82f0a.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium text-[#0D3864]">Sicherere Seniorenumzüge</h1>
                    <p class="mt-3 text-gray-600">Bequem und ohne Sorgen umziehen – ein Plus mit 123Umzugshelfer.
                        Umziehen geht mit uns ganz einfach.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-400 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/p1_copy_d5203.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium text-[#0D3864]">Schnellere Haushaltsauflösungen</h1>
                    <p class="mt-3 text-gray-600">Damit Sie sich über die Haushaltsauflösung keine Gedanken machen müssen,
                        berät Sie das Team von 123Umzugshelfer gerne bei allen Fragen zur Haushaltsauflösung</p>
                </div>

                <!-- Card 5 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-500 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/c2_op_ecfe5.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium text-[#0D3864]">Bessere Lösungen für Behördenumzüge</h1>
                    <p class="mt-3 text-gray-600">Öffentliche Institutionen stehen mit ihren Dienstleistungen jedem Bürger
                        offen. Hierbei können die Umzugskosten auch durch etwaige Behörden übernommen werden.</p>
                </div>

                <!-- Card 6 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-600 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/p3_op_76e63.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium text-[#0D3864]">Sicherere Internationale Umzüge</h1>
                    <p class="mt-3 text-gray-600">Jährlich beschließen rund 100.000 Menschen in Deutschland auszuwandern und
                        verlegen ihren Wohnsitz ins Ausland. Das kann sowohl berufliche als auch persönliche Gründe haben.
                        Wir stehen Ihnen zur Seite.</p>
                </div>

            </div>
        </div>
    </section>

    {{-- card section  --}}



    {{-- Unsere Serviceleistungen section --}}

    <section class="w-full h-[400px] px-4 md:px-8 ">
        <div class="w-full h-full text-center flex flex-col justify-center items-center gap-6">
            <h1 class="text-3xl md:text-4xl text-white font-bold animate-fade-in">Unsere Serviceleistungen</h1>
            <p class="w-[90%] md:w-[60%] text-white text-lg animate-slide-up">
                Erfahren Sie hier mehr über unsere optimierten Serviceleistungen und sprechen Sie mit Ihrem persönlichen
                Umzugsberater über Ihre Fragen und Wünsche. Unser Ziel ist es, schnell und effektiv einen reibungslosen
                Umzug zu gewährleisten.
            </p>
            <a href="#"
                class="border-2 border-white px-6 py-3 rounded text-white text-lg hover:bg-white hover:text-black transition duration-300 animate-pulse">
                Mehr bitte
            </a>
        </div>
    </section>

    {{-- Unsere Serviceleistungen section --}}


    {{-- Wie erhalte ich Hilfe von 123Umzugshelfer? section --}}

    <section class="w-full h-auto bg-white md:py-8 py-4">
        <h1 class="text-2xl text-center py-8">Wie erhalte ich Hilfe von umzugeasymove?</h1>
        <div
            class="max-w-[90%] md:max-w-[50%] h-auto md:h-[150px] relative flex flex-col md:flex-row mx-auto ps-3 shadow-lg rounded gap-4">
            <div class="w-full md:w-[80%] flex justify-center items-center text-sm md:text-base">
                <p>Sie stellen Ihre Umzugsanfrage, indem Sie entweder Ihre Start- und Zieladresse eingeben und dann
                    den Button „Jetzt Angebot erhalten“ anklicken oder Sie rufen einen unserer persönlichen
                    Umzugsberater kostenlos und unverbindlich an.</p>
            </div>
            <div
                class="w-full md:w-[20%] text-center text-sm md:text-lg bg-[#096FAB] flex justify-center items-center text-white rounded p-2 md:p-0">
                <p>Kostenlose Umzugsanfrage stellen</p>
            </div>
            <span id="count1" class="md:block hidden">1</span>
            <span id="line1" class="md:block hidden"></span>
            <span id="lineb" class="md:block hidden"></span>
        </div>
        <div
            class="max-w-[90%] md:max-w-[50%] h-auto md:h-[150px] relative flex flex-col md:flex-row mx-auto ps-3 shadow-lg rounded gap-4 mt-6">
            <div class="w-full md:w-[80%] flex justify-center items-center text-sm md:text-base">
                <p>Sie entscheiden was Ihnen wichtig ist und unser Mitarbeiter fügt dieses für Sie in Ihr Angebot ein.
                    Da viele unserer Kunden ein Festpreisangebot bevorzugen, erhalten auch Sie bei uns schriftlich Ihr
                    Festpreisangebot für Ihren Umzug.</p>
            </div>
            <div
                class="w-full md:w-[20%] text-center text-sm md:text-lg bg-[#096FAB]  flex justify-center items-center  text-white rounded p-2  md:p-0">
                <p>Kostenloses Festpreisangebot erhalten</p>
            </div>
            <span id="count2" class="md:block hidden">2</span>
            <span id="lineb2" class="md:block hidden"></span>
            <span id="line2" class="md:block hidden"></span>
        </div>
        <div
            class="max-w-[90%] md:max-w-[50%] h-auto md:h-[150px] relative flex flex-col md:flex-row mx-auto ps-3 shadow-lg rounded gap-4 mt-6">
            <div class="w-full md:w-[80%] flex justify-center items-center text-sm md:text-base">
                <p>Bevor Ihr Umzug losgeht, hilft unser erfahrener Mitarbeiter aus der Disposition persönlich in
                    mehreren Telefonaten Ihnen, wie Sie sich bestens auf Ihren Umzug vorbereiten können. Dieses ist
                    selbstverständlich im Angebotspreis mit inbegriffen</p>
            </div>
            <div
                class="w-full md:w-[20%] text-center text-sm md:text-lg bg-[#096FAB] flex justify-center items-center text-white p-2 rounded md:p-0">
                <p>Wir bereiten Sie auf Ihren Umzug vor</p>
            </div>
            <span id="count3" class="md:block hidden">3</span>
            <span id="lineb3" class="md:block hidden"></span>
            <span id="line3" class="md:block hidden"></span>
        </div>
        <div
            class="max-w-[90%] md:max-w-[50%] h-auto md:h-[150px] relative flex flex-col md:flex-row mx-auto ps-3 shadow-lg rounded gap-4 mt-6">
            <div class="w-full md:w-[80%] flex justify-center items-center text-sm md:text-base">
                <p>In diesem Schritt beantragen wir für Sie z. B. die benötigte Halteverbotszone für Ihren Umzugstag,
                    senden Ihre Bestellungen, liefern Ihre bestellten Verpackungsmaterialien und übergeben, die im Preis
                    inbegriffenen Materialien. Siehe Einpackservice.</p>
            </div>
            <div
                class="w-full md:w-[20%] text-center text-sm md:text-lg bg-[#096FAB] flex justify-center items-center text-white p-2  rounded md:p-0">
                <p>Letzter Schritt vor Ihrem Umzug</p>
            </div>
            <span id="count4" class="md:block hidden">4</span>
            <span id="lineb4" class="md:block hidden"></span>
            <span id="line4" class="md:block hidden"></span>
        </div>
        <div
            class="max-w-[90%] md:max-w-[50%] h-auto md:h-[150px] relative flex flex-col md:flex-row mx-auto ps-3 shadow-lg rounded gap-4 mt-6">
            <div class="w-full md:w-[80%] flex justify-center items-center text-sm md:text-base">
                <p>Am Umzugstag wird der LKW und der Umzugslift, am vorgesehen Platz mit der eingerichteten
                    Halteverbotszone, sicher abgestellt. Auf Wunsch und mit vorheriger Absprache werden Ihre Umzugsgüter
                    sicher verpackt und ins Fahrzeug geladen. Nach Rücksprache mit Ihnen werden unsere Umzugsprofis sich
                    auf den Weg zur Zieladresse begeben und dort das Entladen Ihrer Güter sicherstellen.</p>
            </div>
            <div
                class="w-full md:w-[20%] text-center text-sm md:text-lg bg-[#096FAB] flex justify-center items-center text-white rounded p-2  md:p-0">
                <p>Wir garantieren Ihnen einen reibungslosen Auszug</p>
            </div>
            <span id="count5" class="md:block hidden">5</span>
            <span id="lineb5" class="md:block hidden"></span>
            <span id="line5" class="md:block hidden"></span>
        </div>
        <div
            class="max-w-[90%] md:max-w-[50%] h-auto md:h-[150px] relative flex flex-col md:flex-row mx-auto ps-3 shadow-lg rounded gap-4 mt-6">
            <div class="w-full md:w-[80%] flex justify-center items-center text-sm md:text-base">
                <p>An der Zieladresse angekommen, werden unsere Fachkräfte Vorort, Ihre kompletten Umzugsgüter schnell
                    und sicher entladen und in Ihre neue Wohnung befördern. In der Wohnung angekommen, werden Ihre
                    Möbel, selbstverständlich nach vorheriger Absprache mit Ihrem persönlichen Umzugsberater, die von
                    uns eingepackten Güter ausgepackt und auf Wunsch fachgerecht wiederaufgebaut.</p>
            </div>
            <div
                class="w-full md:w-[20%] text-center text-sm md:text-lg bg-[#096FAB] flex justify-center items-center text-white rounded  p-2 md:p-0">
                <p>Mit uns ziehen Sie sicher in Ihr neues Zuhause ein</p>
            </div>
            <span id="count6" class="md:block hidden">6</span>
            <span id="line6" class="md:block hidden"></span>
        </div>
    </section>

    {{-- Wie erhalte ich Hilfe von 123Umzugshelfer? section --}}


    {{-- 123Umzugshelfer Erfahrungen section --}}

    <section class="w-full min-h-screen bg-[#EEF4F7] p-6">
        <h1 class="text-3xl text-center py-12 text-[#073360] font-bold">umzugeasymove Erfahrungen</h1>
        <div class="w-full h-auto flex flex-wrap justify-center gap-6">
            <div class="w-full sm:w-[350px] h-full p-4 bg-white shadow-xl">
                <div class="w-full h-[80px] flex justify-between items-center px-2">
                    <div class="flex gap-3">
                        <img class="w-[25%]" src="https://www.123umzugshelfer.de/assets/img/c-1.jpg" alt="">
                        <div class="text-center">
                            <p class="font-bold">Mathias H.</p>
                            <p>Umzugskosten 1975.00 €</p>
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                    </div>
                </div>
                <h1 class="mt-4 font-medium">Umzug Hamburg Hamburg</h1>
                <p class="mt-3">Makelloser Umzug wurde von dieser Umzugsfirma toll eingeplant und schnell ausgeführt.
                    Das Geld hat sich für dieses Umzugsunternehmen definitiv gelohnt!</p>
                <p class="mt-3">Schrieb am 06.02.2024</p>
            </div>
            <div class="w-full sm:w-[350px] h-full p-4 bg-white shadow-xl">
                <div class="w-full h-[80px] flex justify-between items-center px-2">
                    <div class="flex gap-3">
                        <img class="w-[25%]" src="https://www.123umzugshelfer.de/assets/img/c-1.jpg" alt="">
                        <div class="text-center">
                            <p class="font-bold">Klaus A.</p>
                            <p>Umzugskosten 1955.00 €</p>
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                    </div>
                </div>
                <h1 class="mt-4 font-medium">Umzug Hamburg Hamburg</h1>
                <p class="mt-3">Mein Klavierumzug wurde mit diesem Umzugsunternehmen, mit dieser Umzugsfirma fantastisch
                    vollendet. Unser Klavier wurde sehr gut verpackt und sicher in unser neues Reich transportiert.
                    Perfekter Umzug!!!</p>
                <p class="mt-3">Schrieb am 15.05.2021</p>
            </div>
            <div class="w-full sm:w-[350px] h-full p-4 bg-white shadow-xl">
                <div class="w-full h-[80px] flex justify-between items-center px-2">
                    <div class="flex gap-3">
                        <img class="w-[25%]" src="https://www.123umzugshelfer.de/assets/img/c-1.jpg" alt="">
                        <div class="text-center">
                            <p class="font-bold">Richard M.</p>
                            <p>Umzugskosten 4557.00 €</p>
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                    </div>
                </div>
                <h1 class="mt-4 font-medium">Umzug Hamburg Hamburg</h1>
                <p class="mt-3">Tolles Umzugsunternehmen! Wir sind mit unseren Umzug sehr zufrieden und 123Umzugshelfer
                    sehr dankbar, dass trotz 4 Kindern und vielen Kisten mit dieser preiswerten Umzugsfirma alles so gut
                    gelaufen ist</p>
                <p class="mt-3">Schrieb am 02.05.2024</p>
            </div>
        </div>
    </section>

    {{-- 123Umzugshelfer Erfahrungen section --}}


    <script>
        let calculater = document.querySelector('.calculater');

        calculater.addEventListener('click', () => {
            window.location = '/kostenloses-angebot-erhalten';
        })
    </script>
@endsection
