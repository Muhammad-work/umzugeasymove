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
        left: 0px;
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
        /* z-index: -1; */
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

    #count1 {
        position: absolute;
        top: 43px;
        right: -90px;
        background: #073360;
        padding: 20px 25px;
        border-radius: 50%;
        font-size: 20px;
        color: white;
        box-shadow: 0px 0px 10px #cccccc;
    }

    #line1 {
        position: absolute;
        right: -30px;
        top: 76px;
        width: 30px;
        height: 3px;
        background: #073360;
    }

    #lineb {
        position: absolute;
        right: -60.5px;
        bottom: -65px;
        width: 60px;
        height: 3px;
        background: #073360;
    }

    #line1::before {
        content: '';
        position: absolute;
        right: -80px;
        top: 85px;
        width: 100px;
        height: 3px;
        background: #073360;
        transform: rotate(270deg);
    }

    #count2 {
        position: absolute;
        top: 43px;
        left: -90px;
        background: #073360;
        padding: 20px 25px;
        border-radius: 50%;
        font-size: 20px;
        color: white;
        box-shadow: 0px 0px 10px #cccccc;
    }

    #line2 {
        position: absolute;
        left: -30px;
        top: 76px;
        width: 30px;
        height: 3px;
        background: #073360;
    }

    #line2::before {
        content: '';
        position: absolute;
        left: -80px;
        top: 85px;
        width: 100px;
        height: 3px;
        background: #073360;
        transform: rotate(270deg);
    }

    #lineb2 {
        position: absolute;
        left: -60.5px;
        bottom: -65px;
        width: 60px;
        height: 3px;
        background: #073360;
    }




    #count3 {
        position: absolute;
        top: 43px;
        right: -90px;
        background: #073360;
        padding: 20px 25px;
        border-radius: 50%;
        font-size: 20px;
        color: white;
        box-shadow: 0px 0px 10px #cccccc;
    }

    #line3 {
        position: absolute;
        right: -30px;
        top: 76px;
        width: 30px;
        height: 3px;
        background: #073360;
    }

    #line3::before {
        content: '';
        position: absolute;
        right: -80px;
        top: 85px;
        width: 100px;
        height: 3px;
        background: #073360;
        transform: rotate(270deg);
    }

    #lineb3 {
        position: absolute;
        right: -60.5px;
        bottom: -65px;
        width: 60px;
        height: 3px;
        background: #073360;
    }





    #count4 {
        position: absolute;
        top: 43px;
        left: -90px;
        background: #073360;
        padding: 20px 25px;
        border-radius: 50%;
        font-size: 20px;
        color: white;
        box-shadow: 0px 0px 10px #cccccc;
    }

    #line4 {
        position: absolute;
        left: -30px;
        top: 76px;
        width: 30px;
        height: 3px;
        background: #073360;
    }

    #line4::before {
        content: '';
        position: absolute;
        left: -80px;
        top: 85px;
        width: 100px;
        height: 3px;
        background: #073360;
        transform: rotate(270deg);
    }

    #lineb4 {
        position: absolute;
        left: -60.5px;
        bottom: -65px;
        width: 60px;
        height: 3px;
        background: #073360;
    }



    #count5 {
        position: absolute;
        top: 43px;
        right: -90px;
        background: #073360;
        padding: 20px 25px;
        border-radius: 50%;
        font-size: 20px;
        color: white;
        box-shadow: 0px 0px 10px #cccccc;
    }

    #line5 {
        position: absolute;
        right: -30px;
        top: 76px;
        width: 30px;
        height: 3px;
        background: #073360;
    }

    #line5::before {
        content: '';
        position: absolute;
        right: -80px;
        top: 85px;
        width: 100px;
        height: 3px;
        background: #073360;
        transform: rotate(270deg);
    }

    #lineb5 {
        position: absolute;
        right: -60.5px;
        bottom: -65px;
        width: 60px;
        height: 3px;
        background: #073360;
    }



    #count6 {
        position: absolute;
        top: 43px;
        left: -90px;
        background: #073360;
        padding: 20px 25px;
        border-radius: 50%;
        font-size: 20px;
        color: white;
        box-shadow: 0px 0px 10px #cccccc;
    }

    #line6 {
        position: absolute;
        left: -30px;
        top: 76px;
        width: 30px;
        height: 3px;
        background: #073360;
    }
</style>

<body>

    {{-- Nav Section --}}
    @yield('front.nav')
    {{-- Nav Section --}}
    {{-- <nav class="w-full h-[100px] bg-white flex justify-between items-center px-4 md:px-8 ">
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
            class="hidden z-10 md:flex md:gap-8 absolute md:static top-[80px] left-0 w-full md:w-auto bg-white md:bg-transparent md:shadow-none shadow-md">
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
    </nav> --}}

    {{-- Home secton --}}
    @yield('front.home')
    {{-- Home secton --}}



    {{-- footer section --}}

    @yield('fornt.footer')

    {{-- footer section --}}



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
