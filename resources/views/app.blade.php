<x-layouts>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center overflow-hidden bg-white">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60"
                xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ADD8E6"
                fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2" /%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]
                opacity-40"></div>
            <div
                class="absolute top-0 -left-4 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob">
            </div>
            <div
                class="absolute top-0 -right-4 w-72 h-72 bg-sky-200 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-8 left-20 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-left">
                    <div
                        class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 border border-blue-200 text-blue-700 text-sm font-medium mb-8">
                        <span class="w-2 h-2 bg-blue-600 rounded-full mr-2 animate-pulse"></span>
                        Selamat datang di masa depan blogging
                    </div>

                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                        <span class="text-gray-900">Cerita yang</span>
                        <span class="block bg-gradient-to-r from-blue-600 to-sky-600 bg-clip-text text-transparent">
                            Menginspirasi
                        </span>
                        <span class="text-gray-900">Dunia</span>
                    </h1>

                    <p class="text-xl text-gray-600 mb-8 max-w-xl leading-relaxed">
                        Jelajahi koleksi artikel berkualitas tinggi, wawasan mendalam, dan perspektif segar yang akan
                        mengubah cara Anda melihat dunia digital.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-12">
                        <a href="/posts"
                            class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white bg-gradient-to-r from-blue-600 to-sky-600 rounded-full hover:from-blue-700 hover:to-sky-700 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <span
                                class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-600 to-sky-600 rounded-full blur opacity-30 group-hover:opacity-50 transition-opacity"></span>
                            <span class="relative">Mulai Membaca</span>
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                        <a href="/categories"
                            class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-gray-700 border-2 border-gray-300 rounded-full hover:border-blue-500 hover:text-blue-600 transition-all duration-300 hover:bg-blue-50">
                            Jelajahi Kategori
                        </a>
                    </div>

                    <!-- Social Proof -->
                    <div class="flex items-center space-x-8">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">1K+</div>
                            <div class="text-sm text-gray-600">Artikel</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">25K+</div>
                            <div class="text-sm text-gray-600">Pembaca</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900">50+</div>
                            <div class="text-sm text-gray-600">Kategori</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Interactive Element -->
                <div class="relative lg:block hidden">
                    <div class="relative w-full h-96">
                        <!-- Floating Cards -->
                        <div
                            class="absolute top-0 right-0 w-64 h-32 bg-gradient-to-br from-blue-100 to-sky-100 backdrop-blur-sm border border-blue-200 rounded-2xl p-6 animate-float">
                            <div class="flex items-center mb-3">
                                <div class="w-3 h-3 bg-blue-600 rounded-full mr-2"></div>
                                <span class="text-gray-800 text-sm font-medium">Artikel Terbaru</span>
                            </div>
                            <p class="text-gray-600 text-sm">Teknologi AI yang mengubah cara kita bekerja...</p>
                        </div>

                        <div class="absolute bottom-0 left-0 w-64 h-32 bg-gradient-to-br from-sky-100 to-blue-100 backdrop-blur-sm border border-sky-200 rounded-2xl p-6 animate-float"
                            style="animation-delay: -2s;">
                            <div class="flex items-center mb-3">
                                <div class="w-3 h-3 bg-sky-600 rounded-full mr-2"></div>
                                <span class="text-gray-800 text-sm font-medium">Trending</span>
                            </div>
                            <p class="text-gray-600 text-sm">Panduan lengkap membangun startup...</p>
                        </div>

                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-40 bg-gradient-to-br from-blue-50 to-sky-50 backdrop-blur-sm border border-blue-200 rounded-2xl p-6 animate-float"
                            style="animation-delay: -1s;">
                            <div class="flex items-center mb-3">
                                <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                                <span class="text-gray-800 text-sm font-medium">Editor's Pick</span>
                            </div>
                            <p class="text-gray-600 text-sm">Masa depan web development dengan teknologi terdepan...</p>
                            <div class="mt-4 flex items-center text-xs text-gray-500">
                                <span>12 min read</span>
                                <span class="mx-2">•</span>
                                <span>2.5K views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Posts Section -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="100" height="100"
                viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath
                d="M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z"
                fill="%23000" fill-opacity="0.4" fill-rule="evenodd"/%3E%3C/svg%3E')]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div
                    class="inline-flex items-center px-4 py-2 rounded-full bg-purple-100 text-purple-700 text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    Artikel Pilihan
                </div>
                <h2 class="text-4xl md:text-6xl font-bold mb-6">
                    <span
                        class="bg-gradient-to-r from-gray-900 via-purple-900 to-gray-900 bg-clip-text text-transparent">
                        Cerita Terpilih
                    </span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Temukan artikel-artikel terbaik yang telah dipilih khusus untuk memberikan wawasan mendalam dan
                    perspektif baru
                </p>
            </div>

            <!-- Featured Posts Grid -->
            <div class="grid lg:grid-cols-12 gap-8 mb-16">
                <!-- Main Featured Post -->
                <article class="lg:col-span-8 group cursor-pointer">
                    <div
                        class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-purple-600 via-blue-600 to-purple-800 p-8 h-full min-h-[500px] flex flex-col justify-between transform transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="absolute top-6 right-6">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/20 text-white backdrop-blur-sm">
                                <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                                Featured
                            </span>
                        </div>

                        <div class="relative z-10">
                            <div class="mb-6">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-white/10 text-white/80 backdrop-blur-sm">
                                    Technology
                                </span>
                            </div>
                            <h3
                                class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight group-hover:text-yellow-300 transition-colors">
                                Masa Depan Teknologi Web: AI dan Machine Learning
                            </h3>
                            <p class="text-white/80 text-lg leading-relaxed mb-6">
                                Bagaimana kecerdasan buatan mengubah cara kita membangun dan berinteraksi dengan
                                aplikasi web modern. Eksplorasi mendalam tentang tren terbaru dan implementasi praktis.
                            </p>
                        </div>

                        <div class="relative z-10 flex items-center justify-between">
                            <div class="flex items-center space-x-4 text-white/70 text-sm">
                                <span>15 min read</span>
                                <span>•</span>
                                <span>3.2K views</span>
                                <span>•</span>
                                <span>2 hari lalu</span>
                            </div>
                            <div class="flex items-center text-white group-hover:text-yellow-300 transition-colors">
                                <span class="mr-2 font-medium">Baca Selengkapnya</span>
                                <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Side Posts -->
                <div class="lg:col-span-4 space-y-8">
                    <!-- Side Post 1 -->
                    <article class="group cursor-pointer">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-purple-200 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">

                                <div class="flex-1 min-w-0">
                                    <div class="mb-2">
                                        <span
                                            class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                            Startup
                                        </span>
                                    </div>
                                    <h3
                                        class="text-lg font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors leading-tight">
                                        Membangun Komunitas Digital yang Berkelanjutan
                                    </h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-3">
                                        Strategi praktis untuk menciptakan dan memelihara komunitas online yang aktif
                                        dan engaged.
                                    </p>
                                    <div class="flex items-center text-xs text-gray-500">
                                        <span>8 min read</span>
                                        <span class="mx-2">•</span>
                                        <span>1.5K views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Side Post 2 -->
                    <article class="group cursor-pointer">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-purple-200 transform hover:-translate-y-1">
                            <div class="flex items-start space-x-4">

                                <div class="flex-1 min-w-0">
                                    <div class="mb-2">
                                        <span
                                            class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-700">
                                            Design
                                        </span>
                                    </div>
                                    <h3
                                        class="text-lg font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors leading-tight">
                                        Inovasi dalam User Experience Design
                                    </h3>
                                    <p class="text-gray-600 text-sm leading-relaxed mb-3">
                                        Tren terbaru dalam desain UX yang mengutamakan aksesibilitas dan kepuasan
                                        pengguna.
                                    </p>
                                    <div class="flex items-center text-xs text-gray-500">
                                        <span>6 min read</span>
                                        <span class="mx-2">•</span>
                                        <span>2.1K views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- View All Posts Button -->
            <div class="text-center">
                <a href="/posts"
                    class="group inline-flex items-center px-8 py-4 text-lg font-semibold text-white bg-gradient-to-r from-purple-600 to-blue-600 rounded-full hover:from-purple-700 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                    <span>Lihat Semua Artikel</span>
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="relative py-24 overflow-hidden">
        <!-- Background with animated gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900">
            <div class="absolute inset-0 bg-black/20"></div>
            <!-- Animated background elements -->
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="absolute top-20 left-10 w-32 h-32 bg-purple-500/20 rounded-full blur-xl animate-pulse">
                </div>
                <div class="absolute bottom-20 right-10 w-40 h-40 bg-pink-500/20 rounded-full blur-xl animate-pulse"
                    style="animation-delay: 1s;"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-blue-500/10 rounded-full blur-2xl animate-pulse"
                    style="animation-delay: 2s;"></div>
            </div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-left">
                    <div
                        class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 border border-white/20 text-white/80 text-sm font-medium mb-8 backdrop-blur-sm">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        Newsletter Eksklusif
                    </div>

                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Jangan Lewatkan
                        <span
                            class="block bg-gradient-to-r from-yellow-400 via-pink-400 to-purple-400 bg-clip-text text-transparent">
                            Update Terbaru
                        </span>
                    </h2>

                    <p class="text-xl text-white/80 mb-8 leading-relaxed">
                        Dapatkan artikel terbaru, tips eksklusif, dan wawasan mendalam langsung ke inbox Anda.
                        Bergabunglah dengan 10,000+ pembaca yang sudah merasakan manfaatnya.
                    </p>

                    <!-- Benefits List -->
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center text-white/90">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Artikel eksklusif setiap minggu</span>
                        </div>
                        <div class="flex items-center text-white/90">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Tips dan trik dari para ahli</span>
                        </div>
                        <div class="flex items-center text-white/90">
                            <svg class="w-5 h-5 text-green-400 mr-3 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Akses prioritas ke konten premium</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Newsletter Form -->
                <div class="relative">
                    <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 shadow-2xl">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-white mb-2">Bergabung Sekarang</h3>
                            <p class="text-white/70">Gratis dan bisa berhenti kapan saja</p>
                        </div>

                        <form class="space-y-6">
                            <div class="relative">
                                <input type="email" placeholder="Masukkan email Anda"
                                    class="w-full px-6 py-4 bg-white/20 border border-white/30 rounded-2xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent backdrop-blur-sm transition-all duration-300">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-5 h-5 text-white/40" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative">
                                <input type="text" placeholder="Nama Anda (opsional)"
                                    class="w-full px-6 py-4 bg-white/20 border border-white/30 rounded-2xl text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent backdrop-blur-sm transition-all duration-300">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-5 h-5 text-white/40" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                            </div>

                            <button type="submit"
                                class="group w-full bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-600 text-white font-bold py-4 px-8 rounded-2xl hover:from-yellow-500 hover:via-pink-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl relative overflow-hidden">
                                <span
                                    class="absolute inset-0 w-full h-full bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-600 rounded-2xl blur opacity-30 group-hover:opacity-50 transition-opacity"></span>
                                <span class="relative flex items-center justify-center">
                                    Berlangganan Gratis
                                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </span>
                            </button>

                            <p class="text-center text-white/60 text-sm">
                                Dengan berlangganan, Anda menyetujui
                                <a href="#" class="text-yellow-400 hover:text-yellow-300 underline">kebijakan
                                    privasi</a> kami.
                            </p>
                        </form>

                        <!-- Social Proof -->
                        <div class="mt-8 pt-6 border-t border-white/20">
                            <div class="flex items-center justify-center space-x-4 text-white/70 text-sm">
                                <div class="flex items-center">
                                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                                    <span>10K+ subscribers</span>
                                </div>
                                <span>•</span>
                                <div class="flex items-center">
                                    <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                                    <span>Weekly updates</span>
                                </div>
                                <span>•</span>
                                <div class="flex items-center">
                                    <span class="w-2 h-2 bg-purple-400 rounded-full mr-2"></span>
                                    <span>No spam</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts>
