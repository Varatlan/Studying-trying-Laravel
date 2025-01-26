<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md ">
        <strong class="mb-1 text-3xl track font-bold text-gray-900">{{ $post['title'] }}</strong>
        </a>
        <img src="/img/Notice.jpg" alt="notice" width="450">
        <div>
            By
            <a href="/authors/{{ $post->author->username }}"class="hover:underline text-base text-gray-500">
                {{ $post->author->name }}</a>
            in
            <a
                href="/categories/{{ $post->category->slug }}"class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>|
            {{ $post->created_at->diffForHumans() }}
        </div class="text-base text-gray-500 ">
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts/" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts </a>

    </article>

</x-layout>
