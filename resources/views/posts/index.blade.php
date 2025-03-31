<x-layout meta-title="Blog" meta-description="Blog page">
    <div class="max-w-4xl mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg dark:bg-gray-800">

        @if(session("status"))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md dark:bg-green-900 dark:text-green-300">
                {{ session("status") }}
            </div>
        @endif

        <div class="mx-auto mt-1 max-w-3xl p-6 bg-white shadow-lg rounded-lg dark:bg-gray-800">
            <h1 class="text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
                Blog
            </h1>
        </div>
       
        <div class="mb-6 text-right">
            <a href="{{ route('posts.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition duration-300 hover:shadow-lg">
                + Create new Post
            </a>
        </div>
        

        @foreach ($posts as $post)
            <div class="mb-6 p-6 bg-gray-100 shadow-md rounded-lg dark:bg-gray-700 transition duration-300 hover:shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">
                    <a href="{{ route('posts.show', $post) }}" class="hover:underline">
                        {{ $post->title }}
                    </a>
                </h2>
            </div>
        @endforeach

    </div>
</x-layout>
