@extends('layout.index')
@extends('front.nav')
@extends('front.footer')


@section('front.home')
    {{-- about hero section --}}
    <section class="w-full h-auto ">
        <div class="w-full md:h-[500px]">
            <img class="w-full h-full" src="{{ asset('storage/img/about-img.jpg') }}" alt="">
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
                <img class="w-full h-auto object-cover" src="{{ asset('storage/img/about-img-company.jpg') }}"
                    alt="">
            </div>

            <!-- Text Content -->
            <div class="w-full sm:w-[90%] md:w-[45%] flex flex-col gap-4 text-center md:text-left">
                <h1 class="text-3xl font-medium text-[#425168]">123Umzugshelfer</h1>
                <p class="text-xl text-[#425168]">
                    Heute ist 123 Umzugshelfer seit über 5 Jahren im Geschäft. Der Aufstieg von 123 Umzugshelfer an die
                    Spitze
                    der deutschen Umzugsbranche ist das Ergebnis unseres unermüdlichen Einsatzes. Jährlich bewegt 123
                    Umzugshelfer über 15.000 Menschen sowohl aus ihrer Wohnung als auch aus ihrem Büro nicht nur
                    deutschlandweit, sondern auch europaweit. Egal wohin unsere Kunden umziehen oder welches Umzugsvolumen
                    sie mitnehmen, sie können die gleiche Servicequalität von 123Umzugshelfer und unseren Umzugsspezialisten
                    erwarten.
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
                <h1 class="text-2xl font-medium text-[#425168]">Wir sind, wo sie sind</h1>
                <p class="text-lg text-[#425168]">
                    Ein Umzug erfordert eine detailgenaue Planung und eine perfekte Organisation. Durch langjährige Erfahrung
                    sind wir in der Lage, Ihren privaten Umzug oder Firmenumzug in kürzester Zeit und für Sie vollkommen
                    stressfrei abzuwickeln. Mit Fachkompetenz, Zuverlässigkeit und hohen Qualitätsstandards sorgen wir für
                    einen reibungslosen Ablauf Ihres Umzugs.
                </p>
                <p class="text-lg text-[#425168]">
                    123 Umzugshelfer gehört zu den ausgezeichneten Umzugsunternehmen in Detmold. Egal, ob innerhalb der Stadt,
                    außerhalb oder europaweit – wir sind für Sie da.
                </p>
                <p class="text-lg text-[#425168]">
                    Unsere Umzugshelfer werden fachlich sowie persönlich weitergebildet, um Ihnen einen einwandfreien und
                    zuverlässigen Umzug zu garantieren. Durch unseren besonderen Teamgeist schaffen wir ein friedliches Arbeitsumfeld.
                </p>
            </div>

            <!-- Image -->
            <div class="w-full sm:w-[90%] md:w-[45%]">
                <img class="w-full h-auto object-cover rounded-lg " src="{{ asset('storage/img/map.jpg') }}" alt="Karte">
            </div>
        </div>
    </section>


    {{-- Wir sind, wo sie sind section --}}
@endsection
