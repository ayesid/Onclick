<div class="card shadow-sm">
    @isset($titulo)
        <div class="card-header bg-primary rounded-top">
            <h1 class="text-white">{{ $titulo }}</h1>
        </div>
    @endisset
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
