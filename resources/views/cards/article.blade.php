<div class="px-10 my-4 py-6 rounded shadow-xl bg-white">
    <div class="flex justify-between items-center">
        <span class="font-light text-gray-600">{{ $article->created_at }}</span>
{{--        <a class="px-2 py-1 bg-blue-600 text-gray-100 font-bold rounded hover:bg-gray-500" href="#">Announcement</a>--}}
    </div>
    <div class="mt-2">
        <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">
            {{ $article->title }}
        </a>
        <p class="mt-2 text-gray-600">
            {{ $article->description }}
        </p>
    </div>
    <div class="flex justify-between items-center mt-4">
        <a class="text-blue-600 hover:underline" href="{{ route('article', $article->id) }}">Подробнее</a>
    </div>
</div>
