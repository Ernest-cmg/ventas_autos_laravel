@extends("../layouts.app")

@section('content')

    @guest
        <div class="container mt-4">
            <h1 class="text-center text-white mt-4 mb-4">Listado de Telefónos</h1>
            @foreach($telefonos as $el)
                <div class="row">
                    <div class="col-md-12 m-auto">
                        <div class="card bg-dark text-white mt-4 mb-4">
                            <div class="card-header text-center">
                                <h2>{{$el->marca}}</h2>
                            </div>
                            <div class="card-body">
                                <p class="mt-4">Modelo: {{$el->modelo}}</p>
                                <p class="mt-4">Procesador: {{$el->procesador}}</p>
                                <p class="mt-4">Almacenamiento: {{$el->almacenamiento}}</p>
                                <p class="mt-4">Memoria RAM: {{$el->memoria_ram}}</p>
                                <p class="mt-4">Otras características: {{$el->otros}}</p>
                                <p class="mt-4">Presio: {{$el->presio}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @else

        <div class="container mt-4">
            <h1 class="text-center text-white mt-4 mb-4">Listado de Telefónos</h1>
            @foreach($telefonos as $el)
                <div class="row">
                    <div class="col-md-12 m-auto">
                        <div class="card bg-dark text-white mt-4 mb-4">
                            <div class="card-header text-center">
                                <h2>{{$el->marca}}</h2>
                            </div>
                            <div class="card-body">
                                <p class="mt-4">Modelo: {{$el->modelo}}</p>
                                <p class="mt-4">Procesador: {{$el->procesador}}</p>
                                <p class="mt-4">Almacenamiento: {{$el->almacenamiento}}</p>
                                <p class="mt-4">Memoria RAM: {{$el->memoria_ram}}</p>
                                <p class="mt-4">Otras características: {{$el->otros}}</p>
                                <p class="mt-4">Presio: {{$el->presio}}</p>
                                <div class="gestion">
                                    <a class="btn btn-success" href="{{route('telefonos.edit', $el->id)}}">Actualizar</a>
                                    <a class="btn btn-danger" href="{{route('telefonos.edit', $el->id)}}">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @endguest







@endsection






