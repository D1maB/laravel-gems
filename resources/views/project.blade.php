<x-main-layout
    :title="$project->title"
>

    <div class="grid lg:grid-cols-3 gap-6 sm:gap-8 mx-5 my-15">
        <div class="lg:col-span-2">
            <img src="{{$project->imgUrl}}" class="object-cover w-full" width="500" heigth="300" alt="{{$project->title}}">

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
        <h3 class="text-center">Relared projects</h3>
    </div>

</x-main-layout>
