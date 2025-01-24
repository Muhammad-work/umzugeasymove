@extends('layout.index')
@extends('front.nav')
@extends('front.footer')


@section('front.home')
    {{-- blog hero section --}}

    <section class="w-full h-auto ">
        <div class="w-full h-[300px] bg-cover bg-center"
            style="background-image: url('{{ asset('storage/img/blog-bg.jpg') }}');">
            <div class="w-full h-full flex justify-center place-items-center">
                <h1 class="md:text-5xl text-2xl font-bold text-white">Umzugsunternehmen Blog</h1>
            </div>
        </div>
    </section>

    {{-- blog hero section --}}


    {{-- blog section --}}

    <section class="w-full h-auto bg-white">
        <div class="w-[90%] h-full bg-white flex justify-center gap-3 mx-auto py-8">
            <div class="w-[70%]">
                <div class="flex flex-col gap-3">
                    <img class="w-[90%]"
                        src="https://www.123umzugshelfer.de/upload/articles-files/2000/shutterstock_1457837645_copy-min_5b9a3.jpg"
                        alt="">
                    <h2 class="font-medium text-[#03293F]">Adressänderung Umzug</h2>
                    <p class="w-[90%]">Adressänderung Umzug Obwohl ein Umzug ist in der Regel mit sehr viel Planung und Arbeit verbunden
                        ist, sollte man den Punkt Adressänderung Umzug, auf keinen Fall außer Acht lassen. Natürlich gibt es
                        noch viele andere Aufgaben rund um den Umzug, so müssen die Kinder unter Umständen in der neuen
                        Schule angemeldet werden, neue Möbel müssen gekauft werden und der Umzug an sich muss vorbereitet
                        werden. Damit der Start des neuen Lebensabschnitts jedoch so unkompliziert und schnell wie möglich
                        geschieht und es nicht zu Verzögerungen beim Zustellen der Post kommt, sollten Sie die
                        Adressänderung so vielen Stellen wie möglich mitteilen. Die Frist für die Anmeldung der neuen
                        Adresse beim Amt beträgt 14 Tage. Sie sollten aber die Adressänderung auch s</p>
                    {{-- <button>Weiterlesen </button> --}}
                </div>
            </div>
            <div class="w-[30%]">
                <div class="flex flex-col gap-3">
                    <p class="bg-[#073360] text-center py-3 text-xl uppercase text-white">Kategorien</p>
                    <div class="border-2 border-black-900">
                        <div class="flex justify-between border-b-2 border-[#ccc] px-2 text-[#5A5A5A] py-2">
                            <p>Umzug</p>
                            <p>958</p>
                        </div>
                        <div class="flex justify-between border-b-2 border-[#ccc] px-2 text-[#5A5A5A] py-2">
                            <p>Tipps</p>
                            <p>958</p>
                        </div>
                        <div class="flex justify-between border-b-2 border-[#ccc] px-2 text-[#5A5A5A] py-2">
                            <p>Umzug Planen</p>
                            <p>958</p>
                        </div>
                        <div class="flex justify-between border-b-2 border-[#ccc] px-2 text-[#5A5A5A] py-2">
                            <p>Umzug Checkliste</p>
                            <p>958</p>
                        </div>
                        <div class="flex justify-between  px-2 text-[#5A5A5A] py-2">
                            <p>Adressänderung Umzug</p>
                            <p>958</p>
                        </div>
                    </div>
                    <p class="bg-[#073360] text-center py-3 text-xl uppercase text-white">recent posts</p>
                </div>
            </div>
        </div>
    </section>

    {{-- blog section --}}
@endsection
