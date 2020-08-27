
@extends("../layouts.app")

@section('content')

    @guest
        <div class="container mt-4">
            <h1 class="text-center mt-4 mb-4">Listado de Accesorios</h1>
            @foreach($accesorios as $el)
                <div class="row">
                    <div class="col-md-12 m-auto">
                        <div class="card bg-dark text-white mt-4 mb-4">
                            <div class="card-header text-center">
                                <h2>{{$el->nombre}}</h2>
                            </div>
                            <div class="card-body padre">
                                <p class="mt-4">Presio: {{$el->presio}}</p>
                                <p class="mt-4">Características: {{$el->caracteristicas}}</p>
                                <div class="img_contenedor">
                                    <img src='images/upload/{{$el->fotos}}'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    @else

        <div class="container mt-4">
            <h1 class="text-center mt-4 mb-4">Listado de Accesorios</h1>
            @foreach($accesorios as $el)
                <div class="row">
                    <div class="col-md-12 m-auto">
                        <div class="card bg-dark text-white mt-4 mb-4">
                            <div class="card-header text-center">
                                <h2>{{$el->nombre}}</h2>
                            </div>
                            <div class="card-body padre">
                                <p class="mt-4">Presio: {{$el->presio}}</p>
                                <p class="mt-4">Características: {{$el->caracteristicas}}</p>
                                <div class="img_contenedor">
                                    <img src='images/upload/{{$el->fotos}}'>
                                </div>
                                <div class="gestion">
                                    <a class="btn btn-success" href="{{route('accesorios.edit', $el->id)}}">Actualizar</a>
                                    <a class="btn btn-danger" href="{{route('accesorios.edit', $el->id)}}">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



    @endguest










@endsection


