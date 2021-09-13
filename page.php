<?php

get_header();

?>
<!--Inicio Loop de wordpress-->
<section class="main">
    <section class="main-banner" style="background-image: url('<?php echo IMAGES; ?>/homebanner.jpg');">
        <div class="main-banner-inner">
            <div class="container">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <!---->
    <section class="page-content page-content--page">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="row">
                            <div class="col post-col">
                                <article class="post">
                                    <div class="post-content">
                                        <?php the_content(); ?>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>

<?php
get_footer();
?>