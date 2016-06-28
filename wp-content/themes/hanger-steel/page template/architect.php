
<?php /* Template Name: Architect */ ?>
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
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/architect-banner.jpg" alt="First Slide">

                        </div>
                        <div class="item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/architect-banner.jpg" alt="Second Slide">

                        </div>
                        <div class="item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/architect-banner.jpg" alt="Third Slide">

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



            <div class="common-content arctct">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h2>for the architect</h2>
                    <p>IDC has gained a solid reputation for working closely with architects, engineers and owners to understand the unique design needs of a particular project and developing a targeted solution for those needs. Our design professionals utilize the latest in CAD/CAM technology design tools. Allow us to assist you with your project by providing design assistance and product specifications.</p>

                    <p>IDC's engineering staff ensures that each door system satisfies the most demanding specification requirements. We design and build hangar doors and blast doors that are economical, reliable and long lasting.</p>

                    <p>Let us simplify your project by providing you with custom drawings and product specifications.</p>
                </div>

                <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
                    <form class="steel-frm">
                        <div class="form-group">
                            <label for="firstName"><i class="fa fa-user" aria-hidden="true"></i>First Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="lastName"><i class="fa fa-user" aria-hidden="true"></i>Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="number"><i class="fa fa-mobile" aria-hidden="true"></i> Phone
                            </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Email1"><i class="fa fa-envelope" aria-hidden="true"></i> Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>


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

                        <div class="radio">
                            <label>Architect : </label>
                            <label>
                                Building
                                <input type="radio" name="optionsRadios2" value="Building" checked>
                            </label>

                            <label>Manufacture
                                <input type="radio" name="optionsRadios2" value="Manufacture">
                            </label>
                        </div>
                        <div class="form-group doc-arc">
                            <label for="exampleInputFile">Document:</label>
                            <input type="file" class="inputfile">
                            <label>Browse</label>
                            <arcfilename>No file selected</arcfilename>
                        </div>
                        <div class="form-group">
                            <label for="Email1"><i class="fa fa-envelope" aria-hidden="true"></i> Message
                            </label>
                            <textarea></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
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
                <h1><?php the_field('client_content');?></h1>
                <h4><?php the_field('client_sub_content');?></h4>
                <br>
            </div>



        </div>




        </div>
    </section>
    <!-- Content Section Ends-->


     <?php get_footer(); ?>