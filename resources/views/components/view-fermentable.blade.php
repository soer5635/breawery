<div>
    @foreach ($ingredients as $ingredient)
        <a href="/ingredients/{{ $ingredient->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg relative">
            <div class="font-bold text-blue-500 text-sm">{{ $ingredient->name }}</div>
            <div>
            {{ $ingredient->description }}
            </div>
            <div class="absolute top-0 right-0 flex flex-col space-y-1 mt-2 mr-2 w-15">
                <button class="bg-blue-500 text-white p-1 rounded">
                    <span class="font-bold">Edit</span>
                </button>
                <button class="bg-red-500 text-white p-1 rounded">
                    <span class="font-bold">Delete</span>
                </button>
            </div>
        </a>
    @endforeach
</div>