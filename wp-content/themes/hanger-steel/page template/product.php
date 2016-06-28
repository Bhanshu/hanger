<?php /* Template Name: product */ ?>
  <?php get_header(); ?>

    <!-- Banner Section Starts-->
    <section class="banner">
        <div class="container">

            <div class="banner-slider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-banner.jpg" alt="First Slide">
                            <!--div class="capt-banner">
                                <h2>Hangar Door Styles</h2>
                                <h3>Decision, Decisions, Decisions</h3>
                                <a href="">See Our Work <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div-->
                        </div>
                        <div class="item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-banner.jpg" alt="Second Slide">
                            <!--div class="capt-banner">
                                <h2>Hangar Door Styles</h2>
                                <h3>Decision, Decisions, Decisions</h3>
                                <a href="">See Our Work <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div-->
                        </div>
                        <div class="item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-banner.jpg" alt="Third Slide">
                            <!--div class="capt-banner">
                                <h2>Hangar Door Styles</h2>
                                <h3>Decision, Decisions, Decisions</h3>
                                <a href="">See Our Work <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div-->
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">

                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">

                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- Banner Section Ends-->






    <!-- Content Section Starts-->
    <section class="content">
        <div class="container">



            <div class="common-content product-area">
                <div class="col-lg-4 product-sidebar">
                    <div class="p-list">
                        <h3>Products</h3>
                        <ul>
                            <li><a href="">Stell  Hangar</a></li>
                            <li><a href="">hangar doors</a></li>
                        </ul>
                    </div>
                    <div class=" p-gal">
                        <h3>photo gallery</h3>
                        <div class="p-img-holder"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/p-gal-img.jpg" alt="gallery" /></div>
                    </div>
                    <!--div class="p-clients">
                        <h3>Clients</h3>
                        <div class="p-img-holder">
                            <img class="img-responsive" src="images/p-client-img.jpg" alt="client" />
                        </div>
                    </div-->
                </div>
                <div class="col-lg-8">
                    <h1>Products</h1>
                    <p>We believe that design and quality is as much a preference as it is a lifestyle. A commitment to only use the best materials, we offer the finest quality modern door hardware manufactured with high-grade stainless steel.</p>

                    <div class="product-item">
                        <div class="pro-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-img1.jpg" alt="product1" class="img-responsive" /><span></span></div>
                        <h2>steel hangars</h2>
                        <p>Our company is highly rated in offering Steel Hangars to the clients. Steel Hangars are designed in compliance with the industry standards of quality. Offered range is available in different shapes and sizes to meet the diverse industry requirements. These products are stringently testified by our quality inspectors on various quality parameters to ensure best quality product delivery to prestigious patrons.</p>
                    </div>

                    <div class="product-item">
                        <div class="pro-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-img2.jpg" alt="product2" class="img-responsive" /><span></span></div>
                        <h2>hanger door systems</h2>
                        <p>We think your doors should be full width, though you can choose lesser openings. If you need less than the full width at any time, choose type 1 or 2. If you need the full width open, choose type 3. If there is space for outriggers only to one side, choose type 4. If you need more height at the centre choose type 5 (though it is better to make the whole opening higher). </p>
                    </div>
                </div>
            </div>








            <div class="three-col">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                    <h3>Video</h3>
                    <div class="img-holder">
                        <a href=""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/vid-3-sec.jpg" class="img-responsive" /></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                    <h3>For The architect</h3>
                    <div class="img-holder">
                        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img2-3-sec.jpg" class="img-responsive" /></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                    <h3>quote Request</h3>
                    <div class="img-holder">
                        <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img3-3-sec.jpg" class="img-responsive" /></a>
                    </div>
                </div>
                </div>
            </div>



            <div class="client-col">
                <div class="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients.jpg" class="img-responsive" />
                    <!--div id="myCarousel1" class="carousel slide">

                        <!-- Carousel items -->
                    <!--div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-2"><a href="#x col-xs-6" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                </div>
                                <!--/row-->
                    <!--/div>
                            <!--/item-->
                    <!--div class="item">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6"><a href="#x col-xs-6" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                </div>
                                <!--/row-->
                    <!--/div>
                            <!--/item-->
                    <!--div class="item">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    ></div>
                                <!--/row-->
                    <!--/div>
                            <!--/item-->
                    <!--/div>
                        <!--/carousel-inner-->
                    <!--a class="left carousel-control" href="#myCarousel1" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>

                        <a class="right carousel-control" href="#myCarousel1" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
                    </div>
                    <!--/myCarousel-->
                </div>
            </div>
            <div class="client-content">
                <h1>1000’s of Happy Hangar Door Owners And Counting.</h1>
                <h4>Serving Private, Commercial, Municipal, and Military Clients Since 1978.</h4>
                <br>
            </div>



        </div>




        </div>
    </section>
    <!-- Content Section Ends-->


      <?php get_footer(); ?>