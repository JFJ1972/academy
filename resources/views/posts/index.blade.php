@extends('layouts.app')

@section('content')
    <div class="bg-gray-300">
        <div class=" mx-4 my-10 pb-10 md:m-10">

            <a class="bg-blue-600 px-3 py-1 text-white rounded-lg" href="{{ route('posts.create') }}">Create new post</a>

            <div class="w-full h-fit pb-32  mt-5 sm:pb-12">
                <div class="grid grid-cols-1 grid-rows-auto place-items-center sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
    
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <x-post :post="$post" />
                    @endforeach
    
                    {{ $posts->links() }}
                @else
                    <p>There are no posts</p>
                @endif
            </div>
        </div>
    </div>
@endsection