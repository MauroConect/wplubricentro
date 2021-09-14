<?php

/**
 * Template name: Pagina de inicio
 *
 * Plantilla de pagina de inicio
 *
 * Plantilla para mostrar la pagina de inicio
 * 
 * @package Resolver
 * @subpackage Resolver Lubricentro
 * @since 1.0
 */
?>

<!---->
<?php
get_header();
?>
<!---->

<section class="main main--home">
    <section class="main-banner parallax-window" data-parallax="scroll" data-image-src="<?php echo IMAGES; ?>/homebanner.jfif">
        <div class="main-banner-inner">
            <div class="container">
                <div class="main-banner-content text-center">
                    <h2><?php the_title() ?></h2>
                    <p>¡asdasdasdasdasdasdasdasdasd!</p>
                    <a href="#" class="btn btn-primary btn-lg">Comprar</a>
                </div>
            </div>
        </div>
    </section>

    <section class="page-content page-content--page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main-content">
                        <div class="row">
                            <div class="col post-col">
                                <article class="post">
                                    <div class="post-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacinia posuere sem, eu placerat purus tristique eget. Aliquam sodales iaculis gravida. Nullam facilisis hendrerit bibendum. Pellentesque urna nunc, finibus at lacinia sit amet, pulvinar at eros. Aenean quis lorem id lacus vulputate ultrices. Maecenas sed dolor vulputate lectus egestas tempus. Duis tincidunt velit augue, nec malesuada urna varius in. Curabitur mollis lorem quis velit volutpat imperdiet. Vestibulum non lacus sem. Maecenas sagittis condimentum lorem eu cursus. Maecenas at risus accumsan, tempus massa at, porttitor elit. Suspendisse non dui tincidunt, tincidunt sem non, sodales ligula. Nullam id leo non urna feugiat rhoncus. Vestibulum dapibus ut metus non laoreet.</p>

                                        <p>Donec quis aliquam lorem. Cras sollicitudin pellentesque turpis, nec dignissim turpis fermentum vitae. In hac habitasse platea dictumst. Donec dictum dui nibh, sed condimentum quam semper vitae. Cras auctor eget nunc sit amet dictum. Cras pretium augue tellus, non imperdiet dolor rhoncus efficitur. Mauris vehicula augue sit amet fringilla fringilla. Vestibulum accumsan mauris congue, suscipit felis at, auctor elit. Vivamus feugiat dui vel erat pharetra, at tincidunt nibh ornare. Maecenas ac massa vel tellus congue rutrum tristique vel purus. Mauris hendrerit consectetur ipsum nec pulvinar. Vivamus ac tortor orci. Curabitur est ligula, hendrerit id dui eget, semper scelerisque magna. Sed auctor velit quam, eu iaculis tortor blandit sed.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- -->
        <!---->
        <section class="last-posts">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h2 class="section-title text-center my-5 py-3 text-uppercase">Últimos Productos</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <article class="post">
                                        <!-- wp query Woocommerce-->

                                        <div class="products">
                                            <?php
                                            $args = array(
                                                'post_type' => 'product',
                                                'posts_per_page' => 12
                                            );
                                            $loop = new WP_Query($args);
                                            if ($loop->have_posts()) {
                                                while ($loop->have_posts()) : $loop->the_post();
                                                    wc_get_template_part('content', 'product');
                                                endwhile;
                                            } else {
                                                echo __('No products found');
                                            }
                                            wp_reset_postdata();
                                            ?>
                                        </div>
                                        <!--/.products-->
                                    </article>
                                </div>

                                <!--fin loop de wp-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>

<!---->
<?php
get_footer();
?>
<!---->