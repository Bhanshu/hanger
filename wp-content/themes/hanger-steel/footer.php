<!-- Main Footer Starts-->
    <footer class="main-footer">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-holder">

            <div class="footer-logo">
                <h2><?php the_field('footer_title',5);?></h2>
                <p>©<?php echo date("Y"); ?> <?php the_field('footer_sub_title',5);?></p>
            </div>

            <div class="footer-address">
                <ul>
                    <li><?php the_field('footer_add',5);?></li>
                    <li> <?php the_field('footer_sub_add',5);?></li>
                    <li> <?php the_field('footer_subb_add',5);?></li>
                </ul>
            </div>

            <div class="footer-menu">
                <ul>
                    <?php
						 $defaults = array( 
						 'menu' => 'dynamic_menu',
						 'container' => '',
						 'container_class' => '',
						 'container_id' => '',
						 'menu_class' => 'menu',
						 'menu_id' => '',
						 'echo' => true,
	                     'fallback_cb' => 'wp_page_menu', 
						 'before' => '', 
						 'after' => '',
						 'link_before' => '', 
						 'link_after' => '',
						 'items_wrap' => '%3$s',
                         'depth' => 0, 
						 'walker' => '', 
						 'theme_location' => '' );
						
                      wp_nav_menu($defaults);
	                 ?>
                </ul>
            </div>
                
          </div>
        </div>
    </footer>
    <!-- Main Footer Ends-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 150,
            mobile: true,
            live: true,
            callback: function (box) {},
            scrollContainer: null
        });
        wow.init();
    </script>

    <script>
        $(document).ready(function () {
            $('#myCarousel').carousel({
                interval: 0
            })

            $('#myCarousel').on('slid.bs.carousel', function () {
                //alert("slid");
            });


        });
    </script>

</body>

</html>