<div>
    @foreach ($ingredients as $ingredient)
        <a href="/ingredients/{{ $ingredient->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
            <div class="font-bold text-blue-500 text-sm">{{ $ingredient->name }}</div>
            <div>
                {{ $ingredient->description }}
            </div>
        </a>
    @endforeach
</div>