<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipe Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50 text-stone-800 font-serif">
    <div class="max-w-4xl mx-auto p-6 md:p-8">
        <div class="recipe-details bg-white border border-stone-200 rounded-lg shadow-sm overflow-hidden">
            <div class="p-6 md:p-8">
                <h1 class="text-amber-600 text-3xl font-bold mb-2">{{ $recipe->title }}</h1>
                <div class="text-amber-500 text-sm font-medium uppercase tracking-wider mb-6">{{ $recipe->category->name }}</div>

                <div class="mb-8 rounded-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="w-full h-auto object-cover"/>
                </div>

                <div class="space-y-6">
                    <p class="text-stone-700 leading-relaxed">{{ $recipe->content }}</p>

                    <div class="border-t border-stone-100 pt-6 mt-8">
                        <div class="flex items-center text-stone-500 text-sm">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zm0 16a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                                </svg>
                                Prep time: {{ $recipe->prep_time ?? '30 mins' }}
                            </span>
                            <span class="mx-3">•</span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                                Cook time: {{ $recipe->cook_time ?? '45 mins' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
