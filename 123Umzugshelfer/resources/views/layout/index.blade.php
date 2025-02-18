<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Umzugeasymove</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('storage/img/title-logo.png') }}" type="image/x-icon">
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
        background-image: url('{{ asset('storage/img/body-baner.jpeg') }}');
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


    @yield('fornt.hero')

    {{-- Home secton --}}
    @yield('front.home')
    {{-- Home secton --}}



    {{-- footer section --}}

    @yield('fornt.footer')

    {{-- footer section --}}
    
    <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.39/dist/lenis.min.js"></script>
    <script>
        // scroll
        document.addEventListener('DOMContentLoaded', function() {
            const lenis = new Lenis({
                lerp: 0.1,
                smooth: true
            });

            function raf(time) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }

            requestAnimationFrame(raf);
        });
        // scroll
        document.getElementById("menu-toggle").addEventListener("click", function() {
            let menu = document.getElementById("menu");
            menu.classList.toggle("hidden");
        });
        document.addEventListener("DOMContentLoaded", function() {
            let menuItems = document.querySelectorAll(".menu-item");

            function updateActiveMenu() {
                let currentPath = window.location.pathname;

                menuItems.forEach(item => {
                    let link = item.querySelector("a");
                    let href = link ? new URL(link.href, window.location.origin).pathname : null;

                    item.classList.remove("active");

                    if (href === currentPath || (!link && currentPath === "/")) {
                        item.classList.add("active");
                    }
                });
            }

            menuItems.forEach(item => {
                item.addEventListener("click", function() {
                    menuItems.forEach(i => i.classList.remove("active"));
                    this.classList.add("active");
                });
            });

            updateActiveMenu();
        });
    </script>

</body>

</html>
