@extends('layout.index')

@section('front.home')
    <style>
        body {
            background: white;
        }

        .loader {
            width: 60px;
            aspect-ratio: 2;
            --_g: no-repeat radial-gradient(circle closest-side, #219e3c 90%, #ffffff);
            background:
                var(--_g) 0% 50%,
                var(--_g) 50% 50%,
                var(--_g) 100% 50%;
            background-size: calc(100%/3) 50%;
            animation: l3 1s infinite linear;
        }

        @keyframes l3 {
            20% {
                background-position: 0% 0%, 50% 50%, 100% 50%
            }

            40% {
                background-position: 0% 100%, 50% 0%, 100% 50%
            }

            60% {
                background-position: 0% 50%, 50% 100%, 100% 0%
            }

            80% {
                background-position: 0% 50%, 50% 50%, 100% 100%
            }
        }
    </style>

    <div class="w-full h-screen flex justify-center place-items-center md:px-0 px-3">
        <div class="w-[450px] md:h-[500px] h-auto  rounded flex flex-col gap-5 py-8 px-4 " style="box-shadow: 0px 0px 50px #ccc">
            <div class="w-full h-full bg-white fixed top-0 left-0 flex justify-center place-items-center loder "
                style="box-shadow: 0px 0px 100px #ccc">
                <div class="loader"></div>
            </div>

            <div>
                <h1 class="text-center text-2xl font-medium text-[#219E3C]">1-2-3 Umzugskosten berechnen</h1>
            </div>

            <div class="w-full h-full  flex flex-col place-items-center ">
                <h1 class="bg-[#DFFEDF] px-4 py-2 text-2xl font-medium rounded-3xl total"></h1>
                <p class="mt-5">(kalkulierter BASIS-Preis zur Orientierung)</p>
                <p class="mt-4">Bitte beachten Sie: Der oben angegebene Preis ist eine Schätzung. <span
                        class="font-medium">Nicht
                        enthalten</span> ist das
                    Verpackungsmaterial, das Packen, der Auf-und Abbau und weitere Dienstleistungen, die Sie wünschen.</p>
                <p class="mt-3">Für <span class="font-medium">eine konkretes FESTPREIS-Angebot</span> klicken Sie bitte auf
                    den grünen Button "Festpreis-Angebot
                    erhalten"!</p>

                <div class="w-full h-full  flex flex-col justify-end gap-3">
                    <p class="text-end font-medium text-[#219E3C]">100% kostenlos & unverbindlich</p>
                    <button class="bg-[#1E7E34] py-3 uppercase font-medium text-white next_pagebtn">Festpreis-Angebot anfordern</button>
                </div>
            </div>
        </div>
    </div>




    <script>
        function loader() {
            let loader = document.querySelector('.loder');

            if (loader) {
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 5000);
            }
        }

        window.addEventListener('load', loader);

        let total = document.querySelector('.total');
        let cost = JSON.parse(localStorage.getItem('cost'));


        if (total && cost !== null) {
            total.textContent = `€ ${cost}`;
        }
        // let next_pagebtn = document.querySelector('.next_pagebtn');

        // next_pagebtn.addEventListener('click',()=>{
        //     window.location = '/3/kostenloses-angebot-erhalten';
        // })
    </script>
@endsection
