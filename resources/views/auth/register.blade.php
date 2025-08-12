@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="flex items-center justify-center min-h-[80vh] bg-ss-cream px-4 py-8">
    <div class="w-full max-w-md">
        <form method="POST" action="{{ route('register') }}" class="bg-white shadow-2xl rounded-xl px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="text-center mb-8">
                <h1 class="text-3xl font-serif text-ss-maroon font-bold">Create Your Account</h1>
                <p class="text-ss-brown">Join our community of devotees.</p>
            </div>

            <!-- Name -->
            <div class="mb-4">
                <label class="block text-ss-brown text-sm font-bold mb-2" for="name">Full Name</label>
                <input class="shadow-sm appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-ss-saffron" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name">
                @error('name') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-ss-brown text-sm font-bold mb-2" for="email">Email</label>
                <input class="shadow-sm appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-ss-saffron" id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="your@email.com">
                @error('email') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block text-ss-brown text-sm font-bold mb-2" for="password">Password</label>
                <input class="shadow-sm appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-ss-saffron" id="password" type="password" name="password" required placeholder="******************">
                @error('password') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label class="block text-ss-brown text-sm font-bold mb-2" for="password_confirmation">Confirm Password</label>
                <input class="shadow-sm appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-ss-saffron" id="password_confirmation" type="password" name="password_confirmation" required placeholder="******************">
            </div>

            <div class="flex flex-col items-center justify-center">
                <button class="w-full bg-ss-saffron hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300" type="submit">
                    Register
                </button>
            </div>
            <div class="text-center mt-6">
                <p class="text-sm text-gray-600">
                    Already have an account? <a href="{{ route('login') }}" class="font-bold text-ss-maroon hover:underline">Login here</a>.
                </p>
            </div>
        </form>
    </div>
</div>
@endsection