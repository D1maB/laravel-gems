<x-main-layout
    :title="$project->title"
>
    <div class="mx-20">
    <div class="grid lg:grid-cols-3 gap-8 sm:gap-10 my-15">
        <div class="lg:col-span-2">
            <div class="relative">
                <img src="{{$project->imgUrl}}" class="object-cover w-full rounded-sm" width="" heigth="" alt="{{$project->title}}">
                <ul class="absolute flex gap-1 left-[15px] bottom-[15px]">
                    <li class=""><a href="#" class="bg-stone-900 text-white border-1 border-stone-700 rounded-md text-sm px-2 py-1 hover:bg-stone-800">#tag 1</a></li>
                    <li class=""><a href="#" class="bg-stone-900 text-white border-1 border-stone-700 rounded-md text-sm px-2 py-1 hover:bg-stone-800">#tag 2</a></li>
                    <li class=""><a href="#" class="bg-stone-900 text-white border-1 border-stone-700 rounded-md text-sm px-2 py-1 hover:bg-stone-800">#eloquent</a></li>
                </ul>
            </div>
            <div class="description py-4">{{$project->description}}</div>
        </div>
        <div class="lg:col-span-1">
            <h1>{{$project->title}}</h1>

            <p>{{$project->short_description}}</p>

            <div class="mt-5">
                <a href="{{$project->website_url}}" class="mb-2 px-4 py-2 text-center block font-medium rounded-lg border border-red-900 text-white bg-red-900 hover:bg-red-700">Visit website</a>
                <a href="{{$project->github_url}}" class="px-4 py-2 text-center block font-medium rounded-lg border border-gray-900 text-white bg-gray-900 hover:bg-gray-700">Visit github</a>
            </div>

        </div>
    </div>

        <div>
            <h3 class="text-center">Related projects</h3>

            <x-projects-grid/>
        </div>

   </div>


</x-main-layout>
