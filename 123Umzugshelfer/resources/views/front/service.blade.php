@extends('layout.index')
@extends('front.nav')
@extends('front.footer')


@section('front.home')
    {{-- servic section --}}
    <section class="w-full h-auto bg-white py-8 px-4">
        <div class="w-full h-[100px] flex justify-center items-center">
            <h1 class="text-4xl font-bold">Umzugsservice</h1>
        </div>
        <div class="max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
            <!-- Service Box -->
            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Kostenloses Festpreisangebot</h1>
                <p class="text-center text-white text-sm">
                    Erhalten Sie ein transparentes, kostenloses Festpreisangebot, das Ihre individuellen Umzugsbedürfnisse berücksichtigt.
                </p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Beladen Ihrer Umzugsgüter</h1>
                <p class="text-center text-white text-sm">Unser qualifiziertes Team belädt Ihre Umzugsgüter sicher und effizient.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Transport Ihrer Umzugsgüter</h1>
                <p class="text-center text-white text-sm">Wir gewährleisten einen sicheren, zuverlässigen Transport Ihrer Güter.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Entladen Ihrer Umzugsgüter</h1>
                <p class="text-center text-white text-sm">Wir sorgen für ein sorgfältiges Entladen Ihrer Güter in Ihrem neuen Zuhause.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Persönlicher Umzugsberater</h1>
                <p class="text-center text-white text-sm">Profitieren Sie von einem persönlichen Umzugsberater, der Sie begleitet.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Ab- und Aufbau der Möbel</h1>
                <p class="text-center text-white text-sm">Wir übernehmen das sichere Zerlegen und Wiederaufbauen Ihrer Möbel.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Abklemmen & Anschluss des Herdes</h1>
                <p class="text-center text-white text-sm">Unser Fachpersonal kümmert sich um das fachmännische Anschließen Ihres Herdes.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Persönliche Betreuung am Umzugstag</h1>
                <p class="text-center text-white text-sm">Wir sind am Umzugstag persönlich für Sie da.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Waschmaschine ab- und anklemmen</h1>
                <p class="text-center text-white text-sm">Unsere Experten kümmern sich um das fachgerechte Anschließen Ihrer Waschmaschine.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Einpack- & Auspackservice</h1>
                <p class="text-center text-white text-sm">Unser Team bietet einen umfassenden Ein- und Auspackservice.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Lampen ab- und aufhängen</h1>
                <p class="text-center text-white text-sm">Wir kümmern uns um das sichere Abnehmen und Aufhängen Ihrer Lampen.</p>
            </div>

            <div class="max-w-[350px] h-[350px] bg-[#06BF8B] flex flex-col items-center gap-3 py-8 px-4 rounded-lg shadow-lg">
                <img class="w-[20%]" src="{{ asset('storage/img/servic.png') }}" alt="">
                <h1 class="text-xl font-bold text-white text-center">Lieferung von Verpackungsmaterialien</h1>
                <p class="text-center text-white text-sm">
                    Porzellan und Gläser müssen für den Umzug gut geschützt werden. Sparen Sie nicht an Papier!
                </p>
            </div>
        </div>
    </section>

    {{-- servic section --}}
@endsection
