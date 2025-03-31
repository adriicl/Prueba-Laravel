<div class="mb-4">
    <label for="title" class="block text-lg font-semibold text-gray-700 dark:text-gray-300">Title</label>
    <input 
        type="text" 
        id="title" 
        name="title" 
        value="{{ old('title', $post->title) }}" 
        class="mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
    >

    @error('title')
        <span class="text-red-500 text-sm mt-1 block">{{$message}}</span>
    @enderror
</div>

<div class="mb-4">
    <label for="body" class="block text-lg font-semibold text-gray-700 dark:text-gray-300">Body</label>
    <textarea 
        name="body" 
        id="body" 
        rows="5" 
        class="mt-1 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white"
    >{{ old('body', $post->body) }}</textarea>

    @error('body')
        <span class="text-red-500 text-sm mt-1 block">{{$message}}</span>
    @enderror
</div>
