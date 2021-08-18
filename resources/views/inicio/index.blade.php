<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body style="background-color:#bbb;">

  <div class="login-container lightmode">
          <div class="col-auto text-center">
              <h1>
                  <label> Proyecto - DB RELACIONAL</label>
                </h1>
            </div>

           <div class="col-auto text-center">
               <h4>
                   <label>(FRONTEND Y BACKEND)</label>
                </h4>
            </div>
        

        <div class="row">
            <div class="col text-center">
                <h2>
                <a data-toggle="collapse" href="#collapse_about_me" role="button" aria-expanded="false">SOBRE MÍ</a>
                </h2>

                <div class="collapse" id="collapse_about_me">
                    <div class="card card-body" style="background-color:#888;">
                        Hola, soy Jarniel D. Perez Peñate, antes que nada, soy programador junior, hace poco salí de la U aunque estoy imerso en varios procesos de aprendizaje.
                        Descubrí el mundo de la programación en mi carrera universitaria, 
                        pero no fue hasta 9° semestre que me decidí a ser programador (si, un poco tarde), 
                        desde entonces he estado dedicado a aprender tecnologías que están acordes a mi perfil de programador.
                        Algo que quiero y necesito es estar dentro de un equipo de desarrollo del cual poder aprender y aportar mis conocimientos,
                        donde pueda crecer como programador y adquirir nuevos conocimientos en cuanto a los procesos de desarrollo pues mi experiencia es relativamente poca.
                        sé trabajar en equipo, sé aprender rápido, tengo capacidades de aprendizaje autónomo y puedo resaltar la responsabilidad como mi mayor virtud.
                        
                    </div>
                </div>
            </div>

            <div class="col text-center">
            <h2>
                <a data-toggle="collapse" href="#collapse_experience" role="button" aria-expanded="false">ESTUDIOS REALIZADOS Y EXPERIENCIA</a>
                </h2>
                <div class="collapse text-left" id="collapse_experience">
                    <div class="card card-body" style="background-color:#888;">
                        <b>ESTUDIOS:</b><br>
                        Técnico en Sitemas - Corporación Unificada Nacional de Educación Superior (CUN)<br>
                        Tecnólogo en Sistemas - Corporación Unificada Nacional de Educación Superior (CUN)<br>
                        Ingeniero de Sistemas - Corporación Unificada Nacional de Educación Superior (CUN)<br><br>
                        
                        <b>EXPERIENCIA:</b><br>
                        Summerget S.A.S. -> 6 meses
                        Aplicativo web con diseño.<br>
                        Actividades BACKEND (LARAVEL):
                        Modelado de DB, migraciones, inserción de datos, pruebas con seeders, consultas sql, interfaces de administrador.<br>
                        Activiades FRONTEND (ANGULAR):
                        diseño de plantillas.<br>
                        
                        <b>NOTA:</b>El siguiente botón te llevará a la muestra de mis habilidades, es una DB relacional,
                        debes crear una base de datos en tu gestor de bases de datos (xampp, laragon entre otras..) 
                        llamada laravel y correr las migraciones con el comando - php artisan migrate - en la ruta de la carpeta del proyecto.
                        Luego, debes llenar datos para ver la funcionalidad de la DB, 
                        iniciando por categorías, clientes, empleados y luego servicios y luego las restantes sin importar el orden.
                        <b>(si accedes sin crear la base de datos te dará error)</b>

                        <a href="{{route('categoria.index')}}" class="btn btn-danger btn-sm">Acceder</a>
                    </div>
                </div>
            </div>

            

            <div class="col text-center">
            <h2>
                <a data-toggle="collapse" href="#collapse_today" role="button" aria-expanded="false">PRESENTE Y FUTURO</a>
                </h2>

                <div class="collapse" id="collapse_today">
                    <div class="card card-body" style="background-color:#888;">
                        Actualmente estoy en el programa MisiónTic del gobierno de Colombia, he aprendido algunos lenguajes de programación como python, java y js,
                        todos mis conocimientos serían los siguientes:  html, css, php, python, java, js, sql, laravel y angular.
                        debo aclarar que en todas las tecnologías mencionadas mi nivel es junior o quizá inferior aunque estoy 
                        estudiando cada una de ellas para fortalecer y afianzar mis conocimientos.
                    </div>
                </div>
            </div>
        </div>

                


    
        <div class="login-box animated fadeInDown">
            @yield('contenido')
        </div>

    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>