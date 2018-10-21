
<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div class="container">
            <div class="row">
                <div id="home-slider-wrapper">
                    <div id="home-slider" class="responsive-slider hideControls">
                        <div class="slides" data-group="slides">
                            <ul>
                                <li>
                                    <div class="slide-body" data-group="slide">
                                        <img src="<?= base_url('screen/demos/banner_1180x400.png');?>" alt="">
                                        <div class="caption image">
                                            <img src="<?= base_url('screen/demos/demo_200x267.png');?>" alt="">
                                        </div>
                                        <div class="caption header">
                                            <div class="heading" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                                                <a href="./collection.html">
                            <span class="caption-content" style="color:#47cbde">
                              <span>Lorem of Ipsum</span><br>
                              Amet Space
                            </span>
                                                </a>
                                            </div>
                                            <div class="content" data-animate="slideAppearRightToLeft" data-delay="800" data-length="300">
                                                <span class="caption-content" style="color:#ea5210">PRE-ORDER</span>
                          <span class="caption-content" style="color:#ea5210"><br>
                            RELEASE DATE :<span style="color:#ffffff"> Dec 30 2013</span>
                          </span>
                                            </div>
                                            <div class="caption1" data-animate="slideAppearRightToLeft" data-delay="1000">
                          <span class="caption-content" style="color:#ffffff">
                            Several major cities around the world have been reported to be under attack. New York Harbor in Manhattan is among those in distress. <br> Will you accept the call ?
                          </span>
                                            </div>
                                            <div class="slide-price">
                          <span class="caption-content" style="color:#ea5210">
                            $58.89
                          </span>
                                                <a href="./collection.html">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-body" data-group="slide">
                                        <img src="<?= base_url('screen/demos/banner_1180x400.png');?>" alt="">
                                        <div class="caption image">
                                            <img src="<?= base_url('screen/demos/demo_200x267.png');?>" alt="">
                                        </div>
                                        <div class="caption header">
                                            <div class="heading" data-animate="slideAppearLeftToRight" data-delay="500" data-length="300">
                                                <a href="./collection.html">
                            <span class="caption-content" style="color:#47cbde">
                              <span>Lorem for Ipsum</span><br>
                              Ipsum Race
                            </span>
                                                </a>
                                            </div>
                                            <div class="content" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">
                                                <span class="caption-content" style="color:#ea5210">PRE-ORDER</span>
                          <span class="caption-content" style="color:#ea5210"><br>
                            RELEASE DATE :<span style="color:#ffffff"> Dec 30 2013</span>
                          </span>
                                            </div>
                                            <div class="caption1" data-animate="slideAppearRightToLeft" data-delay="1000">
                          <span class="caption-content" style="color:#ffffff">
                            Several major cities around the world have been reported to be under attack. New York Harbor in Manhattan is among those in distress.
                          </span>
                                            </div>
                                            <div class="slide-price">
                          <span class="caption-content" style="color:#ea5210">
                            $49.95
                          </span>
                                                <a href="./collection.html">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-body" data-group="slide">
                                        <img src="<?= base_url('screen/demos/banner_1180x400.png');?>" alt="">
                                        <div class="caption image">
                                            <img src="<?= base_url('screen/demos/demo_200x267.png');?>" alt="">
                                        </div>
                                        <div class="caption header">
                                            <div class="heading" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                                                <a href="./collection.html">
                            <span class="caption-content" style="color:#47cbde">
                              <span>Lorem the Ipsum</span><br>
                              LID Sword
                            </span>
                                                </a>
                                            </div>
                                            <div class="content" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300">
                                                <span class="caption-content" style="color:#ea5210">PRE-ORDER</span>
                          <span class="caption-content" style="color:#ea5210"><br>
                            RELEASE DATE :<span style="color:#ffffff"> Dec 30 2013</span>
                          </span>
                                            </div>
                                            <div class="caption1" data-animate="slideAppearLeftToRight" data-delay="1000">
                          <span class="caption-content" style="color:#ffffff">
                            Several major cities around the world have been reported to be under attack. New York Harbor in Manhattan is among those in distress.
                          </span>
                                            </div>
                                            <div class="slide-price">
                          <span class="caption-content" style="color:#ea5210">
                            $60.95
                          </span>
                                                <a href="./collection.html">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="control-slideshow">
                <span class="control">
                  <a class="slider-control fa fa-angle-left s-prev" href="javascript:" data-jump="prev">
                      <span class="sub-control"></span>
                      <span class="btn-label hidden-xs">PREV</span>
                  </a>
                  <a class="slider-control fa fa-angle-right s-next" href="javascript:" data-jump="next">
                      <span class="sub-control"></span>
                      <span class="btn-label hidden-xs">NEXT</span>
                  </a>
                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="container clearfix">
            <section class="row content">
                <div id="col-main" class="clearfix">

                    <script type="text/javascript">
                        jQuery(document).ready(function($){

                            initTabActive();

                            //  When user clicks on tab, this code will be executed
                            $(".head_tabs").on(clickEv, function() {

                                if(!$(this).parent().hasClass('active')) {
                                    //  First remove class "active" from currently active tab
                                    $(".head_tabs").parent().removeClass("active");

                                    //  Here we get the data-src(parent) value of the selected tab
                                    var $src_tab = $(this).attr("data-src");

                                    //  Now add class "active" to the selected/clicked tab
                                    $($src_tab).parent().addClass("active");

                                    //  Hide all tab content
                                    $(".content_tabs").hide();


                                    //  Here we get the href value of the selected tab
                                    var $selected_tab = $(this).attr("href");

                                    //  Show the selected tab content
                                    if(isMobile.any())
                                        $($selected_tab).show();
                                    else
                                        $($selected_tab).fadeIn();

                                    // Scroll to content
                                    $('html, body').animate({
                                        scrollTop: $($selected_tab).offset().top - 80
                                    },300);

                                    // re-call position quickshop
                                    positionQuickshop();

                                    //  Here we get the href value of the selected tab
                                    var $selected_carousel = $(this).attr("data-crs");

                                }
                                //  At the end, we add return false so that the click on the link is not executed
                                return false;
                            });

                            /* Function: init item active */
                            function initTabActive(){
                                // Content
                                jQuery('#tabs_content_container').find('.content_tabs').first().show();
                                jQuery('#tabs_content_container').find('.content_tabs').first().prev().addClass('active');


                                jQuery('#tabs_container #tabs').find('.head_tabs').first().parent().addClass('active');

                            }
                        });
                    </script>
                    <!--home-tabs-->
                    <div id="tabs_container" class="visible-md visible-lg clearfix">
                        <ul id="tabs" class="list-unstyled">
                            <li class="active">
                                <a class="head_tab2 head_tabs" href="#content_tab2" data-src=".head_tab2" data-crs="#carousel_tab2">
                                    All systems
                                </a>
                            </li>
                            <li class="">
                                <a class="head_tab3 head_tabs" href="#content_tab3" data-src=".head_tab3" data-crs="#carousel_tab3">
                                    Xbox 360
                                </a>
                            </li>
                            <li class="">
                                <a class="head_tab4 head_tabs" href="#content_tab4" data-src=".head_tab4" data-crs="#carousel_tab4">
                                    PlayStation 3
                                </a>
                            </li>
                            <li class="">
                                <a class="head_tab5 head_tabs" href="#content_tab5" data-src=".head_tab5" data-crs="#carousel_tab5">
                                    Wii
                                </a>
                            </li>
                            <li class="">
                                <a class="head_tab6 head_tabs" href="#content_tab6" data-src=".head_tab6" data-crs="#carousel_tab6">
                                    DS
                                </a>
                            </li>
                            <li class="">
                                <a class="head_tab7 head_tabs" href="#content_tab7" data-src=".head_tab7" data-crs="#carousel_tab7">
                                    PSP
                                </a>
                            </li>
                            <li>
                                <a class="head_tab8 head_tabs" href="#content_tab8" data-src=".head_tab8" data-crs="#carousel_tab8">
                                    PC
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div id="tabs_content_container" class="col-md-24">
                        <h3 class="hidden-md hidden-lg">
                            <a class="head_tab2 head_tabs" href="#content_tab2" data-src=".head_tab2" data-crs="#carousel_tab2">All systems</a>
                        </h3>
                        <div id="content_tab2" class="content_tabs list_carousel responsive" style="display:none">
                            <ul id="carousel_tab2" data-prev="#prev_tab2" data-next="#next_tab2" class="list-unstyled clearfix">
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Auctor semper">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Auctor semper</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848705">adventure - €59.00</option>
                                                            <option value="502622237">horror - €60.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Curabitur mattis tellus rutrum enim facilisis">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                            <span class="sale_banner animated">
                              <img src="<?= base_url('assets/images/saleoff.png');?>" title="Sale Off" alt="Sale Off">
                            </span>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Curabitur mattis tellus rutrum enim facilisis</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                                                        <del class="price_compare"> <span class="money">€69.00</span></del>
                                                        <span class="price_sale"><span class="money">€59.00</span></span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695609">Ferrari / Modern - €59.00</option>
                                                            <option value="502625841">Lamborghini / Modern - €70.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Curabitur sollicitudin">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Curabitur sollicitudin</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money" data-currency-eur="€59.00">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695597">animation - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Pellentesque habitant morbi tristique senectus</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695585">action - €59.00</option>
                                                            <option value="502628309">horror - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848681">war - €59.00</option>
                                                            <option value="502628861">action - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html"data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848697">venture - €59.00</option>
                                                            <option value="502630317">science fiction - €69.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                        </div>

                        <h3 class="hidden-md hidden-lg">
                            <a class="head_tab3 head_tabs" href="#content_tab3" data-src=".head_tab3" data-crs="#carousel_tab3">Xbox 360</a>
                        </h3>
                        <div id="content_tab3" class="content_tabs list_carousel responsive" style="display:none;">
                            <ul id="carousel_tab3" data-prev="#prev_tab3" data-next="#next_tab3" class="list-unstyled clearfix">
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Cras in nunc non ipsum duo  cursus ultrices">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Cras in nunc non ipsum duo cursus ultrices</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        XBOX 360
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695565">martial - €59.00</option>
                                                            <option value="502624265">animation - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Curabitur mattis tellus rutrum enim facilisis">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                            <span class="sale_banner animated">
                              <img src="<?= base_url('assets/images/saleoff.png');?>" title="Sale Off" alt="Sale Off">
                            </span>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Curabitur mattis tellus rutrum enim facilisis</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        XBOX 360
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                                                        <del class="price_compare"> <span class="money">€69.00</span></del>
                                                        <span class="price_sale"><span class="money">€59.00</span></span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695609">Ferrari / Modern - €59.00</option>
                                                            <option value="502625841">Lamborghini / Modern - €70.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Curabitur sollicitudin">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Curabitur sollicitudin</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        XBOX 360
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695597">animation - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Nam at lectus eget mi vista hendrerit tincidunt</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        XBOX 360
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695573">action - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Pellentesque habitant morbi tristique senectus</a>
                                                    <br>
                                                    <a class="col-title" href="./collectiom.html">
                                                        XBOX 360
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695585">action - €59.00</option>
                                                            <option value="502628309">horror - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        XBOX 360
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455709309">animation - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                        </div>
                        <h3 class="hidden-md hidden-lg">
                            <a class="head_tab4 head_tabs" href="#content_tab4" data-src=".head_tab4" data-crs="#carousel_tab4">PlayStation 3</a>
                        </h3>
                        <div id="content_tab4" class="content_tabs list_carousel responsive" style="display:none">
                            <ul id="carousel_tab4" data-prev="#prev_tab4" data-next="#next_tab4" class="list-unstyled clearfix">
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Auctor semper">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Auctor semper</a>
                                                    <br>
                                                    <a class="col-title" href="/collections/playstation-3">
                                                        PlayStation 3
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848705">adventure - €59.00</option>
                                                            <option value="502622237">horror - €60.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Cras in nunc non ipsum duo  cursus ultrices">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Cras in nunc non ipsum duo cursus ultrices</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PlayStation 3
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695565">martial - €59.00</option>
                                                            <option value="502624265">animation - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Nam at lectus eget mi vista hendrerit tincidunt</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PlayStation 3
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695573">action - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Pellentesque habitant morbi tristique senectus</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PlayStation 3
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695585">action - €59.00</option>
                                                            <option value="502628309">horror - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PlayStation 3
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848697">venture - €59.00</option>
                                                            <option value="502630317">science fiction - €69.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PlayStation 3
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455709193">martial - €59.00</option>
                                                            <option value="502629429">action - €69.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                        </div>
                        <h3 class="hidden-md hidden-lg">
                            <a class="head_tab5 head_tabs" href="#content_tab5" data-src=".head_tab5" data-crs="#carousel_tab5">Wii</a>
                        </h3>
                        <div id="content_tab5" class="content_tabs list_carousel responsive" style="display:none">
                            <ul id="carousel_tab5" data-prev="#prev_tab5" data-next="#next_tab5" class="list-unstyled clearfix">
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Curabitur mattis tellus rutrum enim facilisis">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop
                                                        </div>
                                                    </div>
                            <span class="sale_banner animated">
                              <img src="<?= base_url('assets/images/saleoff.png');?>" title="Sale Off" alt="Sale Off">
                            </span>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Curabitur mattis tellus rutrum enim facilisis</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        Wii
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                                                        <del class="price_compare"> <span class="money">€69.00</span></del>
                                                        <span class="price_sale"><span class="money">€59.00</span></span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695609">Ferrari / Modern - €59.00</option>
                                                            <option value="502625841">Lamborghini / Modern - €70.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Nam at lectus eget mi vista hendrerit tincidunt</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        Wii
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695573">action - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Pellentesque habitant morbi tristique senectus</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        Wii
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695585">action - €59.00</option>
                                                            <option value="502628309">horror - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        Wii
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848697">venture - €59.00</option>
                                                            <option value="502630317">science fiction - €69.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        Wii
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848681">war - €59.00</option>
                                                            <option value="502628861">action - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        Wii
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455709189">action - €59.00</option>
                                                            <option value="502631905">animation - €69.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                        </div>
                        <h3 class="hidden-md hidden-lg">
                            <a class="head_tab6 head_tabs" href="#content_tab6" data-src=".head_tab6" data-crs="#carousel_tab6">DS</a>
                        </h3>
                        <div id="content_tab6" class="content_tabs list_carousel responsive" style="display:none">
                            <ul id="carousel_tab6" data-prev="#prev_tab6" data-next="#next_tab6" class="list-unstyled clearfix">
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Auctor semper">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Auctor semper</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848705">adventure - €59.00</option>
                                                            <option value="502622237">horror - €60.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Curabitur mattis tellus rutrum enim facilisis">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                            <span class="sale_banner animated">
                              <img src="<?= base_url('assets/images/saleoff.png');?>" title="Sale Off" alt="Sale Off">
                            </span>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Curabitur mattis tellus rutrum enim facilisis</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                                                        <del class="price_compare"> <span class="money">€69.00</span></del>
                                                        <span class="price_sale"><span class="money">€59.00</span></span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695609">Ferrari / Modern - €59.00</option>
                                                            <option value="502625841">Lamborghini / Modern - €70.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Curabitur sollicitudin">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Curabitur sollicitudin</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695597">animation - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Pellentesque habitant morbi tristique senectus</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695585">action - €59.00</option>
                                                            <option value="502628309">horror - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848681">war - €59.00</option>
                                                            <option value="502628861">action - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        3DS
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848697">venture - €59.00</option>
                                                            <option value="502630317">science fiction - €69.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                        </div>
                        <h3 class="hidden-md hidden-lg">
                            <a class="head_tab7 head_tabs" href="#content_tab7" data-src=".head_tab7" data-crs="#carousel_tab7">PSP</a>
                        </h3>
                        <div id="content_tab7" class="content_tabs list_carousel responsive" style="display:none">
                            <ul id="carousel_tab7" data-prev="#prev_tab7" data-next="#next_tab7" class="list-unstyled clearfix">
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Auctor semper">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Auctor semper</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PSP
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848705">adventure - €59.00</option>
                                                            <option value="502622237">horror - €60.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Cras in nunc non ipsum duo  cursus ultrices">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Cras in nunc non ipsum duo cursus ultrices</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PSP
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695565">martial - €59.00</option>
                                                            <option value="502624265">animation - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Pellentesque habitant morbi tristique senectus</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PSP
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695585">action - €59.00</option>
                                                            <option value="502628309">horror - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PSP
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455709309">animation - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PSP
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455709197">sport - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PSP
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455709173">war - €59.00</option>
                                                            <option value="502632777">venture - €65.00</option>
                                                            <option value="502633045">science fiction - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                        </div>
                        <h3 class="hidden-md hidden-lg">
                            <a class="head_tab8 head_tabs" href="#content_tab8" data-src=".head_tab8" data-crs="#carousel_tab8">PC</a>
                        </h3>
                        <div id="content_tab8" class="content_tabs list_carousel responsive" style="display:none">
                            <ul id="carousel_tab8" data-prev="#prev_tab8" data-next="#next_tab8" class="list-unstyled clearfix">
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Auctor semper">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Auctor semper</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PC
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="456848705">adventure - €59.00</option>
                                                            <option value="502622237">horror - €60.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Cras in nunc non ipsum duo  cursus ultrices">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Cras in nunc non ipsum duo cursus ultrices</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PC
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695565">martial - €59.00</option>
                                                            <option value="502624265">animation - €65.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Curabitur mattis tellus rutrum enim facilisis">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                            <span class="sale_banner animated">
                              <img src="<?= base_url('assets/images/saleoff.png');?>" title="Sale Off" alt="Sale Off">
                            </span>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Curabitur mattis tellus rutrum enim facilisis</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PC
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                                                        <del class="price_compare"> <span class="money">€69.00</span></del>
                                                        <span class="price_sale"><span class="money">€59.00</span></span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695609">Ferrari / Modern - €59.00</option>
                                                            <option value="502625841">Lamborghini / Modern - €70.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Curabitur sollicitudin">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Curabitur sollicitudin</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PC
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695597">animation - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Nam at lectus eget mi vista hendrerit tincidunt</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PC
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455695573">action - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="col-md-4 items">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="./product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="<?= base_url('screen/demos/demo_160x227.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                                            Quickshop

                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="./product.html">Suspendisse sed libero consequat</a>
                                                    <br>
                                                    <a class="col-title" href="./collection.html">
                                                        PC
                                                    </a>
                                                    <p class="hidden-list">
                                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                                                    </p>
                                                    <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                                                    </div>
                                                    <div class="hide clearfix">
                                                        <select name="id">
                                                            <option selected="selected" value="455708809">war - €59.00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--end home-tabs-->

                    <!--home-platforms-->
                    <div id="home-platforms">
                        <div class="platforms-title text-center">
                            <div class="sb-title">Platforms &amp; Games</div>
                            <div>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas -<a href="./collection.html"> BUY THIS THEMES</a></div>
                        </div>
                        <div class="platforms_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                            <header class="control-group control-group-1 clearfix">
                                <div class="platforms-wrapper-title">
                                    <span class="sb-title">Lorem Ipsum</span>
                                    <a href="./collection.html">Shop All</a>
                                </div>
                            </header>
                            <div class="platforms_products_wrapper">
                                <div id="platforms_products_1" class="clearfix">
                                    <div class="platforms-item bounceIn animated" data-animate="bounceIn" data-delay="300">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="col-md-12 row-left">
                          <span class="hoverBorderWrapper">
                            <img src="<?= base_url('screen/demos/platforms_1.png');?>" alt="">
                          </span>
                                            </li>
                                            <li class="col-md-12 row-right">
                                                <div class="group-platform">
                                                    <div class="platforms-from">From</div>
                                                    <div class="platforms-price">
                                                        $197
                                                    </div>
                                                    <div class="platforms-caption">Lorem Ipsum</div>
                                                </div>
                                                <div class="shop_platform">
                                                    <a class="btn_shop_platform btn_shop_platform_1" href="./collection.html">Shop Platform</a>
                                                </div>
                                                <div class="platform_shop">
                                                    <a class="btn_shop_Accessories" href="./product.html">Shop Accessories</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="platforms_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                            <header class="control-group control-group-2 clearfix">
                                <div class="platforms-wrapper-title">
                                    <span class="sb-title">Lorem Ipsum</span>
                                    <a href="./collection.html">Shop All</a>
                                </div>
                            </header>
                            <div class="platforms_products_wrapper">
                                <div id="platforms_products_2" class="clearfix">
                                    <div class="platforms-item bounceIn animated" data-animate="bounceIn" data-delay="600">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="col-md-12 row-left">
                          <span class="hoverBorderWrapper">
                            <img src="<?= base_url('screen/demos/platforms_2.png');?>" alt="">
                          </span>
                                            </li>
                                            <li class="col-md-12 row-right">
                                                <div class="group-platform">
                                                    <div class="platforms-from">From</div>
                                                    <div class="platforms-price">
                                                        $299
                                                    </div>
                                                    <div class="platforms-caption">Lorem Ipsum</div>
                                                </div>
                                                <div class="shop_platform">
                                                    <a class="btn_shop_platform btn_shop_platform_2" href="./collection.html">Shop Platform</a>
                                                </div>
                                                <div class="platform_shop">
                                                    <a class="btn_shop_Accessories" href="./product.html">Shop Accessories</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="platforms_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                            <header class="control-group control-group-3 clearfix">
                                <div class="platforms-wrapper-title">
                                    <span class="sb-title">Lorem Ipsum</span>
                                    <a href="./collection.html">Shop All</a>
                                </div>
                            </header>
                            <div class="platforms_products_wrapper">
                                <div id="platforms_products_3" class="clearfix">
                                    <div class="platforms-item bounceIn animated" data-animate="bounceIn" data-delay="900">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="col-md-12 row-left">
                          <span class="hoverBorderWrapper">
                            <img src="<?= base_url('screen/demos/platforms_3.png');?>" alt="">
                          </span>
                                            </li>
                                            <li class="col-md-12 row-right">
                                                <div class="group-platform">
                                                    <div class="platforms-from">From</div>
                                                    <div class="platforms-price">
                                                        $99
                                                    </div>
                                                    <div class="platforms-caption">Lorem Ipsum</div>
                                                </div>
                                                <div class="shop_platform">
                                                    <a class="btn_shop_platform btn_shop_platform_3" href="./collection.html">Shop Platform</a>
                                                </div>
                                                <div class="platform_shop">
                                                    <a class="btn_shop_Accessories" href="./product.html">Shop Accessories</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--end home-platforms-->

                    <span class="line"></span>

                    <!--home-block-->
                    <div id="home-block">
                        <div class="block-image not-animated col-md-4" data-animate="bounceIn" data-delay="150">
                            <a class="image-1" href="./collection.html">
                                <img class="pulse" src="./screen/demos/home_block_image_1.png');?>" alt="">
                            </a>
                        </div>
                        <div class="block-image not-animated col-md-4" data-animate="bounceIn" data-delay="300">
                            <a class="image-2" href="./product.html">
                                <img class="pulse" src="./screen/demos/home_block_image_2.png');?>" alt="">
                            </a>
                        </div>
                        <div class="block-image not-animated col-md-4" data-animate="bounceIn" data-delay="450">
                            <a class="image-3" href="./collection.html">
                                <img class="pulse" src="./screen/demos/home_block_image_3.png');?>" alt="">
                            </a>
                        </div>
                        <div class="block-image not-animated col-md-4" data-animate="bounceIn" data-delay="600">
                            <a class="image-4" href="./product.html">
                                <img class="pulse" src="./screen/demos/home_block_image_4.png');?>" alt="">
                            </a>
                        </div>
                        <div class="block-image not-animated col-md-4" data-animate="bounceIn" data-delay="750">
                            <a class="image-5" href="./collection.html">
                                <img class="pulse" src="./screen/demos/home_block_image_5.png');?>" alt="">
                            </a>
                        </div>
                        <div class="block-image not-animated col-md-4" data-animate="bounceIn" data-delay="900">
                            <a class="image-6" href="./product.html">
                                <img class="pulse" src="./screen/demos/home_block_image_6.png');?>" alt="">
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--end home-block-->

                    <!--feature product-->
                    <div class="container header_home_products hidden-xs">
                        <div class="col-md-8 control-group clearfix">
                            <div class="sb-title" style="color:#59a73b">Xbox 360 Games</div>
                        </div>
                        <div class="col-md-8 control-group clearfix">
                            <div class="sb-title" style="color:#a32d0a">PlayStation 3 Games</div>
                        </div>
                        <div class="col-md-8 control-group clearfix">
                            <div class="sb-title" style="color:#3ba8b6">Wii Games</div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="home_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                                <div class="control-group visible-xs">
                                    <div class="sb-title header_home_products row" style="color:#59a73b">Xbox 360 Games</div>
                                </div>
                                <div class="home_products_wrapper">
                                    <div id="home_products_1" class="clearfix">
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="300">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Cras in nunc non ipsum duo  cursus ultrices">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Cras in nunc non ipsum duo cursus ultrices</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            XBOX 360
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695565">martial - €59.00</option>
                                                                <option value="502624265">animation - €65.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="600">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Curabitur mattis tellus rutrum enim facilisis">
                                </span>
                                <span class="sale_banner animated">
                                  <img src="<?= base_url('assets/images/saleoff.png');?>" title="Sale Off" alt="Sale Off">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Curabitur mattis tellus rutrum enim facilisis</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            XBOX 360
                                                        </a>
                                                        <div class="product-price">
                                                            <del class="price_compare"> <span class="money" data-currency-eur="€69.00">€69.00</span></del>
                                                            <span class="price_sale"><span class="money" data-currency-eur="€59.00">€59.00</span></span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695609">Ferrari / Modern - €59.00</option>
                                                                <option value="502625841">Lamborghini / Modern - €70.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="900">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Curabitur sollicitudin">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Curabitur sollicitudin</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            XBOX 360
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695597">animation - €59.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="1200">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Nam at lectus eget mi vista hendrerit tincidunt</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            XBOX 360
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695573">action - €59.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                                <div class="control-group visible-xs">
                                    <div class="sb-title header_home_products row" style="color:#a32d0a">PlayStation 3 Games</div>
                                </div>
                                <div class="home_products_wrapper">
                                    <div id="home_products_2" class="clearfix">
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="300">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Auctor semper">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Auctor semper</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            PlayStation 3
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="456848705">adventure - €59.00</option>
                                                                <option value="502622237">horror - €60.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="600">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Cras in nunc non ipsum duo  cursus ultrices">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Cras in nunc non ipsum duo cursus ultrices</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            PlayStation 3
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695565">martial - €59.00</option>
                                                                <option value="502624265">animation - €65.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="900">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Nam at lectus eget mi vista hendrerit tincidunt</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            PlayStation 3
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695573">action - €59.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="1200">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Pellentesque habitant morbi tristique senectus</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            PlayStation 3
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695585">action - €59.00</option>
                                                                <option value="502628309">horror - €65.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                                <div class="control-group visible-xs">
                                    <div class="sb-title header_home_products row" style="color:#3ba8b6">Wii Games</div>
                                </div>
                                <div class="home_products_wrapper">
                                    <div id="home_products_3" class="clearfix">
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="300">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Curabitur mattis tellus rutrum enim facilisis">
                                </span>
                                <span class="sale_banner animated">
                                  <img src="<?= base_url('assets/images/saleoff.png');?>" title="Sale Off" alt="Sale Off">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Curabitur mattis tellus rutrum enim facilisis</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            Wii
                                                        </a>
                                                        <div class="product-price">
                                                            <del class="price_compare"> <span class="money">€69.00</span></del>
                                                            <span class="price_sale"><span class="money">€59.00</span></span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695609">Ferrari / Modern - €59.00</option>
                                                                <option value="502625841">Lamborghini / Modern - €70.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="600">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Nam at lectus eget mi vista hendrerit tincidunt</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            Wii
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695573">action - €59.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="900">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Pellentesque habitant morbi tristique senectus</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            Wii
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="455695585">action - €59.00</option>
                                                                <option value="502628309">horror - €65.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="section-item not-animated" data-animate="bounceIn" data-delay="1200">
                                            <form action="/cart/add" method="post" enctype="multipart/form-data">
                                                <ul class="row-container list-unstyled clearfix">
                                                    <li class="col-md-5 row-left">
                                                        <a href="./product.html" class="hoverBorder">
                                <span class="hoverBorderWrapper">
                                  <img src="<?= base_url('screen/demos/demo_60x85.png');?>" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                                </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-md-19 row-right parent-fly">
                                                        <div class="fprod-title"><a href="./product.html">Suspendisse sed libero consequat</a></div>
                                                        <a class="col-title" href="./collection.html">
                                                            Wii
                                                        </a>
                                                        <div class="product-price">
                                <span class="price">
                                  <span class="money">€59.00</span>
                                </span>
                                                        </div>
                                                        <div class="hide clearfix">
                                                            <select name="id">
                                                                <option selected="selected" value="456848697">venture - €59.00</option>
                                                                <option value="502630317">science fiction - €69.00</option>
                                                            </select>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end feature product-->

                </div>
            </section>
        </div>
    </div>
</div>