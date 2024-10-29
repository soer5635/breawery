<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4" style="height: 10vh;">
                <a href="/ingredients" class="p-6 text-gray-900 dark:text-gray-100 flex items-center justify-center h-full" style="font-size: calc(1vw + 1vh + 0.5vmin);">
                    {{ __("Ingredients") }}
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="height: 10vh;">
                <a href="/create_recipe" class="p-6 text-gray-900 dark:text-gray-100 flex items-center justify-center h-full" style="font-size: calc(1vw + 1vh + 0.5vmin);">
                    {{ __("Create Recipe") }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
