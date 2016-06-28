<?php /* Template Name: quote */ ?>
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



            <div class="common-content quote-section">
                <div class="col-lg-3 quote-side">
                    <h1>quote request</h1>
                    <p>Need a new door? Need service? Get a quote.</p>
                </div>
                <div class="col-lg-9">
                    <form class="steel-frm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Name"><i class="fa fa-user" aria-hidden="true"></i>Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="company"><i class="fa fa-building-o" aria-hidden="true"></i>Company</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Address
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Email1"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone1"><i class="fa fa-mobile" aria-hidden="true"></i></i>Primary Phone</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone2"><i class="fa fa-mobile" aria-hidden="true"></i>Secondary Phone</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="apt/suite"><i class="fa fa-mobile" aria-hidden="true"></i> Apt/Suite
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="City"><i class="fa fa-map-marker" aria-hidden="true"></i> City</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="State"><i class="fa fa-globe" aria-hidden="true"></i> State
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="Zip"><i class="fa fa-map-marker" aria-hidden="true"></i> Zip Code</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                                <div class="radio">
                                    <label class="quote-label">Please Contact me By : </label>
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
                        
                        <div class="row form-inline mks-n-modl">
                            <div class="form-group">
                                <label>Aircraft Makes and Models :</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    
                    <div class="row form-inline mks-n-modl">
                            <div class="form-group">
                                <label>Hangar Dimensions : </label>
                                <div class="h-dimension">
                                
                                    <div class="form-group">
                                <label>Width</label>
                                <input type="text" class="form-control" placeholder="8'8*">
                                    </div>
                                    
                                    <div class="form-group">
                                <label>Depth</label>
                                <input type="text" class="form-control" placeholder="8'8*">
                                    </div>
                                    
                                    <div class="form-group">
                                <label>Clear Height at Eave</label>
                                <input type="text" class="form-control set-width-resp" placeholder="8'8*">
                                    </div>
                                    
                                    <div class="form-group">
                                <label>Door Height</label>
                                <input type="text" class="form-control" placeholder="8'8*">
                                    </div>
            
                                    <div class="form-group">
                                <label>Door Width</label>
                                <input type="text" class="form-control" placeholder="8'8*">
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    
                    <div class="col-lg-12">
                                <div class="radio">
                                    <label class="quote-label">Fire Suppression : </label>
                                    <label>
                                        Yes
                                        <input type="radio" name="options1" value="Yes">
                                    </label>

                                    <label>
                                        No
                                        <input type="radio" name="options1" value="No" checked>
                                    </label>
                                </div>
                            </div>
                    
                    
                    <div class="col-lg-12">
                                <div class="radio">
                                    <label class="quote-label">Please Contact me By : </label>
                                    <label>
                                        Yes
                                        <input type="radio" name="option1" value="Yes">
                                    </label>

                                    <label>
                                        No
                                        <input type="radio" name="option1" value="No" checked>
                                    </label>
                                </div>
                            </div>
                    
                    
                    
                    
                        

                        
                            <div class="form-group">
                                <label for="Email1"><i class="fa fa-envelope" aria-hidden="true"></i> Message
                                </label>
                                <textarea></textarea>
                            </div>
                        

                        <button type="submit" class="btn quote-submit">Submit</button>
                    </form>

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