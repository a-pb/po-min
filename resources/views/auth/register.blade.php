<x-app-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="project_name" :value="__('Nazwa Projektu')" />
            <x-text-input id="project_name" class="block mt-1 w-full" type="text" name="project_name" :value="old('project_name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('project_name')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
