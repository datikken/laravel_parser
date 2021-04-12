<div class="w-full md:w-1/2 lg:w-1/4 mb-5">
    <h1 class="text-xl">Create resource to parse:</h1>
    <div class="md:mt-0 md:col-span-2">
        <form action="{{ route('create_resource') }}" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="py-5 bg-white space-y-6">
                    <div class="grid gap-3">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                Website
                            </label>
                            @error('link')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                            <div class="mt-1 flex rounded-md shadow-sm">
                                  <span
                                      class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                    http://
                                  </span>
                                <input type="text" name="link" id="link"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                       placeholder="www.example.com">
                            </div>
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                List class
                            </label>
                            @error('class_list')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                            <div class="mt-1 flex rounded-md shadow-sm">
                                  <span
                                      class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                    news-list
                                  </span>
                                <input type="text" name="class_list" id="class_list"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                            </div>
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                Block class
                            </label>
                            @error('class_block')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                            <div class="mt-1 flex rounded-md shadow-sm">
                                  <span
                                      class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                    article-content
                                  </span>
                                <input type="text" name="class_block" id="class_block"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                            </div>
                        </div>

                        <div class="col-span-3 sm:col-span-2">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                Classes to filter csv
                            </label>
                            @error('classes_to_filter')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="classes_to_filter" id="classes_to_filter"
                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-md sm:text-sm border-gray-300">
                            </div>
                        </div>

                    </div>
                </div>

                @include('buttons.basic_btn',['text'=>'Create'])

            </div>

        </form>
    </div>
</div>
