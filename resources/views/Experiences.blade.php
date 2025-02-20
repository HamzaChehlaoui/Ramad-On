<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Experiences</title>
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
                <a href="/" class="hover:text-[#DAA520] transition-colors duration-300">Home</a>
                <a href="/Experiences" class="text-[#DAA520] transition-colors duration-300">Experiences</a>
                <a href="/Recipes" class="hover:text-[#DAA520] transition-colors duration-300">Recipes</a>
                <a href="/Statistics" class="hover:text-[#DAA520] transition-colors duration-300">Statistics</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="relative max-w-7xl mx-auto px-6 py-12">
        <!-- Page Title -->
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
                Share Your <span class="text-[#DAA520]">Ramadan</span> Story
            </h1>
            <p class="text-white/80 text-lg md:text-xl max-w-2xl mx-auto">
                Every Ramadan journey is unique. Share your experiences, inspire others, and become part of our growing community.
            </p>
        </div>

        <!-- Share Experience Form -->
        <div class="max-w-2xl mx-auto mb-20">
            <div class="bg-black/40 backdrop-blur-lg rounded-2xl p-8 border border-[#DAA520]/20">
                <h2 class="text-2xl font-semibold text-[#DAA520] mb-6">Share Your Experience</h2>
                <form class="space-y-6">
                    <div>
                        <label class="block text-white mb-2">Title</label>
                        <input type="text" class="w-full px-4 py-3 rounded-lg bg-black/40 border border-[#DAA520]/20 text-white focus:border-[#DAA520] focus:outline-none" placeholder="Give your story a title">
                    </div>
                    <div>
                        <label class="block text-white mb-2">Your Story</label>
                        <textarea class="w-full px-4 py-3 rounded-lg bg-black/40 border border-[#DAA520]/20 text-white focus:border-[#DAA520] focus:outline-none h-32" placeholder="Share your Ramadan experience..."></textarea>
                    </div>
                    <div>
                        <label class="block text-white mb-2">Add Photos</label>
                        <div class="border-2 border-dashed border-[#DAA520]/20 rounded-lg p-8 text-center">
                            <input type="file" class="hidden" id="photo-upload" multiple accept="image/*">
                            <label for="photo-upload" class="cursor-pointer">
                                <span class="text-[#DAA520]">Click to upload</span>
                                <p class="text-white/60 text-sm mt-2">PNG, JPG, GIF up to 10MB</p>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="w-full px-8 py-4 bg-[#DAA520] text-black rounded-full font-medium hover:bg-[#B8860B] transition-all duration-300 transform hover:scale-105">
                        Share Experience
                    </button>
                </form>
            </div>
        </div>

        <!-- Experiences Grid -->
        <section>
            <h2 class="text-4xl font-bold text-white mb-12">
                Community <span class="text-[#DAA520]">Stories</span>
            </h2>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach ($posts as $post)
                <div class="bg-black/40 backdrop-blur-lg rounded-2xl p-6 border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                    <div class="flex items-start gap-4 mb-4">
                        <img src="https://png.pngtree.com/png-vector/20191110/ourmid/pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg" alt="User Avatar" class="w-10 h-10 rounded-full">
                        <div>
                            <h3 class="text-[#DAA520] font-semibold">Ramadan</h3>
                        </div>
                    </div>
                    <h4 class="text-white text-xl font-semibold mb-4">{{ $post->title }}</h4>
                    <p class="text-white/80 mb-4">{{ $post->content }}</p>
                    <img src="{{$post->image}}" alt="Community Iftar" class="w-full h-48 object-cover rounded-lg mb-4">
                    <div class="flex items-center gap-4 text-white/60">
                        <button class="hover:text-[#DAA520] transition-colors duration-300">❤️ Like</button>
                        <button class="hover:text-[#DAA520] transition-colors duration-300">💬 Comment</button>
                        <button class="hover:text-[#DAA520] transition-colors duration-300">↗️ Share</button>
                    </div>
                </div>
                @endforeach
            </div>

        </section>
    </main>

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
        gsap.from("form", { y: 50, opacity: 0, duration: 1, delay: 0.8 });
        gsap.from(".grid > div", {
            y: 50,
            opacity: 0,
            duration: 1,
            delay: 1,
            stagger: 0.2
        });
    </script>
</body>
</html>
