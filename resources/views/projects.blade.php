<x-main-layout
    title="Projects"
>
    <div class="mx-20 mt-15">
        <h1 class="text-center mb-5">Projects</h1>
        <x-projects-grid :projects="$projects" :pagination="true" />
    </div>

</x-main-layout>
