<x-layout>
    <x-slot name="title">Risultati Ricerca</x-slot>

    <h2 class="mb-4">Anime Trovati</h2>
    <div class="row">
        @foreach ($results['data'] as $result)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0 overflow-hidden text-white bg-dark">
                    <img src="{{ $result['images']['jpg']['image_url'] }}" class="card-img-top" alt="{{ $result['title'] }}" style="height: 350px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{ $result['title'] }}</h5>
                        <a href="{{ route('rotta3', ['id' => $result['mal_id']]) }}" class="btn btn-outline-info btn-sm w-100">
                            Vedi Dettagli
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>