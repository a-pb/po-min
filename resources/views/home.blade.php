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
                    <div class="d-flex flex-column">
                        <h1 class="mb-2">Witaj w</h1>
                        <img class="img-fluid" src="{{ asset('/images/logotyp.png') }}" title="Logotyp">
                        <h4 class="mb-4 mt-4">To innowacyjne narzędzie dedykowane do zarządzania plikami po-edit, które są kluczowe dla przechowywania tłumaczeń serwisu. Zorganizuj swoje po-edity już dziś!</h4>
                        <div class="col-md-12">
                            <a href="{{ route('login') }}" class=" btn btn-primary mr-0 align-right">Zaloguj się</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
