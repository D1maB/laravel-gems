<x-main-layout
    :title="$category->name"
>
    <div class="mx-20">
        <div class="my-15">
            <h1 class="text-center mb-5">{{ $category->name }}</h1>
            <x-projects-grid :projects="$projects"/>
        </div>
    </div>

</x-main-layout>
