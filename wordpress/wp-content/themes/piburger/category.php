<?php
   get_header();
?>

   <div id='menu' class="encabezado">
      <h2><?= single_cat_title(); ?></h2>
   </div>
    
   <section>
      <ul class='platos row'>
      <?php
         if(have_posts()):

            while(have_posts()):

               the_post();
      ?>
      
         <li class='col-sm-6 col-md-4 col-lg-3'>
            <a href="<?= the_permalink(); ?>">
               <figure>
                  <img src="<?= the_post_thumbnail_url("thumbnail-menu"); ?>" class='img-fluid' alt="<?= the_title() ?>">
               </figure>

            </a>
         </li>
         
      <?php
            endwhile;
         endif;
      ?>
      </ul>
   </section>

<?php
   get_footer();
?>
