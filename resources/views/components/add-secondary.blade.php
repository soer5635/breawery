<div>
    <h4 class="text-center font-bold w-full grow mb-2">Name of secondary ingredient</h4>
    <input type="text" name="name" class="w-full grow px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4" required>
    
   <div x-data="{ secondary_type: 'hop' }">
        <div>
            <h4 class="text-center font-bold w-full grow">Type</h4>
            <select name="type" x-model="secondary_type" class="w-full grow px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4">
                <option value="hop">Hops</option>
                <option value="herb">Herb</option>
                <option value="spice">Spice</option>
                <option value="other">Other</option>
            </select>
        </div>

        <template x-if="secondary_type === 'hop'">
            <div>
                <h4 class="text-center font-bold w-full grow">Alpha Acid (%)</h4>
                <input type="text" name="alpha_acid" class="w-full grow px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4" required>
            </div>
        </template>

        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 ">
            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800 ">
                <label for="comment" class="sr-only">Your comment</label>
                <textarea id="comment" name="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400 " placeholder="Write a comment..."></textarea>
            </div>
        </div>
   </div>
</div>