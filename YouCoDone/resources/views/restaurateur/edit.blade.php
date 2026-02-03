@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-10 animate-slide-in">
            <div class="flex items-center text-sm text-gray-600 mb-4">
                <a href="{{ route('restaurateur.dashboard') }}" class="hover:text-orange-600">Dashboard</a>
                <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('restaurateur.restaurants.index') }}" class="hover:text-orange-600">My Restaurants</a>
                <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-900 font-medium">Edit Restaurant</span>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-5xl font-display font-bold text-gray-900 mb-3">Edit Restaurant</h1>
                    <p class="text-xl text-gray-600">Update your restaurant information</p>
                </div>
                <a href="{{ route('client.restaurants.show', $restaurant->id) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg font-medium transition duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    Preview
                </a>
            </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="mb-8 bg-green-50 border border-green-200 rounded-xl p-4 flex items-center space-x-3 animate-slide-in">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-green-800 font-medium">{{ session('success') }}</p>
        </div>
        @endif

        <!-- Form -->
        <form action="{{ route('restaurateur.restaurants.update', $restaurant->id) }}" method="POST" enctype="multipart/form-data" class="animate-slide-in" style="animation-delay: 0.1s;">
            @csrf
            @method('PUT')
            @include('restaurateur.restaurants._form')
        </form>

        <!-- Delete Section -->
        <div class="mt-10 bg-white rounded-2xl shadow-sm border border-red-100 p-8 animate-slide-in" style="animation-delay: 0.2s;">
            <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-pink-500 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="text-xl font-display font-bold text-gray-900 mb-2">Danger Zone</h3>
                    <p class="text-gray-600 mb-4">
                        Once you delete a restaurant, there is no going back. All associated data including reviews and reservations will be permanently deleted.
                    </p>
                    <form action="{{ route('restaurateur.restaurants.destroy', $restaurant->id) }}" method="POST" onsubmit="return confirm('Are you absolutely sure? This action cannot be undone. Type DELETE to confirm.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-6 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg font-semibold transition duration-200">
                            Delete Restaurant Permanently
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection