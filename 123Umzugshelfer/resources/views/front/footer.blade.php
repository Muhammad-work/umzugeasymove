@section('fornt.footer')
<section class="w-full min-h-[400px] bg-[#042139] p-6 text-white">
    <div class="w-full h-[90px] flex items-center px-10">
        <img class="md:w-1/5" src="{{ asset('storage/img/logo-2.png') }}" alt="">
    </div>

    <div class="w-full h-auto bg-[#042139] flex flex-wrap justify-between px-6 md:px-16 gap-6 ">
        <div class="w-full sm:w-auto">
            <ul class="flex flex-col gap-2">
                <li>
                    <h1 class="text-3xl font-bold">Kontakt?</h1>
                </li>
                <li class="font-medium cursor-pointer">Heidlandstraße 29 32756 Detmold</li>
                <li class="font-medium cursor-pointer">0800 3090123</li>
                <li class="font-medium cursor-pointer">system[at]123umzugshelfer.de</li>
                <li class="font-medium cursor-pointer">Folgt uns auf Facebook</li>
                <li class="font-medium cursor-pointer">Folgt uns auf Instagram</li>
                <li class="font-medium cursor-pointer">Folgt uns auf LinkedIn</li>
            </ul>
        </div>
        <div class="w-full sm:w-auto">
            <ul class="flex flex-col gap-2">
                <li>
                    <h1 class="text-3xl font-bold">Umzug Deutschland</h1>
                </li>
                <li class="font-medium cursor-pointer"><a href="{{ route('move') }}">Umzugsunternehmen Berlin</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('munich') }}">Umzugsunternehmen München</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('hamburg') }}">Umzugsunternehmen Hamburg</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('hannover') }}">Umzugsunternehmen Hannover</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('Cologne') }}">Umzugsunternehmen Köln</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('Leipzig') }}">Umzugsunternehmen Leipzig</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('Kosten') }}">Umzugsunternehmen Kosten</a></li>
            </ul>
        </div>
        <div class="w-full sm:w-auto">
            <ul class="flex flex-col gap-2">
                <li>
                    <h1 class="text-3xl font-bold">Umzug Deutschland</h1>
                </li>
                <li class="font-medium cursor-pointer"><a href="{{ route('dusseldorf') }}">Umzugsunternehmen Düsseldorf</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('frankfurt') }}">Umzugsunternehmen Frankfurt</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('bremen') }}">Umzugsunternehmen Bremen</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('dresden') }}">Umzugsunternehmen Dresden</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('essen') }}">Umzugsunternehmen Essen</a></li>
                <li class="font-medium cursor-pointer"><a href="{{ route('stuttgart') }}">Umzugsunternehmen Stuttgart</a></li>
            </ul>
        </div>
        <div class="w-full sm:w-auto">
            <ul class="flex flex-col gap-2">
                <li>
                    <h1 class="text-3xl font-bold">Für Verbraucher</h1>
                </li>
                <li class="font-medium cursor-pointer">FAQ Umzug</li>
                <li class="font-medium cursor-pointer">Artikel</li>
                <li class="font-medium cursor-pointer">Kontakt</li>
                <li class="font-medium cursor-pointer">Karriere</li>
                <li class="font-medium cursor-pointer">Datenschutzerklärung</li>
                <li class="font-medium cursor-pointer">Impressum</li>
            </ul>
        </div>
    </div>
    <div class="mt-3 px-10 text-center">
        <p>Copyright @ 2025 | umzugeasymove</p>
    </div>
</section>
@endsection
