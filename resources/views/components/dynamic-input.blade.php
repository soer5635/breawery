<div x-data="{inputs: ['']}">
    <label class="block text-gray-700 font-bold text-2xl">{{ $slot }}</label>
    <div id="{{ $slot }}" class="mb-2">
        <div class="flex flex-col items-center">
            <div class="flex w-full">
                <h4 class="text-center font-bold w-full grow">Ingredient</h4>
                <h4 class="text-center font-bold w-1/5 grow">Amount (g)</h4>
            </div>
        </div>
        <div class="flex flex-col items-center mb-2">
            <template x-for="(input, index) in inputs" :key="index">
                <div class="flex w-full">
                    <select x-model="inputs[index]" name="ingredients[]" class="w-full grow mt-4 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Select Ingredient</option>
                        @foreach($ingredients as $ingredient)
                            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" x-model="inputs[index]" name="amount[]" class="w-1/5 grow mt-4 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 ml-4" required>
                    <template x-if="inputs.length > 1">
                        <button @click.prevent="inputs.splice(index, 1)" class="text-blue-500 flex-none mx-3 text-2xl">-</button>
                    </template>
                </div>
            </template>
        </div>
    </div>
    <button @click.prevent="inputs.push('')" class="text-blue-500 text-2xl mb-5">+</button>
</div>