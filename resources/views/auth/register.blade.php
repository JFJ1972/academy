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
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="name-user w-full flex flex-col md:flex-row">
                    <div class="mb-4 w-full md:w-1/2 mr-4">
                        <label for="name" class="text-black md:text-slate-500 md:text-lg">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
    
                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div class="mb-4 w-full md:w-1/2">
                        <label for="username" class="text-black md:text-slate-500 md:text-lg">Username</label>
                        <input type="text" name="username" id="username" placeholder="NewUser01" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
    
                        @error('username')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="text-black md:text-slate-500 md:text-lg">Email</label>
                    <input type="text" name="email" id="email" placeholder="example@gmail.com" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="password-div w-full block md:flex items-center">
                    
                    <div class="mb-4 md:w-1/2 md:mr-4">
                        <label for="password" class="text-black md:text-slate-500 md:text-lg">Password</label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg" 
                            @error('password') border-red-500 @enderror"
                            
                            placeholder="Write your password" value="{{old('password')}}" >
                            @error('password')
                            <div class="text-red-500 text-xs italic">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4 md:w-1/2 ">
                        <label for="password_confirmation" class="text-black md:text-slate-500 md:text-lg">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" 
                            class="bg-gray-100 border-2 w-full p-4 rounded-lg"
                            @error('password_confirmation') border-red-500 @enderror"
                            placeholder="Repeat your password" value="{{old('password_confirmation')}}" >

                            @error('password_confirmation')
                            <div class="text-red-500 text-xs italic">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" class="text-xl bg-slate-600 text-white p-4 rounded font-medium w-full md:bg-teal-500">Register</button>
                </div>
            </form>
        </div>
        <div class="hidden items-center justify-center w-full h-fit bg-gradient-to-t md:bg-gradient-to-r from-teal-400 to-cyan-600 md:flex md:w-3/4 md:h-full lg:w-2/3">
            <div class="text-white p-10 text-center">
                <h2 class="text-3xl md:text-5xl font-black pb-5 md:pb-8">Join us</h2>
                <p class="text-lg md:text-xl">We are glad to have you as a user so welcome to our website</p>
            </div>
        </div>
    </div>
@endsection