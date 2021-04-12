@extends('layouts.app')

@section('center')

    <div class="w-full sm:w-1/2 md:w-1/3">
        <h1 class="font-sans font-thin mb-4">{{ $article->title }}</h1>

        <p class="text-grey mb-3">{{ $article->created_at }}</p>

        <h2 class="font-sans font-thin leading-normal mb-4">
            {{ $article->description }}
        </h2>

        <p class="text-grey-darkest mb-6 leading-tight">
            @php  echo $article->content; @endphp
        </p>
    </div>

@endsection
