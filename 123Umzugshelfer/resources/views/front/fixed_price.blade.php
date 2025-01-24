@extends('layout.index')

@section('front.home')
    <style>
        body {
            background: white;
        }
    </style>

    <div class="w-full h-screen flex justify-center place-items-center md:px-0 px-3">

        <div class="w-[450px] h-auto bg-white rounded flex flex-col gap-5 py-8 px-4 inputcontainer"
            style="box-shadow: 0px 0px 100px #ccc ">
            <div>
                <h1 class="text-center text-2xl font-medium text-[#219E3C]">Jetzt FESTPREIS-Angebot erhalten</h1>
                <p class="text-center mt-1 text-[#828282]">(Schritt 1 von 3)</p>
            </div>
            <div>
                <h1 class="text-center text-2xl font-medium text-[red] md:hidden hidden error"></h1>
            </div>
            <div class="flex flex-col gap-3">
                <label for="" class="text-[#828282]">Von welcher Stadt & PLZ?</label>
                <input type="number" name="" id="" class="p-2 rounded outline-none border-2 shadow-lg" placeholder="Von welcher Stadt & PLZ?">
            </div>
            <div class="flex flex-col gap-3">
                <label for="" class="text-[#828282]">Nach welcher Stadt & PLZ?</label>
                <input type="number" name="" id="" class="p-2 rounded outline-none border-2 shadow-lg" placeholder="Nach welcher Stadt & PLZ?">
            </div>
            <div class="flex flex-col gap-3">
                <label for="" class="text-[#828282]">Wähle deinen Auszugstermin aus</label>
                <input type="date" name="" id="" class="p-2 rounded outline-none border-2 shadow-lg text-[#828282]" >
            </div>
            <div class="h-full flex gap-3 flex-col justify-end">
                <p class="text-end text-[#219e3c] font-medium">100% kostenlos & unverbindlich</p>
                 <div class="flex gap-4">
                    <button class="w-[50%] bg-[#9F9F9F] text-white p-2 rounded uppercase outline-none btn">zurück</button>
                    <button class="w-[50%] bg-[#1E7E34] text-white p-2 rounded uppercase outline-none btn">Weiter</button>
                 </div>
            </div>
        </div>
    </div>





@endsection
