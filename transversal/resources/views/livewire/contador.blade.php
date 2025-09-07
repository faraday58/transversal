<div class="container mt-5 mb-5">
    <h1>Contador</h1>
    <h2>{{ $contador }}</h2>
    <button class="btn btn-primary" wire:click="incrementar">Incrementar</button>
    <button class="btn btn-secondary" wire:click="decrementar">Decrementar</button>

    <div class="mt-3">
        <a href="{{ route('ruta-ejemplo') }}" class="btn btn-link">Ir a Ruta de Ejemplo</a>


</div>
