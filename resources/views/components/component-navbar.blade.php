@vite('resources/css/app.css')

<nav x-data="{ isOpen: false }" class="bg-white/95 backdrop-blur-md border-b border-[#ADD8E6]/20 sticky top-0 z-50 transition-all duration-300">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center">
                <div class="shrink-0">
                    <a href="/" class="flex items-center space-x-3 group">
                        <div class=" w-10 h-10 rounded-xl flex items-center justify-center ">
                          <img src="{{ asset('assets/blog.png') }}" alt="" class=" object-contain group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="hidden sm:block">
                            <h1 class="text-2xl font-bold text-gradient">BlogGo</h1>
                            <p class="text-xs text-[#001F54]/60 -mt-1">New Era Blogging</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="flex items-center space-x-8">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/posts" :active="request()->is('posts*')">Blog</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
            </div>

            <!-- CTA Button & Search -->
            <div class="hidden md:flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search..." 
                           class="w-64 px-4 py-2 pl-10 text-sm bg-[#ADD8E6]/10 border border-[#ADD8E6]/30 rounded-full focus:outline-none focus:ring-2 focus:ring-[#ADD8E6] focus:border-transparent transition-all duration-300">
                    <svg class="absolute left-3 top-2.5 w-4 h-4 text-[#001F54]/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <button class="btn-primary">
                    Start Writing
                </button>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="isOpen = !isOpen" 
                        class="relative inline-flex items-center justify-center rounded-xl bg-[#ADD8E6]/10 p-2 text-[#001F54] hover:bg-[#ADD8E6]/20 focus:outline-none focus:ring-2 focus:ring-[#ADD8E6] transition-all duration-300">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" :class="{ 'hidden': isOpen, 'block': !isOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" :class="{ 'block': isOpen, 'hidden': !isOpen }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform scale-95"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-95"
         class="md:hidden bg-white/95 backdrop-blur-md border-t border-[#ADD8E6]/20">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <x-nav-link-mobile href="/" :active="request()->is('/')">Home</x-nav-link-mobile>
            <x-nav-link-mobile href="/posts" :active="request()->is('posts*')">Blog</x-nav-link-mobile>
            <x-nav-link-mobile href="/about" :active="request()->is('about')">About</x-nav-link-mobile>
            <x-nav-link-mobile href="/contact" :active="request()->is('contact')">Contact</x-nav-link-mobile>
        </div>
        <div class="pt-4 pb-3 border-t border-[#ADD8E6]/20">
            <div class="px-4 space-y-3">
                <div class="relative">
                    <input type="text" placeholder="Search..." 
                           class="w-full px-4 py-2 pl-10 text-sm bg-[#ADD8E6]/10 border border-[#ADD8E6]/30 rounded-full focus:outline-none focus:ring-2 focus:ring-[#ADD8E6] focus:border-transparent">
                    <svg class="absolute left-3 top-2.5 w-4 h-4 text-[#001F54]/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <button class="btn-primary w-full">
                    Start Writing
                </button>
            </div>
        </div>
    </div>
</nav>
