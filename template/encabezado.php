<!DOCTYPE html>
<html lang="en">


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--CSS-->
<link rel="stylesheet" type="text/css" href="css/styles.css">
<!--ICONS-->
<link rel="stylesheet" type="text/css" href="icons/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.css">

<!--Angular-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/2.14.1/angular.min.js"></script>
<!--BOSSTRARP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--JS-->
<script type="text/javascript" src="JS/script.js"></script>


<title>CV Miguel Angel Bermudez Cote</title>
</head>

<body ng-app="">
  <div id="contenedor-principal">
    <section id="principal-jumbotron">
      <div class="jumbotron">
        <h1>Miguel Ángel Bermúdez Cote</h1>




        <p class="lead">CV realizado por Miguel Angel Bermudez Cote</p>
        <hr class="my-2">
        <p ng-hide="!isTextHidden">Desarrollar mi formacion y experiencia en una empresa que ofrezca perspectivas y
          promoción profesional, así como también compañerismo y trabajo en equipo.</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Bienvenida
        </button>
        <button type="button" class="btn btn-secondary " data-container="body" data-toggle="popover"
          data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
          ng-click="isTextHidden = !isTextHidden">
          Objetivos
        </button>



      </div>
      <div class="img">
        <img src="img/yo-nuevo01.png" alt="mi-foto" class="yo">
      </div>

    </section>
    <section id="container-menu">
      <!--ENLACES MENU-->
      <div class="menu">
        <nav>
          <a class="enlace1" href="cv.php">formación</a>
          <a class="enlace2" href="#">experiencia</a>
          <a class="enlace3" href="#">proyectos</a>
          <a class="enlace4" href="contactos.php">contactos</a>
        </nav>


      </div>
      <!--ENLACES REDES SOCIALES-->
      <div class="social">
        <a href=""><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://github.com/MiguelAngelBermudez-dev" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://mail.google.com/mail/u/1/#inbox?compose=GTvVlcSHxjbXHZxkllVjHxbKBsNlHLgxXsztRZKnFRwZnnzMhFTspzPWqXQCTWcQhBmmKLJSxlbSB"
          target="_blank"><i class="fa-brands fa-google"></i></a>
      </div>

    </section>

    <div class="clearfix">

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bienvenido compañero</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="flex items-center justify-center h-screen">
              <div class="max-w-4xl mx-auto px-6 py-12">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 animate-bounce">Bienvenido a mi portafolios
                </h1>
                <p class="text-lg md:text-xl text-white mb-12 animate-pulse">Yo soy un programador web apasionado, con
                  experiencia en front-end, back-end development y en UI/UX design.</p>
                <a href="#"
                  class="inline-block bg-white text-blue-500 hover:bg-blue-600 text-lg md:text-xl font-medium py-3 px-6 rounded-lg transition duration-300 ease-in-out animate-pulse text-decoration-none rounded-bottom rounded-top">View
                  Projects</a>
              </div>
            </div>
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>