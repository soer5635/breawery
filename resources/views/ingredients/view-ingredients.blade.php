<div>
    @foreach ($ingredients as $ingredient)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
            <div class="font-bold text-blue-500 text-xl mt-4">
                {{ $ingredient->name }}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <div class="col-start-5 flex justify-end space-x-2 self-start">
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
                @php $objects = json_decode($ingredient->object) @endphp
                @foreach ($objects as $key => $object)
                    @if (!empty($object))
                        <div class="p-2 border rounded w-full md:col-span-2">
                            {{$key}}: {{ $object }}
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="p-2 mt-4 mb-4 border rounded break-words">
                {{ $ingredient->description }}
            </div>
        </div>
    @endforeach
</div>
