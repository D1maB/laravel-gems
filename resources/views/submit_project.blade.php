<x-main-layout
    title="Submit a project"
>
    <div class="mx-20 mt-5">

        <section class="bg-white dark:bg-gray-900 p-0">
          <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
              <h1 class="text-center mb-8">Submit a project</h1>

              <form action="{{route('submit_project_handle')}}" method="post" class="space-y-8">
                  @csrf

                  <div class="border-1 border-gray-300 rounded px-10 py-5">
                  <h3 class="mb-5">Project info</h3>

                  <div class="mb-5">
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project name *</label>
                      <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="" required>
                  </div>
                  <div class="mb-5">
                      <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category *</label>
                      <select id="category" name="category" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                        <option disabled selected>Select a category</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                  </div>
                  <div class="mb-5">
                      <label for="website_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Website url</label>
                      <input type="text" name="website_url" id="website_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="https://yoursite.com">
                  </div>

                  <div class="mb-5">
                      <label for="github_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Github url *</label>
                      <input type="text" name="github_url" id="github_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="https://github.com/username/repo" required>
                  </div>
                  <div class="mb-5">
                      <label for="preview_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Preview image *</label>
                      <input type="file" name="preview_image" id="preview_image" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                  <p class="my-2 text-xs text-gray-500">jpeg, jpg, png - max size: 5mb</p>
                  </div>
                  <div class="mb-5 sm:col-span-2">
                      <label for="short_descriprion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Short descriprion *</label>
                      <textarea name="short_descriprion" id="short_descriprion" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="A few words about your project"></textarea>
                  </div>

                  <div class="mb-5 sm:col-span-2">
                      <label for="descriprion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Descriprion *</label>
                      <textarea name="descriprion" id="descriprion" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Descriprion of your project"></textarea>
                  </div>
                  </div>

                  <div class="border-1 border-gray-300 rounded px-10 py-5">
                  <h3 class="mb-5">Author info</h3>

                  <div class="mb-5">
                      <label for="creator_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name</label>
                      <input type="text" name="creator_name" id="website_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light">
                  </div>

                  <div class="mb-5">
                      <label for="creator_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                      <input type="email" name="creator_email" id="website_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="youremail@gmail.com">
                  </div>

                  <div class="mb-5">
                      <label for="creator_twitter_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your twitter url</label>
                      <input type="text" name="creator_twitter_url" id="website_url" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="https://x.com/yourhandle">
                  </div>
                  </div>
                  <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-indigo-800 sm:w-fit hover:from-indigo-500">Submit project</button>
              </form>

          </div>
        </section>

    </div>


</x-main-layout>
