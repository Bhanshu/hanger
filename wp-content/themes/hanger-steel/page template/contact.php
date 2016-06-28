<?php /* Template Name: CONTACT */ ?>
  <?php get_header(); ?>

    <!-- Banner Section Starts-->
    <section class="banner">
        <div class="container">

            <div class="banner-slider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
					<?php
	
                          $my_query = new WP_Query('post_type=slider&posts_per_page=3');
                              $i=1;
							  $j=0;
                                 while ($my_query->have_posts()) : $my_query->the_post(); 
	                         ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $j; ?>" class="<?php if($i==1) { echo 'active'; } ?>">
						  
						 </li>
                	 <?php  
					           $j++;
							   $i++;
                       		 endwhile;
							 wp_reset_query(); ?>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
					<?php
	
                          $my_query = new WP_Query('post_type=slider&posts_per_page=3');
                              $i=1;
                                 while ($my_query->have_posts()) : $my_query->the_post(); 
	                         ?>
                        <div class="item <?php if($i==1) { echo 'active'; } ?>">
                            <img src=" <?php echo the_post_thumbnail('full') ?>">
                          </div>
						   <?php  
                                         $i++;
                             endwhile;
							 wp_reset_query(); ?>
                    
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



            <div class="common-content contct-frm">
                <h2><?php the_field('contact_us');?></h2>
    <?php echo do_shortcode( '[contact-form-7 id="103" title="Contact form 1"]' ); ?>

<!--
                <form class="steel-frm">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="firstName"><i class="fa fa-user" aria-hidden="true"></i>First Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lastName"><i class="fa fa-user" aria-hidden="true"></i>Last Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="number"><i class="fa fa-mobile" aria-hidden="true"></i> Phone
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Email1"><i class="fa fa-envelope" aria-hidden="true"></i> Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="radio">
                                <label>Please Contact me By : </label>
                                <label>
                                    Phone
                                    <input type="radio" name="optionsRadios1" value="Phone">
                                </label>

                                <label>
                                    Email
                                    <input type="radio" name="optionsRadios1" value="Emaiil" checked>
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form> 
				-->

                <div class="row contact-details">
                    <div class="divide-3">
                        <h4><?php the_field('phy_add');?></h4>
                        <ul>
                            <li><?php the_field('phy_add1');?></li>
                            <li><?php the_field('phy_add2');?></li>
                            <li><?php the_field('phy_add3');?></li>
                        </ul>
                    </div>
                    <div class="divide-3 mid-contact">
                        <h4><?php the_field('mail_add');?></h4>
                        <ul>
                            <li><?php the_field('mail_add1');?></li>
                            <li><?php the_field('mail_add2');?></li>
                            <li><?php the_field('mail_add3_');?></li>
                        </ul>
                    </div>
                    <div class="divide-3 last-contact">
                        <h4><?php the_field('call_detail');?></h4>
                        <ul>
                            <li><?php the_field('call_d1');?></li>
                            <li><?php the_field('call_d2');?></li>
                            <li><?php the_field('call_d3');?></li>
                        </ul>
                    </div>

                </div>
            </div>


        <div class="three-col">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                     <h3><?php the_field('video_heading',5);?></h3>
                    <div class="img-holder">
                         <a href=""><img src="<?php the_field('video_image',5); ?>" class="img-responsive" /></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                    <h3><?php the_field("architect_heading",5);?></h3>
                    <div class="img-holder">
                        <a href="<?php echo esc_url( get_permalink(8) ); ?>"><img src="<?php the_field('architect_image',5); ?>" class="img-responsive" /></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                    <h3><?php the_field("quote_heading",5);?></h3>
                    <div class="img-holder">
                        <a href="<?php echo esc_url( get_permalink(18) ); ?>"><img src="<?php the_field('quote_image',5); ?>" class="img-responsive" /></a>
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
             <h1><?php the_field('client_content',5);?></h1>
                <h4><?php the_field('client_sub_content',5);?></h4>
            <br>
        </div>



        </div>




        </div>
    </section>
    <!-- Content Section Ends-->


   <?php get_footer(); ?>