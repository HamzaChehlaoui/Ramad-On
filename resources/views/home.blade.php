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
                <a href="#" class="hover:text-[#DAA520] transition-colors duration-300">Ramadan Kareem</a>
                <a href="#" class="hover:text-[#DAA520] transition-colors duration-300">Pricing</a>
                <a href="#" class="hover:text-[#DAA520] transition-colors duration-300">About Us</a>
                <a href="#" class="hover:text-[#DAA520] transition-colors duration-300">About Us</a>
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

                <!-- Chef SVG -->
                <svg viewBox="0 0 400 400" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">

                    <!-- Background Circle -->
                    <circle cx="200" cy="200" r="180" fill="none" stroke="#DAA520" stroke-width="1" opacity="0.1"/>
                    <circle cx="200" cy="200" r="160" fill="none" stroke="#DAA520" stroke-width="1" opacity="0.2"/>

                    <!-- Chef Figure -->
                    <!-- Head covering -->
                    <path d="M160 120 C160 90 240 90 240 120 L240 140 L160 140 Z" fill="#DAA520" opacity="0.2"/>

                    <!-- Face -->
                    <path d="M180 150 C160 150 160 180 180 180 L220 180 C240 180 240 150 220 150 Z"
                          fill="none" stroke="#DAA520" stroke-width="2"/>

                    <!-- Body -->
                    <path d="M170 180 L160 280 L240 280 L230 180"
                          fill="none" stroke="#DAA520" stroke-width="2"/>

                    <!-- Arms -->
                    <path d="M170 200 C140 220 130 240 150 270"
                          fill="none" stroke="#DAA520" stroke-width="2"/>
                    <path d="M230 200 C260 220 270 240 250 270"
                          fill="none" stroke="#DAA520" stroke-width="2"/>

                    <!-- Cooking Pot -->
                    <ellipse cx="200" cy="290" rx="50" ry="20"
                             fill="none" stroke="#DAA520" stroke-width="2"/>
                    <path d="M150 290 L150 320 C150 335 250 335 250 320 L250 290"
                          fill="none" stroke="#DAA520" stroke-width="2"/>

                    <!-- Steam -->
                    <path d="M180 270 Q190 260 200 270 Q210 280 220 270"
                          fill="none" stroke="#DAA520" stroke-width="2" opacity="0.5">
                        <animate attributeName="d"
                                 dur="3s"
                                 repeatCount="indefinite"
                                 values="M180 270 Q190 260 200 270 Q210 280 220 270;
                                         M180 270 Q190 250 200 270 Q210 290 220 270;
                                         M180 270 Q190 260 200 270 Q210 280 220 270"/>
                    </path>

                    <!-- Decorative Elements -->
                    <!-- Stars -->
                    <path d="M120 100 L123 108 L130 110 L123 112 L120 120 L117 112 L110 110 L117 108 Z"
                          fill="#DAA520" opacity="0.3"/>
                    <path d="M280 150 L283 158 L290 160 L283 162 L280 170 L277 162 L270 160 L277 158 Z"
                          fill="#DAA520" opacity="0.3"/>

                    <!-- Crescent -->
                    <path d="M300 80 A 20 20 0 1 1 300 120 A 15 15 0 1 0 300 80"
                          fill="#DAA520" opacity="0.3"/>

                    <!-- Islamic Pattern Elements -->
                    <circle cx="100" cy="200" r="15" fill="none" stroke="#DAA520" stroke-width="1" opacity="0.2"/>
                    <circle cx="300" cy="200" r="15" fill="none" stroke="#DAA520" stroke-width="1" opacity="0.2"/>
                    <path d="M85 200 L115 200 M100 185 L100 215"
                          stroke="#DAA520" stroke-width="1" opacity="0.2"/>
                    <path d="M285 200 L315 200 M300 185 L300 215"
                          stroke="#DAA520" stroke-width="1" opacity="0.2"/>
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
