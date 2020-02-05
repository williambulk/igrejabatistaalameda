<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- METAS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <!-- TÍTULO -->
    <title>
      <?php if ( is_category() ) {
        echo 'Categoria de &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_tag() ) {
        echo 'Arquivo de &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_archive() ) {
        wp_title(''); echo ' Arquivo | '; bloginfo( 'name' );
      } elseif ( is_search() ) {
        echo 'Buscar por &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
      } elseif ( is_home() || is_front_page() ) {
        bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
      }  elseif ( is_404() ) {
        echo 'Erro 404 - Não Encontrado | '; bloginfo( 'name' );
      } elseif ( is_single() ) {
        wp_title('');
      } else {
        echo wp_title();
      } ?>
    </title>
    <!-- IMPORTAÇÃO DOS ÍCONES-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- IMPORTAÇÃO DO MATERIALIZE -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/materialize.min.css"  media="screen,projection"/>
    <!-- IMPORTAÇÃO DO STYLE.CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css"  media="screen,projection"/>
    <!-- IMPORTAÇÃO DO ANIMATE CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.min.css"  media="screen,projection"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.2/bootstrap-table.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <link href="<?php bloginfo('template_url') ?>/js/dist/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <!-- WP PINGBACK -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- WP HEAD -->
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146430149-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-146430149-1');
    </script>
  </head>
  <body>

  <!-- HEADER --> 
  <?php require_once "wp-content/themes/alameda/js/mobile-detect/Mobile_Detect.php"; ?>
  <?php $detect = new Mobile_Detect; ?>

  <!-- Modal iOS -->
  <?php if( $detect->isiOS() ){ ?>
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h3 class="f30m">Você já baixou o nosso aplicativo?</h3>
      <p>Fique por dentro das novidades da nossa Igreja e receba as notificações dos próximos eventos e conteúdos.</p>
    </div>
    <div class="modal-footer center">
      <a href="https://apps.apple.com/br/app/id1490099589" class="modal-close waves-effect waves-green center white-text btn">Clique aqui para Baixar</a>
    </div>
  </div>
  <?php } ?>
  <!-- Modal Android -->
  <?php if( $detect->isAndroidOS() ){ ?>
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h3 class="f30m">Você já baixou o nosso aplicativo?</h3>
      <p>Fique por dentro das novidades da nossa Igreja e receba as notificações dos próximos eventos e conteúdos.</p>
    </div>
    <div class="modal-footer center">
      <a href="https://play.google.com/store/apps/details?id=br.com.raise.app5845&hl=pt" class="modal-close waves-effect waves-green center white-text btn">Clique aqui para Baixar</a>
    </div>
  </div>
  <?php } ?>

  <!-- NAVBAR -->
  <div class="navbar-fixed">
    <nav class="navegacao invisible z-depth-0 above-all">
      <div class="container">
        <div class="nav-wrapper">
          <a href="/" class="brand-logo">
            <img src="<?php bloginfo('template_url') ?>/img/logo/logo.png" />
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?> 
          </ul>
          <main class="hide-on-large-only">
            <a class="toggle-overlay"><i class="small material-icons">menu</i></a>
          </main>
        </div>
      </div>
    </nav>
  </div>
  <!-- MENU MOBILE -->
  <aside>
    <div class="outer-close toggle-overlay">
      <a class="white-text right close"><i class="margin-clear small material-icons">clear</i></a>
    </div>
    <nav class="mobile-menu">
      <ul>
        <?php wp_nav_menu( array( 'theme_location' => 'new-menu-mobile' ) ); ?>
      </ul>
    </nav>
  </aside>