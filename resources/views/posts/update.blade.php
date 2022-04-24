@extends('layouts.app')

@section('content')
<div class="w-full flex flex-col items-center justify-center bg-slate-300 ">
    <a class="bg-teal-500 text-xl text-white font-semibold flex items-center px-3 py-1 my-5 rounded-lg gap-3 hover:bg-teal-400" href="{{ route('posts')}}">Back<i class="fa-solid fa-left-long"></i></a>
    @auth
    <form action="{{ route('posts.update',$post) }}" method="post" class="w-full h-fit mb-4 bg-white p-6 mb-32 rounded-lg sm:w-10/12 md:mb-0">
        @csrf
        @method('PUT')
        <div class="mb-4">

            <div class="w-full block md:flex items-center">
                <label for="title" class="w-3/4 text-slate-500 md:text-lg mr-4">Title
                <input type="text" name="title" id="title" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror" placeholder="Write a title" value="{{ $post->title }}"/></label>
                
                @error('title')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <label for="type" class="w-3/4 text-slate-500 md:text-lg mr-4">Type
                <input type="text" name="type" id="type" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('type') border-red-500 @enderror" placeholder="Write a title" value="{{ $post->type }}"/></label>
                
                @error('type')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <label for="link" class="w-3/4 text-slate-500 mr-5 md:text-lg">Link Meeting
                <input type="text" name="link" id="link" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('link') border-red-500 @enderror" placeholder="Write something!" {{ $post->link }}></label>
    
                @error('link')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <label for="participants" class="w-full text-slate-500 mr-5 md:w-2/4 md:text-lg">Number
                <input type="number" name="participants" id="participants" class="w-full bg-gray-100 border-2 p-4 rounded-lg @error('participants') border-red-500 @enderror" placeholder="50" value="{{ $post->participants }}"/></label>

                @error('participants')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                @enderror
    
                
            </div>

            <label for="body" class="text-slate-500 md:text-lg mt-4">Body
            <textarea name="body" id="body" cols="30" rows="2" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Write something!">{{ $post->body }}</textarea></label>

            @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror

            <div class="w-full block md:flex items-center">
                
            </div>


            <label for="image" class="text-slate-500 md:text-lg mt-4">Image Only Link
            <input type="text" name="image" id="image" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('image') border-red-500 @enderror" placeholder="Just link!" value="https://cdn.pixabay.com/photo/2022/04/03/22/05/buildings-7109918_960_720.jpg" value="{{ $post->image }}"/></label>

            @error('image')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="flex items-center justify-between">
            <button type="reset" class="bg-slate-500 text-white px-4 py-2 rounded font-medium">Clear</button>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Update</button>
        </div>
    </form>
@endauth
</div>
@endsection