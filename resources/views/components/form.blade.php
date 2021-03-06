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