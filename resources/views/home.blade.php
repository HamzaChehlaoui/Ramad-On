<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Mubarak</title>
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
    <header class="relative p-6 md:p-8">
        <nav class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="/" class="text-white font-bold text-xl tracking-wider">
                <span class="text-[#DAA520]">app</span>tech
            </a>
            <div class="hidden md:flex items-center gap-8 text-white/90">
                <a href="/" class="text-[#DAA520] transition-colors duration-300">Home</a>
                <a href="/Experiences" class="hover:text-[#DAA520] transition-colors duration-300">Experiences</a>
                <a href="/Recipes" class="hover:text-[#DAA520] transition-colors duration-300">Recipes</a>
                <a href="/Statistics" class="hover:text-[#DAA520] transition-colors duration-300">Statistics</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="relative max-w-7xl mx-auto px-6 py-20 md:py-16">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Column - Text Content -->
            <div class="space-y-8">
                <div class="inline-block">
                    <span class="text-[#DAA520] text-lg tracking-widest uppercase">Welcome to</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold text-white space-y-2">
                    <span class="block">Ramadan</span>
                    <span class="block text-[#DAA520]">Mubarak</span>
                </h1>
                <p class="text-white/80 text-lg md:text-xl leading-relaxed max-w-xl">
                    Ramadan is a time to exert effort and seek reward, to fast, give charity, and draw closer to Allah, so that we may live in a month filled with blessings and light
                </p>

                <div class="flex items-center gap-6 pt-4">
                    <button class="px-8 py-4 bg-[#DAA520] text-black rounded-full font-medium hover:bg-[#B8860B] transition-colors duration-300 transform hover:scale-105">
                        Join Community
                    </button>
                    <button class="px-8 py-4 border border-[#DAA520] text-[#DAA520] rounded-full font-medium hover:bg-[#DAA520] hover:text-black transition-all duration-300">
                        Learn More
                    </button>
                </div>
            </div>

            <!-- Right Column - Chef Illustration -->
            <div class="relative aspect-square max-w-2xl mx-auto">
                <!-- Decorative Circle -->
                <div class="absolute inset-0 rounded-full bg-gradient-to-br from-[#DAA520]/20 to-transparent animate-pulse"></div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600" width="600" height="500">
                    <!-- Stars in gold accent color -->
                    <g fill="#DAA520" opacity="0.8">
                      <circle cx="100" cy="80" r="1.5" />
                      <circle cx="170" cy="150" r="1" />
                      <circle cx="250" cy="60" r="1.5" />
                      <circle cx="350" cy="120" r="1" />
                      <circle cx="450" cy="80" r="1.5" />
                      <circle cx="550" cy="150" r="1" />
                      <circle cx="650" cy="90" r="1.5" />
                      <circle cx="700" cy="200" r="1" />
                      <circle cx="150" cy="250" r="1.5" />
                      <circle cx="750" cy="120" r="1" />
                      <circle cx="50" cy="180" r="1.5" />
                      <circle cx="300" cy="100" r="1" />
                      <circle cx="400" cy="220" r="1.5" />
                      <circle cx="600" cy="180" r="1" />
                    </g>

                    <!-- Moon with gold color matching website palette -->
                    <path d="M580 120 A70 70 0 0 1 680 170 A60 60 0 0 0 600 100 A70 70 0 0 1 580 120" fill="#DAA520" />

                    <!-- Mosque silhouette with gradient -->
                    <linearGradient id="mosqueGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#111111" />
                      <stop offset="100%" stop-color="#0A0A0A" />
                    </linearGradient>
                    <path d="M100 400 L100 320 Q200 250 300 320 L300 400 Z" fill="url(#mosqueGradient)" stroke="#222222" stroke-width="1" />
                    <path d="M320 400 L320 320 Q420 250 520 320 L520 400 Z" fill="url(#mosqueGradient)" stroke="#222222" stroke-width="1" />
                    <path d="M540 400 L540 320 Q640 250 740 320 L740 400 Z" fill="url(#mosqueGradient)" stroke="#222222" stroke-width="1" />
                    <rect x="50" y="400" width="700" height="100" fill="url(#mosqueGradient)" stroke="#222222" stroke-width="1" />

                    <!-- Main dome with gold accent color -->
                    <linearGradient id="domeGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#DAA520" />
                      <stop offset="100%" stop-color="#B8860B" />
                    </linearGradient>
                    <path d="M400 320 Q500 200 600 320 L580 350 L420 350 L400 320" fill="url(#domeGradient)" stroke="#B8860B" stroke-width="1" />
                    <rect x="400" y="280" width="10" height="40" fill="#DAA520" stroke="#B8860B" stroke-width="0.5" />
                    <circle cx="405" cy="275" r="5" fill="#FFF59D" />

                    <!-- Minarets -->
                    <rect x="180" y="200" width="20" height="200" fill="#111111" stroke="#222222" stroke-width="0.5" />
                    <path d="M170 200 L210 200 L190 170 Z" fill="#DAA520" stroke="#B8860B" stroke-width="0.5" />
                    <rect x="185" y="170" width="10" height="15" fill="#DAA520" stroke="#B8860B" stroke-width="0.5" />
                    <circle cx="190" cy="165" r="3" fill="#FFF59D" />

                    <rect x="640" y="200" width="20" height="200" fill="#111111" stroke="#222222" stroke-width="0.5" />
                    <path d="M630 200 L670 200 L650 170 Z" fill="#DAA520" stroke="#B8860B" stroke-width="0.5" />
                    <rect x="645" y="170" width="10" height="15" fill="#DAA520" stroke="#B8860B" stroke-width="0.5" />
                    <circle cx="650" cy="165" r="3" fill="#FFF59D" />

                    <!-- Doors and windows with gold accent -->
                    <rect x="140" y="340" width="30" height="60" rx="15" ry="15" fill="#DAA520" opacity="0.9" />
                    <rect x="240" y="340" width="30" height="60" rx="15" ry="15" fill="#DAA520" opacity="0.9" />
                    <rect x="380" y="340" width="30" height="60" rx="15" ry="15" fill="#DAA520" opacity="0.9" />
                    <rect x="480" y="340" width="30" height="60" rx="15" ry="15" fill="#DAA520" opacity="0.9" />
                    <rect x="580" y="340" width="30" height="60" rx="15" ry="15" fill="#DAA520" opacity="0.9" />
                    <rect x="680" y="340" width="30" height="60" rx="15" ry="15" fill="#DAA520" opacity="0.9" />

                    <!-- Lanterns with gold gradient -->
                    <linearGradient id="lanternGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#DAA520" />
                      <stop offset="100%" stop-color="#B8860B" />
                    </linearGradient>

                    <g transform="translate(120, 450)">
                      <path d="M0 0 L20 0 L15 -30 L5 -30 Z" fill="url(#lanternGradient)" />
                      <rect x="5" y="-40" width="10" height="10" fill="#DAA520" />
                      <circle cx="10" cy="-35" r="4" fill="#FFF59D" opacity="0.8" />
                      <path d="M5 0 L15 0 L15 10 L5 10 Z" fill="#B8860B" />
                    </g>

                    <g transform="translate(680, 450)">
                      <path d="M0 0 L20 0 L15 -30 L5 -30 Z" fill="url(#lanternGradient)" />
                      <rect x="5" y="-40" width="10" height="10" fill="#DAA520" />
                      <circle cx="10" cy="-35" r="4" fill="#FFF59D" opacity="0.8" />
                      <path d="M5 0 L15 0 L15 10 L5 10 Z" fill="#B8860B" />
                    </g>

                    <!-- Decorative geometric pattern -->
                    <g transform="translate(400, 500)" fill="none" stroke="#DAA520" stroke-width="1">
                      <circle cx="0" cy="0" r="30" />
                      <circle cx="0" cy="0" r="20" />
                      <line x1="-30" y1="0" x2="30" y2="0" />
                      <line x1="0" y1="-30" x2="0" y2="30" />
                      <line x1="-21.21" y1="-21.21" x2="21.21" y2="21.21" />
                      <line x1="21.21" y1="-21.21" x2="-21.21" y2="21.21" />
                    </g>

                    <!-- Text with gold color matching website -->
                    <text x="400" y="550" font-family="Arial, sans-serif" font-size="32" text-anchor="middle" fill="#DAA520" font-weight="bold">Ramadan Mubarak</text>
                  </svg>
            </div>
        </div>
    </main>
    <section class="relative max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold text-white mb-12">
            <span class="text-[#DAA520]">Featured</span> Posts
        </h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Post 1 -->
            <div class="bg-black/40 backdrop-blur-lg rounded-2xl p-6 border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <h3 class="text-[#DAA520] text-xl font-semibold mb-4">Understanding the Spirit of Ramadan</h3>
                <p class="text-white/80 mb-4">Explore the deeper meaning of this blessed month and how it transforms our spiritual journey.</p>
                <a href="#" class="text-[#DAA520] hover:underline">Read more →</a>
            </div>
            <!-- Post 2 -->
            <div class="bg-black/40 backdrop-blur-lg rounded-2xl p-6 border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <h3 class="text-[#DAA520] text-xl font-semibold mb-4">Preparing for Laylat al-Qadr</h3>
                <p class="text-white/80 mb-4">A guide to maximizing the blessings of the Night of Power in the last ten days of Ramadan.</p>
                <a href="#" class="text-[#DAA520] hover:underline">Read more →</a>
            </div>
            <!-- Post 3 -->
            <div class="bg-black/40 backdrop-blur-lg rounded-2xl p-6 border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <h3 class="text-[#DAA520] text-xl font-semibold mb-4">Community Iftar Guide</h3>
                <p class="text-white/80 mb-4">Tips for organizing and participating in community iftars that bring people together.</p>
                <a href="#" class="text-[#DAA520] hover:underline">Read more →</a>
            </div>
        </div>
    </section>

    <!-- Recipes Section -->
    <section class="relative max-w-7xl mx-auto px-6 py-20 bg-black/40">
        <h2 class="text-4xl font-bold text-white mb-12">
            Ramadan <span class="text-[#DAA520]">Recipes</span>
        </h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Recipe 1 -->
            <div class="group relative overflow-hidden rounded-2xl">
                <img src="https://addapinch.com/wp-content/uploads/2014/10/date-energy-balls-recipe-DSC_5332.jpg" alt="Dates and Nuts Energy Balls" class="w-full h-64 object-cover"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-6 flex flex-col justify-end">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">Dates and Nuts Energy Balls</h3>
                    <p class="text-white/80">Perfect for suhoor - packed with nutrients and easy to prepare.</p>
                </div>
            </div>
            <!-- Recipe 2 -->
            <div class="group relative overflow-hidden rounded-2xl">
                <img src="https://img.freepik.com/premium-photo/moroccan-harira-soup-black-bowl-with-ramadan-lantern-iftar-meals-ramadan_691577-15902.jpg" alt="Moroccan Harira Soup" class="w-full h-64 object-cover"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-6 flex flex-col justify-end">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">Moroccan Harira Soup</h3>
                    <p class="text-white/80">Traditional hearty soup perfect for breaking your fast.</p>
                </div>
            </div>
            <!-- Recipe 3 -->
            <div class="group relative overflow-hidden rounded-2xl">
                <img src="https://www.shutterstock.com/image-photo/arabian-juice-jallab-nuts-served-600nw-1952872138.jpg" alt="Refreshing Ramadan Drinks" class="w-full h-64 object-cover"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-6 flex flex-col justify-end">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">Refreshing Ramadan Drinks</h3>
                    <p class="text-white/80">Hydrating beverages to enjoy during iftar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Spiritual Advice Section -->
    <section class="relative max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold text-white mb-12">
            Spiritual <span class="text-[#DAA520]">Guidance</span>
        </h2>
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Daily Duas -->
            <div class="space-y-6">
                <h3 class="text-2xl text-[#DAA520] font-semibold">Daily Duas</h3>
                <div class="space-y-4">
                    <div class="bg-black/40 backdrop-blur-lg rounded-xl p-6 border border-[#DAA520]/20">
                        <h4 class="text-white font-medium mb-2">Dua for Breaking Fast</h4>
                        <p class="text-white/80 italic">"Allahuma inni laka sumtu wa bika aamantu wa ala rizqika aftartu"</p>
                        <p class="text-white/60 mt-2">O Allah! I fasted for You and I believe in You and I break my fast with Your sustenance.</p>
                    </div>
                    <div class="bg-black/40 backdrop-blur-lg rounded-xl p-6 border border-[#DAA520]/20">
                        <h4 class="text-white font-medium mb-2">Dua Before Meals</h4>
                        <p class="text-white/80 italic">"Bismillahi wa ala barakatillah"</p>
                        <p class="text-white/60 mt-2">In the name of Allah and with the blessings of Allah.</p>
                    </div>
                </div>
            </div>
            <!-- Daily Tips -->
            <div class="space-y-6">
                <h3 class="text-2xl text-[#DAA520] font-semibold">Daily Tips</h3>
                <div class="space-y-4">
                    <div class="flex gap-4 items-start">
                        <div class="w-8 h-8 rounded-full bg-[#DAA520]/20 flex items-center justify-center text-[#DAA520]">1</div>
                        <p class="text-white/80 flex-1">Start your day with Tahajjud prayer, even if brief, to establish a spiritual connection.</p>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="w-8 h-8 rounded-full bg-[#DAA520]/20 flex items-center justify-center text-[#DAA520]">2</div>
                        <p class="text-white/80 flex-1">Set aside time for Quran recitation daily, even if it's just a few verses.</p>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="w-8 h-8 rounded-full bg-[#DAA520]/20 flex items-center justify-center text-[#DAA520]">3</div>
                        <p class="text-white/80 flex-1">Practice mindfulness during meals and remember those less fortunate.</p>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="w-8 h-8 rounded-full bg-[#DAA520]/20 flex items-center justify-center text-[#DAA520]">4</div>
                        <p class="text-white/80 flex-1">Engage in dhikr (remembrance of Allah) throughout your day.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Menu Button [Previous button remains the same] -->
    [Previous mobile menu button]


    <!-- Mobile Menu Button -->
    <button class="md:hidden fixed bottom-8 right-8 p-4 bg-black/80 backdrop-blur-lg rounded-full text-[#DAA520] hover:bg-[#DAA520] hover:text-black transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <script>
        // Animate elements on page load
        gsap.from("nav", { y: -50, opacity: 0, duration: 1, ease: "power3.out" });
        gsap.from(".text-[#DAA520]", { opacity: 0, duration: 1, delay: 0.5, stagger: 0.2 });
        gsap.from("button", { scale: 0.9, opacity: 0, duration: 1, delay: 1, stagger: 0.2 });
        // Add animation for the SVG
        gsap.from("svg", { scale: 0.9, opacity: 0, duration: 1, delay: 1.5 });
   // Previous animations remain
   [Previous animation script]

        // Add new animations for the new sections
        gsap.from(".grid > div", {
            y: 50,
            opacity: 0,
            duration: 1,
            stagger: 0.2,
            scrollTrigger: {
                trigger: ".grid",
                start: "top 80%"
            }
        });

    </script>
</body>
</html>
