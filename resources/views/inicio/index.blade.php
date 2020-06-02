<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>
        <!-- META SECTION -->
        <title>@yield('titulo')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href='{{url("/admin-lte")}}/favicon.ico' type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href='{{url("/admin-lte")}}/css/theme-default.css'/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>

        <div class="login-container lightmode">
          <h1>
          <label> Proyecto final de Ingeniería Aplicada</label>
        </h1>
        <h2>
        <label> Jarniel D. Perez Peñate</label>  <label> --  Jereys D. Paternina Arroyo</label>
        </h2>
        <h2>
        <label> Ingeniería de Sistemas X</label>
        </h2>
        <div>

          <td>

            <a>ACCEDER</a><a href="{{route('categoria.index')}}" class="btn btn-danger btn-sm">Menú</a>
        </td>
        </div>
            <div class="login-box animated fadeInDown">
                @yield('contenido')
            </div>

        </div>

    </body>
</html>
