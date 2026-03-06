<x-layout>
    <x-slot name="title text-truncate">{{ $result['data']['title'] }}</x-slot>

    <div class="row mt-5 p-4 bg-dark">
        <div class="col-md-4 text-center">
            <img src="{{ $result['data']['images']['jpg']['large_image_url'] }}" 
                 class="img-fluid " 
                 alt="{{ $result['data']['title'] }}">
        </div>
        <div class="col-md-8">
            <h1 class="display-4 fw-bold text-white">{{ $result['data']['title'] }}</h1>
            <hr>
            <div class="mb-3">
                <span class="badge bg-info text-dark">Voto: {{ $result['data']['score'] ?? 'N/D' }}</span>
                <span class="badge bg-warning text-dark">Popolarità: #{{ $result['data']['popularity'] ?? 'N/D' }}</span>
            </div>
            <h4>Sinossi</h4>
            <p class="lead text-muted text-white-50">
                {{ $result['data']['synopsis'] ?? 'Nessuna descrizione disponibile per questo anime.' }}
            </p>
            <a href="{{ route('rotta1') }}" class="btn btn-outline-info mt-3">Torna Alla Categoria</a>
        </div>
    </div>
</x-layout>