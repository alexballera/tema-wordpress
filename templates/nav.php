<header id="header"class="header">
  <div class="header__mobile">
    <p class="header__mobile--logo">Logo</p>
    <button id="btnMenu" class="header__mobile--btn"><i class="fa fa-bars"></i></button>
  </div>
  <nav class="header__menu--navbar">
    <ul id="navbarMenu" class="header__menu--list">
    <?php wp_list_pages(array('title_li' => '')); ?>
    </ul>
  </nav>
</header>
