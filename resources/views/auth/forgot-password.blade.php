<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img height="150" width="200" style="margin-bottom: -30px;" src="/img/santema_logo.png" alt="">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Mot de passe oublié? pas de problème. Juste tapez votre adresse mail et nous vous enverons un mail de reinitialisation qui vous permetra de changer votre mot de passe.') }}
        </div>

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email de reinitialisation du mot de passe') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>