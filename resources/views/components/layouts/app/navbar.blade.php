<div id="navbar"
    class="fixed top-0 left-0 w-full z-50 py-6 px-[5%] flex justify-between items-center bg-light/90 backdrop-blur-md shadow-lg transition-appearance duration-400 ease-in-out dark:bg-dark/90 dark:shadow-xl">
    <a href="{{ route('home') }}" class="flex items-center gap-2 text-3xl font-bold text-primary w-24 h-10">
        <img src="{{ asset('images/logo.png') }}" class="w-full" alt="SMCT Logo">
    </a>

    <nav class="hidden md:flex gap-8">
        <a href="{{ route('home') }}" wire:navigate
            class="text-dark dark:text-light font-medium relative after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Home</a>
        <a href="{{ route('location') }}" wire:navigate
            class="text-dark dark:text-light font-medium relative after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Smct
            Map</a>
        <div class="relative group inline-block">
            <a href="#"
                class="flex gap-2 items-center text-dark dark:text-light font-medium relative
            after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5
            after:bg-primary after:transition-all after:duration-300 hover:after:w-full">
                <span>Services</span>
                <i class="fas fa-angle-right group-hover:rotate-90 transition-all duration-300 ease-in-out"></i>
            </a>
            <div
                class="absolute left-0 top-full mt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out bg-gray-200 dark:bg-gray-800 w-52 z-10 rounded shadow-lg">
                <ul class="space-y-2">
                    <li class="hover:bg-gray-300 dark:hover:bg-gray-700 px-5 py-2"><a href="#" wire:navigate
                            class="text-dark dark:text-light font-medium">Service 1</a></li>
                    <li class="hover:bg-gray-300 dark:hover:bg-gray-700 px-5 py-2"><a href="#" wire:navigate
                            class="text-dark dark:text-light font-medium">Service 2</a></li>
                    <li class="hover:bg-gray-300 dark:hover:bg-gray-700 px-5 py-2"><a href="#" wire:navigate
                            class="text-dark dark:text-light font-medium">Service 3</a></li>
                    <li class="hover:bg-gray-300 dark:hover:bg-gray-700 px-5 py-2"><a href="#" wire:navigate
                            class="text-dark dark:text-light font-medium">Service 4</a></li>
                    <li class="hover:bg-gray-300 dark:hover:bg-gray-700 px-5 py-2"><a href="#" wire:navigate
                            class="text-dark dark:text-light font-medium">Service 5</a></li>
                </ul>
            </div>
        </div>
        <a href="{{ route('about') }}" wire:navigate
            class="text-dark dark:text-light font-medium relative after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">About</a>
        <a href="#"
            class="text-dark dark:text-light font-medium relative after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Contact</a>
        {{-- <a href="/login" wire:navigate
            class="text-dark dark:text-light font-medium relative after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Login</a>
        <a href="/register" wire:navigate
            class="text-dark dark:text-light font-medium relative after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">Register</a> --}}
    </nav>
</div>
