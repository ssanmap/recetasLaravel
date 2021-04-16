<div class="col-md-4 mt-2">
    <div class="card shadow">
        <img src="/storage/{{ $receta->imagen }}" class="card-img-top" alt="">
        <div class="card-body">
            <h3 class="card-title">{{$receta->titulo}}</h3>
            <div class="meta-receta d-flex justify-content-between">
                @php
                    $fecha = $receta->created_at
                @endphp
                <p class="text-primary fecha font-weight-bold"><fecha-receta fecha="{{ $fecha}}"></fecha-receta></p>
                <p>{{ count( $receta->likes)  }} Les Gusto </p>
            </div>
            <p class="card-text">
                <p>{{ Str::words( strip_tags( $receta->preparacion) , 15, ' .....')  }}</p>

                <a class="btn btn-primary d-block btn-receta" href="{{ route('recetas.show', ['receta' => $receta->id ])}}">
                Ver Receta
                </a>
            </p>
        </div>
    </div>
    </div>
