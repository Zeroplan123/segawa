@props(['takeline', 'title'])

<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>

<!-- Modern Single Post Layout -->
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">
    <!-- Navigation Bar -->
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-lg border-b border-gray-200/50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="/posts" class="group inline-flex items-center text-gray-600 hover:text-purple-600 transition-all duration-300">
                    <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span class="font-medium">Kembali ke Blog</span>
                </a>
                
                <!-- Article Actions -->
                <div class="flex items-center space-x-3">
                    <button class="p-2 rounded-full bg-gray-100 hover:bg-purple-100 text-gray-600 hover:text-purple-600 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                    </button>
                    <button class="p-2 rounded-full bg-gray-100 hover:bg-purple-100 text-gray-600 hover:text-purple-600 transition-all duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Article Header -->
    <header class="relative py-16 lg:py-24 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23000" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        </div>
        
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Categories -->
            <div class="flex flex-wrap gap-3 mb-8">
                @foreach ($post->categories as $category)
                <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-gradient-to-r from-purple-100 to-blue-100 text-purple-700 border border-purple-200/50">
                    <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                    {{ $category->name }}
                </span>
                @endforeach
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-8">
                <span class="bg-gradient-to-r from-gray-900 via-purple-900 to-gray-900 bg-clip-text text-transparent">
                    {{ $post['title'] }}
                </span>
            </h1>

            <!-- Meta Information -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6 mb-12">
                <div class="flex items-center space-x-4">
                    <img src="https://i.postimg.cc/kM1YJkkS/Whats-App-Image-2025-07-29-at-08-25-00-36ecb343.jpg"
                         alt="{{ $post->Author->name }}" 
                         class="w-14 h-14 rounded-full border-3 border-white shadow-lg">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ $post->Author->name }}</h3>
                        <div class="flex items-center text-gray-600 text-sm space-x-4">
                            <span>{{ $post->created_at->format('d M Y') }}</span>
                            <span>•</span>
                            <span>8 menit baca</span>
                            <span>•</span>
                            <span>{{ rand(100, 500) }} views</span>
                        </div>
                    </div>
                </div>
                
                <!-- Engagement Stats -->
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <span class="font-medium">{{ rand(40, 100) }}</span>
                    </div>
                    <div class="flex items-center space-x-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span class="font-medium">{{ rand(10, 30) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="grid lg:grid-cols-12 gap-12">
            <!-- Article Content -->
            <main class="lg:col-span-8">
                <article class="bg-white rounded-3xl shadow-xl border border-gray-200/50 overflow-hidden">
                    <!-- Featured Image Placeholder -->
                    <div class="relative h-80 bg-gradient-to-br from-purple-600 via-blue-600 to-indigo-700 flex items-center justify-center">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="relative text-center w-full h-full">
                                <img src="{{ $post->img }}" alt="" class="w-full h-full object-cover rounded-t-lg">
                        </div>
                    </div>

                    <!-- Article Content -->
                    <div class="p-8 md:p-12">
                        <!-- Article Body -->
                        <div class="prose prose-lg max-w-none">
                            <div class="text-lg leading-relaxed text-gray-800 space-y-6">
                                {!! nl2br(e($post['body'])) !!}
                            </div>
                        </div>

                        <!-- Article Actions -->
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-8">
                                    <button class="group flex items-center space-x-3 px-4 py-2 rounded-full bg-gray-50 hover:bg-red-50 text-gray-600 hover:text-red-500 transition-all duration-300">
                                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                        </svg>
                                        <span class="font-medium">{{ rand(40, 100) }}</span>
                                        <span class="text-sm">Suka</span>
                                    </button>
                                    <button class="group flex items-center space-x-3 px-4 py-2 rounded-full bg-gray-50 hover:bg-blue-50 text-gray-600 hover:text-blue-500 transition-all duration-300">
                                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                        <span class="font-medium">{{ rand(10, 30) }}</span>
                                        <span class="text-sm">Komentar</span>
                                    </button>
                                </div>
                                
                                <div class="flex items-center space-x-3">
                                    <button class="p-3 rounded-full bg-gray-100 hover:bg-purple-100 text-gray-600 hover:text-purple-600 transition-all duration-300 group">
                                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                        </svg>
                                    </button>
                                    <button class="p-3 rounded-full bg-gray-100 hover:bg-green-100 text-gray-600 hover:text-green-600 transition-all duration-300 group">
                                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Comments Section -->
                <div class="mt-12 bg-white rounded-3xl shadow-xl border border-gray-200/50 p-8 md:p-12">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-3xl font-bold text-gray-900">Diskusi <span class="text-purple-600">({{ rand(5, 25) }})</span></h2>
                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                            </svg>
                            <span>Diurutkan berdasarkan terbaru</span>
                        </div>
                    </div>
                    
                    <!-- Comment Form -->
                    <div class="mb-12 p-6 bg-gradient-to-br from-gray-50 to-purple-50/30 rounded-2xl border border-gray-200/50">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Bergabung dalam Diskusi</h3>
                        <form class="space-y-4">
                            <div class="relative">
                                <textarea placeholder="Bagikan pemikiran Anda..." 
                                          class="w-full px-4 py-4 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent resize-none h-32 bg-white/80 backdrop-blur-sm transition-all duration-300"></textarea>
                                <div class="absolute bottom-4 right-4 flex items-center space-x-2 text-gray-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <span>💡 Berikan komentar yang membangun</span>
                                </div>
                                <button class="px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white font-semibold rounded-full hover:from-purple-700 hover:to-blue-700 transition-all duration-300 transform hover:scale-105">
                                    Kirim Komentar
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Comments List -->
                    <div class="space-y-6">
                        <!-- Comment 1 -->
                        <div class="group">
                            <div class="flex space-x-4 p-6 rounded-2xl hover:bg-gray-50/50 transition-all duration-300">
                                <img src="https://i.postimg.cc/kM1YJkkS/Whats-App-Image-2025-07-29-at-08-25-00-36ecb343.jpg" 
                                     alt="Commenter" class="w-12 h-12 rounded-full border-2 border-gray-200 shadow-sm">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center space-x-3">
                                            <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-700">
                                                Top Contributor
                                            </span>
                                        </div>
                                        <span class="text-sm text-gray-500">2 jam lalu</span>
                                    </div>
                                    <p class="text-gray-700 leading-relaxed mb-4">
                                        Artikel yang sangat menarik! Insight tentang tren desain web modern benar-benar tepat sasaran. Terima kasih telah berbagi konten yang sangat berharga seperti ini. 🚀
                                    </p>
                                    <div class="flex items-center space-x-6">
                                        <button class="flex items-center space-x-2 text-gray-500 hover:text-purple-600 transition-colors group">
                                            <svg class="w-4 h-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                            </svg>
                                            <span class="text-sm font-medium">12</span>
                                        </button>
                                        <button class="text-gray-500 hover:text-purple-600 transition-colors text-sm font-medium">Balas</button>
                                        <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment 2 -->
                        <div class="group">
                            <div class="flex space-x-4 p-6 rounded-2xl hover:bg-gray-50/50 transition-all duration-300">
                                <img src="https://i.postimg.cc/kM1YJkkS/Whats-App-Image-2025-07-29-at-08-25-00-36ecb343.jpg" 
                                     alt="Commenter" class="w-12 h-12 rounded-full border-2 border-gray-200 shadow-sm">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center space-x-3">
                                            <h4 class="font-semibold text-gray-900">Mike Chen</h4>
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">
                                                Developer
                                            </span>
                                        </div>
                                        <span class="text-sm text-gray-500">5 jam lalu</span>
                                    </div>
                                    <p class="text-gray-700 leading-relaxed mb-4">
                                        Artikel yang luar biasa! Saya sudah menerapkan beberapa teknik ini dalam proyek-proyek saya dan hasilnya sangat menakjubkan. Menantikan konten seperti ini lagi. 💯
                                    </p>
                                    <div class="flex items-center space-x-6">
                                        <button class="flex items-center space-x-2 text-gray-500 hover:text-purple-600 transition-colors group">
                                            <svg class="w-4 h-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                            </svg>
                                            <span class="text-sm font-medium">8</span>
                                        </button>
                                        <button class="text-gray-500 hover:text-purple-600 transition-colors text-sm font-medium">Balas</button>
                                        <button class="text-gray-400 hover:text-gray-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Load More Comments -->
                    <div class="text-center mt-8">
                        <button class="px-8 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-full hover:border-purple-500 hover:text-purple-600 transition-all duration-300 hover:bg-purple-50">
                            Muat Komentar Lainnya
                        </button>
                    </div>
                </div>
            </main>

            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Author Profile -->
                <div class="bg-white rounded-3xl shadow-xl border border-gray-200/50 p-8">
                    <div class="text-center">
                        <div class="relative inline-block mb-6">
                            <img src="https://i.postimg.cc/kM1YJkkS/Whats-App-Image-2025-07-29-at-08-25-00-36ecb343.jpg" 
                                 alt="{{ $post->Author->name }}" class="w-20 h-20 rounded-full mx-auto border-4 border-white shadow-lg">
                            <div class="absolute -bottom-2 -right-2 w-6 h-6 bg-green-500 border-2 border-white rounded-full"></div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $post->Author->name }}</h3>
                        <p class="text-purple-600 text-sm font-medium mb-4">Senior Writer & Tech Enthusiast</p>
                        <p class="text-gray-600 mb-6 leading-relaxed text-sm">
                            Penulis berpengalaman yang bersemangat berbagi wawasan tentang inovasi digital dan desain masa depan.
                        </p>
                        
                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-4 mb-6 p-4 bg-gray-50 rounded-2xl">
                            <div class="text-center">
                                <div class="text-lg font-bold text-gray-900">{{ rand(50, 150) }}</div>
                                <div class="text-xs text-gray-500">Artikel</div>
                            </div>
                            <div class="text-center">
                                <div class="text-lg font-bold text-gray-900">{{ rand(1000, 5000) }}</div>
                                <div class="text-xs text-gray-500">Followers</div>
                            </div>
                            <div class="text-center">
                                <div class="text-lg font-bold text-gray-900">{{ rand(10, 50) }}K</div>
                                <div class="text-xs text-gray-500">Views</div>
                            </div>
                        </div>

                        <button class="w-full px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white font-semibold rounded-full hover:from-purple-700 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 mb-4">
                            Ikuti Penulis
                        </button>
                        
                        <!-- Social Links -->
                        <div class="flex justify-center space-x-3">
                            <button class="p-2 rounded-full bg-gray-100 hover:bg-blue-100 text-gray-600 hover:text-blue-600 transition-all duration-300">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </button>
                            <button class="p-2 rounded-full bg-gray-100 hover:bg-blue-100 text-gray-600 hover:text-blue-600 transition-all duration-300">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </button>
                            <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-800 text-gray-600 hover:text-white transition-all duration-300">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Table of Contents -->
                <div class="bg-white rounded-3xl shadow-xl border border-gray-200/50 p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                        </svg>
                        Daftar Isi
                    </h3>
                    <nav class="space-y-3">
                        <a href="#introduction" class="block text-gray-600 hover:text-purple-600 transition-colors py-2 px-3 rounded-lg hover:bg-purple-50 text-sm">
                            1. Pengenalan
                        </a>
                        <a href="#main-content" class="block text-gray-600 hover:text-purple-600 transition-colors py-2 px-3 rounded-lg hover:bg-purple-50 text-sm">
                            2. Konten Utama
                        </a>
                        <a href="#implementation" class="block text-gray-600 hover:text-purple-600 transition-colors py-2 px-3 rounded-lg hover:bg-purple-50 text-sm">
                            3. Implementasi
                        </a>
                        <a href="#conclusion" class="block text-gray-600 hover:text-purple-600 transition-colors py-2 px-3 rounded-lg hover:bg-purple-50 text-sm">
                            4. Kesimpulan
                        </a>
                    </nav>
                </div>

                <!-- Related Articles -->
                <div class="bg-white rounded-3xl shadow-xl border border-gray-200/50 p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                        </svg>
                        Artikel Terkait
                    </h3>
                    <div class="space-y-4">
                        <article class="group cursor-pointer p-4 rounded-2xl hover:bg-gray-50 transition-all duration-300">
                            <div class="flex space-x-4">
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-gray-900 group-hover:text-purple-600 transition-colors mb-1 text-sm leading-tight">
                                        Teknik CSS Modern untuk Developer
                                    </h4>
                                    <p class="text-xs text-gray-500 mb-2">5 menit baca</p>
                                    <div class="flex items-center text-xs text-gray-400">
                                        <span>{{ rand(100, 500) }} views</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                        <article class="group cursor-pointer p-4 rounded-2xl hover:bg-gray-50 transition-all duration-300">
                            <div class="flex space-x-4">
                                
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-gray-900 group-hover:text-purple-600 transition-colors mb-1 text-sm leading-tight">
                                        Desain UX yang Mengutamakan Pengguna
                                    </h4>
                                    <p class="text-xs text-gray-500 mb-2">7 menit baca</p>
                                    <div class="flex items-center text-xs text-gray-400">
                                        <span>{{ rand(100, 500) }} views</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <a href="/posts" class="text-purple-600 hover:text-purple-700 font-medium text-sm flex items-center group">
                            Lihat semua artikel
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Newsletter CTA -->
                <div class="bg-gradient-to-br from-purple-600 via-blue-600 to-indigo-700 rounded-3xl shadow-xl p-8 text-white text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Tetap Update!</h3>
                        <p class="mb-6 text-white/80 text-sm leading-relaxed">
                            Dapatkan artikel terbaru dan wawasan eksklusif langsung ke email Anda
                        </p>
                        <div class="space-y-3">
                            <input type="email" placeholder="Masukkan email Anda" 
                                   class="w-full px-4 py-3 rounded-full border-0 focus:outline-none focus:ring-2 focus:ring-white/50 text-gray-900 placeholder-gray-500">
                            <button class="bg-white text-purple-600 w-full py-3 rounded-full font-semibold hover:bg-white/90 transition-all duration-300 transform hover:scale-105">
                                Berlangganan Gratis
                            </button>
                        </div>
                        <p class="text-white/60 text-xs mt-3">Gratis dan bisa berhenti kapan saja</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

</x-layouts>