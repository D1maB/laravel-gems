<!-- Header -->
<header class="bg-white/90 backdrop-blur border-b border-slate-200 sticky top-0 z-50" x-data="{open:false}">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center shadow-md">
                    <span class="text-white font-bold text-xl" aria-hidden="true"><i class="fas fa-hands-helping"></i></span>
                </div>
                <span class="text-2xl font-bold bg-gradient-to-r from-indigo-800 to-indigo-600 bg-clip-text text-transparent">
                    Laravel Gems
                </span>
            </div>
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-slate-600 hover:text-indigo-600 transition-colors duration-300 flex items-center space-x-1 focus-ring" aria-label="Home">
                    <i class="fas fa-home text-sm"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="text-indigo-600 font-medium flex items-center space-x-1 focus-ring" aria-current="page">
                    <i class="fas fa-star text-sm"></i>
                    <span>Success Stories</span>
                </a>
                <a href="#" class="text-slate-600 hover:text-indigo-600 transition-colors duration-300 flex items-center space-x-1 focus-ring">
                    <i class="fas fa-handshake text-sm"></i>
                    <span>Get Involved</span>
                </a>
                <a href="#" class="text-slate-600 hover:text-indigo-600 transition-colors duration-300 flex items-center space-x-1 focus-ring">
                    <i class="fas fa-info-circle text-sm"></i>
                    <span>About</span>
                </a>
                <a href="#" class="text-slate-600 hover:text-indigo-600 transition-colors duration-300 flex items-center space-x-1 focus-ring">
                    <i class="fas fa-envelope text-sm"></i>
                    <span>Contact</span>
                </a>
            </nav>
            <div class="flex items-center space-x-3">
                <a href="#" type="button" class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-5 py-3 rounded-lg font-medium hover:from-indigo-700 hover:to-indigo-800 transition-all duration-300 shadow-md hover:shadow-lg flex items-center space-x-2 focus-ring">
                    <i class="fas fa-heart"></i>
                    <span>Submit project</span>
                </a>
                <button class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-lg border border-slate-200 text-slate-600 hover:text-indigo-700 hover:border-indigo-300 transition focus-ring" @click="open = !open" :aria-expanded="open.toString()" aria-controls="mobile-menu" aria-label="Toggle Menu">
                    <i class="fa-solid" :class="open ? 'fa-xmark' : 'fa-bars'"></i>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden" x-show="open" x-transition.origin.top.left @click.outside="open=false">
            <div class="mt-4 grid gap-2 p-3 rounded-xl border border-slate-200 bg-white shadow-lg">
                <a href="#" class="px-4 py-3 rounded-lg hover:bg-slate-50 flex items-center space-x-3">
                    <i class="fas fa-home w-5 text-slate-500"></i><span>Home</span>
                </a>
                <a href="#" class="px-4 py-3 rounded-lg bg-indigo-50 text-indigo-700 font-medium flex items-center space-x-3">
                    <i class="fas fa-star w-5"></i><span>Success Stories</span>
                </a>
                <a href="#" class="px-4 py-3 rounded-lg hover:bg-slate-50 flex items-center space-x-3">
                    <i class="fas fa-handshake w-5 text-slate-500"></i><span>Get Involved</span>
                </a>
                <a href="#" class="px-4 py-3 rounded-lg hover:bg-slate-50 flex items-center space-x-3">
                    <i class="fas fa-info-circle w-5 text-slate-500"></i><span>About</span>
                </a>
                <a href="#" class="px-4 py-3 rounded-lg hover:bg-slate-50 flex items-center space-x-3">
                    <i class="fas fa-envelope w-5 text-slate-500"></i><span>Contact</span>
                </a>
            </div>
        </div>
    </div>
</header>
