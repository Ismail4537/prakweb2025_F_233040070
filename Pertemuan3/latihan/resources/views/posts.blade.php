<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <h1 class="text-5xl font-bold">Daftar Posts</h1>

    @foreach ($posts as $post)
        <article>
            <h2 class="font-bold underline"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</x-layout>