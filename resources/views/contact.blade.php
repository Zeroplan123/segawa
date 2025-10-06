<x-layouts :title="'Contact'">

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-50 via-white to-purple-50 py-20 lg:py-28 overflow-hidden">
        <!-- Subtle background pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 right-10 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute bottom-10 left-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse animation-delay-2000"></div>
        </div>
        
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <div class="inline-block mb-8">
                    <h1 class="text-5xl md:text-6xl font-extrabold bg-gradient-to-r from-gray-900 via-purple-800 to-gray-900 bg-clip-text text-transparent mb-6 leading-tight">
                        Hubungi BlogGo
                    </h1>
                    <div class="w-32 h-1.5 bg-gradient-to-r from-purple-600 via-blue-600 to-sky-600 mx-auto rounded-full shadow-lg"></div>
                </div>
                <p class="text-xl md:text-2xl text-gray-700 max-w-4xl mx-auto leading-relaxed font-light">
                    Punya pertanyaan seputar <span class="font-semibold text-purple-700">BlogGo</span>, butuh bantuan dengan penggunaan website, atau ingin berkolaborasi? 
                    Saya siap membantu Anda mencapai tujuan development yang optimal.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Cards -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-gray-900 via-purple-800 to-gray-900 bg-clip-text text-transparent mb-6">Kontak & Social Media</h2>
                <div class="w-32 h-1 bg-gradient-to-r from-purple-600 via-blue-600 to-sky-600 mx-auto rounded-full mb-8"></div>
                <p class="text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">Terhubung dengan saya melalui berbagai platform berikut</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Email Card -->
                <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 text-center mb-3">Email</h3>
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">Untuk pertanyaan teknis & kolaborasi</p>
                    <a href="mailto:ganifahri07@gmail.com" class="block w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white text-center py-3 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                        ganifahri07@gmail.com
                    </a>
                </div>
                
                <!-- LinkedIn Card -->
                <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 text-center mb-3">LinkedIn</h3>
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">Networking profesional</p>
                    <a href="https://linkedin.com/in/fahri-gani-05b368308" target="_blank" class="block w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white text-center py-3 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                        Connect
                    </a>
                </div>

                <!-- GitHub Card -->
                <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-gray-700 to-gray-800 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.301 3.438 9.8 8.205 11.387.6-.548.918-1.333.918-2.178 0-.317-.012-1.158-.012-2.204-3.338.726-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.085 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112.017 6c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801 1.14C20.566 21.797 24 17.3 24 11.987 24 5.367 18.635.001 12.017.001z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 text-center mb-3">GitHub</h3>
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">Repository & open source</p>
                    <a href="https://github.com/Zeroplan123" target="_blank" class="block w-full bg-gradient-to-r from-gray-700 to-gray-800 text-white text-center py-3 rounded-xl hover:from-gray-800 hover:to-gray-900 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                        Follow
                    </a>
                </div>

                <!-- Twitter Card -->
                <div class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-gray-100">
                    <div class="w-20 h-20 bg-gradient-to-br from-sky-500 to-sky-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 text-center mb-3">Twitter</h3>
                    <p class="text-gray-600 text-center mb-6 leading-relaxed">Updates & tech insights</p>
                    <a href="https://x.com/prabowo" target="_blank" class="block w-full bg-gradient-to-r from-sky-500 to-sky-600 text-white text-center py-3 rounded-xl hover:from-sky-600 hover:to-sky-700 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                        Follow
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Info Section -->
    <section class="py-20 bg-gradient-to-br from-purple-50 via-white to-blue-50 relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-64 h-64 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl"></div>
            <div class="absolute bottom-20 right-20 w-64 h-64 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl"></div>
        </div>
        
        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-white/90 to-white/70 backdrop-blur-sm rounded-3xl p-12 md:p-16 text-center shadow-2xl border border-white/50">
                <div class="mb-8">
                    <h3 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-purple-800 via-blue-700 to-purple-800 bg-clip-text text-transparent mb-6">Siap Membantu Proyek Anda</h3>
                    <div class="w-24 h-1 bg-gradient-to-r from-purple-600 to-blue-600 mx-auto rounded-full"></div>
                </div>
                <p class="text-xl text-gray-700 mb-10 max-w-3xl mx-auto leading-relaxed">
                    Mari berkolaborasi untuk mewujudkan ide-ide kreatif Anda menjadi solusi digital yang luar biasa
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="mailto:ganifahri07@gmail.com" class="group bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-2xl font-bold hover:from-purple-700 hover:to-blue-700 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                        <span class="flex items-center justify-center gap-2">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            Mulai Diskusi
                        </span>
                    </a>
                    <a href="/about" class="group border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-2xl font-bold hover:bg-purple-600 hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <span class="flex items-center justify-center gap-2">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Pelajari Lebih Lanjut
                        </span>
                    </a>
                </div>
            </div>
        </div>
</x-layouts>