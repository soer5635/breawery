<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Ingredients') }}
            </h2>
            <a href="/ingredients/insert_ingredient" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                {{ __('Add Ingredient') }}
            </a>
        </div>
    </x-slot>   

    <div class="space-y-4">
        @include('ingredients.view-ingredients', ['ingredients' => $ingredients])
    </div>
</x-app-layout>