<x-main-layout
    :title="$project->title"
>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <div>
            img
            <img src="{{$project->imgUrl}}" class="">

            <div class="description">full description</div>
        </div>
        <div>
            <h2>Project title: {{$project->title}}</h2>

            <p>short description</p>

            <a href="#">Visit website</a>
            <a href="#">Visit github</a>

        </div>
    </div>

    <div>
        <h3 class="text-center">Relared projects</h3>
    </div>

</x-main-layout>
