<div>
    @foreach ($ingredients as $ingredient)
        <div class="block px-4 py-6 border border-gray-200 rounded-lg relative">
            <div class="font-bold text-blue-500 text-sm">{{ $ingredient->name }}</div>
            <div>
                {{ $ingredient->description }}
            </div>
            <div class="absolute top-0 right-0 flex flex-col space-y-1 mt-2 mr-2 w-15">
                <form method="GET" action="/ingredients/{{ $ingredient->id }}/edit">
                    @csrf
                    <button class="bg-blue-500 text-white p-1 rounded text-center">
                        <span class="font-bold">Edit</span>
                    </button>
                </form>
                <form method="POST" action="/ingredients/{{ $ingredient->id }}" id="delete-form">
                    @csrf
                    @method('DELETE')
                    <button form="delete-form" class="bg-red-500 text-white p-1 rounded">
                        <span class="font-bold">Delete</span>
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>

{{-- <form method="POST" action="/ingredients/{{ $ingredient->id }}" class="hidden" id="delete-form">
    @csrf
    @method('DELETE')

</form> --}}