@props([
    'canonical' => url()->current(),
    'description' => 'The best Laravel packages and apps directory.',
    'image' => '', // Vite::asset('resources/img/apple-touch-icon.png'),
    'title',
    'type' => 'website',
])

    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

    <title>{{ $title }}</title>

    <meta name="robots" content="max-image-preview:large" />
    <meta name="title" content="{{ $title }}" />
    <meta name="description" content="{{ $description }}" />

    <meta property="og:type" content="{{ $type }}" />
    <meta property="og:url" content="{{ $canonical }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:image" content="{{ $image }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="{{ $canonical }}" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta name="twitter:image" content="{{ $image }}" />

    {{--
    @livewireStyles
    --}}

    @vite('resources/css/app.css')

    <link
        rel="preload"
        as="style"
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@200..800&display=swap"
        onload="this.onload=null;this.rel='stylesheet'"
    />

    <link
        rel="preload"
        as="style"
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Indie+Flower&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        onload="this.onload=null;this.rel='stylesheet'"
    >
    {{--
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/img/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/img/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/img/apple-touch-icon.png') }}" />
    --}}
{{--
    <script src="https://cdn.tailwindcss.com"></script>
--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    body { font-family: 'Inter', sans-serif; }
    .story-card { transition: all 0.3s ease; }
    .story-card:hover { transform: translateY(-8px); }
    .filter-btn { transition: all 0.3s ease; }
    .impact-stat { transition: all 0.5s ease; }
    .impact-stat:hover { transform: scale(1.05); }
    .focus-ring:focus-visible { outline: none; box-shadow: 0 0 0 4px rgba(99,102,241,.25), 0 0 0 6px rgba(255,255,255,1); }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(12px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeInUp { animation: fadeInUp .6s ease both; }
    @media (prefers-reduced-motion: reduce) {
        .story-card:hover { transform: none; }
        .impact-stat:hover { transform: none; }
        .animate-bounce, .animate-fadeInUp { animation: none !important; }
    }
</style>

<link rel="canonical" href="{{ $canonical }}" />

</head>

<body class="bg-slate-50 text-slate-800">
<a href="#main" class="sr-only focus:not-sr-only focus:ring-2 focus:ring-indigo-600 focus:outline-none bg-white text-slate-900 px-4 py-2 rounded-md absolute left-4 top-4 z-[60]">
    Skip to content
</a>

<x-header />

<main class="container mx-auto px-4 py-4">
{{ $slot }}
</main>

<x-footer/>

</div>


@vite('resources/js/app.js')

<script defer src="https://cloud.umami.is/script.js" data-website-id="12345"></script>
</body>
</html>
