<x-card>
    <x-card-body>
        <h5>
            <a href="{{ route('blog.show', $post->id) }}">
                {{ $post->title }}
            </a>
        </h5>

        <div class="smalltext-muted">
            {{ now()->format('d.m.Y H:i') }}
        </div>
    </x-card-body>
</x-card>