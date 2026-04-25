<x-main-layout :title="config('app.name')">

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-indigo-50 via-white to-yellow-50 py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-white/20"></div>
        <div class="pointer-events-none absolute -top-10 -right-10 w-64 h-64 rounded-full bg-yellow-200/40 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-10 -left-10 w-64 h-64 rounded-full bg-indigo-200/40 blur-3xl"></div>
        <div class="container mx-auto px-4 text-center relative z-10">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold bg-gradient-to-r from-indigo-900 to-indigo-700 bg-clip-text text-transparent mb-6 leading-tight animate-fadeInUp">
                    Find the Best packages & tools for Laravel artisans
                </h1>
                <p class="text-xl md:text-2xl text-slate-600 mb-8 leading-relaxed animate-fadeInUp" style="animation-delay:.08s">
                    Curated directory of tools for Laravel, php, and more.
                </p>
            </div>
        </div>
    </section>

    <x-projects-grid  :projects="$projects" :is_homepage="true"/>
    <x-stats/>
    <x-cta/>

</x-main-layout>
