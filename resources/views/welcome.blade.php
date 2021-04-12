@extends('layouts.app')

@section('center')
    <div class="flex flex-wrap justify-start">
        @include('forms.parsing.create')
        @include('lists.parsing_resources_list', ['resources' => $resources])
    </div>
    @include('lists.parsing_results', ['articles' => $articles])
@endsection
