<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Mubarak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2D2150',
                        secondary: '#F4A261',
                    },
                    animation: {
                        // 'bounce-slow': 'bounce 3s infinite',
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-secondary min-h-screen p-4 md:p-8">
    <div class="max-w-6xl mx-auto rounded-3xl bg-primary p-6 md:p-8">
        <!-- Navigation -->
        <nav class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <img src="/placeholder.svg?height=32&width=32" alt="Ashshaff logo" class="w-8 h-8">
                <span class="text-xl font-semibold text-orange-200">Ashshaff</span>
            </div>

            <div class="hidden md:flex items-center gap-8">
                <a href="#" class="text-orange-200 hover:text-orange-100 transition-colors">Home</a>
                <a href="#" class="text-orange-200 hover:text-orange-100 transition-colors">About</a>
                <a href="#" class="text-orange-200 hover:text-orange-100 transition-colors">Blog</a>
                <a href="#" class="text-orange-200 hover:text-orange-100 transition-colors">Contact Us</a>
                <button class="px-4 py-2 border border-orange-200 text-orange-200 rounded-md hover:bg-orange-200 hover:text-primary transition-colors">
                    Log In
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-orange-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>

        <!-- Hero Section -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16">
            <div class="space-y-6">
                <h1 class="text-5xl md:text-6xl font-bold text-white">
                    Marhaban
                    <span class="block mt-2 text-orange-200">Ya Ramadhan</span>
                </h1>
                <p class="text-lg text-orange-100/80">
                    Ramadan fasting is a fast that is carried out in the month of Ramadan, which has a number of days between 29 and 30 days in fasting.
                </p>
                <button class="px-6 py-3 bg-orange-400 text-primary rounded-md hover:bg-orange-300 transition-colors">
                    Read More
                </button>

                <div class="mt-16">
                    <blockquote class="border-l-4 border-orange-200 pl-4 text-orange-100">
                        Ramadan is the month of blessing. And I'm sure you will get your share too. Because Allah is happy with you!
                    </blockquote>
                </div>
                {{-- <h2>{{$name}}</h2> --}}
                <!-- Social Media Links -->
                @if($name>10)
                    <h1>hhhhhhhhhhh</h1>
                @endif
                <div class="flex gap-4 pt-8">
                    <a href="#" class="text-orange-200 hover:text-orange-100 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-orange-200 hover:text-orange-100 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-orange-200 hover:text-orange-100 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Image Section -->
            <div class="flex items-center justify-center">
                <img src="https://cdn.dribbble.com/userupload/27019268/file/original-f6b75a699964e4541fb2286acce50bc7.png?resize=1200x901&vertical=center"
                     alt="Ramadan Drum Mascot"
                     class="max-w-md animate-bounce-slow">
            </div>
        </div>
    </div>
    <!-- Mobile Menu (Hidden by default) -->
    <div class="hidden fixed inset-0 bg-primary/95 z-50">
        <div class="flex flex-col items-center justify-center h-full space-y-8">
            <a href="#" class="text-orange-200 text-xl hover:text-orange-100 transition-colors">Home</a>
            <a href="#" class="text-orange-200 text-xl hover:text-orange-100 transition-colors">About</a>
            <a href="#" class="text-orange-200 text-xl hover:text-orange-100 transition-colors">Blog</a>
            <a href="#" class="text-orange-200 text-xl hover:text-orange-100 transition-colors">Contact Us</a>
            <button class="px-6 py-2 border border-orange-200 text-orange-200 rounded-md hover:bg-orange-200 hover:text-primary transition-colors">
                Log In
            </button>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        const menuButton = document.querySelector('button');
        const mobileMenu = document.querySelector('.fixed');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
