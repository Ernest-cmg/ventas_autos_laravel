
@extends("../layouts.app")

@section('content')

    @guest

        <div class="container mt-4">

            <p class="text-white text-center" style="font-size: 50px"> Usted no tiene acceso a esta página. Sólo para administradores !!!</p>


        </div>


    @else
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card bg-dark mt-4 mb-4">
                        <div class="card-header">
                            <h2 class="text-white text-center">Datos del Accesorio</h2>
                        </div>

                        <div class="card-body">
                            <form class="form" action="{{url('/accesorios')}}"  method="post" enctype="multipart/form-data" id="form_ac">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre_ac">
                                    {{csrf_field()}}

                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="presio" placeholder="Precio"  id="presio_ac">

                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="caracteristicas" placeholder="Características"  id="caracteristicas"></textarea>

                                </div>

                                <div class="form-group text-white d-none">
                                    <label for="exampleFormControlFile1 ">Escoger imagen...</label>
                                    <input type="file" class="form-control-file" name="imagen_producto" id="imagen_producto">
                                </div>
                                <div class="cargarImagen mt-4 mb-4" id="cargarImagen">

                                    <p class="texto text-white"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12z"/>
                                            <path d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                                            <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg> Escoger Imagen...</p>

                                    <img id="img" class="imagen">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block" name="btn-agregar">Agregar Accesorio</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endguest



@endsection

