<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Statistics</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
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
    <header class="relative p-6 md:p-8">
        <nav class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="/" class="text-white font-bold text-xl tracking-wider">
                <span class="text-[#DAA520]">app</span>tech
            </a>
            <div class="hidden md:flex items-center gap-8 text-white/90">
                <a href="/" class="hover:text-[#DAA520] transition-colors duration-300">Home</a>
                <a href="/Experiences" class="hover:text-[#DAA520] transition-colors duration-300">Experiences</a>
                <a href="/Recipes" class="hover:text-[#DAA520] transition-colors duration-300">Recipes</a>
                <a href="/Statistics" class="text-[#DAA520] transition-colors duration-300">Statistics</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="relative max-w-7xl mx-auto px-6 py-12 md:py-16">
        <div class="mb-16">
            <div class="inline-block mb-4">
                <span class="text-[#DAA520] text-lg tracking-widest uppercase">Analytics</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-8">
                Community <span class="text-[#DAA520]">Statistics</span>
            </h1>
            <p class="text-white/80 text-lg md:text-xl leading-relaxed max-w-2xl">
                Explore our growing community data and discover the most popular Ramadan content and recipes that our users are enjoying this blessed month.
            </p>
        </div>

        <!-- Stats Overview Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <!-- Total Publications -->
            <div class="bg-black/40 backdrop-blur-lg rounded-2xl p-6 border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-white/70 text-lg">Total Publications</h3>
                        <p class="text-4xl font-bold text-white mt-2">{{ $totalPosts }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#DAA520]/20 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#DAA520]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1M19 20a2 2 0 002-2V8a2 2 0 00-2-2h-1M8 7h2m0 0h2m-2 0v6m2 4H8m10-4h-2m-2 0h-4" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
                    </svg>
                    <span>12% increase this month</span>
                </div>
            </div>



            <!-- Total Recipes -->
            <div class="bg-black/40 backdrop-blur-lg rounded-2xl p-6 border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-white/70 text-lg">Total Recipes</h3>
                        <p class="text-4xl font-bold text-white mt-2">{{ $totalRecipes }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#DAA520]/20 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#DAA520]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
                    </svg>
                    <span>8 new recipes this week</span>
                </div>
            </div>

            <!-- Community Engagement -->
            <div class="bg-black/40 backdrop-blur-lg rounded-2xl p-6 border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-white/70 text-lg">Total Comment</h3>
                        <p class="text-4xl font-bold text-white mt-2">{{ $totalComments }}</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-[#DAA520]/20 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#DAA520]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                    </div>
                </div>
                <div class="mt-4 flex items-center text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd" />
                    </svg>
                    <span>5.2% higher than last year</span>
                </div>
            </div>
        </div>




    </main>

    <!-- Footer -->
    <footer class="relative px-6 py-12 bg-black/60">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <a href="/" class="text-white font-bold text-xl tracking-wider mb-6 block">
                    <span class="text-[#DAA520]">app</span>tech
                </a>
                <p class="text-white/60 mb-6">Connecting the global Ramadan community through technology and tradition.</p>
            </div>
            <div>
                <h4 class="text-[#DAA520] text-lg font-medium mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-white/70 hover:text-[#DAA520]">Home</a></li>
                    <li><a href="#" class="text-white/70 hover:text-[#DAA520]">Experiences</a></li>
                    <li><a href="#" class="text-white/70 hover:text-[#DAA520]">Recipes</a></li>
                    <li><a href="#" class="text-white/70 hover:text-[#DAA520]">Statistics</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-[#DAA520] text-lg font-medium mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-white/70 hover:text-[#DAA520]">Prayer Times</a></li>
                    <li><a href="#" class="text-white/70 hover:text-[#DAA520]">Quran Recitation</a></li>
                    <li><a href="#" class="text-white/70 hover:text-[#DAA520]">Community Events</a></li>
                    <li><a href="#" class="text-white/70 hover:text-[#DAA520]">Charity Opportunities</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-[#DAA520] text-lg font-medium mb-4">Connect</h4>
                <div class="flex space-x-4 mb-6">
                    <a href="#" class="text-white/70 hover:text-[#DAA520]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white/70 hover:text-[#DAA520]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white/70 hover:text-[#DAA520]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                        </svg>
                    </a>
                </div>
                <p class="text-white/60">© 2025 apptech. All rights reserved.</p>
            </div>
        </div>
    </footer>

