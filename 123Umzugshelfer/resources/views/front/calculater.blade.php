@extends('layout.index')

@section('front.home')
    <style>
        body {
            background: white;
        }

        .loader {
            width: 60px;
            aspect-ratio: 2;
            --_g: no-repeat radial-gradient(circle closest-side, #219E3C 90%, #ffffff);
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

    <div class="w-full h-screen flex justify-center place-items-center md:px-0 px-3 block ">
        <div class="w-[450px] h-auto bg-white rounded flex flex-col gap-5 py-8 px-4 first_page"
            style="box-shadow: 0px 0px 100px #ccc ">
            <div>
                <h1 class="text-center text-2xl font-medium text-[#219E3C]">1-2-3 Umzugskosten berechnen</h1>
            </div>
            <div>
                <h1 class="text-center text-2xl font-medium text-[red] md:hidden hidden error"></h1>
            </div>
            <div class="flex flex-col gap-3">
                <label for="">Wohnraum in Quadratmetern</label>
                <input type="number" name="" id="inputfirst" class="p-2 rounded outline-none border-2 shadow-lg">
            </div>
            <div class="flex flex-col gap-3">
                <label for="">Entfernung zum neuen Ort in Km:</label>
                <input type="number" name="" id="inputfirst" class="p-2 rounded outline-none border-2 shadow-lg">
            </div>
            <div class="flex flex-col gap-3">
                <label for="">Zimmer (inkl. Küche, Bad, Keller....)</label>
                <select class="form-select p-2 rounded outline-none border-2 shadow-lg">
                    <option selected>Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="h-full flex gap-3 flex-col justify-end">
                <p class="text-end text-[#219e3c] font-medium">100% kostenlos & unverbindlich</p>
                <button class="w-full bg-[#1E7E34] text-white p-2 rounded uppercase outline-none btn">Kosten
                    berechnen</button>
            </div>
        </div>

        <div class="w-[450px] md:h-[500px] h-auto  rounded flex flex-col gap-5 py-8 px-4 hidden second_page"
            style="box-shadow: 0px 0px 50px #ccc">
            <div class="w-full h-full bg-white fixed top-0 left-0 flex justify-center place-items-center loder "
                style="box-shadow: 0px 0px 100px #ccc">
                <div class="loader"></div>
            </div>

            <div>
                <h1 class="text-center text-2xl font-medium text-[#219E3C] py-3">1-2-3 Umzugskosten berechnen</h1>
            </div>

            <div class="w-full h-full  flex flex-col place-items-center ">
                <h1 class="bg-[#DFFEDF] px-4 py-2 text-2xl font-medium rounded-3xl total"></h1>
                <p class="mt-5">(kalkulierter BASIS-Preis zur Orientierung)</p>
                <p class="mt-4">Bitte beachten Sie: Der oben angegebene Preis ist eine Schätzung. <span
                        class="font-medium">Nicht
                        enthalten</span> ist das
                    Verpackungsmaterial, das Packen, der Auf-und Abbau und weitere Dienstleistungen, die Sie wünschen.</p>
                <p class="mt-3">Für <span class="font-medium">eine konkretes FESTPREIS-Angebot</span> klicken Sie bitte
                    auf
                    den grünen Button "Festpreis-Angebot
                    erhalten"!</p>

                <div class="w-full h-auto  flex flex-col justify-end gap-3 mt-8">
                    <p class="text-end font-medium text-[#219E3C]">100% kostenlos & unverbindlich</p>
                    <button class="bg-[#1E7E34] py-3 uppercase font-medium text-white next_page">Festpreis-Angebot
                        anfordern</button>
                </div>
            </div>
        </div>


        <div class="w-[450px] h-auto bg-white rounded flex flex-col gap-10 py-8 px-4 inputcontainer hidden thired_page"
            style="box-shadow: 0px 0px 100px #ccc ">
            <div>
                <h1 class="text-center text-2xl font-medium text-[#219E3C]">Jetzt FESTPREIS-Angebot erhalten</h1>
                <p class="text-center mt-1 text-[#828282]">(Schritt 1 von 3)</p>
            </div>
            <div>
                <h1 class="text-center text-2xl font-medium text-[red] md:hidden hidden error3"></h1>
            </div>
            <div class="flex flex-col gap-3 mt-10">
                <label for="" class="text-[#828282]">Von welcher Stadt & PLZ?</label>
                <input type="number" name="" id="thired_page_input"
                    class="p-2 rounded outline-none border-2 shadow-lg" placeholder="Von welcher Stadt & PLZ?">
            </div>
            <div class="flex flex-col gap-3 mt-4">
                <label for="" class="text-[#828282]">Nach welcher Stadt & PLZ?</label>
                <input type="number" name="" id="thired_page_input"
                    class="p-2 rounded outline-none border-2 shadow-lg" placeholder="Nach welcher Stadt & PLZ?">
            </div>
            <div class="flex flex-col gap-3 mt-4">
                <label for="" class="text-[#828282]">Wähle deinen Auszugstermin aus</label>
                <input type="date" name="" id="thired_page_input"
                    class="p-2 rounded outline-none border-2 shadow-lg text-[#828282]">
            </div>
            <div class="h-full flex gap-3 flex-col justify-end mt-4">
                <p class="text-end text-[#219e3c] font-medium">100% kostenlos & unverbindlich</p>
                <div class="flex gap-4">
                    <button class="w-[50%] bg-[#9F9F9F] text-white p-2 rounded uppercase outline-none back">zurück</button>
                    <button
                        class="w-[50%] bg-[#1E7E34] text-white p-2 rounded uppercase outline-none Weiter">Weiter</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="w-full h-screen flex justify-center place-items-center md:px-0 px-3 hidden second_page">
        <div class="w-[450px] md:h-[500px] h-auto  rounded flex flex-col gap-5 py-8 px-4 hidden second_page" style="box-shadow: 0px 0px 50px #ccc">
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
    </div> --}}


    <script>
        let inputs = document.querySelectorAll('#inputfirst');
        let thired_page_input = document.querySelectorAll('#thired_page_input');
        let selectBox = document.querySelector('select');
        let btn = document.querySelector('.btn');
        let errorMsg = document.querySelector('.error');
        let errorMsg_3 = document.querySelector('.error3');
        let first_page = document.querySelector('.first_page');
        let second_page = document.querySelector('.second_page');
        let thired_page = document.querySelector('.thired_page');
        let next_pagebtn = document.querySelector('.next_page');
        let backbtn = document.querySelector('.back');
        let Weiter = document.querySelector('.Weiter');

        let calculateValue = 71;

        function calculate() {
            btn.addEventListener('click', () => {
                let multi = 0;
                let msg = 'Bitte füllen Sie alle Eingabefelder aus.';
                let hasError = false;

                errorMsg.style.display = 'none';
                errorMsg.innerHTML = '';

                inputs.forEach((input) => {
                    if (input.value.trim() === '') {
                        hasError = true;
                    } else {
                        multi += Number(input.value) * calculateValue;
                    }
                });

                if (selectBox.value.trim() === '') {
                    hasError = true;
                } else {
                    multi += Number(selectBox.value) * calculateValue;
                }

                if (hasError) {
                    errorMsg.style.display = 'block';
                    errorMsg.innerHTML = msg;
                    return;
                } else {
                    first_page.style.display = 'none';
                    second_page.style.display = 'block';
                }

                if (localStorage.getItem('cost')) {
                    localStorage.removeItem('cost');
                }

                localStorage.setItem('cost', JSON.stringify(multi));
                // window.location = '/2/kostenloses-angebot-erhalten';

            });
        }
        calculate();


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

        next_pagebtn.addEventListener('click', () => {
            second_page.style.display = 'none';
            thired_page.style.display = 'block';
        });

        backbtn.addEventListener('click', () => {
            second_page.style.display = 'block';
            thired_page.style.display = 'none';
        });

        function thired_page_data() {
            Weiter.addEventListener('click', () => {
                let msg = 'Bitte füllen Sie alle Eingabefelder aus.';
                let hasError = false;
                let value = '';
                thired_page_input.forEach((input) => {
                    if (input.value.trim() === '') {
                        hasError = true;
                    } else {
                        value += input.value + ' ';
                    }
                });
                if (hasError) {
                    errorMsg_3.style.display = 'block';
                    errorMsg_3.innerHTML = msg;
                    return;
                }
                value.split(' ')
                let count = localStorage.getItem('cost');
                console.log(count);
                const obj = {
                    count: count,
                    value: value
                }
                if (localStorage.getItem('cost')) {
                    localStorage.removeItem('cost');
                }
                localStorage.setItem('cost', JSON.stringify(obj));

            })
        }
        thired_page_data();

    </script>
@endsection
