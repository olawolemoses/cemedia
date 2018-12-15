@include('layouts.includes.header')

    <!--begin container -->
    <div id="container">

        <!--begin home section -->
        <section id="home">

            <!--begin home_box -->
            <div class="home_box">

                <!--begin row -->
                <div class="row">

                    <!--begin sevencol -->
                    <div class="sevencol">

                        <h2 class="home_title">PhotoLib</h2>
                        <h3 class="home_subtitle">An online photo management library to keep track of your pictures at every event attended. No more worries about your pictures at events. We have them all kept and sorted by events.  </h3>

                        <!--begin store_icons -->
                        <ul class="store_icons">
                            <li>
                                <a href="#">
                                    <i class="icon icon-apple"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon icon-android"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon icon-windows"></i>
                                </a>
                            </li>
                        </ul>
                        <!--end store_icons -->

                    </div>
                    <!--end sevencol -->

                    <!--begin fivecol -->
                    <div class="fivecol last">

                        <!--begin register_form_wrapper -->
                        <div class="register_form_wrapper">

                            <!--begin register_form -->
                            <div class="register_form">

                                <h4 class="white"><span class="bold blue">Login</span> to access <span class="blue bold">your pictures</span> for any of our featured events.</h4>

                                <!--begin success message -->
                                <p class="alert-danger">
                                  @if(!empty($errors))
                                  @foreach( $errors->all() as $error )
                                            <li style="color:white">{{ $error }}</li>
                                  @endforeach
                                  @endif
                                </p>
                                <!--end success message -->

                                <!--begin register form -->
                                <form id="register-form1" class="register" action="{{ route('login') }}" method="post">
                                    @csrf
                                    <input class="register-input white-input" type="text" required name="username" placeholder="Username" />
                                    <input class="register-input white-input" type="password" required name="password" placeholder="password" />
                                    <input type="submit" value="Login" id="button" class="register-submit" />
                                </form>
                                <!--end register form -->

                            </div>
                            <!--end register_form -->

                        </div>
                        <!--end register_form_wrapper -->

                    </div>
                    <!--end fivecol -->

                </div>
                <!--end row -->

            </div>
            <!-- end home_box -->

        </section>
        <!--end home section -->

        <!--begin blog section -->
        <section id="properties" class="section_wrapper grey_bg">

            <!--begin section_box -->
            <div class="section_box">

                <!--begin row -->
                <div class="row">

                    <!--begin twelvecol -->
                    <div class="twelvecol align_center">

                        <h2 class="title">Find Your Dream Home With Prestige</h2>

                        <h3 class="subtitle">Pellentesque ets laoret mauris, dapibis volutpatum etsum, vivamus malesuada ipsum ets netsum nibh ligula<br>saepe eveniet praesent. Quis consequatur quia voluptas sit aspernatur aut fugit justo tempor.</h3>

                    </div>
                    <!--end twelvecol -->

                </div>
                <!--end row -->

                <!--begin row -->
                <div class="row">

                    <!--begin product_item -->
                    <div class="fourcol product_item ">

                    	<div class="view view-first">
                            <a href="http://placehold.it/800x500" class="prettyPhoto[gallery1]">
                            	<img src="http://placehold.it/800x500" alt="Title Goes Here">
                                <span class="mask">
                                    <span class="zoom"></span>
                                </span>
                            </a>
                        </div>

                        <!--begin product_info -->
                        <div class="product_info">

                            <h3 class="product_title"><a href="#">Luxury House In Knightsbridge.</a></h3>

                            <a href="#" class="product_icons"><i class="icon icon-tags"></i> Four Bed House</a>

                            <a href="#" class="product_icons last"><i class="icon icon-money-banknote"></i> 3400 &euro; / Month</a>

                            <p>Pellentesque ac lacus iaculis erate estadis vitae euismod netset rhoncus purus eget lorem porta, seditus porttitor lacus aliquam amet sapien...</p>

                        </div>
                        <!--end product_info -->

                    </div>
                    <!--end product_item -->

                    <!--begin product_item -->
                    <div class="fourcol product_item">

                    	<div class="view view-first">
                            <a href="http://placehold.it/800x500" class="prettyPhoto[gallery1]">
                            	<img src="http://placehold.it/800x500" alt="Title Goes Here">
                                <span class="mask">
                                    <span class="zoom"></span>
                                </span>
                            </a>
                        </div>

                        <!--begin product_info -->
                        <div class="product_info">

                            <h3 class="product_title"><a href="#">Modern House Near Sutton.</a></h3>

                            <a href="#" class="product_icons"><i class="icon icon-tags"></i> Two Bed House</a>

                            <a href="#" class="product_icons last"><i class="icon icon-money-banknote"></i> 1800 &euro; / Month</a>

                            <p>Pellentesque ac lacus iaculis erate estadis vitae euismod netset rhoncus purus eget lorem porta, seditus porttitor lacus aliquam amet sapien...</p>

                        </div>
                        <!--end product_info -->

                    </div>
                    <!--end product_item -->

                    <!--begin product_item -->
                    <div class="fourcol product_item last">

                    	<div class="view view-first">
                            <a href="http://placehold.it/800x500" class="prettyPhoto[gallery1]">
                            	<img src="http://placehold.it/800x500" alt="Title Goes Here">
                                <span class="mask">
                                    <span class="zoom"></span>
                                </span>
                            </a>
                        </div>

                        <!--begin product_info -->
                        <div class="product_info">

                            <h3 class="product_title"><a href="#">Victorian House In Westminster.</a></h3>

                            <a href="#" class="product_icons"><i class="icon icon-tags"></i> Three Bed House</a>

                            <a href="#" class="product_icons last"><i class="icon icon-money-banknote"></i> 2500 &euro; / Month</a>

                            <p>Pellentesque ac lacus iaculis erate estadis vitae euismod netset rhoncus purus eget lorem porta, seditus porttitor lacus aliquam amet sapien...</p>

                        </div>
                        <!--end product_info -->

                    </div>
                    <!--end product_item -->

                </div>
                <!--end row -->

                <!--begin row -->
                <div class="row">

                    <!--begin product_item -->
                    <div class="fourcol product_item">

                    	<div class="view view-first">
                            <a href="http://placehold.it/800x500" class="prettyPhoto[gallery1]">
                            	<img src="http://placehold.it/800x500" alt="Title Goes Here">
                                <span class="mask">
                                    <span class="zoom"></span>
                                </span>
                            </a>
                        </div>

                        <!--begin product_info -->
                        <div class="product_info">

                            <h3 class="product_title"><a href="#">Studio Flat In Paddington.</a></h3>

                            <a href="#" class="product_icons"><i class="icon icon-tags"></i> One Bed Flat</a>

                            <a href="#" class="product_icons last"><i class="icon icon-money-banknote"></i> 1500 &euro; / Month</a>

                            <p>Pellentesque ac lacus iaculis erate estadis vitae euismod netset rhoncus purus eget lorem porta, seditus porttitor lacus aliquam amet sapien...</p>

                        </div>
                        <!--end product_info -->

                    </div>
                    <!--end product_item -->

                    <!--begin product_item -->
                    <div class="fourcol product_item">

                    	<div class="view view-first">
                            <a href="http://placehold.it/800x500" class="prettyPhoto[gallery1]">
                            	<img src="http://placehold.it/800x500" alt="Title Goes Here">
                                <span class="mask">
                                    <span class="zoom"></span>
                                </span>
                            </a>
                        </div>

                        <!--begin product_info -->
                        <div class="product_info">

                            <h3 class="product_title"><a href="#">New House Near Hyde Park.</a></h3>

                            <a href="#" class="product_icons"><i class="icon icon-tags"></i> Two Bed House</a>

                            <a href="#" class="product_icons last"><i class="icon icon-money-banknote"></i> 2500 &euro; / Month</a>

                            <p>Pellentesque ac lacus iaculis erate estadis vitae euismod netset rhoncus purus eget lorem porta, seditus porttitor lacus aliquam amet sapien...</p>

                        </div>
                        <!--end product_info -->

                    </div>
                    <!--end product_item -->

                    <!--begin product_item -->
                    <div class="fourcol product_item last">

                    	<div class="view view-first">
                            <a href="http://placehold.it/800x500" class="prettyPhoto[gallery1]">
                            	<img src="http://placehold.it/800x500" alt="Title Goes Here">
                                <span class="mask">
                                    <span class="zoom"></span>
                                </span>
                            </a>
                        </div>

                        <!--begin product_info -->
                        <div class="product_info">

                            <h3 class="product_title"><a href="#">Luxury Villa Near Chesterfield.</a></h3>

                            <a href="#" class="product_icons"><i class="icon icon-tags"></i> Five Bed House</a>

                            <a href="#" class="product_icons last"><i class="icon icon-money-banknote"></i> 4100 &euro; / Month</a>

                            <p>Pellentesque ac lacus iaculis erate estadis vitae euismod netset rhoncus purus eget lorem porta, seditus porttitor lacus aliquam amet sapien...</p>

                        </div>
                        <!--end product_info -->

                    </div>
                    <!--end product_item -->

                </div>
                <!--end row -->

            </div>
            <!--end section_box -->

        </section>
        <!--end blog section -->

        <!--begin fun_fact_wrapper -->
        <div class="fun_fact_wrapper">

            <!--begin fun_facts -->
            <div class="fun_facts no_margins">

                <!--begin row -->
                <div class="row">

                    <!--begin fun_facts_box -->
                    <div class="fun_facts_box align_center">

                        <div class="icon_wrapper">
                            <i class="icon icon-design-pencil-rule-streamline services_icon"></i>
                        </div>

                        <p class="fun_facts_title"><span class="facts_numbers">1050+</span><br>Projects Completed</p>

                    </div>
                    <!--end fun_facts_box -->

                    <!--begin fun_facts_box -->
                    <div class="fun_facts_box align_center">

                        <div class="icon_wrapper">
                            <i class="icon icon-streamline-umbrella-weather services_icon"></i>
                        </div>

                        <p class="fun_facts_title"><span class="facts_numbers">217k</span><br>Happy Clients</p>

                    </div>
                    <!--end fun_facts_box -->

                    <!--begin fun_facts_box -->
                    <div class="fun_facts_box align_center">

                        <div class="icon_wrapper">
                            <i class="icon icon-crown-king-streamline services_icon"></i>
                        </div>

                        <p class="fun_facts_title"><span class="facts_numbers">1210</span><br>Design Awards</p>

                    </div>
                    <!--end fun_facts_box -->

                    <!--begin fun_facts_box -->
                    <div class="fun_facts_box align_center">

                        <div class="icon_wrapper">
                            <i class="icon icon-cocktail-mojito-streamline services_icon"></i>
                        </div>

                        <p class="fun_facts_title"><span class="facts_numbers">2137</span><br>Cups Of Coffee</p>

                    </div>
                    <!--end fun_facts_box -->

                    <!--begin fun_facts_box -->
                    <div class="fun_facts_box align_center">

                        <div class="icon_wrapper">
                            <i class="icon icon-speech-streamline-talk-user services_icon"></i>
                        </div>

                        <p class="fun_facts_title"><span class="facts_numbers">24/7</span><br>Fast Support</p>

                    </div>
                    <!--end fun_facts_box -->

                </div>
                <!--end row -->

            </div>
            <!--end fun_facts -->

        </div>
        <!--end fun_fact_wrapper -->

        <!--begin featured section -->
        <section id="featured" class="section_wrapper grey_bg">

            <!--begin section_box -->
            <div class="section_box">

                <!--begin row -->
                <div class="row">

                    <!--begin twelvecol -->
                    <div class="twelvecol align_center">

                        <h2 class="title">Check Out Some Of The Latest Properties</h2>

                        <h3 class="subtitle">Pellentesque ets laoret mauris, dapibis volutpatum etsum, vivamus malesuada ipsum ets netsum nibh ligula<br>saepe eveniet praesent. Quis consequatur quia voluptas sit aspernatur aut fugit justo tempor.</h3>

                    </div>
                    <!--end twelvecol -->

                    <!--begin twelvecol -->
                    <div class="twelvecol">

                        <!--begin owl-carousel -->
                        <div class="owl-example owl-carousel">

                            <!--begin carousel_item -->
                            <div class="carousel_item product_item ">

                                <div class="view view-first">
                                    <a href="http://placehold.it/800x400" class="prettyPhoto[gallery2]">
                                        <img src="http://placehold.it/800x400" alt="Luxury House In Knightsbridge.">
                                        <span class="mask">
                                            <span class="zoom"></span>
                                        </span>
                                    </a>
                                </div>

                                <!--begin product_info -->
                                <div class="product_info">

                                    <h3 class="product_title"><a href="#">Luxury House In Knightsbridge, London, N1 2ED.</a></h3>

                                    <a href="#" class="product_icons"><i class="icon icon-tags"></i> Seven Bed Penthouse</a>

                                    <a href="#" class="product_icons last"><i class="icon icon-money-banknote"></i> 3400 &euro; / Month</a>

                                    <p>Pellentesque ac lacus iaculis erate estadis vitae euismod netset rhoncus purus eget lorem porta, seditus porttis netsum etis lacus aliquam amet sapien...</p>

                                </div>
                                <!--end product_info -->

                            </div>
                            <!--end carousel_item -->

                            <!--begin carousel_item -->
                            <div class="carousel_item product_item">

                                <div class="view view-first">
                                    <a href="http://placehold.it/800x400" class="prettyPhoto[gallery2]">
                                        <img src="http://placehold.it/800x400" alt="Modern House Near Sutton.">
                                        <span class="mask">
                                            <span class="zoom"></span>
                                        </span>
                                    </a>
                                </div>

                                <!--begin product_info -->
                                <div class="product_info">

                                    <h3 class="product_title"><a href="#">Modern House In Sutton Street, Manchester, UK.</a></h3>

                                    <a href="#" class="product_icons"><i class="icon icon-tags"></i> Two Bed House</a>

                                    <a href="#" class="product_icons last"><i class="icon icon-money-banknote"></i> 1800 &euro; / Month</a>

                                    <p>Pellentesque ac lacus iaculis erate estadis vitae euismod netset rhoncus purus eget lorem porta, seditus porttis netsum etis lacus aliquam amet sapien...</p>

                                </div>
                                <!--end product_info -->

                            </div>
                            <!--end carousel_item -->

                            <!--begin carousel_item -->
                            <div class="carousel_item product_item last">

                                <div class="view view-first">
                                    <a href="http://placehold.it/800x400" class="prettyPhoto[gallery2]">
                                        <img src="http://placehold.it/800x400" alt="Victorian House In Westminster.">
                                        <span class="mask">
                                            <span class="zoom"></span>
                                        </span>
                                    </a>
                                </div>

                                <!--begin product_info -->
                                <div class="product_info">

                                    <h3 class="product_title"><a href="#">Victorian House In Westminster, London.</a></h3>

                                    <a href="#" class="product_icons"><i class="icon icon-tags"></i> Three Bed House</a>

                                    <a href="#" class="product_icons last"><i class="icon icon-money-banknote"></i> 2500 &euro; / Month</a>

                                    <p>Pellentesque ac lacus iaculis erate estadis vitae euismod netset rhoncus purus eget lorem porta, seditus porttis netsum etis lacus aliquam amet sapien...</p>

                                </div>
                                <!--end product_info -->

                            </div>
                            <!--end carousel_item -->

                        </div>
                        <!--end owl-carousel -->

                    </div>
                    <!--end twelvecol -->

                </div>
                <!--end row -->

            </div>
            <!--end section_box -->

        </section>
        <!--end featured section -->

    </div>
    <!--! end of #container -->

@includes('layouts.includes.footer')


@include('layouts.includes.scripts.main')

@include('layouts.includes.WP_FOOT')
