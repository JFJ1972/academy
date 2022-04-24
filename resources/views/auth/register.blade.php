@extends('layouts.app')

@section('content')
    <div class="bg-teal-400 h-full block md:flex justify-center items-center md:h-5/6">

        <div class="flex items-center justify-center w-full h-fit bg-gradient-to-t from-teal-400 to-cyan-600 md:hidden">
            <div class="text-white p-10 text-center">
                <h2 class="text-3xl md:text-5xl font-black pb-5 md:pb-8">Join us</h2>
                <p class="text-lg md:text-xl">We are glad to have you as a user so welcome to our website</p>
            </div>
        </div>

        <div class="w-full bg-teal-400 p-6 drop-shadow-2xl pb-36 md:pb-6 md:rounded-lg md:mx-10 md:bg-white">
            <x-form />
        </div>
        <div class="hidden items-center justify-center w-full h-fit bg-gradient-to-t md:bg-gradient-to-r from-teal-400 to-cyan-600 md:flex md:w-3/4 md:h-full lg:w-2/3">
            <div class="text-white p-10 text-center">
                <h2 class="text-3xl md:text-5xl font-black pb-5 md:pb-8">Join us</h2>
                <p class="text-lg md:text-xl">We are glad to have you as a user so welcome to our website</p>
            </div>
        </div>
    </div>
@endsection