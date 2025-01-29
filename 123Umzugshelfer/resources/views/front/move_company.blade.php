

@section('fornt.hero')
    <style>
        body{
            background: white;
        }
    </style>

   {{-- hero section --}}

   <section class="w-full h-auto bg-white py-6">
    <div class="w-full h-full flex flex-col md:flex-row justify-center items-center gap-6 px-4">
        <div class="lg:w-[40%] w-full flex flex-col gap-3 text-center md:text-left">
            <h1 class="text-3xl md:text-4xl font-bold">Umzugsunternehmen <br> Berlin</h1>
            <div class="flex flex-col md:flex-row gap-2 items-center">
                <input type="text" placeholder="Postleitzahl eingeben"
                       class="p-2 w-full md:w-auto outline-none rounded border-2 border-gray-300">
                <a href="{{ route('calculater') }}"
                   class="bg-[#06BF8B] text-white px-4 py-3 rounded uppercase text-center w-full md:w-auto">
                   Jetzt angebot erhalten
                </a>
            </div>
            <div class="flex flex-col items-center md:items-start gap-2">
                <p class="font-medium flex items-center gap-2">
                    <i class="fa-solid fa-check bg-[#06BF8B] p-2 text-white rounded-full"></i> No subcontractors
                </p>
                <p class="font-medium flex items-center gap-2">
                    <i class="fa-solid fa-check bg-[#06BF8B] p-2 text-white rounded-full"></i> 100% Own Employees
                </p>
                <p class="font-medium flex items-center gap-2">
                    <i class="fa-solid fa-check bg-[#06BF8B] p-2 text-white rounded-full"></i> Fixed price bookable
                </p>
                <p class="font-medium flex items-center gap-2">
                    <i class="fa-solid fa-check bg-[#06BF8B] p-2 text-white rounded-full"></i> Regionally near you!
                </p>
            </div>
        </div>
        <div class="lg:w-[40%] w-full">
            <img class="w-full max-w-full" src="{{ asset('storage/img/hero.svg') }}" alt="Umzugsunternehmen Berlin">
        </div>
    </div>
   </section>

   {{-- hero section --}}

@endsection
