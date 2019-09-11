<?php

    get_header();

   if(is_page("contacto")):
        get_template_part("contacto");

    elseif(is_page("menu")):
        get_template_part("menu");

   else:
?>
    <div id="home" >
        <h2>Pi Burgers <span>Vos sabés como son</span></h2>
        <?php dynamic_sidebar('smartslider_area_1'); ?>
    </div>

    <section class='row'>
        <div class='col-12 col-lg-6'>
            <h2>Nosotros</h2>

            <div class='row'>
                <p class='col-md-6 pr-md-3 col-lg-12 pr-lg-0'>Nació en 2012, la pasión por la gastronomía y el emprendimiento nos llevó a unirnos con MAXHENRI GROUP y así, ese mismo año, en el corazón de Palermo Soho abrimos nuestra primera tienda tras dos años de planear la apertura, convirtiéndonos en la primera hamburguesería GREEN de la Argentina. La pasión por la comida se vive a diario en nuestros locales, impulsada por el concepto de FastGood, que destaca lo rápido y bueno. </p>

                <p class='col-md-6 pl-md-3 col-lg-12 pl-lg-0'>La elaboración de productos con altos estándares de calidad, la mezcla de ingredientes frescos, caseros y procesos artesanales nos permiten brindar a nuestros clientes una experiencia única, para que disfruten de las mejores hamburguesas, fries, hotdogs, limonadas, cervezas y vinos en un ambiente relajado y moderno, con la mejor música y atención personalizada.</p>
            </div>
        </div>
        <div class='col-lg-6' id='nos'></div>
    </section>

    <section>
        <h2>Nuestros especiales</h2>

        <p>Disfrutá de nuestras mejores comidas con un 20% de descuento. <span>Válido del 31/07/2019 al 31/08/2019.</span></p>

        <?php
                $query=[
                    'cat'=>7,
                    'post_type'=>'post',
                    'post_status'=>'publish',
                    'posts_per_page'=>3,
                    'orderby'=>'rand'
                ];
        
                $especiales=new WP_Query($query);
        ?>

        <div class="carousel slide" data-ride="carousel" id='especial'>
            <ul class="carousel-inner">
                <?php
                if($especiales->have_posts()):
                    $pag=0;
                    while($especiales->have_posts()):
                        $especiales->the_post();
                
                ?>
                <li class="carousel-item <?= $pag == 0 ? "active" : "" ?>" data-interval="6000">
                    <figure class='m-auto'><img src="<?= the_post_thumbnail_url('thumbnail-menu'); ?>" alt="<?= the_title(); ?>" class='img-fluid'></figure>
                </li>
                <?php
                        $pag+=1;
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
    </section>

    <section>
        <h2>Reviews</h2>

        <?php
            $query=[
                'post_type'=>'reviews',
                'post_status'=>'publish'
            ];
    
            $reviews=new WP_Query($query);
        ?>

        <div class="carousel slide" data-ride="carousel">
            <ul class="carousel-inner" id="rev">
            <?php
                if($reviews->have_posts()):
                    $pag=0;
                    while($reviews->have_posts()):
                        $reviews->the_post();
            ?>
                <li class="carousel-item <?= $pag == 0 ? "active" : "" ?>" data-interval="6000">
                    <div><?= the_content(); ?></div>
                </li>

            <?php
                        $pag+=1;
                    endwhile;
                endif;
            ?>
            </ul>
        </div>
    </section>
<?php
    endif;
    get_footer();

?>