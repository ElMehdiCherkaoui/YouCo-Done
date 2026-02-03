@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="gradient-primary text-white py-24 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                    Réservez votre table idéale
                </h1>
                <p class="text-lg md:text-xl text-purple-100 mb-8 leading-relaxed">
                    Découvrez les meilleurs restaurants de votre région et réservez une table en quelques clics. 
                    Des expériences culinaires inoubliables vous attendent.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/restaurants" class="px-8 py-4 bg-white text-purple-600 font-bold rounded-lg hover:bg-gray-100 transition btn-hover text-center">
                        Explorer les Restaurants
                    </a>
                    <a href="/register" class="px-8 py-4 bg-purple-500 text-white font-bold rounded-lg hover:bg-purple-400 transition btn-hover text-center border-2 border-white">
                        Commencer
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="bg-white rounded-2xl shadow-2xl p-8 backdrop-blur">
                    <div class="aspect-square bg-gradient-to-br from-purple-200 to-pink-200 rounded-xl flex items-center justify-center">
                        <i class="fas fa-utensils text-8xl text-white opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="max-w-6xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center">
            <div class="text-5xl font-bold text-purple-600 mb-2">500+</div>
            <p class="text-gray-700 text-lg">Restaurants Partenaires</p>
            <p class="text-gray-500 text-sm mt-2">Dans toute la France</p>
        </div>
        <div class="text-center">
            <div class="text-5xl font-bold text-purple-600 mb-2">50K+</div>
            <p class="text-gray-700 text-lg">Clients Satisfaits</p>
            <p class="text-gray-500 text-sm mt-2">Chaque mois</p>
        </div>
        <div class="text-center">
            <div class="text-5xl font-bold text-purple-600 mb-2">4.8★</div>
            <p class="text-gray-700 text-lg">Note Moyenne</p>
            <p class="text-gray-500 text-sm mt-2">Basée sur 10K+ avis</p>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="bg-white py-20 px-4">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-16">Pourquoi BookMyTable?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group p-8 rounded-xl bg-gradient-to-br from-purple-50 to-pink-50 hover:shadow-xl transition-smooth cursor-pointer transform hover:scale-105">
                <div class="text-5xl text-purple-600 mb-4">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Recherche Facile</h3>
                <p class="text-gray-600 mb-4">Filtrez par ville, type de cuisine, horaires et ambiance pour trouver le restaurant parfait</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Filtres avancés</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Photos HD</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Avis vérifiés</li>
                </ul>
            </div>

            <!-- Feature 2 -->
            <div class="group p-8 rounded-xl bg-gradient-to-br from-blue-50 to-purple-50 hover:shadow-xl transition-smooth cursor-pointer transform hover:scale-105">
                <div class="text-5xl text-blue-600 mb-4">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Réservation Rapide</h3>
                <p class="text-gray-600 mb-4">Confirmez votre réservation en moins d'une minute, sans appel téléphonique</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Instant booking</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Confirmation immédiate</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Rappel SMS/Email</li>
                </ul>
            </div>

            <!-- Feature 3 -->
            <div class="group p-8 rounded-xl bg-gradient-to-br from-yellow-50 to-orange-50 hover:shadow-xl transition-smooth cursor-pointer transform hover:scale-105">
                <div class="text-5xl text-yellow-600 mb-4">
                    <i class="fas fa-star"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Avis Vérifiés</h3>
                <p class="text-gray-600 mb-4">Consultez les avis authentiques d'autres clients pour faire le bon choix</p>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Vraies photos</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Clients vérifiés</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Notes honn êtes</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-20 px-4 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-16">Comment ça Marche?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Step 1 -->
            <div class="relative">
                <div class="bg-purple-600 text-white rounded-full w-16 h-16 flex items-center justify-center text-3xl font-bold mb-4 mx-auto">
                    1
                </div>
                <h4 class="text-xl font-bold text-center text-gray-800 mb-2">Recherche</h4>
                <p class="text-center text-gray-600">Entrez votre ville, la date et le nombre de personnes</p>
            </div>

            <div class="hidden md:block absolute mt-8 left-1/4 w-1/12 h-1 bg-purple-600 transform -translate-y-1/2"></div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="bg-blue-600 text-white rounded-full w-16 h-16 flex items-center justify-center text-3xl font-bold mb-4 mx-auto">
                    2
                </div>
                <h4 class="text-xl font-bold text-center text-gray-800 mb-2">Explorez</h4>
                <p class="text-center text-gray-600">Découvrez les restaurants disponibles et leurs avis</p>
            </div>

            <div class="hidden md:block absolute mt-8 left-1/2 w-1/12 h-1 bg-purple-600 transform -translate-y-1/2"></div>

            <!-- Step 3 -->
            <div class="relative">
                <div class="bg-orange-600 text-white rounded-full w-16 h-16 flex items-center justify-center text-3xl font-bold mb-4 mx-auto">
                    3
                </div>
                <h4 class="text-xl font-bold text-center text-gray-800 mb-2">Réservez</h4>
                <p class="text-center text-gray-600">Sélectionnez votre créneau et validez</p>
            </div>

            <div class="hidden md:block absolute mt-8 left-3/4 w-1/12 h-1 bg-purple-600 transform -translate-y-1/2"></div>

            <!-- Step 4 -->
            <div class="relative">
                <div class="bg-green-600 text-white rounded-full w-16 h-16 flex items-center justify-center text-3xl font-bold mb-4 mx-auto">
                    4
                </div>
                <h4 class="text-xl font-bold text-center text-gray-800 mb-2">Profitez!</h4>
                <p class="text-center text-gray-600">Rendez-vous au restaurant et savourez</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="bg-white py-20 px-4">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-16">Ce que disent nos clients</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @for($i = 1; $i <= 3; $i++)
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold">
                            {{ chr(64 + $i) }}
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-800">Client {{ $i }}</h4>
                            <div class="text-yellow-400">
                                @for($j = 1; $j <= 5; $j++)
                                    <i class="fas fa-star text-sm"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">
                        "Excellent service! Réservation facile et rapide. Le restaurant était parfait pour notre occasion spéciale."
                    </p>
                </div>
            @endfor
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="gradient-primary text-white py-20 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Prêt à découvrir votre restaurant idéal?</h2>
        <p class="text-lg text-purple-100 mb-8">Rejoignez des milliers de clients satisfaits et réservez dès maintenant</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/register" class="px-8 py-4 bg-white text-purple-600 font-bold rounded-lg hover:bg-gray-100 transition btn-hover">
                <i class="fas fa-user-plus mr-2"></i>S'inscrire Gratuitement
            </a>
            <a href="/restaurants" class="px-8 py-4 bg-purple-500 text-white font-bold rounded-lg hover:bg-purple-400 transition btn-hover border-2 border-white">
                <i class="fas fa-search mr-2"></i>Voir les Restaurants
            </a>
        </div>
    </div>
</section>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 0.3s ease-in-out;
    }
</style>
@endsection