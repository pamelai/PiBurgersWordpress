<?php
   get_header();
?>
   <div class='encabezado' id='detalle'>
      <h2><?= the_title(); ?></h2>
   </div>

   <section>
      <p><a href="<?= wp_get_referer(); ?>">Volver</a></p>

      <?php
         the_post();
      ?>

      <div> <?= the_content(); ?> </div>

   </section>

   <section>
      <?= comments_template(); ?>
   
   </section>


<?php
   get_footer();
?>