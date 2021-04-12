<div class="flex flex-col lg:mx-6 w-full max-w-5xl overflow-x-scroll parsing_resources  overflow-y-scroll">
    <h1 class="text-xl mb-5">Resources available:</h1>
    <table class="table-auto">
        <thead class="border-b-2 border-fuchsia-600">
        <tr>
            <th class="w-1/2 border-r-2 border-fuchsia-600">Link</th>
            <th class="w-1/6 border-r-2 border-fuchsia-600">List</th>
            <th class="w-1/6 border-r-2 border-fuchsia-600">Block</th>
            <th class="w-1/6 border-r-2 border-fuchsia-600">Filter</th>
            <th class="w-1/6 border-r-2 border-fuchsia-600">Edit</th>
            <th class="w-1/6 w-5">Drop</th>
        </tr>
        </thead>
        <tbody>

        @foreach($resources as $rsc)
            <tr class="px-5">
                <td class="px-2 py-2 border-r-2 border-fuchsia-600">
                    {{ $rsc->link }}
                </td>
                <td class="px-2 py-2 border-r-2 border-fuchsia-600">
                    {{ $rsc->class_list }}
                </td>
                <td class="px-2 py-2 border-r-2 border-fuchsia-600">
                    {{ $rsc->class_block }}
                </td>
                <td class="px-2 py-2 border-fuchsia-600">
                    {{ $rsc->classes_to_filter }}
                </td>
                <td class="min-w-70">
                    <a href="{{ route('read_resource', $rsc->id) }}" class="icon_edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                </td>
                <td class="min-w-70">
                    <div class="icon_drop">
                        <form class="flex" action="{{ route('delete_resource', $rsc->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    @include('buttons.basic_btn',['text' => 'Parse all'])
</div>
