<x-layout meta-title="{{ $post->title }}" meta-description="{{ $post->body }}">
    <div class="max-w-3xl mx-auto mt-8 p-8 bg-white shadow-lg rounded-xl dark:bg-gray-800 dark:text-white">

        @if(session("status"))
            <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-lg dark:bg-green-800 dark:text-green-300 shadow-md">
                {{ session("status") }}
            </div>
        @endif

        <h1 class="text-4xl font-bold text-red-600 dark:text-white mb-4 text-center">
            {{ $post->title }}
        </h1>

        <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
            {{ $post->body }}
        </p>

        <div class="mt-8 flex justify-between items-center border-t pt-4">
            <a href="{{ route('posts.index') }}" 
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md shadow-md transition duration-200 ease-in-out transform hover:scale-105">
                ⬅ Back to Blog
            </a>
            
            <div class="flex items-center space-x-6">
                <a href="{{ route('posts.edit', $post) }}"
                    class="text-yellow-500 hover:text-yellow-600 font-medium transition duration-200 ease-in-out transform hover:scale-105">
                    ✏️ Edit
                </a>

                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="text-red-600 hover:text-red-700 font-medium transition duration-200 ease-in-out transform hover:scale-105">
                        🗑️ Delete
                    </button>
                </form>
            </div>
            
        </div>

    </div>
</x-layout>
