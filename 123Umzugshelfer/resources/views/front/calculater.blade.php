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

        <div class="w-[450px] h-auto bg-white rounded flex flex-col gap-10 py-8 px-4 inputcontainer hidden forth_page"
            style="box-shadow: 0px 0px 100px #ccc ">
            <div>
                <h1 class="text-center text-2xl font-medium text-[#219E3C]">Jetzt FESTPREIS-Angebot erhalten</h1>
                <p class="text-center mt-1 text-[#828282]">(Schritt 2 von 3)</p>
            </div>
            <div>
                <h1 class="text-center text-2xl font-medium text-[red] md:hidden hidden error4"></h1>
            </div>
            <div class="flex flex-col gap-3 mt-10">
                <label for="" class="text-[#828282]">Umzugstyp wählen</label>
                <select class="form-select p-2 rounded outline-none border-2 shadow-lg" id="forth_page_1_selectBox">
                    <option selected class="text-[#828282]">wahlen</option>
                    <option value="Privat" class="text-[#828282]">Privat</option>
                    <option value="Geschaftlich" class="text-[#828282]">Geschaftlich</option>
                </select>
            </div>
            <div class="flex flex-col gap-3 mt-4">
                <label for="" class="text-[#828282]">Art der Immobilie</label>
                <select class="form-select p-2 rounded outline-none border-2 shadow-lg" id="forth_page_2_selectBox">
                    <option selected class="text-[#828282]">wahlen</option>
                    <option value="Haus" class="text-[#828282]">Haus</option>
                    <option value="Wohnung" class="text-[#828282]">Wohnung</option>
                </select>
            </div>
            <div class="flex flex-col gap-3 mt-4">
                <label for="" class="text-[#828282]">Anzahl Zimmer zum Umziehen</label>
                <select class="form-select p-2 rounded outline-none border-2 shadow-lg" id="forth_page_3_selectBox">
                    <option selected class="text-[#828282]">wahlen</option>
                    <option value="1" class="text-[#828282]">1</option>
                    <option value="2" class="text-[#828282]">2</option>
                    <option value="3" class="text-[#828282]">3</option>
                    <option value="4" class="text-[#828282]">4</option>
                    <option value="5" class="text-[#828282]">5</option>
                    <option value="6" class="text-[#828282]">6</option>
                    <option value="7" class="text-[#828282]">7</option>
                    <option value="8" class="text-[#828282]">8</option>
                    <option value="9" class="text-[#828282]">9</option>
                    <option value="10" class="text-[#828282]">10</option>
                </select>
            </div>
            <div class="h-full flex gap-3 flex-col justify-end mt-4">
                <p class="text-end text-[#219e3c] font-medium">100% kostenlos & unverbindlich</p>
                <div class="flex gap-4">
                    <button
                        class="w-[50%] bg-[#9F9F9F] text-white p-2 rounded uppercase outline-none zurück">zurück</button>
                    <button
                        class="w-[50%] bg-[#1E7E34] text-white p-2 rounded uppercase outline-none Weiter2">Weiter</button>
                </div>
            </div>
        </div>

        <div class="w-[450px] h-auto bg-white rounded flex flex-col gap-10 py-8 px-4 inputcontainer hidden fiver_page"
            style="box-shadow: 0px 0px 100px #ccc ">
            <div>
                <h1 class="text-center text-2xl font-medium text-[#219E3C]">Jetzt FESTPREIS-Angebot erhalten</h1>
                <p class="text-center mt-1 text-[#828282]">(Schritt 3 von 3)</p>
            </div>
            <div>
                <h1 class="text-center text-2xl font-medium text-[red] md:hidden hidden error5"></h1>
            </div>
            <div class="flex flex-col gap-3 mt-10">
                <label for="" class="text-[#828282]">Vor- und Nachname</label>
                <input type="number" name="" id="five_page_input"
                    class="p-2 rounded outline-none border-2 shadow-lg">
            </div>
            <div class="flex flex-col gap-3 mt-4">
                <label for="" class="text-[#828282]">E-Mail</label>
                <input type="number" name="" id="five_page_input"
                    class="p-2 rounded outline-none border-2 shadow-lg">
            </div>
            <div class="flex flex-col gap-3 mt-4">
                <label for="" class="text-[#828282]">Telefonnummer</label>
                <input type="number" name="" id="five_page_input"
                    class="p-2 rounded outline-none border-2 shadow-lg">
            </div>
            <div class="h-full flex gap-3 flex-col justify-end mt-4">
                <p class="text-end text-[#219e3c] font-medium">100% kostenlos & unverbindlich</p>
                <div class="flex gap-4">
                    <button
                        class="w-[50%] bg-[#9F9F9F] text-white p-2 rounded uppercase outline-none zurück">zurück</button>
                    <button
                        class="w-[50%] bg-[#1E7E34] text-white p-2 rounded uppercase outline-none Weiter2">Weiter</button>
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
        let errorMsg_4 = document.querySelector('.error4');
        let first_page = document.querySelector('.first_page');
        let second_page = document.querySelector('.second_page');
        let thired_page = document.querySelector('.thired_page');
        let forth_page = document.querySelector('.forth_page');
        let fiver_page = document.querySelector('.fiver_page');
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

        function updateCostDisplay() {
            let total = document.querySelector('.total');
            let cost = JSON.parse(localStorage.getItem('cost')) || 0;
            if (total) {
                total.textContent = `€ ${cost}`;
            }
        }
        updateCostDisplay();

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

                thired_page.style.display = 'none';
                forth_page.style.display = 'block';
            })
        }
        thired_page_data();


        function forth_page_data() {
            // Select elements
            let forth_page_1_selectBox = document.querySelector('#forth_page_1_selectBox');
            let forth_page_2_selectBox = document.querySelector('#forth_page_2_selectBox');
            let forth_page_3_selectBox = document.querySelector('#forth_page_3_selectBox');
            let Weiter2 = document.querySelector('.Weiter2');
            let zurück = document.querySelector('.zurück');
            // Ensure Weiter2 exists before adding event listener
            if (Weiter2) {
                Weiter2.addEventListener('click', () => {
                    // Check if any select box is empty
                    if (
                        !forth_page_1_selectBox.value ||
                        !forth_page_2_selectBox.value ||
                        !forth_page_3_selectBox.value
                    ) {
                        alert('Bitte füllen Sie alle Eingabefelder aus.'); // "Please fill in all fields."
                        return;
                    }

                    // Get stored cost data
                    let costValue = JSON.parse(localStorage.getItem('cost'));

                    if (!costValue) {
                        console.error('No cost data found in localStorage.');
                        return;
                    }

                    // Collect select box values
                    let selectBoxValues = [
                        forth_page_1_selectBox.value,
                        forth_page_2_selectBox.value,
                        forth_page_3_selectBox.value
                    ];

                    // Create updated object
                    const obj = {
                        count: costValue.count,
                        value: costValue.value,
                        choose: selectBoxValues,
                    };

                    // Store updated object in localStorage
                    localStorage.setItem('cost', JSON.stringify(obj));

                    console.log('Successfully updated localStorage.');
                    forth_page.style.display = 'none';
                    fiver_page.style.display = 'block';
                });
            } else {
                console.error('Button with class "Weiter2" not found.');
            }


            zurück.addEventListener('click', () => {
                thired_page.style.display = 'block';
                forth_page.style.display = 'none';
            })
        }

        // Call function
        forth_page_data();

        function five_page_data() {
            // Select elements
            let forth_page_1_selectBox = document.querySelector('#forth_page_1_selectBox');
            let forth_page_2_selectBox = document.querySelector('#forth_page_2_selectBox');
            let forth_page_3_selectBox = document.querySelector('#forth_page_3_selectBox');
            let Weiter2 = document.querySelector('.Weiter2');
            let zurück = document.querySelector('.zurück');
            // Ensure Weiter2 exists before adding event listener
            if (Weiter2) {
                Weiter2.addEventListener('click', () => {
                    // Check if any select box is empty
                    if (
                        !forth_page_1_selectBox.value ||
                        !forth_page_2_selectBox.value ||
                        !forth_page_3_selectBox.value
                    ) {
                        alert('Bitte füllen Sie alle Eingabefelder aus.'); // "Please fill in all fields."
                        return;
                    }

                    // Get stored cost data
                    let costValue = JSON.parse(localStorage.getItem('cost'));

                    if (!costValue) {
                        console.error('No cost data found in localStorage.');
                        return;
                    }

                    // Collect select box values
                    let selectBoxValues = [
                        forth_page_1_selectBox.value,
                        forth_page_2_selectBox.value,
                        forth_page_3_selectBox.value
                    ];

                    // Create updated object
                    const obj = {
                        count: costValue.count,
                        value: costValue.value,
                        choose: selectBoxValues,
                    };

                    // Store updated object in localStorage
                    localStorage.setItem('cost', JSON.stringify(obj));

                    console.log('Successfully updated localStorage.');
                });
            } else {
                console.error('Button with class "Weiter2" not found.');
            }


            zurück.addEventListener('click', () => {
                thired_page.style.display = 'block';
                forth_page.style.display = 'none';
            })
        }

        // Call function
        five_page_data();
    </script>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', () => {
            let inputs = document.querySelectorAll('#inputfirst');
            let thirdPageInputs = document.querySelectorAll('#thired_page_input');
            let selectBox = document.querySelector('select');
            let btn = document.querySelector('.btn');
            let errorMsg = document.querySelector('.error');
            let errorMsg_3 = document.querySelector('.error3');
            let firstPage = document.querySelector('.first_page');
            let secondPage = document.querySelector('.second_page');
            let thirdPage = document.querySelector('.thired_page');
            let fourthPage = document.querySelector('.forth_page');
            let fifthPage = document.querySelector('.fiver_page');
            let nextPageBtn = document.querySelector('.next_page');
            let backBtn = document.querySelector('.back');
            let weiter = document.querySelector('.Weiter');
            let calculateValue = 71;

            function calculate() {
                btn?.addEventListener('click', () => {
                    let totalCost = 0;
                    let hasError = false;
                    let errorMsgText = 'Bitte füllen Sie alle Eingabefelder aus.';

                    errorMsg.style.display = 'none';
                    errorMsg.innerHTML = '';

                    inputs.forEach((input) => {
                        if (input.value.trim() === '') {
                            hasError = true;
                        } else {
                            totalCost += Number(input.value) * calculateValue;
                        }
                    });

                    if (selectBox.value.trim() === '') {
                        hasError = true;
                    } else {
                        totalCost += Number(selectBox.value) * calculateValue;
                    }

                    if (hasError) {
                        errorMsg.style.display = 'block';
                        errorMsg.innerHTML = errorMsgText;
                        return;
                    }

                    firstPage.style.display = 'none';
                    secondPage.style.display = 'block';

                    localStorage.setItem('cost', JSON.stringify(totalCost));
                });
            }
            calculate();

            function loader() {
                let loader = document.querySelector('.loder');
                if (loader) {
                    setTimeout(() => loader.style.display = 'none', 5000);
                }
            }
            window.addEventListener('load', loader);

            let total = document.querySelector('.total');
            let cost = JSON.parse(localStorage.getItem('cost'));
            if (total && cost !== null) {
                total.textContent = `€ ${cost}`;
            }

            nextPageBtn?.addEventListener('click', () => {
                secondPage.style.display = 'none';
                thirdPage.style.display = 'block';
            });

            backBtn?.addEventListener('click', () => {
                secondPage.style.display = 'block';
                thirdPage.style.display = 'none';
            });

            function thirdPageData() {
                weiter?.addEventListener('click', () => {
                    let hasError = false;
                    let inputData = '';
                    thirdPageInputs.forEach((input) => {
                        if (input.value.trim() === '') {
                            hasError = true;
                        } else {
                            inputData += input.value + ' ';
                        }
                    });

                    if (hasError) {
                        errorMsg_3.style.display = 'block';
                        errorMsg_3.innerHTML = 'Bitte füllen Sie alle Eingabefelder aus.';
                        return;
                    }

                    let previousCost = JSON.parse(localStorage.getItem('cost')) || 0;
                    let updatedData = {
                        count: previousCost,
                        value: inputData.trim()
                    };

                    localStorage.setItem('cost', JSON.stringify(updatedData));
                    thirdPage.style.display = 'none';
                    fourthPage.style.display = 'block';
                });
            }
            thirdPageData();

            function fourthPageData() {
                let forthPageSelects = document.querySelectorAll(
                    '#forth_page_1_selectBox, #forth_page_2_selectBox, #forth_page_3_selectBox');
                let weiter2 = document.querySelector('.Weiter2');
                let zurück = document.querySelector('.zurück');

                weiter2?.addEventListener('click', () => {
                    let selectedValues = Array.from(forthPageSelects).map(select => select.value.trim());
                    if (selectedValues.includes('')) {
                        alert('Bitte füllen Sie alle Eingabefelder aus.');
                        return;
                    }

                    let costData = JSON.parse(localStorage.getItem('cost'));
                    if (!costData) {
                        console.error('No cost data found in localStorage.');
                        return;
                    }

                    costData.choose = selectedValues;
                    localStorage.setItem('cost', JSON.stringify(costData));

                    fourthPage.style.display = 'none';
                    fifthPage.style.display = 'block';
                });

                zurück?.addEventListener('click', () => {
                    thirdPage.style.display = 'block';
                    fourthPage.style.display = 'none';
                });
            }
            fourthPageData();
        });
    </script> --}}
@endsection
