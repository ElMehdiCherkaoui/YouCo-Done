@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-10">
                <h1 class="text-5xl font-bold text-gray-900 mb-3">Discover Restaurants</h1>
                <p class="text-xl text-gray-600">Find your perfect dining experience</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-10">
                <form class="space-y-6">
                    <input type="text" placeholder="Search by name, cuisine, or location..."
                        class="w-full pl-4 pr-4 py-4 border border-gray-300 rounded-xl text-lg">

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                            <option>All Cuisines</option>
                            <option>Italian</option>
                            <option>Japanese</option>
                            <option>Mexican</option>
                        </select>

                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                            <option>All Locations</option>
                            <option>Downtown</option>
                            <option>Midtown</option>
                        </select>

                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                            <option>Any Price</option>
                            <option>$</option>
                            <option>$$</option>
                            <option>$$$</option>
                        </select>

                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                            <option>Most Popular</option>
                            <option>Highest Rated</option>
                            <option>Name (A-Z)</option>
                        </select>
                    </div>

                    <button class="px-8 py-3 bg-orange-500 text-white rounded-lg font-semibold">
                        Apply Filters
                    </button>
                </form>
            </div>

            <div class="mb-6 flex items-center justify-between">
                <p class="text-gray-600">Showing 6 restaurants</p>
            </div>

            <div id="restaurants-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border">
                    <div class="h-56 bg-gradient-to-br from-orange-400 to-pink-500"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">La Bella Italia</h3>
                        <p class="text-sm text-gray-600 mb-3">Italian Cuisine</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Authentic Italian dishes made with fresh ingredients.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-semibold">★★★★☆</span>
                            <a href="#" class="text-orange-600 font-semibold text-sm">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border">
                    <div class="relative h-56 bg-gradient-to-br from-purple-400 to-indigo-500">
                        <button class="absolute top-4 left-4 bg-white rounded-full p-2 shadow">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z" />
                            </svg>
                        </button>

                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Sushi World</h3>
                        <p class="text-sm text-gray-600 mb-3">Japanese Cuisine</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Premium sushi experience with modern flavors.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-semibold">★★★★★</span>
                            <a href="#" class="text-orange-600 font-semibold text-sm">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border">
                    <div class="relative h-56 bg-gradient-to-br from-green-400 to-emerald-500">
                        <button class="absolute top-4 left-4 bg-white rounded-full p-2 shadow">
                            <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z" />
                            </svg>
                        </button>

                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Green Garden</h3>
                        <p class="text-sm text-gray-600 mb-3">Healthy & Vegan</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Fresh, healthy meals in a relaxing environment.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-semibold">★★★★☆</span>
                            <a href="#" class="text-orange-600 font-semibold text-sm">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border">
                    <div class="relative h-56 bg-gradient-to-br from-red-400 to-orange-500">
                        <button class="absolute top-4 left-4 bg-white rounded-full p-2 shadow hover:scale-110 transition">
                            <svg class="w-5 h-5 text-gray-400 hover:text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 18.343l-6.828-6.829a4 4 0 010-5.656z" />
                            </svg>
                        </button>

                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">El Mexicano</h3>
                        <p class="text-sm text-gray-600 mb-3">Mexican Cuisine</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Spicy flavors and traditional Mexican recipes.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-semibold">★★★★☆</span>
                            <a href="#" class="text-orange-600 font-semibold text-sm">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border">
                    <div class="h-56 bg-gradient-to-br from-blue-400 to-cyan-500"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Ocean Grill</h3>
                        <p class="text-sm text-gray-600 mb-3">Seafood</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Fresh seafood with a beautiful ocean vibe.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-semibold">★★★★★</span>
                            <a href="#" class="text-orange-600 font-semibold text-sm">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border">
                    <div class="h-56 bg-gradient-to-br from-pink-400 to-rose-500"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Paris Bistro</h3>
                        <p class="text-sm text-gray-600 mb-3">French Cuisine</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Classic French dining with an elegant touch.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-yellow-500 font-semibold">★★★★☆</span>
                            <a href="#" class="text-orange-600 font-semibold text-sm">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
