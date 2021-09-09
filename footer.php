<footer>
    <div class="footer-inner">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <?php

                        if (is_active_sidebar('sidebar-footer-izq')) {


                            dynamic_sidebar('sidebar-footer-izq');
                        }

                        ?>


                    </div>

                    <div class="col-md-4">
                        <?php

                        if (is_active_sidebar('sidebar-footer-cen')) {


                            dynamic_sidebar('sidebar-footer-cen');
                        }

                        ?>
                    </div>

                    <div class="col-md-4">
                        <?php

                        if (is_active_sidebar('sidebar-footer-der')) {


                            dynamic_sidebar('sidebar-footer-der');
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="wp-content/themes/lubricentro/vanilla-tilt.min.js"></script>
<script>
    VanillaTilt.init(document.querySelectorAll(".box"), {
        max: 25,
        speed: 400
    });
</script>

<?php wp_footer(); ?>

<script src="wp-content/themes/lubricentro/js/main.js"></script>
<script src="wp-content/themes/lubricentro/js/parallax.min.js"></script>
<script src="wp-content/themes/lubricentro/js/jquery.js"></script>
</body>

</html>