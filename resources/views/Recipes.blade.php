<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Recipes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#000000',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-[#0A0A0A] overflow-x-hidden">
    <!-- Animated Background -->
    <div class="fixed inset-0 bg-[radial-gradient(circle_at_50%_50%,_#1a1a1a_0%,_#0A0A0A_100%)]"></div>

    <!-- Golden Ornamental Pattern -->
    <div class="fixed inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M20 20.5V18H0v-2h20v-2H0v-2h20v-2H0V8h20V6H0V4h20V2H0V0h22v20h2V0h2v20h2V0h2v20h2V0h2v20h2V0h2v20h2v2H20v-1.5zM0 20h2v20H0V20zm4 0h2v20H4V20zm4 0h2v20H8V20zm4 0h2v20h-2V20zm4 0h2v20h-2V20zm4 4h20v2H20v-2zm0 4h20v2H20v-2zm0 4h20v2H20v-2zm0 4h20v2H20v-2z\' fill=\'%23DAA520\' fill-opacity=\'1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>

    <!-- Header -->
    <!-- Header -->
    <header class="relative p-6 md:p-8">
        <nav class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="/" class="text-white font-bold text-xl tracking-wider">
                <span class="text-[#DAA520]">app</span>tech
            </a>
            <div class="hidden md:flex items-center gap-8 text-white/90">
                <a href="/" class="hover:text-[#DAA520] transition-colors duration-300">Home</a>
                <a href="/Experiences" class="hover:text-[#DAA520] transition-colors duration-300">Experiences</a>
                <a href="/Recipes" class="text-[#DAA520] transition-colors duration-300">Recipes</a>
                <a href="/Statistics" class="hover:text-[#DAA520] transition-colors duration-300">Statistics</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="relative max-w-7xl mx-auto px-6 py-12">
        <!-- Page Title -->
        <div class="mb-16 text-center">
            <h1 class="text-5xl font-bold text-white mb-4">
                Ramadan <span class="text-[#DAA520]">Recipes</span>
            </h1>
            <p class="text-white/80 text-lg max-w-2xl mx-auto">
                Discover delicious recipes perfect for suhoor and iftar during the blessed month of Ramadan.
            </p>
        </div>

        <!-- Filtering System -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button id="all-filter" class="px-6 py-3 bg-[#DAA520] text-black rounded-full font-medium hover:bg-[#B8860B] transition-colors duration-300">
                All Recipes
            </button>
            <button id="starters-filter" class="px-6 py-3 border border-[#DAA520] text-[#DAA520] rounded-full font-medium hover:bg-[#DAA520]/10 transition-all duration-300">
                Starters
            </button>
            <button id="mains-filter" class="px-6 py-3 border border-[#DAA520] text-[#DAA520] rounded-full font-medium hover:bg-[#DAA520]/10 transition-all duration-300">
                Main Courses
            </button>
            <button id="desserts-filter" class="px-6 py-3 border border-[#DAA520] text-[#DAA520] rounded-full font-medium hover:bg-[#DAA520]/10 transition-all duration-300">
                Desserts
            </button>
            <button id="drinks-filter" class="px-6 py-3 border border-[#DAA520] text-[#DAA520] rounded-full font-medium hover:bg-[#DAA520]/10 transition-all duration-300">
                Drinks
            </button>
        </div>

        <!-- Add Recipe Button -->
        <div class="flex justify-center mb-16">
            <button class="px-8 py-4 bg-black/40 backdrop-blur-sm border border-[#DAA520] text-[#DAA520] rounded-full font-medium hover:bg-[#DAA520] hover:text-black transition-all duration-300 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add New Recipe
            </button>
        </div>

        <!-- Recipe Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Starter 1 -->
            <div class="recipe-card starter-recipe group bg-black/40 backdrop-blur-lg rounded-2xl overflow-hidden border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="/api/placeholder/600/360" alt="Lentil Soup" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute top-4 right-4 px-4 py-1 bg-[#DAA520]/80 text-black rounded-full text-sm font-medium">
                        Starter
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">Lentil Soup (Shorbat Adas)</h3>
                    <div class="flex items-center gap-2 text-white/60 text-sm mb-3">
                        <span>Prep: 15 mins</span>
                        <span>•</span>
                        <span>Cook: 30 mins</span>
                    </div>
                    <p class="text-white/80 mb-4">A hearty red lentil soup seasoned with cumin and topped with crispy pita chips and lemon.</p>
                    <a href="#" class="text-[#DAA520] hover:underline flex items-center gap-1">
                        View Recipe
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Main Course 1 -->
            <div class="recipe-card main-recipe group bg-black/40 backdrop-blur-lg rounded-2xl overflow-hidden border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="/api/placeholder/600/361" alt="Lamb Tagine" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute top-4 right-4 px-4 py-1 bg-[#DAA520]/80 text-black rounded-full text-sm font-medium">
                        Main Course
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">Moroccan Lamb Tagine</h3>
                    <div class="flex items-center gap-2 text-white/60 text-sm mb-3">
                        <span>Prep: 25 mins</span>
                        <span>•</span>
                        <span>Cook: 2 hrs</span>
                    </div>
                    <p class="text-white/80 mb-4">Tender lamb with dried fruits, honey, and aromatic spices simmered to perfection.</p>
                    <a href="#" class="text-[#DAA520] hover:underline flex items-center gap-1">
                        View Recipe
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Dessert 1 -->
            <div class="recipe-card dessert-recipe group bg-black/40 backdrop-blur-lg rounded-2xl overflow-hidden border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="/api/placeholder/600/362" alt="Kunafa" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute top-4 right-4 px-4 py-1 bg-[#DAA520]/80 text-black rounded-full text-sm font-medium">
                        Dessert
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">Kunafa with Sweet Cheese</h3>
                    <div class="flex items-center gap-2 text-white/60 text-sm mb-3">
                        <span>Prep: 30 mins</span>
                        <span>•</span>
                        <span>Cook: 45 mins</span>
                    </div>
                    <p class="text-white/80 mb-4">Crispy shredded phyllo dough layered with sweet cheese and soaked in aromatic sugar syrup.</p>
                    <a href="#" class="text-[#DAA520] hover:underline flex items-center gap-1">
                        View Recipe
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Drink 1 -->
            <div class="recipe-card drink-recipe group bg-black/40 backdrop-blur-lg rounded-2xl overflow-hidden border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="/api/placeholder/600/363" alt="Jallab" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute top-4 right-4 px-4 py-1 bg-[#DAA520]/80 text-black rounded-full text-sm font-medium">
                        Drink
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">Jallab Date Syrup Drink</h3>
                    <div class="flex items-center gap-2 text-white/60 text-sm mb-3">
                        <span>Prep: 10 mins</span>
                        <span>•</span>
                        <span>Serves: 4</span>
                    </div>
                    <p class="text-white/80 mb-4">A refreshing drink made with date syrup, rose water, and topped with pine nuts.</p>
                    <a href="#" class="text-[#DAA520] hover:underline flex items-center gap-1">
                        View Recipe
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Starter 2 -->
            <div class="recipe-card starter-recipe group bg-black/40 backdrop-blur-lg rounded-2xl overflow-hidden border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="/api/placeholder/600/364" alt="Samosas" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute top-4 right-4 px-4 py-1 bg-[#DAA520]/80 text-black rounded-full text-sm font-medium">
                        Starter
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">Vegetable Samosas</h3>
                    <div class="flex items-center gap-2 text-white/60 text-sm mb-3">
                        <span>Prep: 40 mins</span>
                        <span>•</span>
                        <span>Cook: 20 mins</span>
                    </div>
                    <p class="text-white/80 mb-4">Crispy pastry triangles filled with spiced potatoes, peas, and aromatic spices.</p>
                    <a href="#" class="text-[#DAA520] hover:underline flex items-center gap-1">
                        View Recipe
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Main 2 -->
            <div class="recipe-card main-recipe group bg-black/40 backdrop-blur-lg rounded-2xl overflow-hidden border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="/api/placeholder/600/365" alt="Chicken Biryani" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute top-4 right-4 px-4 py-1 bg-[#DAA520]/80 text-black rounded-full text-sm font-medium">
                        Main Course
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">Chicken Biryani</h3>
                    <div class="flex items-center gap-2 text-white/60 text-sm mb-3">
                        <span>Prep: 30 mins</span>
                        <span>•</span>
                        <span>Cook: 1 hr</span>
                    </div>
                    <p class="text-white/80 mb-4">Fragrant basmati rice layered with marinated chicken, fried onions, and aromatic spices.</p>
                    <a href="#" class="text-[#DAA520] hover:underline flex items-center gap-1">
                        View Recipe
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-16">
            <div class="flex items-center gap-2">
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-[#DAA520]/40 text-[#DAA520] hover:bg-[#DAA520]/10 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-[#DAA520] text-black">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-[#DAA520]/40 text-[#DAA520] hover:bg-[#DAA520]/10 transition-all duration-300">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-[#DAA520]/40 text-[#DAA520] hover:bg-[#DAA520]/10 transition-all duration-300">3</a>
                <span class="text-white/60">...</span>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-[#DAA520]/40 text-[#DAA520] hover:bg-[#DAA520]/10 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="relative py-16 bg-black/40">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-white/60">© 2025 Ramadan Recipes. All rights reserved.</p>
            <div class="flex justify-center gap-6 mt-6">
                <a href="#" class="text-[#DAA520] hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                </a>
                <a href="#" class="text-[#DAA520] hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <a href="#" class="text-[#DAA520] hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Button -->
    <button class="md:hidden fixed bottom-8 right-8 p-4 bg-black/80 backdrop-blur-lg rounded-full text-[#DAA520] hover:bg-[#DAA520] hover:text-black transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

</body>
</html>
