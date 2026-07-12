<x-main-layout
    title="Submit a project"
>
    <div class="mx-20 mt-5">

        <section class="bg-white dark:bg-gray-900 p-0">
          <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
              <h1 class="text-center mb-8">Submit a project</h1>

              @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                @if(session('message'))
                    <h4 class="text-center mb-3 p-5 text-white bg-green-600">{{ session('message') }}</h4>
                @endif     

              <form action="{{route('submit_project_handle')}}" method="post" class="space-y-8" enctype="multipart/form-data">
                  @csrf

                  <div class="border-1 border-gray-300 rounded px-10 py-5">
                  <h3 class="mb-5">Project info</h3>

                  <div class="mb-5">
                      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project name *</label>
                      <input type="text" name="title" id="title" value="{{ old('title') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="" required>
                      @error('title')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-5">
                      <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category *</label>
                      <select id="category" name="category" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                        <option value="">Select a category</option>
                        @foreach ( $categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-5">
                      <label for="website_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Website url</label>
                      <input type="text" name="website_url" id="website_url" value="{{ old('website_url') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="https://yoursite.com">
                      @error('website_url')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-5">
                      <label for="github_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Github url *</label>
                      <input type="text" name="github_url" id="github_url" value="{{ old('github_url') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="https://github.com/username/repo" required>
                       @error('github_url')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-5">
                      <label for="preview_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preview image *</label>
                      <input type="file" name="preview_image" id="preview_image" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light">
                      <p class="my-2 text-xs text-gray-500">jpeg, jpg, png - max size: 5mb</p>
                      @error('preview_image')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="mb-5 sm:col-span-2">
                      <label for="short_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Short description *</label>
                      <textarea name="short_description" id="short_description" value="{{ old('short_description') }}" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="A few words about your project">{{ old('short_descriprion') }}</textarea>
                      @error('short_description')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-5 sm:col-span-2">
                      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description *</label>
                      <textarea name="description" id="description" value="{{ old('description') }}" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descriprion of your project">{{ old('descriprion') }}</textarea>
                      @error('description')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                      @enderror
                  </div>
                  </div>

                  <div class="border-1 border-gray-300 rounded px-10 py-5">
                  <h3 class="mb-5">Author info</h3>

                  <div class="mb-5">
                      <label for="creator_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name</label>
                      <input type="text" name="creator_name" id="creator_name" value="{{ old('creator_name') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light">
                      @error('creator_name')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-5">
                      <label for="creator_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                      <input type="email" name="creator_email" id="creator_email" value="{{ old('creator_email') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="youremail@gmail.com">
                      @error('creator_email')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="mb-5">
                      <label for="creator_twitter_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your twitter url</label>
                      <input type="text" name="creator_twitter_url" id="creator_twitter_url" value="{{ old('creator_twitter_url') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="https://x.com/yourhandle">
                      @error('creator_twitter_url')
                        <div class="mt-3 text-sm text-red-700">{{ $message }}</div>
                      @enderror
                  </div>
                  </div>
                  <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-indigo-800 sm:w-fit hover:from-indigo-500">Submit project</button>
              </form>

          </div>
        </section>

    </div>


</x-main-layout>
