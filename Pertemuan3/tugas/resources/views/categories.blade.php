<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <h1 class="text-5xl font-bold">Daftar Posts</h1>

    @foreach ($categories as $category)
        <br>
        <article>
            <h2 class="font-bold underline">{{ $category->name }}</h2>
        </article>
        <br>
    @endforeach
</x-layout>