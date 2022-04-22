@extends('layouts.app')

@section('content')
    <div class="bg-blue-400 h-full block md:flex justify-center items-center md:h-5/6">
        <div class="flex items-center justify-center w-full h-fit bg-gradient-to-r from-cyan-500 to-blue-400 md:h-full">
            <div class="blur-layer backdrop-blur-3xl text-white p-10 text-center">
                <h2 class="text-3xl md:text-5xl font-black pb-5 md:pb-8">Welcome back!</h2>
                <p class="text-lg md:text-xl">Yay! You're back! Thanks for rentiring with Chiwi Academy. We knew you'd love us.</p>
            </div>
        </div>
        <div class="w-full bg-white p-6 rounded-lg drop-shadow-2xl md:mx-10">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="email" class="text-slate-500 md:text-lg">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="text-slate-500 md:text-lg">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="text-xl bg-blue-500 text-white p-4 rounded font-medium w-full hover:bg-blue-400">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection