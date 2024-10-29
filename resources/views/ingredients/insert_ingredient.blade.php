<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Insert new ingredient') }}
        </h2>
    </x-slot>   
   <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md mt-8" x-data="{ selected: 'fermentables' }">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/ingredients/insert_ingredient" method="POST">
            @csrf
            <div class="relative inline-block text-left w-auto">
                <select name="type" class="rounded-lg" x-model="selected">
                    <option value="fermentables">Fermentables</option>
                    <option value="secondary">Secondary</option>
                    <option value="yeast">Yeast</option>
                </select>
            </div>
            <template x-if="selected === 'fermentables'">
                <x-add-fermentable></x-add-fermentable>
            </template>
            <template x-if="selected === 'secondary'">
                <x-add-secondary></x-add-secondary>
            </template>
            <template x-if="selected === 'yeast'">
                <x-add-yeast></x-add-yeast>
            </template>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Insert Ingredient</button>
            </div>
        </form>
    </div>
</x-app-layout>
