<x-layouts :title="$title" :title="$title">

    <!-- Clean Professional Header -->
    <section class="bg-white py-16 border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Blog</h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Insights, tutorials, and articles on technology and innovation
                </p>
            </div>

            <!-- Search and Filter -->
            <form action="{{ route('Blog') }}" method="GET" class="max-w-2xl mx-auto">
                <div class="flex gap-4">
                    <!-- Search Input -->
                    <div class="flex-1 relative">
                        <input type="text" 
                               name="search" 
                               value="{{ request('search') }}" 
                               placeholder="Search articles..." 
                               class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Category Dropdown -->
                    <select name="category" 
                            onchange="this.form.submit()"
                            class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white min-w-[180px]">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </section>

    <!-- Posts Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Posts Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <article class="bg-white border border-gray-200 hover:border-gray-300 transition-colors duration-200">
                        
                        <!-- Image -->
                        <div class="h-48 bg-gray-100 border-b border-gray-200">
                            <div class="h-full flex items-center justify-center text-gray-400">
                                
                                    <img src="{{ $post->img }}" alt="" class="w-full h-full object-cover">
                                
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Meta Info -->
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <span>{{ $post->categories->first()->name ?? 'General' }}</span>
                                <span class="mx-2">•</span>
                                <span>{{ $post->created_at->format('M d, Y') }}</span>
                            </div>

                            <!-- Title -->
                            <h2 class="text-lg font-semibold text-gray-900 mb-3 leading-tight">
                                <a href="/posts/{{ $post['slug'] }}" class="hover:text-blue-600 transition-colors">
                                    {{ $post['title'] }}
                                </a>
                            </h2>

                            <!-- Excerpt -->
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                {{ Str::limit($post['body'], 120) }}
                            </p>

                            <!-- Author and Actions -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center">
                                    <img src="{{$post->img}}"
                                         alt="{{ $post->author->name }}"
                                         class="w-6 h-6 rounded-full mr-2">
                                    <a href="/authors/{{ $post->author->id }}" class="text-sm text-gray-700 hover:text-blue-600">
                                        {{ $post->author->name }}
                                    </a>
                                </div>
                                
                                <div class="flex items-center text-gray-500 text-xs">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    {{ rand(10, 100) }}
                                </div>
                            </div>

                            <!-- Categories -->
                            <div class="mt-3 flex flex-wrap gap-2">
                                @foreach ($post->categories as $category)
                                    <a href="/categories/{{ $category->slug }}" class="text-xs text-blue-600 hover:text-blue-800">
                                        #{{ $category->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-white border-t border-gray-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Subscribe to Our Newsletter</h2>
            <p class="text-gray-600 mb-8">
                Get the latest articles and insights delivered to your inbox
            </p>
            <div class="flex max-w-md mx-auto">
                <input type="email" 
                       placeholder="Enter your email" 
                       class="flex-1 px-4 py-3 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <button class="px-6 py-3 bg-blue-600 text-white rounded-r-lg hover:bg-blue-700 transition-colors">
                    Subscribe
                </button>
            </div>
        </div>
    </section>

</x-layouts>