<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Usuwanie projektu') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Uwaga! Po usunięciu projektu nie będzie odwrotu, pliki z nim związane zostaną nieodwracalnie usunięte.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Usuń projekt') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Czy jesteś pewien, że chcesz usunąć projekt i całą jego zawartość?') }}
            </h2>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Anuluj') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Usuń') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
