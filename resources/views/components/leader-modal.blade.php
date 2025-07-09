<div x-show="isOpen" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed z-50 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-screen h-screen bg-gray-900/40 dark:bg-black/80">
    <div class="grid place-content-center h-full">
        <ul class="space-y-4" @click.away="isOpen = false">
            <li
                class="flex items-start gap-4 p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group hover:bg-gradient-to-r from-blue-50 to-indigo-50 dark:hover:from-gray-700 dark:hover:to-gray-800">
                <div
                    class="flex-shrink-0 p-3 bg-blue-100 dark:bg-blue-900/50 rounded-lg group-hover:bg-blue-200 dark:group-hover:bg-blue-900 transition-colors">
                    <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">L</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">Loyalty</h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-1">We are dedicated to our company,
                        customers,
                        and co-workers.</p>
                </div>
            </li>
            <li
                class="flex items-start gap-4 p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group hover:bg-gradient-to-r from-purple-50 to-indigo-50 dark:hover:from-gray-700 dark:hover:to-gray-800">
                <div
                    class="flex-shrink-0 p-3 bg-purple-100 dark:bg-purple-900/50 rounded-lg group-hover:bg-purple-200 dark:group-hover:bg-purple-900 transition-colors">
                    <span class="text-2xl font-bold text-purple-600 dark:text-purple-400">E</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">Expertise</h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-1">We are professionals on the job and in
                        our
                        field.</p>
                </div>
            </li>
            <li
                class="flex items-start gap-4 p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group hover:bg-gradient-to-r from-green-50 to-teal-50 dark:hover:from-gray-700 dark:hover:to-gray-800">
                <div
                    class="flex-shrink-0 p-3 bg-green-100 dark:bg-green-900/50 rounded-lg group-hover:bg-green-200 dark:group-hover:bg-green-900 transition-colors">
                    <span class="text-2xl font-bold text-green-600 dark:text-green-400">A</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">Accountability</h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-1">We take ownership of our work.</p>
                </div>
            </li>
            <li
                class="flex items-start gap-4 p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group hover:bg-gradient-to-r from-amber-50 to-yellow-50 dark:hover:from-gray-700 dark:hover:to-gray-800">
                <div
                    class="flex-shrink-0 p-3 bg-amber-100 dark:bg-amber-900/50 rounded-lg group-hover:bg-amber-200 dark:group-hover:bg-amber-900 transition-colors">
                    <span class="text-2xl font-bold text-amber-600 dark:text-amber-400">D</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">Diligence</h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-1">We work hard and persevere.</p>
                </div>
            </li>
            <li
                class="flex items-start gap-4 p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group hover:bg-gradient-to-r from-red-50 to-pink-50 dark:hover:from-gray-700 dark:hover:to-gray-800">
                <div
                    class="flex-shrink-0 p-3 bg-red-100 dark:bg-red-900/50 rounded-lg group-hover:bg-red-200 dark:group-hover:bg-red-900 transition-colors">
                    <span class="text-2xl font-bold text-red-600 dark:text-red-400">E</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">Efficiency</h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-1">We make the best use of our time and
                        energy
                        in the service of our customers.</p>
                </div>
            </li>
            <li
                class="flex items-start gap-4 p-4 bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group hover:bg-gradient-to-r from-indigo-50 to-blue-50 dark:hover:from-gray-700 dark:hover:to-gray-800">
                <div
                    class="flex-shrink-0 p-3 bg-indigo-100 dark:bg-indigo-900/50 rounded-lg group-hover:bg-indigo-200 dark:group-hover:bg-indigo-900 transition-colors">
                    <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">R</span>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">Respect</h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-1">We hold our company, co-workers,
                        customers,
                        and partners in high regard.</p>
                </div>
            </li>
        </ul>
    </div>
</div>
