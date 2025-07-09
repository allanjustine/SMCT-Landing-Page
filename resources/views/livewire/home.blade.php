<div>
    <div class="font-poppins bg-light text-dark transition-appearance duration-400 ease-in-out">

        <!-- Hero Section -->
        <section class="min-h-screen flex items-center px-[5%] relative overflow-hidden pt-20">
            <div class="max-w-2xl z-10 animate-fade-in">
                <h1 class="text-5xl font-extrabold md:text-6xl mb-6 leading-tight" data-aos="fade-down"
                    data-aos-duration="1200">
                    <span class="gradient-text">Welcome to</span><br>
                    SMCT Group of Companies
                </h1>
                <p class="text-gray dark:text-gray-400 text-lg mb-8 leading-relaxed" data-aos="zoom-in"
                    data-aos-duration="1200">
                    SMCT Group of Companies delivers exceptional vehicles and services with uncompromising quality and
                    innovation
                    across
                    the global automotive market.
                </p>
                <div class="flex flex-wrap gap-4" data-aos="fade-up" data-aos-duration="1200">
                    <a href="#our-websites"
                        class="px-8 py-3 bg-primary text-gray-900 dark:text-white hover:text-gray-800 rounded-full font-semibold transition-all duration-300 hover:bg-transparent hover:text-primary border-2 border-primary dark:hover:text-white">Explore
                        Websites</a>
                    <a href="#"
                        class="px-8 py-3 bg-transparent text-primary border-2 border-primary rounded-full font-semibold transition-all duration-300 hover:bg-primary hover:text-white dark:text-white">Learn
                        More</a>
                </div>
            </div>

            <img data-aos="zoom-in" data-aos-duration="1200" src="{{ asset('images/smct-building.jpg') }}"
                alt="SMCT Building"
                class="hidden lg:block absolute right-[5%] top-10/12 -translate-y-[36.5%] w-1/2 max-w-4xl h-auto rounded-2xl shadow-2xl animate-float pointer-events-none
           filter brightness-95 contrast-90 saturate-90 dark:brightness-90 dark:contrast-95 dark:saturate-80
           transition-all duration-300">

    </div>
    </section>

    <livewire:our-website />

    <livewire:e-commerce-website />

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-primary-dark dark:text-white text-black px-[5%]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6" data-aos="fade-down" data-aos-duration="1200">Ready to Experience
                Automotive Excellence?</h2>
            <p class="text-xl mb-8 opacity-90" data-aos="fade-down" data-aos-duration="1200">
                Contact our specialists today to find your perfect vehicle or schedule a service appointment.
            </p>
            <div class="flex flex-wrap justify-center gap-4" data-aos="fade-down" data-aos-duration="1200">
                <a href="#"
                    class="px-8 py-3 dark:bg-white bg-gray-200 text-primary rounded-full font-semibold text-gray-700 dark:hover:bg-gray-100 hover:bg-gray-300 transition-colors duration-300">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now
                </a>
                <a href="#"
                    class="px-8 py-3 bg-transparent border-2 border-gray-300 hover:bg-gray-200 dark:border-white dark:text-white text-black rounded-full font-semibold dark:hover:bg-white hover:text-gray-800 transition-colors duration-300">
                    <i class="fas fa-envelope mr-2"></i> Email Us
                </a>
            </div>
        </div>
    </section>

    <style>
        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(90deg, #2563eb, #f59e0b);
        }

        .card-hover-effect:hover .card-overlay {
            opacity: 1;
        }

        .card-hover-effect:hover {
            transform: translateY(-10px);
        }
    </style>
</div>
</div>
