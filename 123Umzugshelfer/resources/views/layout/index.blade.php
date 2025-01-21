<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<style>
    .menu-item.active::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -5px;
        /* Adjust for underline */
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 14%, rgba(255, 0, 5, 1) 100%);
        border-radius: 2px;
    }

    .Deinen::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0px;
        /* Adjust for underline */
        width: 100%;
        height: 3px;
        background: red;
        border-radius: 5px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade {
        animation: fadeIn 1s ease-in-out forwards;
    }

    @keyframes bounceHover {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    .hover-bounce:hover {
        animation: bounceHover 0.5s ease-in-out;
    }

    body {
        background-image: url('{{ asset('storage/img/features-background.jpg') }}');
        background-size: cover;
        /* Image poori screen cover karegi */
        background-position: center;
        /* Image center aligned hogi */
        background-repeat: no-repeat;
        /* Image repeat nahi hogi */
        background-attachment: fixed;
        /* Scroll karne pe bhi image fixed rahegi */
    }
</style>

<body>

    {{-- Nav Section --}}
    {{-- @yield('front.nav') --}}
    {{-- Nav Section --}}
    <nav class="w-full h-[100px] bg-white flex justify-between items-center px-4 md:px-8 ">
        <!-- Logo -->
        <div class="w-[40%] md:w-[20%]">
            <img class="w-[90%]" src="{{ asset('storage/img/logo.svg') }}" alt="Logo">
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden text-3xl">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Navigation Links -->
        <div id="menu"
            class="hidden md:flex md:gap-8 absolute md:static top-[80px] left-0 w-full md:w-auto bg-white md:bg-transparent md:shadow-none shadow-md">
            <ul class="flex flex-col md:flex-row gap-4 md:gap-2 w-full text-center md:text-left">
                <li class="text-xl uppercase cursor-pointer menu-item relative active py-3 px-6 md:py-0">Home</li>
                <li class="text-xl uppercase cursor-pointer menu-item relative py-3 px-6 md:py-0">ÜBER UNS</li>
                <li class="text-xl uppercase cursor-pointer menu-item relative py-3 px-6 md:py-0">Blog</li>
                <li class="text-xl uppercase cursor-pointer menu-item relative py-3 px-6 md:py-0">DIENSTLEISTUNGEN</li>
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
                    class="flex flex-col md:flex-row justify-center items-center gap-4 md:gap-6 bg-[#FF7D00] w-full md:w-[80%] mx-auto rounded-xl mt-8 py-4 px-4 text-white cursor-pointer">
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
                    <h1 class="text-2xl mt-3 font-medium">Stressfreiere Privatumzüge</h1>
                    <p class="mt-3 text-gray-600">Sparen Sie Zeit sowie Nerven und letztlich auch Geld. Wir sind Ihre
                        Fachleute für Privatumzüge.</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-200 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/p2_op_66945.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium">Professionellere Firmenumzüge</h1>
                    <p class="mt-3 text-gray-600">Die Organisation eines Firmenumzugs ist keine einfache Sache. Damit
                        ein nahtloser Übergang möglich wird, planen wir Ihren Firmenumzug detailliert.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-300 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/c3_op_82f0a.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium">Sicherere Seniorenumzüge</h1>
                    <p class="mt-3 text-gray-600">Bequem und ohne Sorgen umziehen – ein Plus mit 123Umzugshelfer.
                        Umziehen geht mit uns ganz einfach.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-400 hover-bounce">
                    <img class="rounded-lg w-full"
                        src="{{ asset('storage/img/c1_1c541_umzugshelfer_op_fafd1.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium">Stressfreiere Privatumzüge</h1>
                    <p class="mt-3 text-gray-600">Sparen Sie Zeit sowie Nerven und letztlich auch Geld. Wir sind Ihre
                        Fachleute für Privatumzüge.</p>
                </div>

                <!-- Card 5 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-500 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/p2_op_66945.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium">Professionellere Firmenumzüge</h1>
                    <p class="mt-3 text-gray-600">Die Organisation eines Firmenumzugs ist keine einfache Sache. Damit
                        ein nahtloser Übergang möglich wird, planen wir Ihren Firmenumzug detailliert.</p>
                </div>

                <!-- Card 6 -->
                <div
                    class="bg-white text-center rounded-xl shadow-lg cursor-pointer p-5 hover:shadow-2xl transition-all duration-500 animate-fade delay-600 hover-bounce">
                    <img class="rounded-lg w-full" src="{{ asset('storage/img/c3_op_82f0a.jpg') }}" alt="">
                    <h1 class="text-2xl mt-3 font-medium">Sicherere Seniorenumzüge</h1>
                    <p class="mt-3 text-gray-600">Bequem und ohne Sorgen umziehen – ein Plus mit 123Umzugshelfer.
                        Umziehen geht mit uns ganz einfach.</p>
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

    <section class="w-full h-screen bg-white flex flex-col place-items-center ">
        <h1 class="text-2xl text-center py-8">Wie erhalte ich Hilfe von 123Umzugshelfer?</h1>

        <div class="w-[50%] h-[150px] flex justify-center place-items-center mt-4">
            <div class="w-full h-full  flex  ps-2 shadow-2xl rounded">
                <div class="w-[70%] h-full flex justify-center place-items-center ">
                    <p>Sie stellen Ihre Umzugsanfrage, indem Sie entweder Ihre Start- und Zieladresse eingeben und dann
                        den Button „Jetzt Angebot erhalten“ anklicken oder Sie rufen einen unserer persönlichen
                        Umzugsberater kostenlos und unverbindlich an.</p>
                </div>
                <div class="w-[30%] h-full text-center text-xl bg-[#096FAB] flex justify-center place-items-center text-[white] rounded">
                    <p>Kostenlose Umzugsanfrage stellen</p>
                </div>
            </div>
            <div>1</div>
        </div>

    </section>

    {{-- Wie erhalte ich Hilfe von 123Umzugshelfer? section --}}


    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            let menu = document.getElementById("menu");
            menu.classList.toggle("hidden");
        });

        // Active Menu Item Change
        let menuItems = document.querySelectorAll('.menu-item');

        function changeActiveMenu(event) {
            menuItems.forEach(item => item.classList.remove('active'));
            event.target.classList.add('active');
        }
        menuItems.forEach(item => {
            item.addEventListener('click', changeActiveMenu);
        });
    </script>

</body>

</html>
