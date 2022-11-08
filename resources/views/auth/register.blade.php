@extends('layouts.app')
@section('content')
<body class="antialiased bg-slate-200">
    <div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300">
        <h1 class="text-4xl font-medium">Legister</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="flex flex-col space-y-5">
            <label for="name" :value="__('Name')">
                <p class="font-medium text-slate-700 pb-2">Name</p>
                <input id="name" type="text" name="name" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" :value="old('name')" required autofocus>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </label>
            <label for="email" :value="__('Email')">
                <p class="font-medium text-slate-700 pb-2">Email</p>
                <input id="email" name="email" type="email" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" :value="old('email')" required autofocus>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </label>
            <label for="password" :value="__('Password')">
                <p class="font-medium text-slate-700 pb-2">Password</p>
                <input id="password" name="password" type="password" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" required autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </label>
            <label for="password_confirmation" :value="__('Confirm Password')">
                <p class="font-medium text-slate-700 pb-2">Password Confirmation</p>
                <input id="password_confirmation" name="password_confirmation" type="password" class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" required>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </label>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        </form>
    </div>
</body>
@endsection()























