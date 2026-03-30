    <!-- Impact Stats -->
    <section class="bg-gradient-to-br from-indigo-900 via-indigo-800 to-indigo-900 text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-4xl font-bold text-center mb-16">Our Impact in Numbers</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="impact-stat bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl font-bold text-yellow-400 mb-3 flex justify-center items-center">
                        <i class="fas fa-users mr-3"></i>
                        <span x-data="stat(15000)" x-init="init()" x-text="value + '+'"></span>
                    </div>
                    <div class="text-slate-200 text-lg">Lives Impacted</div>
                </div>
                <div class="impact-stat bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl font-bold text-yellow-400 mb-3 flex justify-center items-center">
                        <i class="fas fa-project-diagram mr-3"></i>
                        <span x-data="stat(250)" x-init="init()" x-text="value + '+'"></span>
                    </div>
                    <div class="text-slate-200 text-lg">Projects Completed</div>
                </div>
                <div class="impact-stat bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl font-bold text-yellow-400 mb-3 flex justify-center items-center">
                        <i class="fas fa-home mr-3"></i>
                        <span x-data="stat(45)" x-init="init()" x-text="value"></span>
                    </div>
                    <div class="text-slate-200 text-lg">Communities Served</div>
                </div>
                <div class="impact-stat bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="text-5xl font-bold text-yellow-400 mb-3 flex justify-center items-center">
                        <i class="fas fa-handshake mr-3"></i>
                        <span x-data="stat(5000)" x-init="init()" x-text="value + '+'"></span>
                    </div>
                    <div class="text-slate-200 text-lg">Volunteers</div>
                </div>
            </div>
        </div>
    </section>
