<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="selectivizr.js"></script>
    <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <!--[if lt  IE  8]>
        <p  class="browsehappy">
                  Estás usando  un  navegador <strong>desactualizado</strong>.
                  Por favor <a  href="http://browsehappy.com/">actualiza  tu  navegador</a>
                  Para  mejorar la  experiencia..
        </p>
    <![endif]-->
    <header id="header"class="header">
      <div class="header__mobile">
        <p class="header__mobile--logo">Logo</p>
        <button id="btnMenu" class="header__mobile--btn"><i class="fa fa-bars"></i></button>
      </div>
      <nav class="header__menu--navbar">
        <ul id="navbarMenu" class="header__menu--list">
          <li class="header__menu--list--item"><a href="#">Inicio</a></li>
          <li class="header__menu--list--item"><a href="#">Acerca de</a></li>
          <li class="header__menu--list--item"><a href="#">Blog</a></li>
          <li class="header__menu--list--item"><a href="#">Contacto</a></li>
        </ul>
      </nav>
    </header>
    <article class="content">
      <section class="content__video">
        <!-- Video desde archivos -->
        <div class="container">
          <div class="video-container">
            <video id="video" poster="http://localhost/wp-content/themes/portfolio/images/les-brown.jpg">
              <source src="http://localhost/wp-content/themes/portfolio/videos/less-brown.mp4"> Lo sentimos, su navegador no soporta <code>video</code> incrustados, pero no se preocupe , puede <a href="./videos/less-brown.mp4">descargarlo</a> y verlo con su reproductor de video favorito!
            </video>
          </div>
        </div>
      </section>
      <section class="content__features">
        <div class="container">
          <div class="content__features--block">
            <h3 class="content__features--block--title">Feature 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sunt labore distinctio, magnam voluptas assumenda nostrum necessitatibus aliquid minus totam debitis unde accusantium explicabo et officia laborum alias vel expedita.</p><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi voluptate deserunt velit ea, impedit fugit aliquid quam dolorem aut, odit porro voluptas harum. Doloremque necessitatibus, debitis neque officiis animi eum.</p>
          </div>
          <div class="content__features--block">
            <h3 class="content__features--block--title">Feature 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae laboriosam eius ab optio commodi repudiandae at eveniet quibusdam, saepe voluptas fugiat unde nulla sapiente non excepturi nam ipsum adipisci ducimus.</p><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eum distinctio ipsam, dolores enim voluptatibus obcaecati! Totam, distinctio, optio. Enim numquam, consectetur, architecto temporibus saepe adipisci amet quibusdam vel iste?</p>
          </div>
          <div class="content__features--block">
            <h3 class="content__features--block--title">Feature 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam aperiam esse repellendus cupiditate blanditiis velit provident! Porro mollitia vitae esse deleniti dicta ea, explicabo neque? Nam architecto eos odit nobis!</p><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aspernatur autem deleniti quos accusantium repellat voluptatibus eligendi repellendus distinctio iusto est praesentium modi illum in totam voluptate, quaerat nam similique?</p>
          </div>
          <div class="content__features--block">
            <h3 class="content__features--block--title">Feature 4</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officiis vitae, voluptatibus a necessitatibus libero nemo voluptate dolor voluptatem. A voluptate, quia! Magnam neque perspiciatis illo minus suscipit, non laborum?</p><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi perferendis facilis, autem expedita neque mollitia nobis velit voluptatibus quos fugit assumenda odit. Natus facere fugit facilis magnam maiores, ipsa voluptate.</p>
          </div>
        </div>
      </section>
      <section class="content__text">
        <div class="container content__text--image">
          <picture >
            <source
            media="(min-width: 768px)"
            srcset="http://localhost/wp-content/themes/portfolio/images/img01-desktop.jpg">
            <source
            media="(min-width: 320px)"
            srcset="http://localhost/wp-content/themes/portfolio/images/img01-mobile.jpg,
            images/img01-mobile@2x.jpg 2x">
            <img
            src="http://localhost/wp-content/themes/portfolio/images/img01-mobile.jpg"
            srcset="http://localhost/wp-content/themes/portfolio/images/img01-mobile.jpg,
            http://localhost/wp-content/themes/portfolio/images/img01-mobile@2x.jpg 2x"
            alt="Descripción de imagen">
          </picture>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt non dicta sequi sed est, tempora ullam neque error, nesciunt illo magnam vel provident voluptas eligendi ea sapiente quae, praesentium voluptatem.
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt non dicta sequi sed est, tempora ullam neque error, nesciunt illo magnam vel provident voluptas eligendi ea sapiente quae, praesentium voluptatem.
          </p>
        </div>
      </section>
    </article>
    <!-- Contenido hasta aquí -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    <script src="http://localhost/wp-content/themes/portfolio/scripts/vendors/jquery-1.11.3.min.js"></script>
    <script src="http://localhost/wp-content/themes/portfolio/scripts/vendors/modernizr-2.8.3.min.js"></script>
    <script src="http://localhost/wp-content/themes/portfolio/scripts/vendors/retina.min.js"></script>
    <script src="http://localhost/wp-content/themes/portfolio/scripts/vendors/selectivizr.js"></script>
    <script src="http://localhost/wp-content/themes/portfolio/scripts/index.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>