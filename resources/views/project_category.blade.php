<x-main-layout
    :title="$category->name"
>
    <div class="mx-20 mt-15">
        <h1 class="text-center mb-5">#{{ $category->name }}</h1>
        <x-projects-grid :projects="$projects"/>
    </div>

</x-main-layout>
