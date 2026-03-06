<x-layout>
    <x-slot name="title">Esplora i Generi</x-slot>

    <h2 class="mb-4">Tutti i Generi</h2>
    <div class="d-flex flex-wrap gap-3">
        @foreach ($results['data'] as $result)
            <a href="{{ route('rotta2', ['id' => $result['mal_id']]) }}" 
               class="btn btn-outline-info shadow-sm px-4 py-2">
                {{ $result['name'] }} 
                <span class="badge bg-light text-dark ms-2">{{ $result['count'] }}</span>
            </a>
        @endforeach
    </div>
</x-layout>