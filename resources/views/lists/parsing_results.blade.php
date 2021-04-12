<h2 class="text-lg my-4">Parsed:</h2>

<div class="parsed overflow-y-scroll max-h-200">

@foreach($articles as $article)
    @include('cards.article', ['article' => $article])
@endforeach
</div>
