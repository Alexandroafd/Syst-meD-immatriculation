<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('admin.plaque.show', ['slug' => $plaque->getSlug(), 'plaque' => $plaque->id]) }}">
                {{ $plaque->immatriculation }}
            </a>
        </h5>
        <p class="card-text">{{ $plaque->name }} {{ $plaque->prenom }}</p>
        <p class="card-text">({{ $plaque->city }})</p>
        <div class="text-primary fw-bold" style="font-size: 1.4rem;">
            {{ $plaque->type }}
        </div>
    </div>
</div>
