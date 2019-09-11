<?php
   get_header();
?>

   <div id='menu' class="encabezado">
      <h2>Menú</h2>
   </div>
    
   <section>
      <?php
         $cat=[
            'orderby'=>'slug',
            'order'=>'ASC',
            'exclude' => '8'
         ];

         $categories=get_categories($cat);

         foreach($categories as $category):
            $query=[
               "cat" => $category->cat_ID,
               "category__not_in"=> array(8),
               "post_type" => "post",
               "post_status" => "publish"
            ];

            $datos=new WP_Query($query);
      ?>

      <h3><?= $category->name; ?></h3>
      <ul class='platos row'>
      <?php
            while($datos->have_posts()):

               $datos->the_post();
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
      ?>
      </ul>

      <?php
         endforeach;
      ?>
   </section>

<?php
   get_footer();
?>