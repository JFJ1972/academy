@props(['post' => $post])

<div class="bg-white rounded-lg flex flex-col items-center mb-4 w-fit h-fit mx-3">
    <picture class="w-full h-64 md:h-52">
        <img class="w-full h-full rounded-t-lg" src="{{ $post->image }}" alt="">
    </picture>
    <div class="flex items-center gap-5 py-2">
        <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>

        @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="post" class="m-0">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-xl"><i class="fa-solid fa-trash-can text-red-500 hover:text-red-300"></i></button>
        </form>
        
        @endcan

        <a href="{{ route('posts.edit', $post)}}"><i class="fa-solid fa-pen"></i></a>
    </div>

    <span class="text-xl font-semibold mb-2">{{ $post->title }}</span>
    <p class="m-3 text-center h-16 overflow-y-auto">{{ $post->body }}</p>

    <div class="flex items-center">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post) }}" method="post" class="">
                    @csrf
                    <button type="submit" class="bg-blue-500 px-3 py-1 text-white rounded-l-lg">Reserve
                    </button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" method="post" class="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-400 px-3 py-1 text-white rounded-l-lg">Cancel
                    </button>
                </form>
            @endif
        @endauth

        <span class="border-2 border-slate-200 py-0.5 px-2 rounded-r-lg">{{ $post->likes->count() }} {{ Str::plural('Reservation', $post->likes->count()) }}</span>

    </div>

    <div class="info bg-teal-500 text-white w-full p-2 mt-5 flex items-center justify-center gap-5 rounded-b-lg">
        <div class="item-info flex flex-col items-center">
            <span class="font-bold">User name</span>
            <a href="{{ route('users.posts', $post->user) }}">{{ $post->user->name }}</a>    
        </div>
        <div class="item-info flex flex-col items-center">
            <span class="font-bold">Number</span>
            <p>{{ $post->participants }}</p>
        </div>
        <div class="item-info flex flex-col items-center">
            <span class="font-bold">Favorite {{ $post->favorite }}</span>
            {{-- @if (!$post->likedBy(auth()->user()))
              <img class="w-5" src="https://cdn-icons-png.flaticon.com/512/1946/1946408.png" alt="">
            @else
                <img class="w-5" src="https://cdn-icons.flaticon.com/png/512/2550/premium/2550357.png?token=exp=1650576494~hmac=b6ad5c74307f8fd42624c80fcaccb65a" alt="">
            @endif --}}
            <input type="checkbox" class="checkbox checkbox-sm bg-yellow-100"> 
        </div>
    </div>
</div>