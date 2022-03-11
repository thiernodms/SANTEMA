<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Merci de vous inscrire! Avant de commencer, Vous devez verifié votre adresse mail en cliquant sur le lien que nous venons juste de vous envoyer sur votre mail? Si vous n\'avez pas reçu de mail, Nous vous enverons gentillement un autre.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Un nouveau lien de verification a été envoyer sur l'adresse que vous avez fourni lors de votre inscription.') }}
        </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Renvoyer un mail de verification') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Se deconnecter') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>