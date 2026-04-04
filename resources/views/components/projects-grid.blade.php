@props([
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
                <!-- Project 1 -->
                <article class="story-card bg-white rounded-2xl shadow-lg overflow-hidden border border-slate-100 animate-fadeInUp"
                        data-cat="Education" data-idx="1"
                        x-show="showCard('Education', 1)" x-transition>
                    <div class="h-56 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1758270702471-fc6fe6506afc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w4MDcxMzN8MHwxfHNlYXJjaHwxfHxjb2xsZWdlJTIwZ3JhZHVhdGlvbiUyMHN0dWRlbnQlMjBzbWlsaW5nJTIwY2FwJTIwYW5kJTIwZ293biUyMG91dGRvb3JzfGVufDB8MHx8fDE3NTk3OTU2MTl8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=TailFlux&photo_id=bWwc8UTvnog"
                             alt="Maria celebrating her college graduation outdoors" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-indigo-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-md flex items-center space-x-1">
                                <i class="fas fa-graduation-cap text-xs"></i>
                                <span>Education</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Maria's Journey to College</h3>
                        <p class="text-slate-600 mb-4 leading-relaxed line-clamp-3">
                            With our scholarship program, Maria became the first in her family to attend college, pursuing her dream in medicine.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500 flex items-center space-x-1">
                                <i class="far fa-calendar"></i>
                                <span>March 15, 2023</span>
                            </span>
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center space-x-1 group focus-ring"
                               @click.prevent="openModal({title:`Maria's Journey to College`, date:`March 15, 2023`, category:`Education`, image:$el.closest('article').querySelector('img').src, content:`With our scholarship program, Maria became the first in her family to attend college, pursuing her dream in medicine. Through mentorship, tutoring, and financial aid, she overcame barriers and now volunteers with Hope Foundation to mentor other first-generation students.`})">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Project 2 -->
                <article class="story-card bg-white rounded-2xl shadow-lg overflow-hidden border border-slate-100 animate-fadeInUp"
                        data-cat="Healthcare" data-idx="2"
                        x-show="showCard('Healthcare', 2)" x-transition>
                    <div class="h-56 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1584789900013-7eb27b6dae05?crop=entropy&cs=tinysrgb&fit=crop&h=400&w=600" alt="Clean water project in Riverdale" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-yellow-400 text-slate-900 px-4 py-2 rounded-full text-sm font-medium shadow-md flex items-center space-x-1">
                                <i class="fas fa-heartbeat text-xs"></i>
                                <span>Healthcare</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Clean Water for Riverdale</h3>
                        <p class="text-slate-600 mb-4 leading-relaxed line-clamp-3">
                            Our water purification project brought clean drinking water to over 5,000 residents in the Riverdale community.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500 flex items-center space-x-1">
                                <i class="far fa-calendar"></i>
                                <span>January 8, 2023</span>
                            </span>
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center space-x-1 group focus-ring"
                               @click.prevent="openModal({title:`Clean Water for Riverdale`, date:`January 8, 2023`, category:`Healthcare`, image:$el.closest('article').querySelector('img').src, content:`By installing sustainable filtration systems and training local maintenance teams, we ensured long-term access to safe water for Riverdale. Waterborne illnesses dropped by 60% within six months.`})">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Project 3 -->
                <article class="story-card bg-white rounded-2xl shadow-lg overflow-hidden border border-slate-100 animate-fadeInUp"
                        data-cat="Community" data-idx="3"
                        x-show="showCard('Community', 3)" x-transition>
                    <div class="h-56 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1643214410415-de1976ad74ff?crop=entropy&cs=tinysrgb&fit=crop&h=400&w=600" alt="Youth center activities and mentorship" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-yellow-400 text-slate-900 px-4 py-2 rounded-full text-sm font-medium shadow-md flex items-center space-x-1">
                                <i class="fas fa-users text-xs"></i>
                                <span>Community</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Youth Center Transformation</h3>
                        <p class="text-slate-600 mb-4 leading-relaxed line-clamp-3">
                            The new community youth center has become a safe haven for over 200 children, offering educational programs and mentorship.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500 flex items-center space-x-1">
                                <i class="far fa-calendar"></i>
                                <span>November 22, 2022</span>
                            </span>
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center space-x-1 group focus-ring"
                               @click.prevent="openModal({title:`Youth Center Transformation`, date:`November 22, 2022`, category:`Community`, image:$el.closest('article').querySelector('img').src, content:`After revitalization, the youth center now hosts after-school tutoring, arts programs, and sports clubs. Volunteer mentors provide guidance and career exploration.`})">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Project 4 -->
                <article class="story-card bg-white rounded-2xl shadow-lg overflow-hidden border border-slate-100 animate-fadeInUp"
                        data-cat="Environment" data-idx="4"
                        x-show="showCard('Environment', 4)" x-transition>
                    <div class="h-56 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1569185835959-37def9da946d?crop=entropy&cs=tinysrgb&fit=crop&h=400&w=600" alt="Urban garden community growing fresh produce" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-indigo-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-md flex items-center space-x-1">
                                <i class="fas fa-leaf text-xs"></i>
                                <span>Environment</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Urban Garden Initiative</h3>
                        <p class="text-slate-600 mb-4 leading-relaxed line-clamp-3">
                            Transforming vacant lots into productive urban gardens, providing fresh produce and community gathering spaces.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500 flex items-center space-x-1">
                                <i class="far fa-calendar"></i>
                                <span>September 5, 2022</span>
                            </span>
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center space-x-1 group focus-ring"
                               @click.prevent="openModal({title:`Urban Garden Initiative`, date:`September 5, 2022`, category:`Environment`, image:$el.closest('article').querySelector('img').src, content:`Residents formed a garden co-op, growing vegetables and herbs while learning sustainable practices. The initiative also created weekend markets and workshops.`})">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Project 5 -->
                <article class="story-card bg-white rounded-2xl shadow-lg overflow-hidden border border-slate-100 animate-fadeInUp"
                        data-cat="Education" data-idx="5"
                        x-show="showCard('Education', 5)" x-transition>
                    <div class="h-56 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581056771370-4814aa6dd705?crop=entropy&cs=tinysrgb&fit=crop&h=400&w=600" alt="Senior learning digital literacy skills" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-yellow-400 text-slate-900 px-4 py-2 rounded-full text-sm font-medium shadow-md flex items-center space-x-1">
                                <i class="fas fa-graduation-cap text-xs"></i>
                                <span>Education</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Digital Literacy Program</h3>
                        <p class="text-slate-600 mb-4 leading-relaxed line-clamp-3">
                            Over 1,000 seniors learned essential digital skills, helping them stay connected with family and access online services.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500 flex items-center space-x-1">
                                <i class="far fa-calendar"></i>
                                <span>July 18, 2022</span>
                            </span>
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center space-x-1 group focus-ring"
                               @click.prevent="openModal({title:`Digital Literacy Program`, date:`July 18, 2022`, category:`Education`, image:$el.closest('article').querySelector('img').src, content:`Our intergenerational training matched teens with seniors for one-on-one sessions. Participants now use telehealth, banking apps, and video calls with confidence.`})">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Project 6 -->
                <article class="story-card bg-white rounded-2xl shadow-lg overflow-hidden border border-slate-100 animate-fadeInUp"
                        data-cat="Healthcare" data-idx="6"
                        x-show="showCard('Healthcare', 6)" x-transition>
                    <div class="h-56 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1662046184230-404233fea380?crop=entropy&cs=tinysrgb&fit=crop&h=400&w=600" alt="Mobile medical clinic providing rural healthcare" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy" decoding="async">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-indigo-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-md flex items-center space-x-1">
                                <i class="fas fa-heartbeat text-xs"></i>
                                <span>Healthcare</span>
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Mobile Clinic Success</h3>
                        <p class="text-slate-600 mb-4 leading-relaxed line-clamp-3">
                            Our mobile health clinic provided free medical check-ups and treatments to remote communities across the region.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-500 flex items-center space-x-1">
                                <i class="far fa-calendar"></i>
                                <span>May 3, 2022</span>
                            </span>
                            <a href="#" class="text-indigo-600 hover:text-indigo-700 font-medium flex items-center space-x-1 group focus-ring"
                               @click.prevent="openModal({title:`Mobile Clinic Success`, date:`May 3, 2022`, category:`Healthcare`, image:$el.closest('article').querySelector('img').src, content:`Partnering with local clinics, our team delivered vaccinations, prenatal care, and health education to over 2,500 residents in underserved areas.`})">
                                <span>Read More</span>
                                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-white text-slate-700 border border-slate-300 px-8 py-4 rounded-xl font-medium hover:bg-slate-50 hover:border-indigo-300 transition-all duration-300 shadow-md hover:shadow-lg inline-flex items-center space-x-2 focus-ring"
                        @click="loadMore()" x-show="filteredCount() > visibleCount">
                    <i class="fas fa-plus"></i>
                    <span>Load More Stories</span>
                </button>
                <p class="text-sm text-slate-500 mt-4" x-show="filteredCount() <= visibleCount">
                    You’ve reached the end of the stories.
                </p>
            </div>
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
