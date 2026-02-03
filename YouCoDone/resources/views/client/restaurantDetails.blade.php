@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Image Section -->
    <div class="relative h-96 bg-gradient-to-br from-orange-400 via-pink-500 to-purple-600">

            <img src="" alt="" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

        
        <!-- Back Button -->
        <div class="absolute top-8 left-8">
            <a href="" class="inline-flex items-center px-4 py-2 bg-white/90 backdrop-blur-sm rounded-lg text-gray-900 font-medium hover:bg-white transition duration-200 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Restaurants
            </a>
        </div>

        <!-- Restaurant Info Overlay -->
        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
            <div class="max-w-7xl mx-auto">
                <div class="flex items-start justify-between">
                    <div class="flex-1">

                        <h1 class="text-5xl font-display font-bold mb-3">test</h1>
                        <div class="flex items-center space-x-4 text-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="font-bold">1</span>
                                <span class="text-white/80 ml-1">({{ rand(50, 500) }} reviews)</span>
                            </div>
                            <span class="text-white/60">•</span>
                            <span>'International' Cuisine</span>
                            <span class="text-white/60">•</span>
                            <span>'$$'</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <button class="p-3 bg-white/20 backdrop-blur-sm hover:bg-white/30 rounded-xl transition duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                            </svg>
                        </button>
                        <button class="p-3 bg-white/20 backdrop-blur-sm hover:bg-white/30 rounded-xl transition duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Main Info -->
            <div class="lg:col-span-2 space-y-8">
                <!-- About Section -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 animate-slide-in">
                    <h2 class="text-2xl font-display font-bold text-gray-900 mb-4">About This Restaurant</h2>
                    <p class="text-gray-600 leading-relaxed">
                        'Experience exceptional dining in a welcoming atmosphere. Our carefully crafted menu features the finest ingredients, prepared by skilled chefs who are passionate about delivering an unforgettable culinary experience. From intimate dinners to special celebrations, we provide the perfect setting for any occasion.' 
                    </p>
                </div>

                <!-- Menu Highlights -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 animate-slide-in" style="animation-delay: 0.1s;">
                    <h2 class="text-2xl font-display font-bold text-gray-900 mb-6">Menu Highlights</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @for($i = 0; $i < 6; $i++)
                        <div class="flex items-start space-x-4 p-4 rounded-xl hover:bg-gray-50 transition duration-200">
                            <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-pink-500 rounded-xl flex-shrink-0"></div>
                            <div class="flex-1">
                                <h3 class="font-semibold text-gray-900 mb-1">Signature Dish {{ $i + 1 }}</h3>
                                <p class="text-sm text-gray-600 mb-2">A delightful combination of fresh ingredients</p>
                                <p class="text-orange-600 font-bold">${{ rand(15, 45) }}</p>
                            </div>
                        </div>
                        @endfor
                    </div>
        
                </div>
                
            </div>

            <!-- Right Column - Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Booking Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 top-24 animate-slide-in">
                    <h3 class="text-xl font-display font-bold text-gray-900 mb-4">Make a Reservation</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Date</label>
                            <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Time</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                <option>5:00 PM</option>
                                <option>6:00 PM</option>
                                <option>7:00 PM</option>
                                <option>8:00 PM</option>
                                <option>9:00 PM</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Party Size</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                <option>1 person</option>
                                <option>2 people</option>
                                <option>3 people</option>
                                <option>4 people</option>
                                <option>5+ people</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full py-3 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-lg font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition duration-200">
                            Reserve Now
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 animate-slide-in" style="animation-delay: 0.1s;">
                    <h3 class="text-xl font-display font-bold text-gray-900 mb-4">Contact Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-gray-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900">Address</p>
                                <p class="text-sm text-gray-600">'123 Main Street, Downtown, City 12345' </p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-gray-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900">Phone</p>
                                <p class="text-sm text-gray-600">'(555) 123-4567' </p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-gray-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div>
                                <p class="font-medium text-gray-900">Hours</p>
                                <p class="text-sm text-gray-600">Mon-Fri: 11am - 10pm<br>Sat-Sun: 10am - 11pm</p>
                            </div>
                        </div>
                    </div>
                    <button class="mt-6 w-full py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold rounded-xl transition duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                        </svg>
                        Get Directions
                    </button>
                </div>

                <!-- Special Offers -->
                <div class="bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl shadow-sm p-6 text-white animate-slide-in" style="animation-delay: 0.2s;">
                    <h3 class="text-xl font-display font-bold mb-3">Special Offer</h3>
                    <p class="text-white/90 mb-4">Get 20% off your first reservation when you book through our platform!</p>
                    <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 border border-white/30">
                        <p class="text-sm font-mono font-bold mb-1">FIRST20</p>
                        <p class="text-xs text-white/80">Valid until end of month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection