@extends('layouts.app')


@section('content')

<div class="carousel w-full">
    @foreach ($post as $item)

    <div id="{{ $item->id }}" class="carousel-item w-full">
        <img src="https://api.lorem.space/image/car?w=800&h=200&hash=8B7BCDC2" class="w-full" />
    </div>
    @endforeach

}
</div>
<div class="flex justify-center w-full py-2 gap-2">
    @foreach ($post as $item)
    <a href="#{{ $item->id }}" class="btn btn-xs"></a>
    @endforeach
</div>

@endsection
