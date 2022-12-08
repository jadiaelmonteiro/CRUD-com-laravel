<x-Layout title="Temporada {!! $series->nome !!}">
    <ul class="list-group">

        @foreach ($seasons as $season)
        <li class="list-group-item d-flex justify-content-between align-items-center">

        <a href="{{ route('episodes.index', $season->id) }}">
            Temporada {{$season->number}}
        </a>

            <div class="badge bg-secondary">
                {{ $season->episodes->count() }}
            </div>
        </li>
        @endforeach
    </ul>
</x-Layout>