

@section('fornt.hero')
    <style>
        body{
            background: white;
        }
    </style>

   {{-- hero section --}}

    <section class="w-full h-auto bg-white py-6">
        <div class="w-full h-full flex justify-center place-items-center">
            <div class="w-[40%] flex flex-col gap-3 ">
                <h1 class="text-4xl font-bold text-center">Umzugsunternehmen <br> Berlin</h1>
                <div class="flex gap-2 place-items-center">
                    <input type="text" name="" id="" placeholder="Postlezahi eingeben" class="p-2 outline-none rounded border-2 border-[#ccc]">
                    <a href="{{ route('calculater') }}" class="bg-[#06BF8B] text-white px-2 py-3 rounded uppercase ">Jetzt angebot erhalten</a>
                </div>
                <p class="font-medium"><i class="fa-solid fa-check bg-[#06BF8B] p-2 text-white rounded-full"></i> No subcontractors</p>
                <p class="font-medium"><i class="fa-solid fa-check bg-[#06BF8B] p-2 text-white rounded-full"></i> 100% Own Employees</p>
                <p class="font-medium"><i class="fa-solid fa-check bg-[#06BF8B] p-2 text-white rounded-full"></i> Fixed price bookable</p>
                <p class="font-medium"><i class="fa-solid fa-check bg-[#06BF8B] p-2 text-white rounded-full"></i> Regionally near you!</p>
            </div>
            <div class="w-[40%] h-full">
                <img class="w-full " src="{{ asset('storage/img/hero.svg') }}" alt="">
            </div>
        </div>
    </section>

   {{-- hero section --}}

@endsection
