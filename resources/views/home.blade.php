<x-app-layout>
    <x-slot name="header">
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('PoMin') }}--}}
{{--        </h2>--}}
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="welcome-container">
                    <div class="">
                        <h1 class="mb-4">Witaj w</h1>
                        <img src="/build/assets/images/logotyp.png" title="Logotyp">
                        <h3 class="mb-4 mt-4">Aplikacja PoMin to doskonałe narzędzie do zarządzania translacjami w twoim systemie. Zorganizuj swoje po-edity już dziś!</h3>
                        <a href="{{ route('login') }}" class="btn btn-primary">Zaloguj się</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
