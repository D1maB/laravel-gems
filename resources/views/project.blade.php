<x-main-layout
    :title="$project->title"
>
    <div class="mx-20">
    <div class="grid lg:grid-cols-3 gap-8 sm:gap-10 my-15">
        <div class="lg:col-span-2">
            <div class="relative">
                <img src="{{$project->imgUrl}}" class="object-cover w-full rounded-sm" width="" heigth="" alt="{{$project->title}}">
                <ul class="absolute flex gap-1 bottom-5 left-4">
                    @foreach($project->categories as $category)
                    <li class="">
                        <a href="#" class="bg-red-700 text-white px-4 py-2 rounded-full text-sm font-medium shadow-sm">
                            {{$category->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-6">            
                <h3 class="mb-2">Description</h3>
                <div class="description pt-1">{{$project->description}}</div>
            </div>

        </div>
        <div class="lg:col-span-1">
            <h1>{{$project->title}}</h1>

            <p>{{$project->short_description}}</p>

            <div class="mt-5">
                <a href="{{$project->website_url}}" class="mb-2 px-4 py-2 text-center block font-medium rounded-lg border border-red-700 text-white bg-red-700">Visit website</a>
                <a href="{{$project->github_url}}" class="px-4 py-2 text-center block font-medium rounded-lg border border-gray-900 text-white bg-gray-900">View on github</a>
            </div>

        </div>
    </div>
        @if($relatedProjects->count())
        <div>
            <h3 class="text-center">Related projects</h3>

            <x-projects-grid :projects="$relatedProjects"/>
        </div>
        @endif

   </div>


</x-main-layout>
