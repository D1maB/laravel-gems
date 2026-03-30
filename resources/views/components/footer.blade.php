<!-- Footer -->
    <footer class="bg-gradient-to-br from-slate-800 via-slate-900 to-slate-800 text-slate-300 py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center shadow-md">
                            <span class="text-white font-bold text-xl" aria-hidden="true"><i class="fas fa-hands-helping"></i></span>
                        </div>
                        <span class="text-white font-bold text-xl">Hope Foundation</span>
                    </div>
                    <p class="text-slate-400 leading-relaxed">
                        Creating positive change through community-driven initiatives and sustainable development.
                    </p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center hover:bg-indigo-600 transition-colors duration-300 focus-ring" aria-label="Facebook">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center hover:bg-indigo-600 transition-colors duration-300 focus-ring" aria-label="Twitter">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center hover:bg-indigo-600 transition-colors duration-300 focus-ring" aria-label="Instagram">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center hover:bg-indigo-600 transition-colors duration-300 focus-ring" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-white transition-colors duration-300 flex items-center space-x-2 focus-ring">
                            <i class="fas fa-chevron-right text-yellow-400 text-xs"></i>
                            <span>About Us</span>
                        </a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300 flex items-center space-x-2 focus-ring">
                            <i class="fas fa-chevron-right text-yellow-400 text-xs"></i>
                            <span>Our Programs</span>
                        </a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300 flex items-center space-x-2 focus-ring">
                            <i class="fas fa-chevron-right text-yellow-400 text-xs"></i>
                            <span>Success Stories</span>
                        </a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-300 flex items-center space-x-2 focus-ring">
                            <i class="fas fa-chevron-right text-yellow-400 text-xs"></i>
                            <span>Get Involved</span>
                        </a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Contact</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-yellow-400"></i>
                            <span>123 Hope Street, City, State 12345</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-yellow-400"></i>
                            <span>info@hopefoundation.org</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-yellow-400"></i>
                            <span>(555) 123-4567</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-clock text-yellow-400"></i>
                            <span>Mon-Fri: 9AM-5PM</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Stay Connected</h4>
                    <p class="text-slate-400 mb-6 leading-relaxed">Subscribe to our newsletter for updates on our latest projects and success stories.</p>
                    <form class="flex" onsubmit="event.preventDefault()">
                        <label class="sr-only" for="email-subscribe">Email address</label>
                        <input id="email-subscribe" type="email" placeholder="Your email" class="bg-slate-700 text-white px-4 py-3 rounded-l-xl focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:bg-slate-600 transition-all duration-300 flex-grow" required>
                        <button class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-slate-900 px-6 py-3 rounded-r-xl font-medium hover:from-yellow-500 hover:to-yellow-600 transition-all duration-300 shadow-md focus-ring" aria-label="Subscribe">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-slate-700 mt-12 pt-8 text-center text-slate-400">
                <p class="flex items-center justify-center space-x-2">
                    <i class="far fa-copyright"></i>
                    <span>2024 Hope Foundation. All rights reserved.</span>
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div x-data="{show:false}" x-init="show = window.scrollY > 400; window.addEventListener('scroll', () => show = window.scrollY > 400)" class="fixed bottom-6 right-6 z-50">
        <a href="#top" @click.prevent="window.scrollTo({top:0, behavior:'smooth'})" x-show="show" x-transition
           class="w-12 h-12 rounded-full bg-indigo-600 text-white shadow-lg flex items-center justify-center hover:bg-indigo-700 focus-ring" aria-label="Back to top">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>
