<div class="flex flex-col lg:mx-6 w-full max-w-2xl">
    <h1 class="text-xl mb-5">Resources available:</h1>

    <table class="table-auto">
        <thead class="border-b-2 border-fuchsia-600">
        <tr>
            <th class="w-1/2 border-r-2 border-fuchsia-600">Link</th>
            <th class="w-1/6 border-r-2 border-fuchsia-600">List</th>
            <th class="w-1/6 border-r-2 border-fuchsia-600">Block</th>
            <th class="w-1/6">Filter</th>
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
                <td class="px-2 py-2">
                    {{ $rsc->classes_to_filter }}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
