<div>
    <div class="p-10" x-data="{ isOpen: false }">
        <section class="py-20 px-6 text-center group">
            <div class="relative group w-fit flex justify-center items-center mx-auto">
                <h1 class="text-5xl font-bold text-gray-900 dark:text-white mb-4 animate-fade-in" data-aos="fade-up"
                    data-aos-duration="1200">

                    Our <span class="text-primary">Purpose</span>
                </h1>
                <span
                    class="w-0 group-hover:w-full transition-all duration-500 ease-in-out absolute border-b-3 mt-7 border-blue-500"></span>
            </div>
            <div class="px-10" data-aos="fade-up" data-aos-duration="1200">
                <ul class="space-y-2">
                    <li>
                        Strong Moto Centrum, Inc. operates as a multi-brand motorcycle, appliances, and tri-wheeler
                        dealership,
                        aiming to be one of the leading dealers in the Philippines.
                    </li>
                    <li>
                        Our branches in major cities like Cavite, Laguna, Cebu, Davao, Cagayan de Oro, Zamboanga,
                        and
                        other
                        areas in
                        Luzon, Visayas, and Mindanao are open to cater to our customer’s needs. With over 30
                        branches
                        nationwide, we
                        are always ready to give you the best motorcycles and appliances that will suit your needs.
                    </li>
                    <li>
                        At present, we are increasing our efforts in expanding to reach a larger number of customers
                        to
                        help
                        bring
                        comfort to their homes, as we continue to offer quality service and improve customer
                        experience.
                    </li>
                </ul>
            </div>
        </section>

        <div class="w-full mx-auto px-6 grid md:grid-cols-3 gap-8 mb-20">
            <div data-aos="zoom-in" data-aos-duration="1200"
                class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg hover:shadow-xl duration-300 border-l-4 border-primary hover:scale-105 transition-all ease-in-out">
                <div class="text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Vision</h2>
                <p class="text-gray-600 dark:text-gray-300">
                    To become the leader in the Philippine vehicle and appliance industry. We believe in improving the
                    quality of life of Filipinos both inside and outside their homes.
                </p>
            </div>

            <div data-aos="zoom-in" data-aos-duration="1200"
                class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg hover:shadow-xl duration-300 border-l-4 border-primary hover:scale-105 transition-all ease-in-out">
                <div class="text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Mission</h2>
                <p class="text-gray-600 dark:text-gray-300">
                    We offer quality technology and excellent services that are affordable and accessible to all
                    Filipinos.
                </p>
            </div>

            <div data-aos="zoom-in" data-aos-duration="1200"
                class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg hover:shadow-xl duration-300 border-l-4 border-primary hover:scale-105 transition-all ease-in-out">
                <div class="text-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Values</h2>
                Every interaction with our customers, partners, and employees is guided by being a <button
                    type="button" x-on:click="isOpen = true"><span
                        class="font-bold underline cursor-pointer">L.E.A.D.E.R</span></button> in mind: <button
                    type="button" x-on:click="isOpen = true" class="text-lg text-pink-400 cursor-pointer"><i
                        class="fas fa-brain"></i></button>
            </div>
        </div>

        @include('components.leader-modal')

        <section class="py-16 bg-gradient-to-r from-primary to-blue-600 text-center text-white" data-aos="fade-down"
            data-aos-duration="1200">
            <h2 class="text-3xl font-bold mb-6">Ready to Transform Your Business?</h2>
            <a href="{{ route('home') }}" wire:navigate
                class="px-8 py-3 dark:bg-white bg-gray-200 hover:bg-gray-300 text-gray-800 dark:text-gray-800 font-bold rounded-lg dark:hover:bg-gray-100 transition">
                Get Started
            </a>
        </section>
    </div>
</div>
