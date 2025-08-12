@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-[80vh] bg-ss-cream px-4">
    <div class="w-full max-w-md">
        <form method="POST" action="{{ route('login') }}" class="bg-white shadow-2xl rounded-xl px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="text-center mb-8">
                <h1 class="text-3xl font-serif text-ss-maroon font-bold">Welcome Back</h1>
                <p class="text-ss-brown">Sign in to continue to your dashboard.</p>
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <label class="block text-ss-brown text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow-sm appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-ss-saffron" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="your@email.com">
                @error('email')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-ss-brown text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow-sm appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-ss-saffron" id="password" type="password" name="password" required placeholder="******************">
            </div>

            <!-- Remember Me -->
            <div class="mb-6">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-ss-saffron shadow-sm focus:ring-ss-saffron" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex flex-col items-center justify-center">
                <button class="w-full bg-ss-saffron hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300 flex items-center justify-center gap-2" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-ss-maroon hover:text-ss-saffron mt-4" href="#">
                    Forgot Password?
                </a>
            </div>
             <div class="text-center mt-6">
                <p class="text-sm text-gray-600">
                    Don't have an account? <a href="{{ route('register') }}" class="font-bold text-ss-maroon hover:underline">Register here</a>.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection