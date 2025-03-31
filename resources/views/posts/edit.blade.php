<x-layout meta-title="{{ $post->title }}" meta-description="{{ $post->body }}">
    <div class="max-w-3xl mx-auto mt-10 p-8 bg-white dark:bg-gray-800 shadow-2xl rounded-2xl">
        <h1 class="text-center text-4xl font-extrabold text-gray-800 dark:text-gray-200 mb-6">
            ✏️ Formulario de Edición
        </h1>

        <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-6">
            @csrf 
            @method("PATCH")

            @include("posts.forms-field")

            <button 
                type="submit" 
                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 dark:from-blue-500 dark:to-blue-600 hover:from-blue-700 hover:to-blue-800 dark:hover:from-blue-400 dark:hover:to-blue-500 text-white dark:text-gray-900 font-bold py-3 px-6 rounded-xl shadow-lg transition-all duration-300 transform hover:scale-105"
            >
                ✍️ Editar
            </button>
        </form>

        <div class="mt-6 text-center">
            <a 
                href="{{ route('posts.index') }}" 
                class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-semibold transition-all duration-300"
            >
                ⬅ Volver al Blog
            </a>
        </div>
    </div>
</x-layout>
