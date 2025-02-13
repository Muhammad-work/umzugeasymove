@extends('layout.index')
@extends('front.nav')
@extends('front.footer')


@section('front.home')
    {{-- about hero section --}}
    <section class="w-full h-auto ">
        <div class="w-full md:h-[500px]">
            <img class="w-full h-full" src="{{ asset('storage/img/about-img.jpeg') }}" alt="">
        </div>

        <div class="w-full h-auto py-4 bg-[#0968B7] flex flex-col justify-center gap-5">
            <div class="flex justify-around flex-wrap">
                <h1 class="text-xl font-bold text-white">Garantierte</h1>
                <h1 class="text-xl font-bold text-white">Professionell Ausgebildete</h1>
                <h1 class="text-xl font-bold text-white">Erstklassige</h1>
            </div>
            <div class="flex justify-around flex-wrap">
                <h1 class="text-xl font-bold text-white">Preise</h1>
                <h1 class="text-xl font-bold text-white">Umzugshelfer</h1>
                <h1 class="text-xl font-bold text-white">Technologie</h1>
            </div>
        </div>
    </section>
    {{-- about hero section --}}

    {{-- about section --}}

    <section class="w-full h-auto bg-white">
        <div class="w-full h-full bg-white flex flex-wrap justify-center gap-5 py-8 px-4">
            <!-- Image Container -->
            <div class="w-full sm:w-[90%] md:w-[45%] max-w-full">
                <img class="w-full h-auto object-cover" src="{{ asset('storage/img/about-img-company.jpeg') }}"
                    alt="">
            </div>

            <!-- Text Content -->
            <div class="w-full sm:w-[90%] md:w-[45%] flex flex-col gap-4 text-center md:text-left">
                <h1 class="text-3xl font-medium text-[#425168]">Umzugeasymove</h1>
                <p class="text-xl text-[#425168]">
                    Seit über 5 Jahren steht UmzugeAsyMove für zuverlässige und professionelle Umzüge. Unser unermüdlicher
                    Einsatz hat uns an die Spitze der deutschen Umzugsbranche gebracht. Jährlich begleiten wir über 15.000
                    Umzüge – sei es privat oder geschäftlich, deutschlandweit oder europaweit.

                    Egal, wohin Ihr Weg führt oder wie groß Ihr Umzugsvolumen ist – mit UmzugeAsyMove können Sie stets die
                    höchste Servicequalität und die Expertise unserer Umzugsspezialisten erwarten.
                </p>
                <div class="flex flex-col items-center md:items-start">
                    <p class="text-[#425168] flex items-center"><i class="fa-solid fa-check text-[#425168] mr-2"></i>
                        ORGANISIERT.</p>
                    <p class="text-[#425168] flex items-center"><i class="fa-solid fa-check text-[#425168] mr-2"></i>
                        PÜNKTLICH.</p>
                    <p class="text-[#425168] flex items-center"><i class="fa-solid fa-check text-[#425168] mr-2"></i>
                        HERVORRAGEND.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- about section --}}

    {{-- Wir sind, wo sie sind section --}}
    <section class="w-full h-auto bg-white">
        <div class="w-full h-full bg-white flex flex-wrap justify-center gap-5 place-items-center py-4 px-4">
            <!-- Text Content -->
            <div class="w-full sm:w-[90%] md:w-[45%] flex flex-col gap-4 text-center md:text-left">
                <h1 class="text-2xl font-medium text-[#425168]">Wir sind, wo Sie sind – Ihr Umzug in besten Händen!</h1>
                <p class="text-lg text-[#425168]">
                    Ein erfolgreicher Umzug erfordert präzise Planung und perfekte Organisation. Dank unserer langjährigen
                    Erfahrung wickeln wir private und gewerbliche Umzüge schnell, effizient und vollkommen stressfrei für
                    Sie ab.
                </p>
                <p class="text-lg text-[#425168]">
                    Mit Fachkompetenz, Zuverlässigkeit und höchsten Qualitätsstandards garantieren wir einen reibungslosen
                    Ablauf. UmzugeAsyMove zählt zu den führenden Umzugsunternehmen in Detmold – egal, ob Sie innerhalb der
                    Stadt, deutschlandweit oder europaweit umziehen, wir sind Ihr verlässlicher Partner.
                </p>
                <p class="text-lg text-[#425168]">
                    Unsere Umzugshelfer werden sowohl fachlich als auch persönlich geschult, um Ihnen stets einen
                    einwandfreien und professionellen Service zu bieten. Unser starker Teamgeist sorgt für ein harmonisches
                    Arbeitsumfeld und ein angenehmes Umzugserlebnis.
                </p>
            </div>

            <!-- Image -->
            <div class="w-full sm:w-[90%] md:w-[45%]">
                <img class="w-full h-auto object-cover rounded-lg " src="{{ asset('storage/img/map.jpeg') }}"
                    alt="Karte">
            </div>
        </div>
    </section>
    {{-- Wir sind, wo sie sind section --}}
@endsection
