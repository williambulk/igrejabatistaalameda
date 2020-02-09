<?php
/**
 * Template para exibicao do rodapé da página inicial.
 */
?>

<!-- FOOTER -->
<footer class="page-footer">
  <div class="container">
    <?php $rodape = array('post_type' => 'rodape', 'post_status' => 'publish', 'order' => 'asc', 'posts_per_page' => 1);
      $rodape = new WP_Query( $rodape );
        if ( $rodape->have_posts() ) : ?>
          <?php while ( $rodape->have_posts() ) : $rodape->the_post(); ?>
          <div class="row">
            <div class="col l4 s12 center-mobile">
              <?php the_field('texto_institucional'); ?>
            </div>
            <div class="col l2 push-l1 hide-on-med-and-down">
              <?php the_field('links_do_menu'); ?>
            </div>
            <div class="col l3 s12 push-l1 center-mobile">
              <?php the_field('fale_conosco'); ?>
            </div>
            <div class="col l1 right hide-on-med-and-down">
              <?php the_field('redes_sociais'); ?>
            </div>
            <div class="col s12 hide-on-large-only">
              <h3 class="white-text f23 center mb0m">Redes Sociais</h3>
              <ul class="col s6 push-s3">
                <li class="col s4">
                  <a href="http://facebook.com/igrejaBatistaAlameda" target="blank">
                    <img class="image-center" src="<?php bloginfo('template_url'); ?>/img/icons/facebook.png" alt="Facebook da Igreja Batista Alameda" width="32" height="32">
                  </a>
                </li>
                <li class="col s4">
                  <a href="http://instagram.com/igrejaBatistaAlameda" target="blank">
                    <img class="image-center" src="<?php bloginfo('template_url'); ?>/img/icons/instagram.png" alt="Instagram da Igreja Batista Alameda" width="32" height="32">
                  </a>
                </li>
                <li class="col s4">
                  <a href="http://bit.ly/AlamedaYoutube" target="blank">
                    <img class="image-center" src="<?php bloginfo('template_url'); ?>/img/icons/youtube.png" alt="Canal do YouTube da Igreja Batista Alameda" width="44" height="32">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <?php endwhile; ?>
          <?php else : ?>
        <?php endif; ?>
      <?php wp_reset_query();?>
  </div>
  <div class="footer-copyright">
    <div class="container center hide-on-med-and-down">
      Igreja Batista Alameda © <?php echo date('Y'); ?> - Todos os direitos reservados
    </div>
    <div class="container center hide-on-large-only">
      Igreja Batista Alameda © <?php echo date('Y'); ?></div>
    </div>
</footer>
<!-- IMPORTAÇÃO DOS ARQUIVOS DE JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/vendor/jquery.sticky.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/materialize.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
      jQuery(document).ready(function(){
        jQuery('#modal1').modal('open');
      });
  });
</script>
<?php wp_footer(); ?>
</body>
</html>