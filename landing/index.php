<!DOCTYPE html>
<?php
   require_once("config/config.php");
   require_once("config/arrays.php");
?>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Pi Burgers Fast Food</title>

   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/estilos.css">
   <link href="fontawesome/css/all.css" rel="stylesheet">
   <link href="favicon.ico" rel="icon" type="image/ico" />

</head>
<body>
<div id='loading'> 
   <p><i class="fas fa-cheeseburger"></i>Cargando</p> 
</div>
<div id='contenido'>
   <header>
      <h1 id='logo'>Pi Burgers Fast Food</h1>

      <nav class="navbar navbar-expand-lg navbar-dark">
         <p class="navbar-brand">Pi Burgers <span>Fast Food</span></p>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="far fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="#nos" data-ancla="true" data-tiempo="1000">Nosotros</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#combos" data-ancla="true" data-tiempo="1000">Combos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#pet" data-ancla="true" data-tiempo="1000">Pet Friendly</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#rese" data-ancla="true" data-tiempo="1000">Reseñas</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#contac" data-ancla="true" data-tiempo="1000">Contacto</a>
               </li>
            </ul>
         </div>
      </nav>
   </header>
   <main>

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active" data-interval="5500" >
               <div class="carousel-caption d-block"  id='menu'>
               <h2>Conocé nuestro menú completo</h2>
               <p>¿Tentado? Te invitamos a conocer nuestro menú para que te tientes aún más </p>
               </div>
            </div>
            <div class="carousel-item" data-interval="5500">
               <div class="carousel-caption d-block">
               <h2>Pet Friendly</h2>
               <p>Amamos a nuestros amigos tanto como vos, por eso ahora pueden comer juntos  </p>
               <a href="#pet" data-ancla="true" data-tiempo="1000">Ver más</a>
               </div>
            </div>
         </div>
      </div>

      <div id='arriba'>
         <a href="#contenido" data-ancla="true" data-tiempo="1000"><i class="far fa-chevron-up"></i></a>
      </div>

      <section id='nos'>
            <h2>Nosotros</h2>
            <p>Orgullosos de generar conciencia en nuestro entorno, en Pi Burgers promovemos un impacto favorable en el presente y futuro de las personas.</p>

            <div class='row'>

            </div>

            
      </section>

      

      <section id='combos'>
            <h2>Promociones</h2>


            <div class='row' >

            </div>
      </section>

      <section id='pet'>
            <h2>Somos Pet Friendly</h2>

      </section>

      <section id='rese'>
         <h2>Nuestros clientes</h2>
         <div id='reviews' class="carousel slide " data-ride="carousel">
            <ul class="carousel-inner" >
            </ul>
         </div>

      </section>
      
      <section id='contac'>
         <h2>Contacto</h2>
         <div class='ok'><?= isset($_SESSION['ok']) ? $aOks['enviado'] : '';  ?></div>

         <div>
            <form action="contacto.php" method="post">
               <div>
                  <label >Nombre</label>
                  <input type="text" name="nombre" value='<?= isset($_SESSION['datos']['nombre']) ? $_SESSION['datos']['nombre'] : ''; ?>'>
               </div>

               <div>
                  <label >E-mail <span>*</span> </label>
                  <input type="email" name="email" value='<?= isset($_SESSION['datos']['email']) ? $_SESSION['datos']['email'] : ''; ?>'>
                  <div class='error'><?= isset($_SESSION['error']) && $_SESSION['error']==='email' ? $aErrores['email'] : '';  ?></div>
               </div>

               <div>
                  <label >Mensaje <span>*</span> </label>
                  <textarea name="msj"><?= isset($_SESSION['datos']['msj']) ? $_SESSION['datos']['msj'] : ''; ?></textarea>
                  <div class='error'><?= isset($_SESSION['error']) && $_SESSION['error']==='msj' ? $aErrores['msj'] : ''; ?></div>
               </div>

               <input type="submit" value="Enviar">
            </form>
            

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d821.0169290527973!2d-58.38087460759065!3d-34.60244914145203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacf2bfa4595%3A0xf1cc8f9822888e40!2sLavalle+975%2C+C1047AAS+CABA!5e0!3m2!1ses-419!2sar!4v1564789547515!5m2!1ses-419!2sar"
            ></iframe>
         </div>
      </section>
      

   </main>
</div>

<footer>

   <ul>
      <li><a href="https://es-la.facebook.com/">Facebook</a></li>
      <li><a href="https://twitter.com/?lang=es">Twitter</a></li>
      <li><a href="https://www.instagram.com/?hl=es-la">Instagram</a></li>
   </ul>
   
   <p>Pi Burgers &copy;. Todos los derechos reservados 2019</p>
</footer>
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animaScroll.js"></script>
<script src="js/scripts.js"></script>

<?php
   unset($_SESSION['error']);
   unset($_SESSION['ok']);
   unset($_SESSION['datos']);
?>
</body>
</html>