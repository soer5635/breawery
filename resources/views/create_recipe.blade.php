
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Recipe') }}
        </h2>
    </x-slot>   
   <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md mt-8">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/create_recipe" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold">Recipe Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <label for="title" class="block text-gray-700 font-bold mt-4">Batch Size (L)</label>
                <input type="number" id=batch_size name="batch_size" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <h3 class="text-3xl font-semibold text-gray-700 dark:text-gray-200 mt-7 mb-5">Ingredients</h3>
                <x-dynamic-input :ingredients="$ingredients['fermentables'] ??[]">Fermentables</x-dynamic-input>
                <x-dynamic-input :ingredients="$ingredients['secondary'] ??[]">Secondary</x-dynamic-input>
                <x-dynamic-input :ingredients="$ingredients['yeast'] ??[]">Yeast</x-dynamic-input>
            </div>
            <div class="mb-4">
                <h3 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mt-7 mb-5">Instructions</h3>
                <x-dynamic-instructions>Insert step title</x-dynamic-instructions>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Create Recipe</button>
            </div>
        </form>
    </div>
</x-app-layout>
