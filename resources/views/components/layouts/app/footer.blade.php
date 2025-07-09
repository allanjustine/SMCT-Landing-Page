<footer class="bg-dark text-white py-12 px-[5%]">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
        <div data-aos="fade-up" data-aos-duration="1200">
            <h3 class="text-2xl font-bold mb-4 flex items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="Map Icon" class="w-auto h-8">
            </h3>
            <p class="text-gray-400 mb-4">
                SMCT Group of Companies
            </p>
            <div class="flex gap-4">
                <a href="#"
                    class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 hover:-translate-y-2 text-xl transition-all duration-300 ease-in-out">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#"
                    class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 hover:-translate-y-2 text-xl transition-all duration-300 ease-in-out">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#"
                    class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 hover:-translate-y-2 text-xl transition-all duration-300 ease-in-out">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#"
                    class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 hover:-translate-y-2 text-xl transition-all duration-300 ease-in-out">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div data-aos="fade-up" data-aos-duration="1200">
            <h4 class="text-lg font-bold mb-4">Quick Links</h4>
            <ul class="space-y-2">
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a href="{{ route('home') }}"
                        wire:navigate
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">Home</a>
                </li>
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a
                        href="{{ route('location') }}" wire:navigate
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">Smct
                        Map</a>
                </li>
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a href="#"
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">Services</a>
                </li>
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a href="{{ route('about') }}"
                        wire:navigate
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">About
                        Us</a></li>
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a href="#"
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">Contact</a>
                </li>
            </ul>
        </div>

        <div data-aos="fade-up" data-aos-duration="1200">
            <h4 class="text-lg font-bold mb-4">Services</h4>
            <ul class="space-y-2">
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a href="#"
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">Vehicle
                        Sales</a>
                </li>
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a href="#"
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">Financing</a>
                </li>
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a href="#"
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">Maintenance</a>
                </li>
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a href="#"
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">Warranty</a>
                </li>
                <li class="hover:translate-x-2 transition-all duration-300 ease-in-out"><a href="#"
                        class="dark:text-gray-400 dark:hover:text-white text-gray-600 hover:text-gray-900 transition-colors duration-300">Customization</a>
                </li>
            </ul>
        </div>

        <div data-aos="fade-up" data-aos-duration="1200">
            <h4 class="text-lg font-bold mb-4">Contact</h4>
            <ul class="space-y-2 text-gray-400">
                <li class="flex items-start gap-2">
                    <i class="fas fa-map-marker-alt mt-1 text-secondary"></i>
                    <span>J.A Clarin Tagbilaran Bohol</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-phone-alt text-secondary"></i>
                    <span>09123456789</span>
                </li>
                <li class="flex items-center gap-2">
                    <i class="fas fa-envelope text-secondary"></i>
                    <span>info@strongmotocentrum.com</span>
                </li>
            </ul>
        </div>
    </div>

    <div data-aos="fade-down" data-aos-duration="1200"
        class="border-t border-gray-300 mt-12 mb-4 py-4 text-center text-gray-500">
        <p>&copy; {{ now()->format('Y') }} SMCT Group of Companies. All rights reserved.</p>
    </div>
</footer>
