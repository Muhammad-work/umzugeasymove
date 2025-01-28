@section('front.nav')

<nav class="w-full h-[100px] bg-white flex justify-between items-center px-4 md:px-8 ">
    <!-- Logo -->
    <div class="w-[40%] md:w-[20%]">
        <a href="{{ route('home') }}"><img class="w-[90%]" src="{{ asset('storage/img/logo.png') }}" alt="Logo"></a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menu-toggle" class="md:hidden text-3xl">
        <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Navigation Links -->
    <div id="menu"
        class="hidden z-10 md:flex md:gap-8 absolute md:static top-[80px] left-0 w-full md:w-auto bg-white md:bg-transparent md:shadow-none shadow-md">
        <ul class="flex flex-col md:flex-row gap-4 md:gap-2 w-full text-center md:text-left">
            <li class="text-xl uppercase cursor-pointer menu-item relative active py-3 px-6 md:py-0"><a href="{{ route('home') }}">Home</a></li>
            <li class="text-xl uppercase cursor-pointer menu-item relative py-3 px-6 md:py-0"><a href="{{ route('about') }}">ÜBER UNS</a></li>
            <li class="text-xl uppercase cursor-pointer menu-item relative py-3 px-6 md:py-0"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="text-xl uppercase cursor-pointer menu-item relative py-3 px-6 md:py-0"><a href="{{ route('service') }}">DIENSTLEISTUNGEN</a></li>
        </ul>
    </div>

    <!-- Call Button -->
    <div class="md:block hidden">
        <div class="flex items-center gap-3 py-2 px-5 rounded-3xl me-6"
            style="background: linear-gradient(90deg, rgba(2,0,36,1) 14%, rgba(255,0,5,1) 100%);">
            <i class="fa-solid fa-phone text-xl text-white"></i>
            <a href="tel:08003090123" class="text-xl text-white">0800 3090123</a>
        </div>
    </div>
</nav>

@endsection
