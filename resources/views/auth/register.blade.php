<x-guest-layout>
    <div class="flex items-center justify-center">
        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
            <h1 class="mb-6 text-3xl font-bold text-center text-gray-800">Registreer je account</h1>
            <p class="mb-8 text-center text-gray-600">Vul het onderstaande formulier in om je aan te melden.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Naam')" />
                    <x-text-input
                        id="name"
                        class="block w-full p-2 mt-1 transition duration-200 border border-gray-300 rounded-lg  focus:ring-2 focus:ring-green-500"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-black 600" />
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input
                        id="email"
                        class="block w-full p-2 mt-1 transition duration-200 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autocomplete="username"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Wachtwoord')" />
                    <x-text-input
                        id="password"
                        class="block w-full p-2 mt-1 transition duration-200 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Bevestig Wachtwoord')" />
                    <x-text-input
                        id="password_confirmation"
                        class="block w-full p-2 mt-1 transition duration-200 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <a class="text-sm text-gray-600 underline hover:text-red-900" href="{{ route('login') }}">
                        {{ __('Al geregistreerd?') }}
                    </a>

                    <x-primary-button class="w-full py-2 mt-3 text-white transition duration-200 bg-red-600 rounded-lg hover:bg-red-200">
                        {{ __('Registreren') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
