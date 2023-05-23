@extends('templates.head')

<title>Login</title>

@section('content')

<div class="w-full absolute lg:top-[-7em] md:top-[0] blob-maker drop-shadow-lg">
    <img src="assets/img/blob-maker.svg" />
</div>

<x-guest-layout>
        <div class="px-8 text-center">
            <h1 class="mt-2 block mt-1 text-4xl leading-tight font-bold text-[#FF6F3C] drop-shadow-md mb-5">
                Login
            </h1>
        </div>

    <!-- Session Status -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="relative z-0 w-full my-6 group">
            <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#FF6F3C] peer" placeholder=" " :value="old('email')" required autofocus autocomplete="username"/>
            <label for="email" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#FF6F3C] peer-focus:dark:text-[#FF6F3C] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Email
            </label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="relative z-0 w-full mb-6 group">
                        <input id="password"
                                        type="password"
                                        name="password"
                                        placeholder=" "
                                        required autocomplete="current-password" 
                                        class="block py-2.5 px-0 w-full text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-[#FF6F3C] peer" placeholder=" " :value="old('email')"
                                        />
            <label for="password" class="peer-focus:font-medium absolute text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-2.5 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#FF6F3C] peer-focus:dark:text-[#FF6F3C] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"> Senha </label>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <div class="flex items-end justify-between flex-wrap mt-4">
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

        </div>


        <div class="text-center">
            <p class="text-gray-400 ">Não Possui Conta?</p>
            <a href="/register"> Cadastrar </a>
        </div>

        <div class="flex items-center justify-center flex-wrap mt-4">
            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>

@endsection