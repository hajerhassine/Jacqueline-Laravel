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
        <section class="top_panel_image">
            <div class="top_panel_image_hover"></div>
            <div class="top_panel_image_header">
                <div class="top_panel_image_icon icon-book-open"></div>
                <h1 class="top_panel_image_title">Services </h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="index.html">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">Services </span>
                </div>
            </div>
        </section>
        
        <div class="sc_section sc_section_block aligncenter max_width cu_width-1110">
                                                <div class="sc_section_inner">
                                                    <h6 class="sc_section_subtitle sc_item_subtitle">Deal Of Week</h6>
                                                    <h2 class="sc_section_title sc_item_title line_hide">special Offers</h2>
                                                    <div class="sc_section_content_wrap">
                                                        <div class="columns_wrap sc_columns columns_nofluid equal_height cu_mrg_1">
                                                        @foreach($services as $service)
                                                            <div class="column-1_4 sc_column_item cu_block_11">
                                                                <div class="sc_column_item_inner">
                                                                    <figure class="sc_image sc_image_shape_square">
                                                                        <img src="{{ $service->service_image}}" alt="" />
                                                                    </figure>
                                                                    <h4 class="sc_title sc_title_regular">{{ $service->service_name }}</h4>
                                                                    <div class="text_column content_element ">
                                                                        <div class="wrapper">
                                                                            <p>{{ $service->service_description }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base odd">
                                                                        <div>
                                                                            <span class="first">view more</span>
                                                                            <span class="second">view more</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            @endforeach   
                      
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

    @endsection