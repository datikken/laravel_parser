<div class="w-full md:w-1/2 lg:w-1/4 mb-5">
    <h1 class="text-xl">Update resource to parse:</h1>
    <div class="md:mt-0 md:col-span-2">
        <form action="{{ route('update_resource', $rsc->id) }}" method="POST">
            @csrf
            @method('PUT')
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
                                       value="{{ $rsc->link }}">
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
                                       value="{{ $rsc->class_list }}"
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
                                       value="{{ $rsc->class_block }}"
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
                                <textarea name="classes_to_filter" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 form-textarea mt-1 block w-full" name="" id="" cols="30" rows="10">{{ $rsc->classes_to_filter }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>

                @include('buttons.basic_btn',['text'=>'Update'])

            </div>

        </form>
    </div>
</div>
