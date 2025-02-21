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
<style>

.active-filter {
    background-color: #B8860B !important;
    color: white !important;
}

</style>
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
            @foreach($category as $row)
            <button class="filter-button px-6 py-3 bg-[#DAA520] text-black rounded-full font-medium hover:bg-[#B8860B] transition-colors duration-300"
                data-category-id="{{ $row->id }}">
                {{ $row->name }}
            </button>
            @endforeach
        </div>


        <!-- Add Recipe Button -->
        <div class="flex justify-center mb-16">
            <button id="addRecipeBtn" class="px-8 py-4 bg-black/40 backdrop-blur-sm border border-[#DAA520] text-[#DAA520] rounded-full font-medium hover:bg-[#DAA520] hover:text-black transition-all duration-300 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add New Recipe
            </button>
        </div>

        <!-- Recipe Grid -->
        <div id="recipe-container" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($recipes as $recipe)
            <!-- Starter 1 -->
            <div class="recipe-card starter-recipe group bg-black/40 backdrop-blur-lg rounded-2xl overflow-hidden border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="Lentil Soup" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"/>
                    <div class="absolute top-4 right-4 px-4 py-1 bg-[#DAA520]/80 text-black rounded-full text-sm font-medium">
                        {{$recipe->category->name}}
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-[#DAA520] text-xl font-semibold mb-2">{{$recipe->title}}</h3>
                    <p class="text-white/80 mb-4">{{$recipe->content}}</p>
                    <a href="{{ route('show', $recipe->id) }}" class="text-[#DAA520] hover:underline flex items-center gap-1">
                        View Recipe
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>

                </div>
            </div>
            @endforeach
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


    <!-- Recipe Form Modal -->
    <div id="recipeFormModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm transition-opacity duration-300 opacity-0 pointer-events-none">
        <div class="bg-[#0e0e0e] border border-[#DAA520]/40 rounded-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto p-8 transform transition-transform duration-300 scale-95">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-[#DAA520]">Add New Recipe</h2>
                <button id="closeModalBtn" class="text-white/60 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form method="POST" action="{{ route('recipes.store') }}"  enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div>
                    <label for="title" class="block text-white/80 mb-2">Recipe Title</label>
                    <input type="text" id="title" name="title" required class="w-full bg-black/50 border border-[#DAA520]/30 rounded-lg px-4 py-3 text-white focus:border-[#DAA520] focus:outline-none focus:ring-1 focus:ring-[#DAA520]">
                </div>

                <div>
                    <label for="category_id" class="block text-white/80 mb-2">Category</label>
                    <select id="category_id" name="category_id" required class="w-full bg-black/50 border border-[#DAA520]/30 rounded-lg px-4 py-3 text-white focus:border-[#DAA520] focus:outline-none focus:ring-1 focus:ring-[#DAA520]">
                        <option value="" disabled selected>Select a category</option>
                        @foreach($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>



                <div>
                    <label for="ingredients" class="block text-white/80 mb-2">Ingredients (one per line)</label>
                    <textarea id="ingredients" name="content" rows="5" required class="w-full bg-black/50 border border-[#DAA520]/30 rounded-lg px-4 py-3 text-white focus:border-[#DAA520] focus:outline-none focus:ring-1 focus:ring-[#DAA520]"></textarea>
                </div>

                <div>
                    <label for="image" class="block text-white/80 mb-2">Recipe Image</label>
                    <div class="border-2 border-dashed border-[#DAA520]/30 rounded-lg p-8 text-center cursor-pointer hover:border-[#DAA520]/60 transition-colors duration-300">
                        <input type="file" id="image" name="image" accept="image/*" class="hidden" required>
                        <label for="image" class="cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto text-[#DAA520]/60" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="mt-2 text-white/80">Click to upload an image</p>
                            <p class="text-white/60 text-sm">PNG, JPG or WEBP (max. 2MB)</p>
                        </label>
                        <div id="previewContainer" class="mt-4 hidden">
                            <img id="imagePreview" class="max-h-40 mx-auto rounded" alt="Image preview" />
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="button" id="cancelBtn" class="flex-1 px-6 py-3 bg-black/40 border border-[#DAA520]/40 text-white/80 rounded-lg hover:bg-black/60 transition-colors duration-300">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 px-6 py-3 bg-[#DAA520] text-black rounded-lg hover:bg-[#B8860B] transition-colors duration-300 font-medium">
                        Submit Recipe
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Modal functionality
        const modal = document.getElementById('recipeFormModal');
        const addRecipeBtn = document.getElementById('addRecipeBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const cancelBtn = document.getElementById('cancelBtn');

        function openModal() {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100');
            modal.querySelector('.scale-95').classList.remove('scale-95');
            modal.querySelector('.scale-95').classList.add('scale-100');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0', 'pointer-events-none');
            modal.querySelector('div').classList.remove('scale-100');
            modal.querySelector('div').classList.add('scale-95');
            document.body.style.overflow = '';
        }

        addRecipeBtn.addEventListener('click', openModal);
        closeModalBtn.addEventListener('click', closeModal);
        cancelBtn.addEventListener('click', closeModal);

        // Image preview functionality
        const imageInput = document.getElementById('image');
        const previewContainer = document.getElementById('previewContainer');
        const imagePreview = document.getElementById('imagePreview');

        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                previewContainer.classList.add('hidden');
            }
        });

        // Close modal when clicking outside
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });

        // Escape key to close modal
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !modal.classList.contains('pointer-events-none')) {
                closeModal();
            }
        });
document.addEventListener("DOMContentLoaded", function() {
    let filterButtons = document.querySelectorAll('.filter-button');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active-filter'));

            this.classList.add('active-filter');

            let categoryId = this.getAttribute('data-category-id');

            fetch(`/recipes/filter/${categoryId}`)
            .then(response => response.json())
            .then(data => {
                let recipeContainer = document.getElementById('recipe-container');
                if (!recipeContainer) return;

                recipeContainer.innerHTML = '';

                data.forEach(recipe => {
                    let recipeCard = `
                        <div class="recipe-card group bg-black/40 backdrop-blur-lg rounded-2xl overflow-hidden border border-[#DAA520]/20 hover:border-[#DAA520]/40 transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <img src="/storage/${recipe.image}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"/>
                                <div class="absolute top-4 right-4 px-4 py-1 bg-[#DAA520]/80 text-black rounded-full text-sm font-medium">
                                    ${recipe.category.name}
                                </div>
                            </div>
                            <div class="p-6">
                                <h3 class="text-[#DAA520] text-xl font-semibold mb-2">${recipe.title}</h3>
                                <p class="text-white/80 mb-4">${recipe.content}</p>
                                <a href="/recipe/${recipe.id}" class="text-[#DAA520] hover:underline flex items-center gap-1">
                                    View Recipe
                                </a>
                            </div>
                        </div>`;

                    recipeContainer.innerHTML += recipeCard;
                });
            })
            .catch(error => console.error('Error fetching recipes:', error));
        });
    });
});
</script>

    </script>
</body>
</html>
