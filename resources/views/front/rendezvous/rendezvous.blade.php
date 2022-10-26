@extends('layouts.master_home')


@section('home_content')

<!-- <div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
        <div class="header_mobile">
            <div class="content_wrap">
                <div class="menu_button icon-menu"></div>
                <div class="logo">
                    <a href="index.html">
                        <img src="{{asset('images/Logo.png')}}" class="logo_main" alt="" width="238" height="56">
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
                                    <li class="menu-item"><a href="index.html">Home 1</a></li>
                                    <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                    <li class="menu-item current-menu-item"><a href="home-3.html">Home 3</a></li>
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
                            <form role="search" method="get" class="search_form" action="index.html">
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
                <div class="panel_bottom">
                </div>
            </div>
            <div class="mask"></div>
        </div>
        <header class="top_panel_wrap top_panel_style_6 scheme_original">
            <div class="top_panel_wrap_inner top_panel_inner_style_6 top_panel_position_above">
                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="contact_logo">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{asset('images/Logo.png')}}" class="logo_main" alt="" width="238" height="56">
                                    <img src="{{asset('images/Logo.png')}}" class="logo_fixed" alt="" width="238" height="56">
                                </a>
                            </div>
                        </div>
                        <div class="menu_main_wrap">
                            <nav class="menu_main_nav_area">
                                <ul class="menu_main_nav">
                                    <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a>Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="index.html">Home 1</a></li>
                                            <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                            <li class="menu-item current-menu-item"><a href="home-3.html">Home 3</a></li>
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
                    </div>
                </div>
            </div>
        </header>
        <div class="page_content_wrap page_paddings_no">
            <div class="content_wrap">
                <div class="content">
                    <article class="post_item post_item_single">
                        <section class="post_content">
                            <div class="sc_row row sc_row-fluid">
                                <div class="column sc_column_container sc_col-sm-12">

                                </div>
                            </div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid sc_custom_1459762742825">

                            </div>
                            <div class="sc_row-full-width"></div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid sc_custom_1459330954110 scheme_original inverse_colors">
                                <div class="column sc_column_container sc_col-sm-12">

                                </div>
                            </div>
                            <div class="sc_row-full-width"></div>

                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid sc_custom_1459773167157">

                            </div>
                            <div class="sc_row-full-width"></div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid sc_custom_1459776057240 inverse_colors">
                                <div class="column sc_column_container sc_col-sm-12">

                                    <div class="wrapper">

                                        <div class="sc_section sc_section_block aligncenter max_width">
                                            <div class="sc_section_inner">
                                                <h6 class="sc_section_subtitle sc_item_subtitle">Form for</h6>
                                                <h2 class="sc_section_title sc_item_title line_hide">Rendez-Vous</h2>
                                                <div class="sc_section_content_wrap">
                                                    <div id="sc_form_261_wrap" class="sc_form_wrap">
                                                        <div id="sc_form_261" class="sc_form sc_form_style_form_1">
                                                            <form action="{{ url('rendezvous/add') }}" method="POST">
                                                                @csrf
                                                                <div class="card-body">


                                                                    <div class="sc_form_info">
                                                                        
                                                                    <div class="sc_form_item sc_form_field label_over">
                                                                        <label> choisir seance</label>
                                                                        <select name="seance_id" class="form-control">
                                                                            @foreach ($seances as $item)
                                                                            <option value="{{ $item->id}}">{{ $item->seance_name}}</option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                    <div class="sc_form_info">
                                                                        <div class="sc_form_item sc_form_field label_over">
                                                                            <label class="required" >Nom client</label>
                                                                            <input  type="text"  name="nomClient" placeholder="Nom client *">
                                                                        </div>
                                                                        <div class="sc_form_item sc_form_field label_over">
                                                                            <label class="required" for="sc_form_email">Prenom client</label>
                                                                            <input  type="text" name="prenomClient" placeholder="Prenom client *">
                                                                        </div>
                                                                        <div class="sc_form_item sc_form_field label_over">
                                                                            <label class="required" for="sc_form_email">Telephone</label>
                                                                            <input  type="text" name="telephone" placeholder="telephone *">
                                                                        </div>
                                                                        <div class="sc_form_item sc_form_field label_over">
                                                                            <label class="required" for="sc_form_subj">Date </label>
                                                                            <input id="sc_form_date" type="date" name="subject" placeholder="date">
                                                                        </div>
                                                                    </div>
                                                                  
                                                                    <div class="sc_form_item sc_form_button">
                                                                        <button type="submit" class="btn btn-primary">save
                                                                           
                                     </button>
                                                                    </div>
                                                                    <div class="result sc_infobox"></div>
                                                            </form>
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
            </section>
            </article>
            <section class="related_wrap related_wrap_empty"></section>
        </div>
    </div>
</div>


<div class="copyright_wrap_inner">


</div>


</div>
<div class="copyright_text">
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <div class="header_mobile">
                <div class="content_wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('images/Logo.png')}}" class="logo_main" alt="" width="238" height="56">
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
                                        <li class="menu-item"><a href="index.html">Home 1</a></li>
                                        <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                        <li class="menu-item current-menu-item"><a href="home-3.html">Home 3</a></li>
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
                                <form role="search" method="get" class="search_form" action="index.html">
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
                    <div class="panel_bottom">
                    </div>
                </div>
                <div class="mask"></div>
            </div>
            <header class="top_panel_wrap top_panel_style_6 scheme_original">
                <div class="top_panel_wrap_inner top_panel_inner_style_6 top_panel_position_above">

                </div>
            </header>
            <div class="page_content_wrap page_paddings_no">
                <div class="content_wrap">
                    <div class="content">
                        <article class="post_item post_item_single">
                            <section class="post_content">
                                <div class="sc_row row sc_row-fluid">
                                    <div class="column sc_column_container sc_col-sm-12">

                                    </div>
                                </div>
                                <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid sc_custom_1459762742825">
                                    <div class="column sc_column_container sc_col-sm-12">

                                        <div class="wrapper">

                                            <div id="sc_tabs_781" class="sc_tabs sc_tabs_style_2" data-active="0">

                                                <div id="sc_tab_655_1_94" class="sc_tabs_content first" data-icon="icon-massage4-1">
                                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                                        <div class="column-1_2 sc_column_item">
                                                            <figure class="sc_image  sc_image_shape_square">
                                                                <img src="{{asset('images/370x370.jpg')}}" alt="" />
                                                            </figure>
                                                        </div>
                                                        <div class="column-1_2 sc_column_item">
                                                            <h2 class="sc_title sc_title_regular">Geothermal Massage Therapy</h2>
                                                            <div class="text_column content_element sc_custom_1459766274952">
                                                                <div class="wrapper">
                                                                    <p>Pregnancy massage or prenatal massage is therapeutic massage therapy that focuses on the special needs of the Mother-to-be. Pregnancy Massage Therapy can help:</p>
                                                                </div>
                                                            </div>
                                                            <div class="text_column content_element ">
                                                                <div class="wrapper">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Back Pain</li>
                                                                                        <li>Sciatica</li>
                                                                                        <li>Hip or leg pain</li>
                                                                                        <li>Muscle Cramping</li>
                                                                                    </ul>
                                                                                </td>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Muscular Spasms</li>
                                                                                        <li>Neck and Shoulder pain</li>
                                                                                        <li>Postural distortion</li>
                                                                                        <li>Arm and hand pain</li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">
                                                                <div>
                                                                    <span class="first">LEARN MORE</span>
                                                                    <span class="second">LEARN MORE</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="sc_tab_009_4" class="sc_tabs_content" data-icon="icon-gesture3">
                                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                                        <div class="column-1_2 sc_column_item">
                                                            <figure class="sc_image sc_image_shape_square">
                                                                <img src="{{asset('images/1170x700.jpg')}}" alt="" />
                                                            </figure>
                                                        </div>
                                                        <div class="column-1_2 sc_column_item">
                                                            <h2 class="sc_title sc_title_regular">Pregnancy Massage</h2>
                                                            <div class="text_column content_element sc_custom_1459766274952">
                                                                <div class="wrapper">
                                                                    <p>Pregnancy massage or prenatal massage is therapeutic massage therapy that focuses on the special needs of the Mother-to-be. Pregnancy Massage Therapy can help:</p>
                                                                </div>
                                                            </div>
                                                            <div class="text_column content_element ">
                                                                <div class="wrapper">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Back Pain</li>
                                                                                        <li>Sciatica</li>
                                                                                        <li>Hip or leg pain</li>
                                                                                        <li>Muscle Cramping</li>
                                                                                    </ul>
                                                                                </td>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Muscular Spasms</li>
                                                                                        <li>Neck and Shoulder pain</li>
                                                                                        <li>Postural distortion</li>
                                                                                        <li>Arm and hand pain</li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">
                                                                <div>
                                                                    <span class="first">LEARN MORE</span>
                                                                    <span class="second">LEARN MORE</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="sc_tab_009_1" class="sc_tabs_content" data-icon="icon-stick-man129">
                                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                                        <div class="column-1_2 sc_column_item odd first">
                                                            <figure class="sc_image  sc_image_shape_square">
                                                                <img src="{{asset('images/1170x700.jpg')}}" alt="" />
                                                            </figure>
                                                        </div>
                                                        <div class="column-1_2 sc_column_item">
                                                            <h2 class="sc_title sc_title_regular">Reflexology</h2>
                                                            <div class="text_column content_element sc_custom_1459766274952">
                                                                <div class="wrapper">
                                                                    <p>Pregnancy massage or prenatal massage is therapeutic massage therapy that focuses on the special needs of the Mother-to-be. Pregnancy Massage Therapy can help:</p>
                                                                </div>
                                                            </div>
                                                            <div class="text_column content_element ">
                                                                <div class="wrapper">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Back Pain</li>
                                                                                        <li>Sciatica</li>
                                                                                        <li>Hip or leg pain</li>
                                                                                        <li>Muscle Cramping</li>
                                                                                    </ul>
                                                                                </td>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Muscular Spasms</li>
                                                                                        <li>Neck and Shoulder pain</li>
                                                                                        <li>Postural distortion</li>
                                                                                        <li>Arm and hand pain</li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">
                                                                <div>
                                                                    <span class="first">LEARN MORE</span>
                                                                    <span class="second">LEARN MORE</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="sc_tab_009_3" class="sc_tabs_content" data-icon="icon-relaxing16">
                                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                                        <div class="column-1_2 sc_column_item">
                                                            <figure class="sc_image sc_image_shape_square">
                                                                <img src="{{asset('images/370x370.jpg')}}" alt="" />
                                                            </figure>
                                                        </div>
                                                        <div class="column-1_2 sc_column_item">

                                                            <div class="text_column content_element">
                                                                <div class="wrapper">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Back Pain</li>
                                                                                        <li>Sciatica</li>
                                                                                        <li>Hip or leg pain</li>
                                                                                        <li>Muscle Cramping</li>
                                                                                    </ul>
                                                                                </td>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Muscular Spasms</li>
                                                                                        <li>Neck and Shoulder pain</li>
                                                                                        <li>Postural distortion</li>
                                                                                        <li>Arm and hand pain</li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">
                                                                <div>
                                                                    <span class="first">LEARN MORE</span>
                                                                    <span class="second">LEARN MORE</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="sc_tab_009_2" class="sc_tabs_content" data-icon="icon-excercise14">
                                                    <div class="columns_wrap sc_columns columns_nofluid">
                                                        <div class="column-1_2 sc_column_item">
                                                            <figure class="sc_image  sc_image_shape_square">
                                                                <img src="{{asset('images/370x370.jpg')}}" alt="" />
                                                            </figure>
                                                        </div>
                                                        <div class="column-1_2 sc_column_item">
                                                            <h2 class="sc_title sc_title_regular">Manual Lymph Drainage</h2>
                                                            <div class="text_column content_element sc_custom_1459766274952">

                                                            </div>
                                                            <div class="text_column content_element ">
                                                                <div class="wrapper">
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Back Pain</li>
                                                                                        <li>Sciatica</li>
                                                                                        <li>Hip or leg pain</li>
                                                                                        <li>Muscle Cramping</li>
                                                                                    </ul>
                                                                                </td>
                                                                                <td>
                                                                                    <ul>
                                                                                        <li>Muscular Spasms</li>
                                                                                        <li>Neck and Shoulder pain</li>
                                                                                        <li>Postural distortion</li>
                                                                                        <li>Arm and hand pain</li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">
                                                                <div>
                                                                    <span class="first">LEARN MORE</span>
                                                                    <span class="second">LEARN MORE</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="sc_row-full-width"></div>
                    <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid sc_custom_1459330954110 scheme_original inverse_colors">

                    </div>
                    <div class="sc_row-full-width"></div>

                    <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid sc_custom_1459773167157">
                        <div class="column sc_column_container sc_col-sm-12">

                        </div>
                    </div>
                    <div class="sc_row-full-width"></div>
                    <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid sc_custom_1459776057240 inverse_colors">
                        <div class="sc_column-inner ">
                            <div class="wrapper">

                                <div class="sc_section sc_section_block aligncenter max_width">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="sc_row-full-width"></div>
                </section>
                </article>
            </div>
        </div>
    </div>


</div>

</div>
</div>
</div>
</div>
</div>
</div> -->


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">



                <div class="card-header">
                    <h4>Rendez-Vous


                    </h4>

                </div>


                <form action="{{ url('rendezvous/add') }}" method="POST">
                    @csrf

                    <div class="card-body">


                        <div class="mb-3">
                            <label> choisir seance</label>
                            <select name="seance_id" class="form-control">
                                @foreach ($seances as $item)
                                <option value="{{ $item->id}}">{{ $item->seance_name}}</option>
                                @endforeach

                            </select>
                        </div>



                        <div class="mb-3">
                            <label> Nom client</label>
                            <input type="text" name="nomClient" class="form-control">

                        </div>




                    </div>




                    <div class="card-body">

                        <div class="mb-3">
                            <label> Prenom client</label>
                            <input type="text" name="prenomClient" class="form-control">

                        </div>

                    </div>


                    <div class="card-body">

                        <div class="mb-3">
                            <label> Telephone</label>
                            <input type="text" name="telephone" class="form-control">

                        </div>

                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label> Date </label>
                            <input type="date" name="date" class="form-control">

                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">save</button>
                        </div>
                    </div>

            </div>

            </form>


        </div>




    </div>


</div>

</div>






@endsection