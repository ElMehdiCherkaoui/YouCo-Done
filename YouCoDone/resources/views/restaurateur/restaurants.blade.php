@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="flex items-center justify-between mb-10 animate-slide-in">
                <div>
                    <h1 class="text-5xl font-display font-bold text-gray-900 mb-3">My Restaurants</h1>
                    <p class="text-xl text-gray-600">Manage and update your restaurant listings</p>
                </div>
                <a href=""
                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-lg font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add New Restaurant
                </a>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div
                    class="mb-8 bg-green-50 border border-green-200 rounded-xl p-4 flex items-center space-x-3 animate-slide-in">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-green-800 font-medium">{{ session('success') }}</p>
                </div>
            @endif

            <!-- Restaurants List -->

                <div class="space-y-6">

                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition duration-300 animate-slide-in"
                            style="animation-delay: {{ 5 * 0.05 }};">
                            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                                <!-- Image -->
                                <div class="md:col-span-2">
                                    <div class="relative h-64 md:h-full bg-gradient-to-br from-orange-400 to-pink-500">
                   
                                            <img src="test"
                                                alt="test" class="w-full h-full object-cover">
                                   
                                        <div class="absolute top-4 right-4 flex flex-col space-y-2">
                             
                                            <span
                                                class="inline-flex px-3 py-1 bg-white/90 backdrop-blur-sm text-gray-900 text-sm font-semibold rounded-full shadow-md">
                                                4.5, 1★
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="md:col-span-3 p-6 flex flex-col justify-between">
                                    <div>
                                        <div class="flex items-start justify-between mb-4">
                                            <div class="flex-1">
                                                <h3 class="text-2xl font-display font-bold text-gray-900 mb-2">test</h3>
                                                <div class="flex items-center space-x-4 text-sm text-gray-600">
                                                    <span class="inline-flex items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                        </svg>
                                                        'Downtown'
                                                    </span>
                                                    <span>'International'</span>
                                                    <span> '$$' </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <span
                                                    class="inline-flex px-3 py-1 text-xs font-semibold rounded-full  bg-green-100 text-green-800 ">
                                                    'active'
                                                </span>
                                            </div>
                                        </div>

                                        <p class="text-gray-600 mb-4 line-clamp-2">
                                            'Discover exceptional dining with carefully crafted dishes in a welcoming
                                            atmosphere.'
                                        </p>

                                        <!-- Stats -->
                                        <div class="grid grid-cols-4 gap-4 mb-4">
                                            <div class="bg-gray-50 rounded-lg p-3 text-center">
                                                <p class="text-2xl font-display font-bold text-gray-900">
                                                    {{ rand(100, 500) }}</p>
                                                <p class="text-xs text-gray-600">Views</p>
                                            </div>
                                            <div class="bg-gray-50 rounded-lg p-3 text-center">
                                                <p class="text-2xl font-display font-bold text-gray-900">{{ rand(20, 80) }}
                                                </p>
                                                <p class="text-xs text-gray-600">Reservations</p>
                                            </div>
                                            <div class="bg-gray-50 rounded-lg p-3 text-center">
                                                <p class="text-2xl font-display font-bold text-gray-900">{{ rand(10, 50) }}
                                                </p>
                                                <p class="text-xs text-gray-600">Reviews</p>
                                            </div>
                                            <div class="bg-gray-50 rounded-lg p-3 text-center">
                                                <p class="text-2xl font-display font-bold text-gray-900">
                                                     4.5, 1</p>
                                                <p class="text-xs text-gray-600">Rating</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex items-center space-x-3 pt-4 border-t border-gray-100">
                                        <a href="" target="_blank"
                                            class="flex-1 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg font-medium text-center transition duration-200">
                                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            View
                                        </a>
                                        <a href=""
                                            class="flex-1 px-4 py-2 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-lg font-medium text-center hover:shadow-lg transition duration-200">
                                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                            Edit
                                        </a>
                                        <form action="" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this restaurant?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-4 py-2 bg-red-100 hover:bg-red-200 text-red-700 rounded-lg font-medium transition duration-200">
                                                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
             
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    
                </div>
            {{-- @else
                <!-- Empty State -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-16 text-center animate-slide-in">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-orange-100 to-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-display font-bold text-gray-900 mb-3">No Restaurants Yet</h3>
                    <p class="text-gray-600 mb-8 max-w-md mx-auto">
                        Start building your presence by adding your first restaurant. It only takes a few minutes!
                    </p>
                    <a href=""
                        class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-xl font-bold text-lg hover:shadow-2xl transform hover:-translate-y-1 transition duration-200">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add Your First Restaurant
                    </a>
                </div>
            @endif --}}
        </div>
    </div>
@endsection
