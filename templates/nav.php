<header id="header"class="header">
  <div class="header__mobile">
  <a class="header__mobile--logo" href="<?php echo site_url(); ?>">
    <picture class="header__mobile--logo--picture">
      <source
      srcset="http://localhost/wp-content/themes/portfolio/images/les-brown.jpg">
      <img
      src="http://localhost/wp-content/themes/portfolio/images/les-brown.jpg"
      srcset="http://localhost/wp-content/themes/portfolio/images/les-brown.jpg,
      http://localhost/wp-content/themes/portfolio/images/les-brown@2x.jpg 2x"
      alt="Descripción de imagen">
      <figcaption><?php bloginfo('name'); ?></figcaption>
    </picture>
  </a>
    <button id="btnMenu" class="header__mobile--btn"><i class="fa fa-bars"></i></button>
  </div>
  <nav class="header__menu--navbar">
    <ul id="navbarMenu" class="header__menu--list">
    <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
    </ul>
  </nav>
</header>
