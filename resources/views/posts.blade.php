<x-layout>
    @include ('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured-card :post="$posts->first()" />

        <div class="lg:grid lg:grid-cols-2">
            @foreach ($posts->skip(1) as $post)
            <x-post-card :posts="$posts" />
            @endforeach
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card :posts="$posts" />
            <x-post-card :posts="$posts" />
            <x-post-card :posts="$posts" />
        </div>
    </main>
</x-layout>