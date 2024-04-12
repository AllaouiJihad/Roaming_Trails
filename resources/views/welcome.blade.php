@extends('layouts.app')
@section('content')
        <!--banner-slider-->
        <!-- main-slider -->
        <section class="w3l-main-slider" id="home">
            <div class="banner-content">
                <div id="demo-1"
                    data-zs-src='["assets/images/banner1.jpg", "assets/images/banner2.jpg","assets/images/banner3.jpg", "assets/images/banner4.jpg"]'
                    data-zs-overlay="dots">
                    <div class="demo-inner-content">
                        <div class="container">
                            <div class="banner-infhny">
                                <h3>You don't need to go far to find what matters.</h3>
                                <h6 class="mb-3">Discover your next adventure</h6>
                                <div class="flex-wrap search-wthree-field mt-md-5 mt-4">
                                    <form action="#" method="post" class="booking-form">
                                        <div class="row book-form">
                                            <div class="form-input col-md-4 mt-md-0 mt-3">

                                                <select name="selectpicker" class="selectpicker">
                                                    <option value="">Destinaion</option>
                                                    <option value="africa">Africa</option>
                                                    <option value="america">America</option>
                                                    <option value="asia">Asia</option>
                                                    <option value="eastern-europe">Eastern Europe</option>
                                                    <option value="europe">Europe</option>
                                                    <option value="south-america">South America</option>
                                                </select>

                                            </div>
                                            <div class="form-input col-md-4 mt-md-0 mt-3">

                                                <input type="date" name="" placeholder="Date"
                                                    required="">
                                            </div>
                                            <div class="bottom-btn col-md-4 mt-md-0 mt-3">
                                                <button class="btn btn-style btn-secondary"><span
                                                        class="fa fa-search mr-3" aria-hidden="true"></span>
                                                    Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /main-slider -->
        <!-- //banner-slider-->

        <!--/grids-->
        <section class="w3l-grids-3 py-5">
            <div class="container py-md-5">
                <div style="margin: 8px auto; display: block; text-align:center;">

                    <!---728x90--->


                </div>
                <div class="title-content text-left mb-lg-5 mb-4">
                    <h6 class="sub-title">Visit</h6>
                    <h3 class="hny-title">Popular Destinations</h3>
                </div>
                <div style="margin: 8px auto; display: block; text-align:center;">

                    <!---728x90--->

                </div>
                <div class="row bottom-ab-grids">
                    <!--/row-grids-->

                    @foreach ($voyages as $voyage)
                        
                    
                    <div class="col-lg-6 subject-card mt-lg-0 mt-4">
                        <div class="subject-card-header p-4">
                            <a href="#" class="card_title p-lg-4d-block">
                                <div class="row align-items-center">
                                    <div class="col-sm-5 subject-img">
                                        <img src="{{ asset('storage/' . $voyage->media) }}" alt="Nom de l'image" class="img-fluid">
                                    </div>
                                    <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                                        <h4>{{$voyage->destination}}</h4>
                                        <p> {{ \Carbon\Carbon::parse($voyage->date_depart)->format('M j') }}, {{ \Carbon\Carbon::parse($voyage->date_reteur)->format('M j') }} </p>
                                        <div class="dst-btm">
                                            <h6 class=""> Price </h6>
                                            <span> {{$voyage->prix}} DH </span>
                                        </div>
                                        <p class="sub-para">Per person on twin sharing</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
                   
                </div>
            </div>
        </section>
        <!--//grids-->
        <!-- stats -->
        <section class="w3l-stats py-5" id="stats">
            <div class="gallery-inner container py-lg-0 py-3">
                <div class="row stats-con pb-lg-3">
                    <div class="col-lg-3 col-6 stats_info counter_grid">
                        <p class="counter">730</p>
                        <h4>Branches</h4>
                    </div>
                    <div class="col-lg-3 col-6 stats_info counter_grid1">
                        <p class="counter">1680</p>
                        <h4>Travel Guides</h4>
                    </div>
                    <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
                        <p class="counter">812</p>
                        <h4>Happy Customers</h4>
                    </div>
                    <div class="col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5">
                        <p class="counter">990</p>
                        <h4>Awards</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- //stats -->
        <!--/-->
        <div class="best-rooms py-5">
            <div class="container py-md-5">
                <div class="ban-content-inf row">
                    <div class="maghny-gd-1 col-lg-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius  m-0">
                                <img class="img-fluid" src="assets/images/g10.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1720$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                        <div class="row">
                            <div class="maghny-gd-1 col-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/g9.jpg" alt="" />
                                        <figcaption>
                                            <div>
                                                <h4>3Days, 4 Nights</h4>
                                                <p>From 1220$ </p>
                                            </div>

                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/g8.jpg" alt="" />
                                        <figcaption>
                                            <div>
                                                <h4>3Days, 4 Nights</h4>
                                                <p>From 1620$ </p>
                                            </div>

                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-6 mt-4">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/g7.jpg" alt="" />
                                        <figcaption>
                                            <div>
                                                <h4>3Days, 4 Nights</h4>
                                                <p>From 1820$ </p>
                                            </div>

                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-6 mt-4">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/g6.jpg" alt="" />
                                        <figcaption>
                                            <div>
                                                <h4>3Days, 4 Nights</h4>
                                                <p>From 1520$ </p>
                                            </div>

                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //stats -->
        <!--/w3l-bottom-->
        <section class="w3l-bottom py-5">
            <div class="container py-md-4 py-3 text-center">
                <div class="row my-lg-4 mt-4">
                    <div class="col-lg-9 col-md-10 ml-auto">
                        <div class="bottom-info ml-auto">
                            <div class="header-section text-left">
                                <h3 class="hny-title two">Traveling makes a man wiser, but less happy.</h3>
                                <p class="mt-3 pr-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                                    beatae laudantium
                                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem
                                    ipsum dolor sit
                                    amet adipisicing elit.</p>
                                <a href="about.html" class="btn btn-style btn-secondary mt-5">Read More</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//w3l-bottom-->
        <!-- testimonials -->
        <section class="w3l-clients" id="clients">
            <!-- /grids -->
            <div class="cusrtomer-layout py-5">
                <div class="container py-lg-4 py-md-3 pb-lg-0">
                    <div class="heading text-center mx-auto">
                        <h6 class="sub-title text-center">Here’s what they have to say</h6>
                        <h3 class="hny-title mb-md-5 mb-4">our clients do the talking</h3>
                    </div>
                    <!-- /grids -->
                    <div class="testimonial-width">
                        <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <span class="fa fa-quote-left" aria-hidden="true"></span>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet
                                            .Lorem ipsum dolor sit
                                            amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/c1.jpg" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Rohit Paul</h3>
                                                <p class="indentity">Example City</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <span class="fa fa-quote-left" aria-hidden="true"></span>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet
                                            .Lorem ipsum dolor sit
                                            amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/c2.jpg" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Shveta</h3>
                                                <p class="indentity">Example City</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <span class="fa fa-quote-left" aria-hidden="true"></span>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet
                                            .Lorem ipsum dolor sit
                                            amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/c3.jpg" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Roy Linderson</h3>
                                                <p class="indentity">Example City</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <span class="fa fa-quote-left" aria-hidden="true"></span>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet
                                            .Lorem ipsum dolor sit
                                            amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="assets/images/c4.jpg" class="img-fluid"
                                                    alt="client-img">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Mike Thyson</h3>
                                                <p class="indentity">Example City</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /grids -->
            </div>
            <!-- //grids -->
        </section>
        <!-- //testimonials -->
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

        </div>
        <!--/w3l-footer-29-main-->
        @endsection
