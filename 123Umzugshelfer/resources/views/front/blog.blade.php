@extends('layout.index')
@extends('front.nav')
@extends('front.footer')


@section('front.home')
    {{-- blog hero section --}}
    <section class="w-full h-auto ">
        <div class="w-full h-[300px] bg-cover bg-center"
            style="background-image: url('{{ asset('storage/img/blog-bg.jpeg') }}');">
            <div class="w-full h-full flex justify-center place-items-center">
                <h1 class="md:text-5xl text-2xl font-bold text-white">Umzugsunternehmen Blog</h1>
            </div>
        </div>
    </section>
    {{-- blog hero section --}}

    {{-- blog section --}}
    <section class="w-full h-auto bg-white">
        <div class="w-[90%] h-full bg-white flex flex-col md:flex-row justify-center gap-3 mx-auto py-8">
            <div class="w-full md:w-[70%]">
                <div class="flex flex-col gap-3">
                    <img class="w-full md:w-[90%] max-w-full" src="{{ asset('storage/img/blog-img.jpeg') }}" alt="">
                    <h2 class="font-medium text-[#03293F] text-lg md:text-xl">Adressänderung beim Umzug – Wichtiger Schritt
                        für einen reibungslosen Neustart!</h2>
                    <p class="w-full md:w-[90%] text-sm md:text-base">Ein Umzug erfordert viel Planung und Organisation –
                        doch die Adressänderung sollte dabei keinesfalls vergessen werden. Neben dem Packen, dem Kauf neuer
                        Möbel und der Anmeldung der Kinder an einer neuen Schule ist es entscheidend, Ihre neue Adresse
                        rechtzeitig an wichtigen Stellen zu hinterlegen.

                        Damit es nicht zu Verzögerungen bei der Postzustellung oder anderen wichtigen Dokumenten kommt,
                        sollten Sie Ihre Adressänderung so vielen relevanten Stellen wie möglich mitteilen. Denken Sie
                        daran: Die Frist zur Anmeldung der neuen Adresse beim zuständigen Amt beträgt 14 Tage.</p>
                </div>
            </div>
            <div class="w-full md:w-[30%]">
                <div class="flex flex-col gap-3">
                    <p class="bg-[#073360] text-center py-3 text-lg md:text-xl uppercase text-white">Kategorien</p>
                    <div class="border-2 border-black-900">
                        <div
                            class="flex justify-between border-b-2 border-[#ccc] px-2 text-[#5A5A5A] py-2 text-sm md:text-base">
                            <p>Umzug</p>
                            <p>958</p>
                        </div>
                        <div
                            class="flex justify-between border-b-2 border-[#ccc] px-2 text-[#5A5A5A] py-2 text-sm md:text-base">
                            <p>Tipps</p>
                            <p>958</p>
                        </div>
                        <div
                            class="flex justify-between border-b-2 border-[#ccc] px-2 text-[#5A5A5A] py-2 text-sm md:text-base">
                            <p>Umzug Planen</p>
                            <p>958</p>
                        </div>
                        <div
                            class="flex justify-between border-b-2 border-[#ccc] px-2 text-[#5A5A5A] py-2 text-sm md:text-base">
                            <p>Umzug Checkliste</p>
                            <p>958</p>
                        </div>
                        <div class="flex justify-between px-2 text-[#5A5A5A] py-2 text-sm md:text-base">
                            <p>Adressänderung Umzug</p>
                            <p>958</p>
                        </div>
                    </div>
                    <p class="bg-[#073360] text-center py-3 text-lg md:text-xl uppercase text-white">Recent Posts</p>
                </div>
            </div>
        </div>
    </section>
    {{-- blog section --}}
@endsection
