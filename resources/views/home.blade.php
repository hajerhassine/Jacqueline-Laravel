@extends('layouts.master_home')


@section('home_content')



<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
        <div class="header_mobile">
            <div class="content_wrap">
                <div class="menu_button icon-menu"></div>
                <div class="logo">
                    <a href="index.html">
                    <img src="{{asset('fontend/assets/images/Logo.png')}}" class="logo_main" alt="" width="238" height="56">
                  
                    </a>
                </div>
                <div class="menu_main_cart top_panel_icon">
                    <a href="#" class="top_panel_cart_button" data-items="0" data-summa="&pound;0.00">
                        <span class="contact_icon icon-icon_bag_alt"></span>
                    </a>
                    <ul class="widget_area sidebar_cart sidebar">
                        <li>
                            <div class="widget woocommerce widget_shopping_cart">
                                <div class="hide_cart_widget_if_empty">
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget ">
                                            <li class="empty">No products in the cart.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="side_wrap">
                <div class="close">Close</div>
                <div class="panel_top">
                    <nav class="menu_main_nav_area">
                        <ul class="menu_main_nav">
                            <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a>Home</a>
                                <ul class="sub-menu">
                                    <li class="menu-item current-menu-item"><a href="index.html">Home 1</a></li>
                                    <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                    <li class="menu-item"><a href="home-3.html">Home 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a>Features</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children"><a>Gallery</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="gallery-grid.html">Grid</a></li>
                                            <li class="menu-item"><a href="gallery-masonry.html">Masonry</a></li>
                                            <li class="menu-item"><a href="gallery-cobbles.html">Cobbles</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="gallery-polaroid.html">Polaroid gallery</a></li>
                                    <li class="menu-item menu-item-has-children"><a>About</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                                            <li class="menu-item"><a href="staff.html">Our Staff</a></li>
                                            <li class="menu-item"><a href="contacts.html">Contacts Us</a></li>
                                            <li class="menu-item"><a href="price-tables.html">Price Tables</a></li>
                                            <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                                            <li class="menu-item"><a href="events.html">Events</a></li>
                                            <li class="menu-item"><a href="certificates.html">Gift Certificates</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a>Services</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="services.html">Services 1</a></li>
                                            <li class="menu-item"><a href="services-2.html">Services 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a>Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="typography.html">Typography</a></li>
                                            <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                                            <li class="menu-item"><a href="404.html">404 Page</a></li>
                                            <li class="menu-item"><a href="customization.html">Customization</a></li>
                                            <li class="menu-item"><a href="faq.html">Faq Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="booking.html">Booking</a></li>
                            <li class="menu-item menu-item-has-children"><a>Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="classic.html">Classic</a></li>
                                    <li class="menu-item menu-item-has-children"><a>Masonry</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="masonry-2-columns.html">2 columns</a></li>
                                            <li class="menu-item"><a href="masonry-3-columns.html">3 columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a>Portfolio</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="portfolio-2-columns.html">2 columns</a></li>
                                            <li class="menu-item"><a href="portfolio-3-columns.html">3 columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="post-formats.html">Post Formats</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="shop.html">Shop</a></li>
                          
                        </ul>
             
                    </nav>
                    <div class="search_wrap search_style_regular search_state_fixed search_ajax">
                        <div class="search_form_wrap">
                            <form role="search" method="get" class="search_form" action="#">
                                <button type="submit" class="search_submit icon-search-1" title="Start search"></button>
                                <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                            </form>
                        </div>
                        <div class="search_results widget_area scheme_original">
                            <a class="search_results_close icon-cancel"></a>
                            <div class="search_results_content"></div>
                        </div>
                    </div>
                </div>
                <div class="panel_middle">
                    <div class="contact_field contact_phone">
                        <span class="contact_icon icon-icon_phone"></span>
                        <span class="contact_label contact_phone"><a href="tel:+18002453925">+1 800 245 39 25</a></span>
                    </div>
                    <div class="contact_field contact_mail">
                        <span class="contact_icon icon-mail"></span>
                        <span class="contact_email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></span>
                    </div>
                    <div class="top_panel_top_open_hours icon-clock">Mon - Fry 10:00 - 18:00</div>
                    <div class="top_panel_top_user_area">
                        <ul class="menu_user_nav">
                        </ul>
                    </div>
                </div>
                <div class="panel_bottom">
                    <div class="contact_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social_twitter">
                                    <span class="icon-twitter"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social_facebook">
                                    <span class="icon-facebook"></span>
                                </a>
                            </div>
                            <div class="sc_socials_item">
                                <a href="#" target="_blank" class="social_icons social_instagramm">
                                    <span class="icon-instagramm"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mask"></div>
        </div>
        <header class="top_panel_wrap top_panel_style_4 scheme_original">
            <div class="top_panel_wrap_inner top_panel_inner_style_4 top_panel_position_above">
                <div class="top_panel_top">
                    <div class="content_wrap clearfix">
                        <div class="top_panel_top_contact_area">Contact Us: <a href="mailto:info@yoursite.com">info@yoursite.com</a></div>
                        <div class="top_panel_top_contact_area">Call Us <a href="tel:+18002453925">+1 800 245 39 25 </a></div>
                        <div class="top_panel_top_user_area">
                            <ul class="menu_user_nav">
                                <li class="menu_user_cart">
                                    <a href="#" class="top_panel_cart_button" data-items="0" data-summa="&pound;0.00">
                                        <span class="contact_icon icon-icon_bag_alt"></span>
                                    </a>
                                    <ul class="widget_area sidebar_cart sidebar">
                                        <li>
                                            <div class="widget woocommerce widget_shopping_cart">
                                                <div class="hide_cart_widget_if_empty">
                                                    <div class="widget_shopping_cart_content">
                                                        <ul class="cart_list product_list_widget ">
                                                            <li class="empty">No products in the cart.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="top_panel_top_socials">
                            <span class="label">Stay connected: </span>
                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                        <span class="icon-twitter"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                        <span class="icon-facebook"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_instagramm">
                                        <span class="icon-instagramm"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="contact_logo">
                            <div class="logo">
                                <a href="index.html">
                                <img src="{{asset('fontend/assets/images/Logo.png')}}" class="logo_main" alt="" width="238" height="56">


                                    <img src="{{asset('fontend/assets/images/Logo.png')}}"  class="logo_fixed" alt="" width="238" height="56">

                                </a>
                            </div>
                        </div>
                        <div class="menu_main_wrap">
                            <nav class="menu_main_nav_area">
                                <ul class="menu_main_nav">
                                    <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a>Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item current-menu-item"><a href="index.html">Home 1</a></li>
                                            <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                            <li class="menu-item"><a href="home-3.html">Home 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a>Features</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children"><a>Gallery</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="gallery-grid.html">Grid</a></li>
                                                    <li class="menu-item"><a href="gallery-masonry.html">Masonry</a></li>
                                                    <li class="menu-item"><a href="gallery-cobbles.html">Cobbles</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="gallery-polaroid.html">Polaroid gallery</a></li>
                                            <li class="menu-item menu-item-has-children"><a>About</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                                    <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                                                    <li class="menu-item"><a href="staff.html">Our Staff</a></li>
                                                    <li class="menu-item"><a href="contacts.html">Contacts Us</a></li>
                                                    <li class="menu-item"><a href="price-tables.html">Price Tables</a></li>
                                                    <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                                                    <li class="menu-item"><a href="events.html">Events</a></li>
                                                    <li class="menu-item"><a href="certificates.html">Gift Certificates</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a>Services</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="services.html">Services 1</a></li>
                                                    <li class="menu-item"><a href="services-2.html">Services 2</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a>Pages</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="typography.html">Typography</a></li>
                                                    <li class="menu-item"><a href="shortcodes.html">Shortcodes</a></li>
                                                    <li class="menu-item"><a href="404.html">404 Page</a></li>
                                                    <li class="menu-item"><a href="customization.html">Customization</a></li>
                                                    <li class="menu-item"><a href="faq.html">Faq Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="booking.html">Booking</a></li>
                                    <li class="menu-item menu-item-has-children"><a>Blog</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="classic.html">Classic</a></li>
                                            <li class="menu-item menu-item-has-children"><a>Masonry</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="masonry-2-columns.html">2 columns</a></li>
                                                    <li class="menu-item"><a href="masonry-3-columns.html">3 columns</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a>Portfolio</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="portfolio-2-columns.html">2 columns</a></li>
                                                    <li class="menu-item"><a href="portfolio-3-columns.html">3 columns</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="post-formats.html">Post Formats</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="shop.html">Shop</a></li>
                                    
                                </ul>
                            </nav>
                            <div class="search_wrap search_style_regular search_state_closed search_ajax">
                                <div class="search_form_wrap">
                                    <form role="search" method="get" class="search_form" action="#">
                                        <button type="submit" class="search_submit icon-search-1" title="Open search"></button>
                                        <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                    </form>
                                </div>
                                <div class="search_results widget_area scheme_original">
                                    <a class="search_results_close icon-cancel"></a>
                                    <div class="search_results_content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1">
            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" data-version="5.2.6">
                    <ul>
                        <li data-index="rs-1" data-transition="fade" data-slotamount="default"
                         data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                          data-easeout="default" data-masterspeed="default" data-thumb="images/1-1-100x50.jpg"
                          data-delay="9000" data-rotate="0" data-saveperformance="off" data-title="Slide"
                           data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                           data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">

                        <img src="{{asset('fontend/assets/images/1170x700.jpg')}}"alt="" title="1" width="1920" height="758" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                            <div class="tp-caption tp-resizeme" id="slide-1-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','1']" data-y="['middle','middle','middle','middle']" data-voffset="['-117','-117','-117','-167']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:1200;e:Power2.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-responsive_offset="on">
                            <img src="{{asset('fontend/assets/images/Vector-Smart-Object-6.png')}}" alt="" width="169" height="20" data-ww="['169px','169px','169px','169px']" data-hh="['20px','20px','20px','20px']" data-no-retina>

                            </div>
                            <div class="tp-caption black tp-resizeme" id="slide-1-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','6']" data-y="['middle','middle','middle','middle']" data-voffset="['-67','-67','-67','-123']" data-fontsize="['68','68','68','55']" data-lineheight="['90','90','90','55']" data-width="['465','465','465','466']" data-height="['91','91','91','none']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">Visit one of our multiple </div>
                            <div class="tp-caption black tp-resizeme" id="slide-1-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','-1']" data-y="['middle','middle','middle','middle']" data-voffset="['-5','-5','-5','-37']" data-fontsize="['68','68','60','55']" data-lineheight="['68','68','60','55']" data-width="['none','none','none','600']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">sessions of relaxation </div>
                            <div class="tp-caption black tp-resizeme" id="slide-1-layer-3" data-x="['center','center','center','center']" data-hoffset="['1','1','1','3']" data-y="['middle','middle','middle','middle']" data-voffset="['63','63','63','70']" data-fontsize="['17','17','17','20']" data-lineheight="['30','30','30','25']" data-width="['none','none','none','550']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:2500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">You owe yourself this moment. Make an appointment in just a click! </div>
                            <div class="tp-caption black tp-resizeme" id="slide-1-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','1']" data-y="['middle','middle','middle','middle']" data-voffset="['142','142','142','163']" data-fontsize="['11','11','11','15']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;" data-style_hover="c:rgba(249, 163, 146, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:3000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"booking.html","delay":""}]' data-responsive_offset="on">make an appointment </div>
                        </li>
                        <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/3-2-100x50.jpg" data-delay="9000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <img src="{{asset('fontend/assets/images/1170x700.jpg')}}" alt="" title="3" width="1920" height="758" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                            <div class="tp-caption tp-resizeme" id="slide-4-layer-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-117','-117','-117','-173']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:1200;e:Power2.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-responsive_offset="on">

                            <img src="{{asset('fontend/assets/images/Vector-Smart-Object-6.png')}}" alt="" width="169" height="20" data-ww="['169px','169px','169px','169px']" data-hh="['20px','20px','20px','20px']" data-no-retina>

                            </div>
                            <div class="tp-caption black tp-resizeme" id="slide-4-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-67','-67','-67','-130']" data-fontsize="['68','68','68','55']" data-lineheight="['90','90','90','55']" data-width="['465','465','465','466']" data-height="['91','91','91','none']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">Welcome to our </div>
                            <div class="tp-caption black tp-resizeme" id="slide-4-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-5','-5','-5','-40']" data-fontsize="['68','68','60','55']" data-lineheight="['68','68','60','55']" data-width="['none','none','none','600']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">massage theraphy center </div>
                            <div class="tp-caption black tp-resizeme" id="slide-4-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['61','61','61','61']" data-fontsize="['17','17','17','20']" data-lineheight="['30','30','30','25']" data-width="['none','none','none','600']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:2500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">Give yourself a moment to relax. Find a minute to rejuvenate your body </div>
                            <div class="tp-caption black tp-resizeme" id="slide-4-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['142','142','142','142']" data-fontsize="['11','11','11','15']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;" data-style_hover="c:rgba(249, 163, 146, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:3000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"https:\/\/themeforest.net\/user\/themerex\/portfolio?term=jacqueline","delay":""}]' data-responsive_offset="on">Purchase Template </div>
                        </li>
                        <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/2-3-100x50.jpg" data-delay="9000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                            <img src="{{asset('fontend/assets/images/1170x700.jpg')}}" alt="" title="2" width="1920" height="758" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <div class="tp-caption tp-resizeme" id="slide-3-layer-5" data-x="['center','center','center','center']" data-hoffset="['-200','-200','-150','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-158','-158','-158','-118']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:1200;e:Power2.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-responsive_offset="on">
                            <img src="{{asset('fontend/assets/images/Vector-Smart-Object-6.png')}}" alt="" width="169" height="20" data-ww="['169px','169px','169px','169px']" data-hh="['20px','20px','20px','20px']" data-no-retina>

                            </div>
                            <div class="tp-caption black tp-resizeme" id="slide-3-layer-1" data-x="['center','center','center','center']" data-hoffset="['-200','-200','-150','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-107','-107','-107','-79']" data-fontsize="['68','68','68','55']" data-lineheight="['90','90','90','55']" data-width="['465','465','465','466']" data-height="['91','91','91','none']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">Modern and attractive </div>
                            <div class="tp-caption black tp-resizeme" id="slide-3-layer-2" data-x="['center','center','center','center']" data-hoffset="['-200','-200','-150','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-45','-45','-45','-24']" data-fontsize="['68','68','60','55']" data-lineheight="['68','68','60','55']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">HTML Template </div>
                            <div class="tp-caption black tp-resizeme" id="slide-3-layer-3" data-x="['center','center','center','center']" data-hoffset="['-200','-200','-150','0']" data-y="['middle','middle','middle','middle']" data-voffset="['23','23','23','43']" data-fontsize="['17','17','17','20']" data-lineheight="['30','30','30','25']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:2500;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">Build your wellness business with clean and elegant template </div>
                            <div class="tp-caption black tp-resizeme" id="slide-3-layer-4" data-x="['center','center','center','center']" data-hoffset="['-200','-200','-150','0']" data-y="['middle','middle','middle','middle']" data-voffset="['102','102','102','127']" data-fontsize="['11','11','11','15']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;" data-style_hover="c:rgba(249, 163, 146, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:3000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;" data-start="1000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"https:\/\/themeforest.net\/user\/themerex\/portfolio","delay":""}]' data-responsive_offset="on">read more info </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>
        </section>
        <div class="page_content_wrap page_paddings_no">
            <div class="content_wrap">
                <div class="content">
                    <article class="post_item post_item_single page">
                        <section class="post_content">
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459259915855">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <div class="sc_empty_space em_height_8">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                            <div id="sc_services_809_wrap" class="sc_services_wrap">
                                                <div id="sc_services_809" class="sc_services sc_services_style_services-1 sc_services_type_images cu_fullwidth">
                                                    <h6 class="sc_services_subtitle sc_item_subtitle">Welcome to our</h6>
                                                    <h2 class="sc_services_title sc_item_title">massage theraphy center</h2>
                                                    <div class="sc_services_descr sc_item_descr">
                                                        You deserve better than a rushed massage by a rookie therapist in <br/>
                                                        a place that makes you feel more stressed
                                                    </div>
                                                    <div class="sc_columns columns_wrap">
                                                        <div class="column-1_3 column_padding_bottom">
                                                            <div id="sc_services_809_1" class="sc_services_item">
                                                                <div class="sc_services_item_featured post_featured">
                                                                    <div class="post_thumb" data-image="images/370x370.jpg" data-title="Special Offers">
                                                                        <a class="hover_icon hover_icon_link" href="single-post.html">
                                                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}">

                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_content">
                                                                    <div class="sc_services_item_category">
                                                                        <a href="services.html" rel="tag">Deal Of Week</a>
                                                                    </div>
                                                                    <h4 class="sc_services_item_title">
                                                                        <a href="single-post.html">Special Offers</a>
                                                                    </h4>
                                                                    <div class="sc_services_item_description">
                                                                        <a href="single-post.html" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                            <div>
                                                                                <span class="first">Learn more</span>
                                                                                <span class="second">Learn more</span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column-1_3 column_padding_bottom">
                                                            <div id="sc_services_809_2" class="sc_services_item">
                                                                <div class="sc_services_item_featured post_featured">
                                                                    <div class="post_thumb" data-image="images/1170x700.jpg" data-title="Gift Cards Available">
                                                                        <a class="hover_icon hover_icon_link" href="single-post.html">

                                                                            <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_content">
                                                                    <div class="sc_services_item_category">
                                                                        <a href="services.html" rel="tag">Special Gifts</a>
                                                                    </div>
                                                                    <h4 class="sc_services_item_title">
                                                                        <a href="single-post.html">Gift Cards Available</a>
                                                                    </h4>
                                                                    <div class="sc_services_item_description">
                                                                        <a href="single-post.html" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                            <div>
                                                                                <span class="first">Learn more</span>
                                                                                <span class="second">Learn more</span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column-1_3 column_padding_bottom">
                                                            <div id="sc_services_809_3" class="sc_services_item">
                                                                <div class="sc_services_item_featured post_featured">
                                                                    <div class="post_thumb" data-image="images/1170x700.jpg" data-title="Online Appointment">
                                                                        <a class="hover_icon hover_icon_link" href="single-post.html">

                                                                            <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_services_item_content">
                                                                    <div class="sc_services_item_category">
                                                                        <a href="services.html" rel="tag">Book Now</a>
                                                                    </div>
                                                                    <h4 class="sc_services_item_title">
                                                                        <a href="single-post.html">Online Appointment</a>
                                                                    </h4>
                                                                    <div class="sc_services_item_description">
                                                                        <a href="single-post.html" class="sc_services_item_readmore sc_button sc_button_style_filled sc_button_size_medium">
                                                                            <div>
                                                                                <span class="first">Learn more</span>
                                                                                <span class="second">Learn more</span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_empty_space em_height_6">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_row-full-width"></div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" data-sc-stretch-content="true" class="sc_row row sc_row-no-padding">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <div class="sc_promo custom_promo_services sc_promo_size_large">
                                                <div class="sc_promo_inner">
                                                    <div class="sc_promo_image odd"></div>
                                                    <div class="sc_promo_block sc_align_left cu_halfwidth cu_fl_R">
                                                        <div class="sc_promo_block_inner cu_nopadds">
                                                            <div class="sc_promo_content">
                                                                <div id="sc_services_350_wrap" class="sc_services_wrap">
                                                                    <div id="sc_services_350" class="sc_services sc_services_style_services-2 sc_services_type_icons cu_fullwidth">
                                                                        <div class="sc_columns columns_wrap">
                                                                            <div class="column-1_2 column_padding_bottom">
                                                                                <div id="sc_services_350_1" class="sc_services_item">
                                                                                    <a href="single-post.html">
                                                                                        <span class="sc_icon icon-massage4"></span>
                                                                                    </a>
                                                                                    <div class="sc_services_item_content">
                                                                                        <h4 class="sc_services_item_title">
                                                                                            <a href="single-post.html">Massage Therapy</a>
                                                                                        </h4>
                                                                                        <div class="sc_services_item_description">
                                                                                            <p>We use different types of massage for a variety of health-related purposes</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="column-1_2 column_padding_bottom">
                                                                                <div id="sc_services_350_2" class="sc_services_item">
                                                                                    <a href="single-post.html">
                                                                                        <span class="sc_icon icon-chairs16"></span>
                                                                                    </a>
                                                                                    <div class="sc_services_item_content">
                                                                                        <h4 class="sc_services_item_title">
                                                                                            <a href="single-post.html">Physiotherapy</a>
                                                                                        </h4>
                                                                                        <div class="sc_services_item_description">
                                                                                            <p>It helps restore movement and function when someone is affected by injury</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="column-1_2 column_padding_bottom">
                                                                                <div id="sc_services_350_3" class="sc_services_item">
                                                                                    <a href="single-post.html">
                                                                                        <span class="sc_icon icon-relax43"></span>
                                                                                    </a>
                                                                                    <div class="sc_services_item_content">
                                                                                        <h4 class="sc_services_item_title">
                                                                                            <a href="single-post.html">Hot Stone Massage</a>
                                                                                        </h4>
                                                                                        <div class="sc_services_item_description">
                                                                                            <p>The therapist uses smooth, heated stones by placing them on the body</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="column-1_2 column_padding_bottom">
                                                                                <div id="sc_services_350_4" class="sc_services_item">
                                                                                    <a href="single-post.html">
                                                                                        <span class="sc_icon icon-sport161"></span>
                                                                                    </a>
                                                                                    <div class="sc_services_item_content">
                                                                                        <h4 class="sc_services_item_title">
                                                                                            <a href="single-post.html">Sports Massage</a>
                                                                                        </h4>
                                                                                        <div class="sc_services_item_description">
                                                                                            <p>Provides innovative bodywork and geared toward the needs of athletics</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_row-full-width"></div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459330954110 scheme_original inverse_colors">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <div class="columns_wrap sc_columns columns_nofluid custom_columns_brands equal_height">
                                                <div class="column-1_4 sc_column_item">
                                                    <div class="sc_column_item_inner">
                                                        <h6 class="sc_title sc_title_regular">We use products of the best brands only</h6>
                                                    </div>
                                                </div>
                                                <div class="column-3_4 sc_column_item span_3">
                                                    <div id="sc_clients_387_wrap" class="sc_clients_wrap">
                                                        <div id="sc_clients_387" class="sc_clients sc_clients_style_clients-1 cu_fullwidth">
                                                            <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_nocontrols" data-interval="9415" data-slides-per-view="3" data-slides-min-width="100">
                                                                <div class="slides swiper-wrapper">
                                                                    <div class="swiper-slide" data-style="width:100%;">
                                                                        <div id="sc_clients_387_1" class="sc_clients_item">
                                                                            <div class="sc_client_image">

                                                                                <img src="{{asset('fontend/assets/images/logo-4.png')}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide" data-style="width:100%;">
                                                                        <div id="sc_clients_387_2" class="sc_clients_item">
                                                                            <div class="sc_client_image">

                                                                                <img src="{{asset('fontend/assets/images/logo-2.png')}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide" data-style="width:100%;">
                                                                        <div id="sc_clients_387_3" class="sc_clients_item">
                                                                            <div class="sc_client_image">

                                                                                <img src="{{asset('fontend/assets/images/logo-1.png')}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sc_slider_controls_wrap">
                                                                    <a class="sc_slider_prev" href="#"></a>
                                                                    <a class="sc_slider_next" href="#"></a>
                                                                </div>
                                                                <div class="sc_slider_pagination_wrap"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_row-full-width"></div>
////////////////////////////////////////////////////////////////////////////////////////////////////
                            <div class="sc_row row">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <div class="sc_empty_space em_height_8-4">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                            <div class="columns_wrap sc_columns columns_nofluid">
                                                <div class="column-1_4 sc_column_item">
                                                    <div class="sc_empty_space hide_on_responsive em_height_4-4">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                    <h2 class="sc_title sc_title_regular">Open Hours:</h2>
                                                    <div class="text_column content_element ">
                                                        <div class="wrapper">
                                                            <p>If you feel tired and stressed after a working day, we are happy to give you an enjoyable and healthy solution to find your balance again.</p>
                                                        </div>
                                                    </div>
                                                    <div class="text_column content_element sc_custom_1459352457001">
                                                        <div class="wrapper">
                                                            <ul>
                                                                <li>Mon-Fri: 9 AM &#8211; 6 PM</li>
                                                                <li>Saturday: 9 AM &#8211; 4 PM</li>
                                                                <li>Sunday: Closed</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="contacts.html" class="sc_button sc_button_square sc_button_style_border sc_button_size_base cu_mrg_1">Read More</a>
                                                    <div class="sc_empty_space em_height_3-8">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                                <div class="column-3_4 sc_column_item span_3">
                                                    <div class="sc_promo custom_promo_01 scheme_light sc_promo_size_large">
                                                        <div class="sc_promo_inner">
                                                            <div class="sc_promo_image even"></div>
                                                            <div class="sc_promo_block sc_align_left cu_block_1">
                                                                <div class="sc_promo_block_inner cu_pds_1">
                                                                    <div class="sc_promo_content">
                                                                        <h6 class="sc_title sc_title_regular sc_align_right custom_title_01">01</h6>
                                                                        <h6 class="sc_title sc_title_regular cu_block_2">
                                                                            <em> July 4, 2015  /  0 Comments</em>
                                                                        </h6>
                                                                        <h2 class="sc_title sc_title_regular">
                                                                            <a href="single-post.html">
                                                                                Massage<br/>
                                                                                Therapy<br/>
                                                                                for rest &amp;<br/>
                                                                                relaxation
                                                                            </a>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_empty_space em_height_8-4">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459343317996">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <div class="sc_empty_space em_height_8-3">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                            <div id="sc_blogger_321" class="sc_blogger layout_masonry_4 template_masonry sc_blogger_horizontal no_description">
                                                <h6 class="sc_blogger_subtitle sc_item_subtitle">From The Blog</h6>
                                                <h2 class="sc_blogger_title sc_item_title">Nos offres</h2>
                                                <div class="isotope_wrap" data-columns="4">
                                                    <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                        <div class="post_item post_item_masonry post_item_masonry_4">
                                                            <div class="post_featured">
                                                                <div class="post_thumb" data-image="images/1170x700.jpg" data-title="How massage loses its value">
                                                                    <a class="hover_icon hover_icon_link" href="single-post.html">

                                                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="post_content isotope_item_content">
                                                                <div class="post_category">
                                                                    <a href="#" rel="tag">News</a>
                                                                </div>
                                                                <h4 class="post_title">
                                                                    <a href="single-post.html">How massage loses its value</a>
                                                                </h4>
                                                                <div class="post_info">
                                                                    <span class="post_info_item post_info_posted">
                                                                        <a href="single-post.html" class="post_info_date">March 29, 2016</a>
                                                                    </span>
                                                                    <span class="post_info_item ">Posted by
                                                                        <a href="single-post.html" class="post_info_author">Kate Green</a>
                                                                    </span>
                                                                </div>
                                                                <div class="post_descr">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                        <div class="post_item post_item_masonry post_item_masonry_4">
                                                            <div class="post_featured">
                                                                <div class="post_thumb" data-image="images/1920x1100.jpg" data-title="How Often Should I get a Massage?">
                                                                    <a class="hover_icon hover_icon_link" href="single-post.html">

                                                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="post_content isotope_item_content">
                                                                <div class="post_category">
                                                                    <a href="#" rel="tag">News</a>
                                                                </div>
                                                                <h4 class="post_title">
                                                                    <a href="single-post.html">How Often Should I get a Massage?</a>
                                                                </h4>
                                                                <div class="post_info">
                                                                    <span class="post_info_item post_info_posted">
                                                                        <a href="single-post.html" class="post_info_date">March 29, 2016</a>
                                                                    </span>
                                                                    <span class="post_info_item ">Posted by
                                                                        <a href="single-post.html" class="post_info_author">Kate Green</a>
                                                                    </span>
                                                                </div>
                                                                <div class="post_descr">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                        <div class="post_item post_item_masonry post_item_masonry_4">
                                                            <div class="post_featured">
                                                                <div class="post_thumb" data-image="images/image-18.jpg" data-title="What is Massage Therapy?">
                                                                    <a class="hover_icon hover_icon_link" href="single-post.html">

                                                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="post_content isotope_item_content">
                                                                <div class="post_category">
                                                                    <a href="#" rel="tag">News</a>
                                                                </div>
                                                                <h4 class="post_title">
                                                                    <a href="single-post.html">What is Massage Therapy?</a>
                                                                </h4>
                                                                <div class="post_info">
                                                                    <span class="post_info_item post_info_posted">
                                                                        <a href="single-post.html" class="post_info_date">March 29, 2016</a>
                                                                    </span>
                                                                    <span class="post_info_item ">Posted by
                                                                        <a href="single-post.html" class="post_info_author">Kate Green</a>
                                                                    </span>
                                                                </div>
                                                                <div class="post_descr">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="isotope_item isotope_item_masonry isotope_item_masonry_4 isotope_column_4">
                                                        <div class="post_item post_item_masonry post_item_masonry_4 last">
                                                            <div class="post_featured">
                                                                <div class="post_thumb" data-image="images/image-19.jpg" data-title="Massage Therapy for Tight Muscles">
                                                                    <a class="hover_icon hover_icon_link" href="single-post.html">

                                                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="post_content isotope_item_content">
                                                                <div class="post_category">
                                                                    <a href="#" rel="tag">News</a>
                                                                </div>
                                                                <h4 class="post_title">
                                                                    <a href="single-post.html">Massage Therapy for Tight Muscles</a>
                                                                </h4>
                                                                <div class="post_info">
                                                                    <span class="post_info_item post_info_posted">
                                                                        <a href="single-post.html" class="post_info_date">March 29, 2016</a>
                                                                    </span>
                                                                    <span class="post_info_item ">Posted by
                                                                        <a href="single-post.html" class="post_info_author">Kate Green</a>
                                                                    </span>
                                                                </div>
                                                                <div class="post_descr">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sc_blogger_button sc_item_button">
                                                    <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base">
                                                        <div>
                                                            <span class="first">View All Posts</span>
                                                            <span class="second">View All Posts</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="sc_empty_space em_height_7-8">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_row-full-width"></div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459341675644 inverse_colors">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <div class="sc_section custom_services_pricing sc_section_block alignright max_width">
                                                <div class="sc_section_inner">
                                                    <div class="sc_section_overlay">
                                                        <div class="sc_section_content padding_on">
                                                            <div class="sc_section_content_wrap">
                                                                <h1 class="sc_title sc_title_regular">Services &amp; Pricing</h1>
                                                                <div class="text_column content_element ">
                                                                    <div class="wrapper">
                                                                        <p>At our massage theraphy center, each massage is customized according to the client's individual needs as well as the therapist's own talents and training.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="text_column content_element sc_custom_1459344743835">
                                                                    <div class="wrapper">
                                                                        <table>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <em>Personalized Massage</em>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="cu_text_r">
                                                                                        <em>60 min $100 / 90 min $145</em>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <em>Couples Massage</em>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="cu_text_r">
                                                                                        <em>60 min $110 per person</em>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <em>Hot Stone Massage</em>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="cu_text_r">
                                                                                        <em>60 min $125 / 90 min $170</em>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <a href="booking.html" class="sc_button sc_button_square sc_button_style_border sc_button_size_base cu_mrg_1">Book Online</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_row-full-width"></div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459346050873">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <div class="sc_empty_space em_height_8-3">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                            <div class="sc_section sc_section_block">
                                                <div class="sc_section_inner">
                                                    <h6 class="sc_section_subtitle sc_item_subtitle">From The Shop</h6>
                                                    <h2 class="sc_section_title sc_item_title line_show">Our products</h2>
                                                    <div class="sc_section_content_wrap">
                                                        <div class="sc_empty_space em_height_2">
                                                            <span class="sc_empty_space_inner"></span>
                                                        </div>
                                                        <article class="myportfolio-container minimal-light" id="esg-grid-1-1-wrap">
                                                            <div id="esg-grid-1-1" class="esg-grid">
                                                                <ul>
                                                                    <li class="filterall filter-simple filter-skincare eg-eisenhower-massage-wrapper eg-post-id-332" data-date="1459258561">
                                                                        <div class="esg-media-cover-wrapper">
                                                                            <div class="esg-entry-media">

                                                                                <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                            </div>
                                                                            <div class="esg-entry-cover">
                                                                                <div class="esg-overlay esg-fade eg-eisenhower-massage-container" data-delay="0"></div>
                                                                                <div class="esg-center eg-post-332 eg-eisenhower-massage-element-1-a esg-rollright" data-delay="0.1">
                                                                                    <a class="eg-eisenhower-massage-element-1 eg-post-332 esgbox" href="images/370x370.jpg" lgtitle="The Supreme Skin Care">
                                                                                        <i class="eg-icon-search"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="esg-center eg-post-332 eg-eisenhower-massage-element-3-a esg-rollleft" data-delay="0.18">
                                                                                    <a class="eg-eisenhower-massage-element-3 eg-post-332" href="single-product.html" target="_self">
                                                                                        <i class="eg-icon-forward"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-entry-content eg-eisenhower-massage-content">
                                                                                <div class="esg-content eg-post-332 eg-eisenhower-massage-element-6-a">
                                                                                    <a class="eg-eisenhower-massage-element-6 eg-post-332" href="shop.html" title="View all posts in simple" rel="category tag">simple</a>,
                                                                                    <a class="eg-eisenhower-massage-element-6 eg-post-332" href="shop.html" title="View all posts in Skincare" rel="category tag">Skincare</a>
                                                                                </div>
                                                                                <div class="esg-content eg-post-332 eg-eisenhower-massage-element-0">The Supreme Skin Care</div>
                                                                                <div class="esg-content eg-eisenhower-massage-element-2 esg-none esg-clear"></div>
                                                                                <div class="esg-content eg-post-332 eg-eisenhower-massage-element-25">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">&pound;</span>47.00
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="filterall filter-simple filter-skincare eg-eisenhower-massage-wrapper eg-post-id-337" data-date="1459258606">
                                                                        <div class="esg-media-cover-wrapper">
                                                                            <div class="esg-entry-media">

                                                                                <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                            </div>
                                                                            <div class="esg-entry-cover">
                                                                                <div class="esg-overlay esg-fade eg-eisenhower-massage-container" data-delay="0"></div>
                                                                                <div class="esg-center eg-post-337 eg-eisenhower-massage-element-1-a esg-rollright" data-delay="0.1">
                                                                                    <a class="eg-eisenhower-massage-element-1 eg-post-337 esgbox" href="images/370x370.jpg" lgtitle="Masque Contour des Yeux">
                                                                                        <i class="eg-icon-search"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="esg-center eg-post-337 eg-eisenhower-massage-element-3-a esg-rollleft" data-delay="0.18">
                                                                                    <a class="eg-eisenhower-massage-element-3 eg-post-337" href="single-product.html" target="_self">
                                                                                        <i class="eg-icon-forward"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-entry-content eg-eisenhower-massage-content">
                                                                                <div class="esg-content eg-post-337 eg-eisenhower-massage-element-6-a">
                                                                                    <a class="eg-eisenhower-massage-element-6 eg-post-337" href="shop.html" title="View all posts in simple" rel="category tag">simple</a>,
                                                                                    <a class="eg-eisenhower-massage-element-6 eg-post-337" href="shop.html" title="View all posts in Skincare" rel="category tag">Skincare</a>
                                                                                </div>
                                                                                <div class="esg-content eg-post-337 eg-eisenhower-massage-element-0">Masque Contour des Yeux</div>
                                                                                <div class="esg-content eg-eisenhower-massage-element-2 esg-none esg-clear"></div>
                                                                                <div class="esg-content eg-post-337 eg-eisenhower-massage-element-25">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">&pound;</span>25.00
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="filterall filter-simple filter-skincare eg-eisenhower-massage-wrapper eg-post-id-339" data-date="1459258628">
                                                                        <div class="esg-media-cover-wrapper">
                                                                            <div class="esg-entry-media">

                                                                                <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                            </div>
                                                                            <div class="esg-entry-cover">
                                                                                <div class="esg-overlay esg-fade eg-eisenhower-massage-container" data-delay="0"></div>
                                                                                <div class="esg-center eg-post-339 eg-eisenhower-massage-element-1-a esg-rollright" data-delay="0.1">
                                                                                    <a class="eg-eisenhower-massage-element-1 eg-post-339 esgbox" href="images/370x370.jpg" lgtitle="EAU DU SOIR SCENTED SOAP">
                                                                                        <i class="eg-icon-search"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="esg-center eg-post-339 eg-eisenhower-massage-element-3-a esg-rollleft" data-delay="0.18">
                                                                                    <a class="eg-eisenhower-massage-element-3 eg-post-339" href="single-product.html" target="_self">
                                                                                        <i class="eg-icon-forward"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-entry-content eg-eisenhower-massage-content">
                                                                                <div class="esg-content eg-post-339 eg-eisenhower-massage-element-6-a">
                                                                                    <a class="eg-eisenhower-massage-element-6 eg-post-339" href="shop.html" title="View all posts in simple" rel="category tag">simple</a>,
                                                                                    <a class="eg-eisenhower-massage-element-6 eg-post-339" href="shop.html" title="View all posts in Skincare" rel="category tag">Skincare</a>
                                                                                </div>
                                                                                <div class="esg-content eg-post-339 eg-eisenhower-massage-element-0">EAU DU SOIR SCENTED SOAP</div>
                                                                                <div class="esg-content eg-eisenhower-massage-element-2 esg-none esg-clear"></div>
                                                                                <div class="esg-content eg-post-339 eg-eisenhower-massage-element-25">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">&pound;</span>10.00
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="filterall filter-simple filter-skincare eg-eisenhower-massage-wrapper eg-post-id-342" data-date="1459258761">
                                                                        <div class="esg-media-cover-wrapper">
                                                                            <div class="esg-entry-media">

                                                                                <img src="{{asset('fontend/assets/images/370x370.jpg')}}">
                                                                            </div>
                                                                            <div class="esg-entry-cover">
                                                                                <div class="esg-overlay esg-fade eg-eisenhower-massage-container" data-delay="0"></div>
                                                                                <div class="esg-center eg-post-342 eg-eisenhower-massage-element-1-a esg-rollright" data-delay="0.1">
                                                                                    <a class="eg-eisenhower-massage-element-1 eg-post-342 esgbox" href="images/370x370.jpg" lgtitle="BLACK ROSE FACE OIL">
                                                                                        <i class="eg-icon-search"></i>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="esg-center eg-post-342 eg-eisenhower-massage-element-3-a esg-rollleft" data-delay="0.18">
                                                                                    <a class="eg-eisenhower-massage-element-3 eg-post-342" href="single-product.html" target="_self">
                                                                                        <i class="eg-icon-forward"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-entry-content eg-eisenhower-massage-content">
                                                                                <div class="esg-content eg-post-342 eg-eisenhower-massage-element-6-a">
                                                                                    <a class="eg-eisenhower-massage-element-6 eg-post-342" href="shop.html" title="View all posts in simple" rel="category tag">simple</a>,
                                                                                    <a class="eg-eisenhower-massage-element-6 eg-post-342" href="shop.html" title="View all posts in Skincare" rel="category tag">Skincare</a>
                                                                                </div>
                                                                                <div class="esg-content eg-post-342 eg-eisenhower-massage-element-0">BLACK ROSE FACE OIL</div>
                                                                                <div class="esg-content eg-eisenhower-massage-element-2 esg-none esg-clear"></div>
                                                                                <div class="esg-content eg-post-342 eg-eisenhower-massage-element-25">
                                                                                    <span class="woocommerce-Price-amount amount">
                                                                                        <span class="woocommerce-Price-currencySymbol">&pound;</span>63.00
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </article>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_empty_space em_height_6">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_row-full-width"></div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_custom_1459347818729 inverse_colors">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <div class="sc_empty_space em_height_11-4">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                            <div id="sc_call_to_action_389" class="sc_call_to_action sc_call_to_action_style_2 sc_call_to_action_align_center cu_fullwidth">
                                                <div class="sc_call_to_action_info">
                                                    <h6 class="sc_call_to_action_subtitle sc_item_subtitle">Our Special Offer</h6>
                                                    <h2 class="sc_call_to_action_title sc_item_title">You owe yourself this moment</h2>
                                                    <div class="sc_call_to_action_descr sc_item_descr">Visit one of our multiple sessions of relaxation.</div>
                                                </div>
                                                <div class="sc_call_to_action_buttons sc_item_buttons">
                                                    <div class="sc_call_to_action_button sc_item_button">
                                                        <a href="booking.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base">
                                                            <div>
                                                                <span class="first">make an appointment</span>
                                                                <span class="second">make an appointment</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_empty_space em_height_10-5">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_row-full-width"></div>
                            <div class="sc_row row">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <a href="#" class="sc_icon icon-up sc_icon_shape_square aligncenter scroll_to_top show"></a>
                                            <div class="sc_empty_space em_height_5-7">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                                <div class="column-1_3 sc_column_item">
                                                    <h5 class="sc_title sc_title_regular sc_align_center">About us</h5>
                                                    <div class="text_column content_element ">
                                                        <div class="wrapper">
                                                            <p class="cu_text_c">Come in and our therapists provide the perfect treatment. Our massage is specially designed to help you achieve the perfect mind-body harmony</p>
                                                        </div>
                                                    </div>
                                                    <div class="sc_empty_space em_height_3">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                                <div class="column-1_3 sc_column_item">
                                                    <h5 class="sc_title sc_title_regular sc_align_center">Open Hours</h5>
                                                    <div class="text_column content_element ">
                                                        <div class="wrapper">
                                                            <p class="cu_text_c">
                                                                Mon-Fri: 9 AM &#8211; 6 PM
                                                                <br/> Saturday: 9 AM &#8211; 4 PM
                                                                <br/> Sunday: Closed
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="sc_empty_space em_height_3">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                                <div class="column-1_3 sc_column_item">
                                                    <h5 class="sc_title sc_title_regular sc_align_center">Contacts</h5>
                                                    <div class="text_column content_element ">
                                                        <div class="wrapper">
                                                            <p class="cu_text_c">
                                                                176 W street name, New York, NY 10014
                                                                <br/> Email: <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                                                                <br/> Telephone: <a href="tel:+18001234566">+1(800)123-4566</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="sc_empty_space em_height_3">
                                                        <span class="sc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                                            <h5 class="sc_title sc_title_regular sc_align_center">Newsletter</h5>
                                            <div class="sc_emailer aligncenter sc_emailer_opened">
                                                <form class="sc_emailer_form">
                                                    <input type="text" class="sc_emailer_input" name="email" value="" placeholder="Please, enter you email address.">
                                                    <a href="#" class="sc_emailer_button sc_button sc_button_style_filled sc_button_size_medium" title="Submit" data-group="E-mailer subscription">
                                                        <div>
                                                            <span class="first">Subscribe</span>
                                                            <span class="second">Subscribe</span>
                                                        </div>
                                                    </a>
                                                </form>
                                            </div>
                                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small cu_block_3">
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                                        <span class="icon-twitter"></span>
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                                        <span class="icon-facebook"></span>
                                                    </a>
                                                </div>
                                                <div class="sc_socials_item">
                                                    <a href="#" target="_blank" class="social_icons social_instagramm">
                                                        <span class="icon-instagramm"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="cu_text_c">
                                                <a href="#">Jacqueline </a>&#169; 2019 All Rights Reserved
                                                <a href="#">Terms of Use</a> and
                                                <a href="#">Privacy Policy</a>
                                            </p>
                                            <div class="sc_empty_space em_height_4-2">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>




    @endsection