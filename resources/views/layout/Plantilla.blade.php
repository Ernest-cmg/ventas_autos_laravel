<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Compra tu Telefono</title>
</head>
<body>


{{$u=false}}


@if (($u))
    @include("layout.MenuNavegacion")
    @yield("MenuNavegacion")

@else

    @include("layout.MenuUsuarios")
    @yield("MenuNavegacionUsuarios")

@endif










    @include("layout.presentacion")
    @yield('main')


  <div class="container">

      <main class="main mt-4 mb-4">
          <div class="row">
              <div class="col-md-10 m-auto">
                  <section class="variedad">
                      <div class="variedad_items card">
                          <h2 class="text-center mb-4">Samsung</h2>

                          <div class="contenedor_img">
                              <img src="images/samsung.jpg">
                          </div>


                      </div>
                      <div class="variedad_items card">
                          <h2 class="text-center  mb-4">Iphone</h2>

                          <div class="contenedor_img">

                              <img src="images/iphone.jpg">
                          </div>
                      </div>

                      <div class="variedad_items card">
                          <h2 class="text-center mb-4">Redmi</h2>

                          <div class="contenedor_img">
                              <img src="images/redmi.jpg">
                          </div>
                      </div>

                      <div class="variedad_items card">
                          <h2 class="text-center mb-4">Huawey</h2>

                          <div class="contenedor_img">

                              <img src="images/huewey.jpg">
                          </div>
                      </div>

                  </section>
              </div>
          </div>


      </main>

  </div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('js/javascript.js')}}"></script>

</body>
</html>
