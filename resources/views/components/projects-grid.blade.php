@props([
    'projects' => [],
    'is_homepage' => false,
    'has_pagination' => false,
])

    <!-- Projects Grid -->
    <section class="py-10">
        <div class="container mx-auto px-4">

            @if($is_homepage)
                <h2 class="text-center mb-10">Popular categories</h2>

                <!-- Filter Tabs -->
                <div class="flex flex-wrap justify-center gap-3 mb-10">
                    <a href="/" class="filter-btn px-6 py-3 rounded-full font-medium border transition-all duration-300 flex items-center space-x-2 focus-ring">
                        <span>Education</span>
                    </a>
                    <a href="/" class="filter-btn px-6 py-3 rounded-full font-medium border transition-all duration-300 flex items-center space-x-2 focus-ring">
                    <span>Eloquent</span>
                    </a>
                    <a href="/" class="filter-btn px-6 py-3 rounded-full font-medium border transition-all duration-300 flex items-center space-x-2 focus-ring">
                    <span>Utils</span>
                    </a>
                </div>
            @endif

            <!-- Projects -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-ref="grid">

                @foreach($projects as $project)
                <!-- Project 1 -->
                <article class="story-card bg-white rounded-2xl shadow-lg overflow-hidden border border-slate-100 animate-fadeInUp">
                    <div class="h-56 relative overflow-hidden">
                        <a href="{{route('project', $project->slug)}}">
                            <img src="{{$project->imgUrl}}"
                                 alt="Maria celebrating her college graduation outdoors" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 w-full flex gap-1">

                                @foreach($project->categories as $category)
                                    <a href="#" class="bg-red-700  text-white px-4 py-2 rounded-full text-sm font-medium shadow-sm items-center">
                                        <span>{{$category->name}}</span>
                                    </a>
                                @endforeach

                            </div>
                        </a>
                    </div>
                    <div class="p-6">
                        <a href="{{route('project', $project->slug)}}">
                            <h3 class="text-xl inline font-bold text-slate-900 mb-3 hover:underline">{{$project->title}}</h3>
                        </a>
                        <p class="text-slate-600 mb-4 leading-relaxed line-clamp-3">
                            {{$project->short_description}}
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500 flex items-center space-x-1">
                                <i class="far fa-calendar"></i>
                                <span>{{ $project->created_at->format('F d, Y') }}</span>
                            </span>
                            <a href="{{route('project', $project->slug)}}" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center space-x-1 group focus-ring"
                               @click.prevent="openModal({title:`Maria's Journey to College`, date:`March 15, 2023`, category:`Education`, image:$el.closest('article').querySelector('img').src, content:`With our scholarship program, Maria became the first in her family to attend college, pursuing her dream in medicine. Through mentorship, tutoring, and financial aid, she overcame barriers and now volunteers with Hope Foundation to mentor other first-generation students.`})">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach

            </div>

            @if($is_homepage)
                <!-- Load More Button -->
                <div class="text-center mt-12">
                    <a href="#" class="bg-white text-slate-700 border border-slate-300 px-8 py-4 rounded-xl font-medium hover:bg-slate-50 hover:border-indigo-300 transition-all duration-300 shadow-md hover:shadow-lg inline-flex items-center space-x-2 focus-ring">
                        <span>Show all projects</span>
                    </a>
                </div>
            @endif
            
        </div>

        <!-- Story Modal -->
        <div x-show="modalOpen" x-transition.opacity class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
            <div class="absolute inset-0 bg-black/50" @click="closeModal()" aria-hidden="true"></div>
            <div class="relative bg-white rounded-2xl shadow-2xl max-w-2xl w-full overflow-hidden">
                <button class="absolute top-3 right-3 w-10 h-10 rounded-full bg-white/90 border border-slate-200 text-slate-600 hover:text-slate-900 flex items-center justify-center shadow-sm focus-ring"
                        @click="closeModal()" aria-label="Close modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <img :src="modalData.image" alt="" class="w-full h-60 object-cover">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700">
                            <i class="fa-solid fa-tag mr-2"></i><span x-text="modalData.category"></span>
                        </span>
                        <span class="text-sm text-slate-500 flex items-center">
                            <i class="far fa-calendar mr-2"></i><span x-text="modalData.date"></span>
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2" x-text="modalData.title"></h3>
                    <p class="text-slate-600 leading-relaxed" x-text="modalData.content"></p>
                </div>
            </div>
        </div>
    </section>
