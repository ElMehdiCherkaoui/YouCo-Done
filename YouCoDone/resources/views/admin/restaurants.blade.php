@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-10 animate-slide-in">
                <h1 class="text-5xl font-display font-bold text-gray-900 mb-3">Restaurant Management</h1>
                <p class="text-xl text-gray-600">Manage all restaurants on the platform</p>
            </div>

            <!-- Filters & Search -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-8 animate-slide-in"
                style="animation-delay: 0.1s;">
                <form action="" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Search Restaurants</label>
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Search by name or cuisine..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-200">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                        <select name="status"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-200">
                            <option value="">All Status</option>
                            <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                    </div>
                    <div class="flex items-end space-x-2">
                        <button type="submit"
                            class="flex-1 px-6 py-3 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-lg font-semibold hover:shadow-lg transition duration-200">
                            Apply
                        </button>
                        @if (request()->hasAny(['search', 'status']))
                            <a href=""
                                class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg font-medium transition duration-200">
                                Clear
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 animate-slide-in"
                    style="animation-delay: 0.15s;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm mb-1">Total Restaurants</p>
                            <p class="text-3xl font-display font-bold text-gray-900">5</p>
                        </div>
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 animate-slide-in"
                    style="animation-delay: 0.2s;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm mb-1">Active</p>
                            <p class="text-3xl font-display font-bold text-green-600">{{ rand(400, 500) }}</p>
                        </div>
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 animate-slide-in"
                    style="animation-delay: 0.25s;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm mb-1">Featured</p>
                            <p class="text-3xl font-display font-bold text-yellow-600">{{ rand(20, 50) }}</p>
                        </div>
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 animate-slide-in"
                    style="animation-delay: 0.3s;">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm mb-1">Added This Month</p>
                            <p class="text-3xl font-display font-bold text-blue-600">{{ rand(10, 30) }}</p>
                        </div>
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Restaurants List -->
            <div class="space-y-6">
                <!-- Restaurant Card 1 -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition duration-300 animate-slide-in"
                    style="animation-delay: 0.35s;">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                        <!-- Image -->
                        <div class="md:col-span-1">
                            <div class="relative h-48 md:h-full bg-gradient-to-br from-orange-400 to-pink-500">
                                <img src="https://via.placeholder.com/300x200" alt="The Fancy Spoon"
                                    class="w-full h-full object-cover">
                                <div class="absolute top-2 right-2">
                                    <span
                                        class="inline-flex px-2 py-1 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold rounded-full shadow-md">
                                        FEATURED
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="md:col-span-4 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex-1">
                                        <h3 class="text-2xl font-display font-bold text-gray-900 mb-1">The Fancy Spoon</h3>
                                        <div class="flex items-center space-x-3 text-sm text-gray-600">
                                            <span>Italian</span>
                                            <span>•</span>
                                            <span>$$</span>
                                            <span>•</span>
                                            <span>4.7★</span>
                                        </div>
                                    </div>
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </div>

                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                    Experience fine Italian dining with a modern twist. Enjoy our chef's specialties and an
                                    extensive wine list.
                                </p>

                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <p class="text-xs text-gray-600 mb-1">Owner</p>
                                        <p class="font-semibold text-gray-900 text-sm">Alice Johnson</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <p class="text-xs text-gray-600 mb-1">Location</p>
                                        <p class="font-semibold text-gray-900 text-sm">123 Main Street</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <p class="text-xs text-gray-600 mb-1">Reviews</p>
                                        <p class="font-semibold text-gray-900 text-sm">87</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <p class="text-xs text-gray-600 mb-1">Created</p>
                                        <p class="font-semibold text-gray-900 text-sm">Jan 10, 2026</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center space-x-3 pt-4 border-t border-gray-100">
                                <a href="#" target="_blank"
                                    class="flex-1 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center rounded-lg font-medium transition duration-200 text-sm">
                                    View Public Page
                                </a>
                                <button
                                    class="px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg font-medium transition duration-200 text-sm">
                                    Edit
                                </button>
                                <button
                                    class="px-4 py-2 bg-yellow-100 hover:bg-yellow-200 text-yellow-700 rounded-lg font-medium transition duration-200 text-sm">
                                    Deactivate
                                </button>
                                <button
                                    class="px-4 py-2 bg-red-100 hover:bg-red-200 text-red-700 rounded-lg font-medium transition duration-200 text-sm">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Restaurant Card 2 -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition duration-300 animate-slide-in"
                    style="animation-delay: 0.40s;">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                        <!-- Image -->
                        <div class="md:col-span-1">
                            <div class="relative h-48 md:h-full bg-gradient-to-br from-purple-400 to-pink-500">
                                <img src="https://via.placeholder.com/300x200" alt="Burger Hub"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="md:col-span-4 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex items-start justify-between mb-3">
                                    <div class="flex-1">
                                        <h3 class="text-2xl font-display font-bold text-gray-900 mb-1">Burger Hub</h3>
                                        <div class="flex items-center space-x-3 text-sm text-gray-600">
                                            <span>American</span>
                                            <span>•</span>
                                            <span>$</span>
                                            <span>•</span>
                                            <span>4.2★</span>
                                        </div>
                                    </div>
                                    <span
                                        class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                                        Inactive
                                    </span>
                                </div>

                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                    Classic American burgers, fries, and shakes served fast and fresh. Perfect for casual
                                    meals with friends.
                                </p>

                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <p class="text-xs text-gray-600 mb-1">Owner</p>
                                        <p class="font-semibold text-gray-900 text-sm">Bob Smith</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <p class="text-xs text-gray-600 mb-1">Location</p>
                                        <p class="font-semibold text-gray-900 text-sm">456 Elm Street</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <p class="text-xs text-gray-600 mb-1">Reviews</p>
                                        <p class="font-semibold text-gray-900 text-sm">54</p>
                                    </div>
                                    <div class="bg-gray-50 rounded-lg p-3">
                                        <p class="text-xs text-gray-600 mb-1">Created</p>
                                        <p class="font-semibold text-gray-900 text-sm">Feb 15, 2026</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="flex items-center space-x-3 pt-4 border-t border-gray-100">
                                <a href="#" target="_blank"
                                    class="flex-1 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center rounded-lg font-medium transition duration-200 text-sm">
                                    View Public Page
                                </a>
                                <button
                                    class="px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg font-medium transition duration-200 text-sm">
                                    Edit
                                </button>
                                <button
                                    class="px-4 py-2 bg-green-100 hover:bg-green-200 text-green-700 rounded-lg font-medium transition duration-200 text-sm">
                                    Activate
                                </button>
                                <button
                                    class="px-4 py-2 bg-red-100 hover:bg-red-200 text-red-700 rounded-lg font-medium transition duration-200 text-sm">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Empty State (Optional) -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-16 text-center animate-slide-in"
                    style="animation-delay: 0.45s;">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-display font-bold text-gray-900 mb-3">No more restaurants</h3>
                    <p class="text-gray-600 mb-6">All restaurants are listed above</p>
                    <a href="#"
                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-lg font-semibold hover:shadow-lg transition duration-200">
                        Clear Filters
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
