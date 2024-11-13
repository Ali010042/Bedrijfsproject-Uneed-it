<x-guest-layout>
    <div class="flex items-center justify-center">
        <div class=" p-8 bg-white rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Welkom terug!</h1>
            <p class="text-gray-600 text-center mb-8">Log in om toegang te krijgen tot uw account.</p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input
                        id="email"
                        class="block w-full"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Wachtwoord')" />
                    <x-text-input
                        id="password"
                        class="block w-full"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
                </div>

                <!-- Remember Me -->
                <div class="block mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Onthoud mij') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Wachtwoord vergeten?') }}
                        </a>
                    @endif

                    <x-primary-button class="w-full mt-3 bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg transition duration-200">
                        {{ __('Inloggen') }}
                    </x-primary-button>
                </div>
            </form>

            <p class="mt-6 text-center text-gray-600">
                Geen account?
                <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">Maak een account aan</a>
            </p>
        </div>
    </div>
</x-guest-layout>
    