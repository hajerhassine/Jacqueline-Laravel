@extends('layouts.master_home')


<head>
    <meta charset="UTF-8" />
    <title>Products &#8211; Jacqueline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/admin_icon.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:400,700|Mr+De+Haviland|Open+Sans:300,400,600,700,800|Raleway:100,200,300,300i,400,400i,500,600,700,700i,800,900&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese' type='text/css' media='all' />
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?ver=4.3.0' type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/js/vendor/woo/woocommerce-layout.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/js/vendor/woo/woocommerce-smallscreen.css')}}" type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href="{{asset('fontend/assets/js/vendor/woo/woocommerce.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/fontello/css/fontello.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/style.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/core.animation.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/shortcodes.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/instagram-widget.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/js/vendor/woo/plugin.woocommerce.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/skin.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/custom-style.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/responsive.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/skin.responsive.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/custom.responsive.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/js/vendor/grid.layout/grid.layout.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/core.messages.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/plugins.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{asset('fontend/assets/css/custom.css')}}" type='text/css' media='all' />
</head>

<body class="woocommerce woocommerce-page body_filled article_style_stretch scheme_original top_panel_above sidebar_show sidebar_left sidebar_outer_hide preloader wpb-js-composer sc_responsive">
<div id="page_preloader"></div>
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
            </div>
            <div class="side_wrap">
                <div class="close">Close</div>
                <div class="panel_top">
                    <nav class="menu_main_nav_area">
                        <ul class="menu_main_nav">
                            <li class="menu-item menu-item-has-children"><a>Home</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="index.html">Home 1</a></li>
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
                            <li class="menu-item current-menu-item"><a href="shop.html">Shop</a></li>
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
                    <div class="login">
                        <a href="#popup_login" class="popup_link popup_login_link icon-user">Login</a>
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
        <header class="top_panel_wrap top_panel_style_3 scheme_original">
            <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
                <div class="top_panel_top">
                    <div class="content_wrap clearfix">
                        <div class="top_panel_top_contact_area">Call Us <a href="tel:+18002453925">+1 800 245 39 25 </a></div>
                        <div class="top_panel_top_user_area">
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
                            <ul class="menu_user_nav">
                                <li class="menu_user_login">
                                    <a href="#popup_login" class="popup_link popup_login_link icon-user">Login</a>
                                </li>
                            </ul>
                        </div>
                        <div class="top_panel_top_search">
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

                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="contact_logo">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset('fontend/assets/images/Logo.png')}}" class="logo_main" alt="" width="238" height="56">
                                    <img src="{{asset('fontend/assets/images/Logo.png')}}" class="logo_fixed" alt="" width="238" height="56">
                                </a>
                            </div>
                        </div>
                        <div class="menu_main_wrap">
                            <nav class="menu_main_nav_area">
                                <ul class="menu_main_nav">
                                    <li class="menu-item menu-item-has-children"><a>Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="index.html">Home 1</a></li>
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
                                    <li class="menu-item current-menu-item"><a href="shop.html">Shop</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
            <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner">
                <div class="content_wrap">
                    <h1 class="page_title">Shop</h1>
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="index.html">Home</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <span class="breadcrumbs_item current">Shop</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="page_content_wrap page_paddings_yes">

            <div class="content_wrap">
                <div class="content">
                    <div class="list_products shop_mode_thumbs">
                        <nav class="woocommerce-breadcrumb">
                            <a href="index.html">Home</a>&nbsp;&#47;&nbsp;Shop
                        </nav>
                        <div class="mode_buttons">
                            <form action="#" method="post">
                                <a href="shop.html" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
                                <a href="shop-list.html" class="woocommerce_list icon-th-list" title="Show products as list"></a>
                            </form>
                        </div>
                        <p class="woocommerce-result-count">Showing 1&ndash;12 of 20 results</p>
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price" selected='selected'>Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                            <input type="hidden" name="q" value="/shop/" />
                        </form>
                        <ul class="products">
                        @foreach($produits as $produit) 
                            <li class="product type-product column-1_3 instock purchasable ">
                                <div class="post_item_wrap">
                                    <div class="post_featured">
                                        <div class="post_thumb">
                                            <div class="button_container">
                                                <a class="button view_link" href="{{ url('produit/detail/'.$produit->id) }}">View</a>
                                            </div>
                                            <div class="button_container cart"></div>
                                            <img src="{{ asset($produit->produit_image) }}"  class="attachment-shop_catalog size-shop_catalog" alt="" title="3473311970015_94" />
                                            <a rel="nofollow" href="#" data-quantity="1" data-product_sku="" class="button add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="post_content">
                                        <h3>
                                            <a href="single-product.html">{{ $produit->produit_name }}</a>
                                        </h3>
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&pound;</span>10.00
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <nav id="pagination" class="pagination_wrap pagination_pages">
                            <span class="pager_current active ">1</span>
                            <a href="#">2</a>
                            <a href="#" class="pager_next"></a>
                            <a href="#" class="pager_last"></a>
                        </nav>
                    </div>
                </div>
                <div class="sidebar widget_area scheme_original" role="complementary">
                    <div class="sidebar_inner widget_area_inner">
                        <aside id="woocommerce_widget_cart-2" class="widget woocommerce widget_shopping_cart">
                            <h5 class="widget_title">Cart</h5>
                            <div class="widget_shopping_cart_content">
                                <ul class="cart_list product_list_widget ">
                                    <li class="empty">No products in the cart.</li>
                                </ul>
                            </div>
                        </aside>
                        <aside id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter">
                            <h5 class="widget_title">Filter by price</h5>
                            <form method="get" action="#">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="min_price" name="min_price" value="" data-min="10" placeholder="Min price" />
                                        <input type="text" id="max_price" name="max_price" value="" data-max="500" placeholder="Max price" />
                                        <button type="submit" class="button">Filter</button>
                                        <div class="price_label">
                                            Price: <span class="from"></span>
                                            &mdash; <span class="to"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        <aside class="widget woocommerce widget_product_categories">
                            <h5 class="widget_title">Categories</h5>
                            <ul class="product-categories">
                                <li class="cat-item"><a href="#">Body Care</a></li>
                                <li class="cat-item"><a href="#">Conditioner</a></li>
                                <li class="cat-item"><a href="#">Contouring Make Up</a></li>
                                <li class="cat-item"><a href="#">Healing Foot Balm</a></li>
                                <li class="cat-item"><a href="#">Nail Treatments</a></li>
                                <li class="cat-item"><a href="#">Shampoo</a></li>
                                <li class="cat-item"><a href="#">Skin Care</a></li>
                                <li class="cat-item"><a href="#">Skincare</a></li>
                                <li class="cat-item"><a href="#">Tanning</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <form role="search" method="get" class="search_form cu_mrg_2" action="#">
                                    <input type="text" class="search_field" placeholder="Search …" value="" name="s" title="Search for:">
                                    <button type="submit" class="search_button icon-search-1" href="#"></button>
                                </form>
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
                        </aside>
                        <aside class="widget woocommerce widget_product_tag_cloud">
                            <h5 class="widget_title">Tags</h5>
                            <div class="tagcloud">
                                <a href='#' class='tag-link-position-1' title='2 products'>BB &amp; CC Creams</a>
                                <a href='#' class='tag-link-position-2' title='3 products'>Body care</a>
                                <a href='#' class='tag-link-position-3' title='3 products'>Bronzers</a>
                                <a href='#' class='tag-link-position-4' title='3 products'>Concealers</a>
                                <a href='#' class='tag-link-position-5' title='3 products'>Eyebrow &amp; Eyelash</a>
                                <a href='#' class='tag-link-position-6' title='3 products'>Face care</a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer_wrap widget_area scheme_original">
            <div class="footer_wrap_inner widget_area_inner">
                <div class="content_wrap">
                    <div class="columns_wrap">
                        <aside class="column-1_4 widget widget_socials">
                            <div class="widget_inner">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{asset('fontend/assets/images/logo_dark.png')}}"  class="logo_main" alt="">
                                    </a>
                                </div>
                                <div class="logo_descr">Welcome to one of most relaxing salons, where our therapists offer tranquility whilst being treated.</div>
                            </div>
                        </aside>
                        <aside class="column-1_4 widget widget_text">
                            <h5 class="widget_title">Contacts</h5>
                            <div class="textwidget">
                                <ul class="sc_list_style_iconed ">
                                    <li>
                                        <span class="sc_list_icon icon-icon_pin"></span>
                                        1234 Some St San Francisco,<br/>
                                        CA 94102, US 1.800.123.4567
                                    </li>
                                    <li>
                                        <span class="sc_list_icon icon-icon_phone"></span><a href="tel:+1234567890">(123) 456 78 90</a>
                                    </li>
                                    <li>
                                        <span class="sc_list_icon icon-icon_mail"></span>
                                        <a href="mailto:support@yoursite.com">support@yoursite.com</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="column-1_4 widget widget_recent_posts">
                            <h5 class="widget_title">Recent Post</h5>
                            <article class="post_item no_thumb first">
                                <div class="post_content">
                                    <h6 class="post_title">
                                        <a href="single-post.html">Chiropractic</a>
                                    </h6>
                                    <div class="post_info">
                                        <span class="post_info_item post_info_posted">
                                            <a href="single-post.html" class="post_info_date">March 31, 2016</a>
                                        </span>
                                        <span class="post_info_item ">by
                                            <a href="#" class="post_info_author">Kate Green</a>
                                        </span>
                                        <span class="post_info_item post_info_counters">
                                            <a href="single-post.html" class="post_counters_item ">
                                                <span class="post_counters_number"></span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <article class="post_item no_thumb">
                                <div class="post_content">
                                    <h6 class="post_title">
                                        <a href="single-post.html">Massage Therapy</a>
                                    </h6>
                                    <div class="post_info">
                                        <span class="post_info_item post_info_posted">
                                            <a href="single-post.html" class="post_info_date">March 31, 2016</a>
                                        </span>
                                        <span class="post_info_item ">by
                                            <a href="#" class="post_info_author">Kate Green</a>
                                        </span>
                                        <span class="post_info_item post_info_counters">
                                            <a href="single-post.html" class="post_counters_item">
                                                <span class="post_counters_number"></span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </aside>
                        <aside class="column-1_4 widget">
                            <ul class="instagram-pics instagram-size-large">
                                <li>
                                    <a href="//instagram.com/p/BDqPIQOiAb2/" target="_self">
                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}"  alt="" title="Instagram Image" />
                                    </a>
                                </li>
                                <li>
                                    <a href="//instagram.com/p/BDqPG4fCAbs/" target="_self">
                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}"  alt="" title="Instagram Image" />
                                    </a>
                                </li>
                                <li>
                                    <a href="//instagram.com/p/BDqPEx2CAbm/" target="_self">
                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}"  alt="" title="Instagram Image" />
                                    </a>
                                </li>
                                <li>
                                    <a href="//instagram.com/p/BDqPCkuCAbg/" target="_self">
                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}"  alt="" title="Instagram Image" />
                                    </a>
                                </li>
                                <li>
                                    <a href="//instagram.com/p/BDqO_x4CAbY/" target="_self">
                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}"  alt="" title="Instagram Image" />
                                    </a>
                                </li>
                                <li>
                                    <a href="//instagram.com/p/BDqO9VGCAbU/" target="_self">
                                        <img src="{{asset('fontend/assets/images/370x370.jpg')}}"  alt="" title="Instagram Image" />
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright_wrap copyright_style_socials scheme_original">
            <div class="copyright_wrap_inner">
                <div class="content_wrap">
                    <div class="sc_socials sc_socials_type_text sc_socials_shape_square sc_socials_size_tiny">
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_twitter">twitter</a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_facebook">facebook</a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="#" target="_blank" class="social_icons social_instagramm">instagramm</a>
                        </div>
                    </div>
                    <span class="beforeSocials">Connect With Us:</span>
                    <div class="copyright_text">
                        <p>Themerex © 2019 All Rights Reserved
                            <a href="#" target="_blank">Terms of Use</a> and
                            <a href="#" target="_blank">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="popup_login" class="popup_wrap popup_login bg_tint_light">
    <a href="#" class="popup_close"></a>
    <div class="form_wrap">
        <div class="form_left">
            <form action="#" method="post" name="login_form" class="popup_form login_form">
                <input type="hidden" name="redirect_to" value="#">
                <div class="popup_form_field login_field iconed_field icon-user">
                    <input type="text" id="log" name="log" value="" placeholder="Login or Email">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="password" name="pwd" value="" placeholder="Password">
                </div>
                <div class="popup_form_field remember_field">
                    <a href="#" class="forgot_password">Forgot password?</a>
                    <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                    <label for="rememberme">Remember me</label>
                </div>
                <div class="popup_form_field submit_field">
                    <input type="submit" class="submit_button sc_button sc_button_style_filled" value="Login">
                </div>
            </form>
        </div>
        <div class="form_right">
            <div class="login_socials_title">You can login using your social profile</div>
            <div class="loginSoc login_plugin">
                <div class="wp-social-login-widget">
                    <div class="wp-social-login-connect-with">Connect with:</div>
                    <div class="wp-social-login-provider-list">
                        <a rel="nofollow" href="#" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
                            <img alt="" title="Connect with Facebook" src="images/facebook.png"/>
                        </a>
                        <a rel="nofollow" href="#" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
                            <img alt="" title="Connect with Google" src="images/google.png"/>
                        </a>
                        <a rel="nofollow" href="#" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
                            <img alt="" title="Connect with Twitter" src="images/twitter.png"/>
                        </a>
                    </div>
                    <div class="wp-social-login-widget-clearing"></div>
                </div>
            </div>
            <div class="result message_block"></div>
        </div>
    </div>
</div>

<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/jquery/jquery.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/jquery/jquery-migrate.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/woo/add-to-cart.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/woo/woocommerce-add-to-cart.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/modernizr.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/custom/custom.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/woo/jquery.blockUI.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/woo/woocommerce.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/woo/jquery.cookie.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/woo/cart-fragments.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/superfish.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/jquery.slidemenu.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/custom/core.utils.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/custom/core.init.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/custom/theme.init.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/social-share.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/custom/theme.shortcodes.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/custom/core.messages.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/grid.layout/grid.layout.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/jquery/widget.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/jquery/mouse.min.js?ver=1.11.4') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/jquery/slider.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/jquery/jquery-ui-touch-punch.min.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/custom/custom.js') }}"></script>
<script type='text/javascript' src="{{asset('fontend/assets/js/vendor/jquery/price-slider.min.js') }}"></script>

</body>

</html>