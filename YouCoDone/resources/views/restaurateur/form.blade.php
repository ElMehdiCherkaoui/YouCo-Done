<div class="space-y-8">
    <!-- Basic Information -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        <div class="flex items-center space-x-4 mb-6">
            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900">Basic Information</h2>
                <p class="text-sm text-gray-600">Tell customers about your restaurant</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Restaurant Name -->
            <div class="md:col-span-2">
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                    Restaurant Name <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name', $restaurant->name ?? '') }}" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-200"
                    placeholder="e.g., The Golden Fork">
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Cuisine -->
            <div>
                <label for="cuisine" class="block text-sm font-semibold text-gray-700 mb-2">
                    Cuisine Type <span class="text-red-500">*</span>
                </label>
                <select id="cuisine" 
                    name="cuisine" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-200">
                    <option value="">Select cuisine type</option>
                    <option value="italian" {{ old('cuisine', $restaurant->cuisine ?? '') === 'italian' ? 'selected' : '' }}>Italian</option>
                    <option value="japanese" {{ old('cuisine', $restaurant->cuisine ?? '') === 'japanese' ? 'selected' : '' }}>Japanese</option>
                    <option value="mexican" {{ old('cuisine', $restaurant->cuisine ?? '') === 'mexican' ? 'selected' : '' }}>Mexican</option>
                    <option value="chinese" {{ old('cuisine', $restaurant->cuisine ?? '') === 'chinese' ? 'selected' : '' }}>Chinese</option>
                    <option value="american" {{ old('cuisine', $restaurant->cuisine ?? '') === 'american' ? 'selected' : '' }}>American</option>
                    <option value="french" {{ old('cuisine', $restaurant->cuisine ?? '') === 'french' ? 'selected' : '' }}>French</option>
                    <option value="indian" {{ old('cuisine', $restaurant->cuisine ?? '') === 'indian' ? 'selected' : '' }}>Indian</option>
                    <option value="thai" {{ old('cuisine', $restaurant->cuisine ?? '') === 'thai' ? 'selected' : '' }}>Thai</option>
                    <option value="mediterranean" {{ old('cuisine', $restaurant->cuisine ?? '') === 'mediterranean' ? 'selected' : '' }}>Mediterranean</option>
                    <option value="international" {{ old('cuisine', $restaurant->cuisine ?? '') === 'international' ? 'selected' : '' }}>International</option>
                </select>
                @error('cuisine')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Price Range -->
            <div>
                <label for="price_range" class="block text-sm font-semibold text-gray-700 mb-2">
                    Price Range <span class="text-red-500">*</span>
                </label>
                <select id="price_range" 
                    name="price_range" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-200">
                    <option value="">Select price range</option>
                    <option value="$" {{ old('price_range', $restaurant->price_range ?? '') === '$' ? 'selected' : '' }}>$ - Budget Friendly</option>
                    <option value="$$" {{ old('price_range', $restaurant->price_range ?? '') === '$$' ? 'selected' : '' }}>$$ - Moderate</option>
                    <option value="$$$" {{ old('price_range', $restaurant->price_range ?? '') === '$$$' ? 'selected' : '' }}>$$$ - Fine Dining</option>
                    <option value="$$$$" {{ old('price_range', $restaurant->price_range ?? '') === '$$$$' ? 'selected' : '' }}>$$$$ - Luxury</option>
                </select>
                @error('price_range')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="md:col-span-2">
                <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                    Description <span class="text-red-500">*</span>
                </label>
                <textarea id="description" 
                    name="description" 
                    rows="4" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition duration-200"
                    placeholder="Describe your restaurant, ambiance, signature dishes, and what makes it special...">{{ old('description', $restaurant->description ?? '') }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Location Information -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        <div class="flex items-center space-x-4 mb-6">
            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900">Location & Contact</h2>
                <p class="text-sm text-gray-600">Help customers find and reach you</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Address -->
            <div class="md:col-span-2">
                <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">
                    Full Address <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                    id="address" 
                    name="address" 
                    value="{{ old('address', $restaurant->address ?? '') }}" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200"
                    placeholder="123 Main Street, City, State, ZIP">
                @error('address')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                    Phone Number <span class="text-red-500">*</span>
                </label>
                <input type="tel" 
                    id="phone" 
                    name="phone" 
                    value="{{ old('phone', $restaurant->phone ?? '') }}" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200"
                    placeholder="(555) 123-4567">
                @error('phone')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                    Email Address
                </label>
                <input type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email', $restaurant->email ?? '') }}" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200"
                    placeholder="info@restaurant.com">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Image Upload -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        <div class="flex items-center space-x-4 mb-6">
            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900">Restaurant Image</h2>
                <p class="text-sm text-gray-600">Upload a beautiful photo of your restaurant</p>
            </div>
        </div>

        <div>
            <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">
                Main Image
            </label>
            @if(isset($restaurant) && $restaurant->image)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $restaurant->image) }}" alt="Current image" class="w-full max-w-md h-64 object-cover rounded-xl border-2 border-gray-200">
                    <p class="text-sm text-gray-600 mt-2">Current image (upload new to replace)</p>
                </div>
            @endif
            <input type="file" 
                id="image" 
                name="image" 
                accept="image/*"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-gradient-to-r file:from-blue-500 file:to-cyan-500 file:text-white file:font-semibold hover:file:shadow-lg">
            <p class="mt-2 text-sm text-gray-600">Recommended: JPG or PNG, max 2MB, minimum 1200x800px</p>
            @error('image')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Additional Settings -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        <div class="flex items-center space-x-4 mb-6">
            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-display font-bold text-gray-900">Additional Settings</h2>
                <p class="text-sm text-gray-600">Configure restaurant status and features</p>
            </div>
        </div>

        <div class="space-y-4">
            <!-- Status -->
            <div>
                <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                    Status <span class="text-red-500">*</span>
                </label>
                <select id="status" 
                    name="status" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200">
                    <option value="active" {{ old('status', $restaurant->status ?? 'active') === 'active' ? 'selected' : '' }}>Active - Visible to customers</option>
                    <option value="inactive" {{ old('status', $restaurant->status ?? '') === 'inactive' ? 'selected' : '' }}>Inactive - Hidden from customers</option>
                </select>
                @error('status')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Featured -->
            <div class="flex items-center">
                <input type="checkbox" 
                    id="is_featured" 
                    name="is_featured" 
                    value="1"
                    {{ old('is_featured', $restaurant->is_featured ?? false) ? 'checked' : '' }}
                    class="w-5 h-5 text-orange-600 border-gray-300 rounded focus:ring-orange-500">
                <label for="is_featured" class="ml-3 text-sm font-medium text-gray-700">
                    Feature this restaurant (appears in featured sections)
                </label>
            </div>
        </div>
    </div>

    <!-- Form Actions -->
    <div class="flex items-center justify-between pt-6 border-t border-gray-200">
        <a href="" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg font-semibold transition duration-200">
            Cancel
        </a>
        <button type="submit" class="px-8 py-3 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-lg font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition duration-200">
            {{ isset($restaurant) && $restaurant->exists ? 'Update Restaurant' : 'Create Restaurant' }}
        </button>
    </div>
</div>