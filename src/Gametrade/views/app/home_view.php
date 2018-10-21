
<div id="content-wrapper-parent">
    <div id="content-wrapper">
        <div class="container">
            <div class="row">
                <div style="padding-top:70px;min-height:350px;background-color:#F7F7F7">
                    <p style="margin-left: 30px;"><strong> Welcome to Gamtrade<br/>Begin your experience to trade your games!!! <br/><br/>This web application was created for the Application Development module<br/>University of derby.<br/></strong></p>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="container clearfix">
        <section class="row content">
            <div id="col-main" class="clearfix">

                <script type="text/javascript">
                    jQuery(document).ready(function ($) {

                        initTabActive();

                        //  When user clicks on tab, this code will be executed
                        $(".head_tabs").on(clickEv, function () {

                            if (!$(this).parent().hasClass('active')) {
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
                                if (isMobile.any())
                                    $($selected_tab).show();
                                else
                                    $($selected_tab).fadeIn();

                                // Scroll to content
                                $('html, body').animate({
                                    scrollTop: $($selected_tab).offset().top - 80
                                }, 300);

                                // re-call position quickshop
                                positionQuickshop();

                                //  Here we get the href value of the selected tab
                                var $selected_carousel = $(this).attr("data-crs");

                            }
                            //  At the end, we add return false so that the click on the link is not executed
                            return false;
                        });

                        /* Function: init item active */
                        function initTabActive() {
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
                                Playstation 1
                            </a>
                        </li>
                        <li class="">
                            <a class="head_tab4 head_tabs" href="#content_tab4" data-src=".head_tab4" data-crs="#carousel_tab4">
                                PlayStation 2
                            </a>
                        </li>
                        <li class="">
                            <a class="head_tab5 head_tabs" href="#content_tab5" data-src=".head_tab5" data-crs="#carousel_tab5">
                                Playstation 3
                            </a>
                        </li>
                        <li class="">
                            <a class="head_tab6 head_tabs" href="#content_tab6" data-src=".head_tab6" data-crs="#carousel_tab6">
                                Playstation 4
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
                            <?php foreach ($this->allgames as $game): ?>
                                <li class="col-md-4 items">
                                    <form action="/wish/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="#" class="hoverBorder">
                                                    <span class="hoverBorderWrapper">
                                                        <img style="width:160px;height:227px" src="<?= base_url($game['image']); ?>" class="image-fly img-responsive" alt="Auctor semper">
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="#"><?= $game['gamename']; ?></a>
                                                    <br>
                                                    <a class="col-title" href="#">

                                                    </a>
                                                    <p class="hidden-list">
                                                        <?= $game['gamedescription']; ?>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                <?php endforeach; ?>
                            </li>
                    </div>
                    <h3 class="hidden-md hidden-lg">
                        <a class="head_tab3 head_tabs" href="#content_tab3" data-src=".head_tab3" data-crs="#carousel_tab3">Playstation 1</a>
                    </h3>
                    <div id="content_tab3" class="content_tabs list_carousel responsive" style="display:none;">
                        <ul id="carousel_tab3" data-prev="#prev_tab3" data-next="#next_tab3" class="list-unstyled clearfix">
                            <?php foreach ($this->ps1games as $ps1): ?>
                                <li class="col-md-4 items">
                                    <form action="/wish/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="<?= base_url('game/playstation1');?>" class="hoverBorder">
                                                    <span class="hoverBorderWrapper">
                                                        <img style="width:160px;height:227px" src="<?= base_url($ps1['image']); ?>" class="image-fly img-responsive" alt="Auctor semper">
                                                    </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div class="btn btn-3 quick_shop"><a href="<?= base_url('game/playstation1');?>">
                                                            <?= $ps1['gamename']; ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="<?= base_url('game/playstation1');?>"><?= $ps1['gamename']; ?></a>
                                                    <br>
                                                    <a class="col-title" href="<?= base_url('game/playstation1');?>">
                                                        Playstation 1
                                                    </a>
                                                    <p class="hidden-list">
                                                        <?= $ps1['gamedescription']; ?>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                <?php endforeach; ?>
                            </li>
                        </ul>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <h3 class="hidden-md hidden-lg">
                        <a class="head_tab4 head_tabs" href="#content_tab4" data-src=".head_tab4" data-crs="#carousel_tab4">PlayStation 2</a>
                    </h3>
                    <div id="content_tab4" class="content_tabs list_carousel responsive" style="display:none">
                        <ul id="carousel_tab4" data-prev="#prev_tab4" data-next="#next_tab4" class="list-unstyled clearfix">

                            <?php foreach ($this->ps2games as $ps2): ?>
                                <li class="col-md-4 items">
                                    <form action="<?= base_url('/wish/add'); ?>" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="<?= base_url('game/playstation2');?>" class="hoverBorder">
                                                    <span class="hoverBorderWrapper">
                                                        <img style="width:160px;height:227px" src="<?= base_url($ps2['image']); ?>" class="image-fly img-responsive" alt="Auctor semper">
                                                    </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div class="btn btn-3 quick_shop"> <a href="<?= base_url('game/playstation2');?>">
                                                            <?= $ps2['gamename']; ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="<?= base_url('game/playstation2');?>"><?= $ps2['gamename']; ?></a>
                                                    <br>
                                                    <a class="col-title" href="<?= base_url('game/playstation2');?>">
                                                        Playstation 2
                                                    </a>
                                                    <p class="hidden-list">
                                                        <?= $ps2['gamedescription']; ?>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <h3 class="hidden-md hidden-lg">
                        <a class="head_tab5 head_tabs" href="#content_tab5" data-src=".head_tab5" data-crs="#carousel_tab5">Playstation 3</a>
                    </h3>
                    <div id="content_tab5" class="content_tabs list_carousel responsive" style="display:none">
                        <ul id="carousel_tab5" data-prev="#prev_tab5" data-next="#next_tab5" class="list-unstyled clearfix">
                            <?php foreach ($this->ps3games as $ps3): ?>
                                <li class="col-md-4 items">
                                    <form action="/wish/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="<?= base_url('game/playstation3');?>" class="hoverBorder">
                                                    <span class="hoverBorderWrapper">
                                                        <img style="width:160px;height:227px" src="<?= base_url($ps3['image']); ?>" class="image-fly img-responsive" alt="Auctor semper">
                                                    </span>
                                                    <div class="product-ajax-cart hidden-phone">
                                                        <span class="overlay_mask"></span>
                                                        <div class="btn btn-3 quick_shop"><a href="<?= base_url('game/playstation3');?>">
                                                            <?= $ps3['gamename']; ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="<?= base_url('game/playstation3');?>"><?= $ps3['gamename']; ?></a>
                                                    <br>
                                                    <a class="col-title" href="<?= base_url('game/playstation3');?>">
                                                        Playstation 3
                                                    </a>
                                                    <p class="hidden-list">
                                                        <?= $ps3['gamedescription']; ?>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                <?php endforeach; ?>
                            </li>
                        </ul>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <h3 class="hidden-md hidden-lg">
                        <a class="head_tab6 head_tabs" href="#content_tab6" data-src=".head_tab6" data-crs="#carousel_tab6">PS4</a>
                    </h3>
                    <div id="content_tab6" class="content_tabs list_carousel responsive" style="display:none">
                        <ul id="carousel_tab6" data-prev="#prev_tab6" data-next="#next_tab6" class="list-unstyled clearfix">
                            <?php foreach ($this->ps4games as $ps4): ?>
                                <li class="col-md-4 items">
                                    <form action="/wish/add" method="post" enctype="multipart/form-data">
                                        <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                                <a href="<?= base_url('game/playstation4');?>" class="hoverBorder">
                                                    <span class="hoverBorderWrapper">
                                                        <img style="width:160px;height:227px" src="<?= base_url($ps4['image']); ?>" class="image-fly img-responsive" alt="<?= $ps4['gamename']; ?>">
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="row-right text-left parent-fly animMix">
                                                <div class="group_info">
                                                    <a class="title-5" href="<?= base_url('game/playstation4');?>"><?= $ps4['gamename']; ?></a>
                                                    <br>
                                                    <a class="col-title" href="<?= base_url('game/playstation4');?>">
                                                        <?= $ps4['gamename']; ?>
                                                    </a>
                                                    <p class="hidden-list">
                                                        <?= $ps4['gamedescription']; ?>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                    </div>
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
                                                <img src="<?= base_url('screen/demos/demo_160x227.png'); ?>" class="image-fly img-responsive" alt="Auctor semper">
                                            </span>
                                            <div class="product-ajax-cart hidden-phone">
                                                <span class="overlay_mask"></span>
                                            </div>
                                        </a>
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
            <!--feature product-->
            <div class="container header_home_products hidden-xs">
                <div class="container">
                    <div class="row-fluid">
                        <div class="container typo">
                            <h3  class="demo" style="margin-top: 45px;">Categories</h3>
                            <div class="span8 wrap-table">
                                <div class="col-md-8 control-group clearfix">

                                    <div class="sb-title" style="color:#59a73b">Adventure Games</div>
                                </div>
                                <div class="col-md-8 control-group clearfix">
                                    <div class="sb-title" style="color:#a32d0a">Sport Games</div>
                                </div>
                                <div class="col-md-8 control-group clearfix">
                                    <div class="sb-title" style="color:#d58512">Action Games</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="home_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                                <div class="control-group visible-xs">
                                    <div class="sb-title header_home_products row"> Adventure Games</div>
                                </div>
                                <div class="home_products_wrapper">
                                    <div id="home_products_1" class="clearfix">
                                        <?php foreach ($this->adventure as $cat): ?>
                                            <div class="section-item not-animated" data-animate="bounceIn" data-delay="300">
                                                <form action="/wish/add" method="post" enctype="multipart/form-data">
                                                    <ul class="row-container list-unstyled clearfix">
                                                        <li class="col-md-5 row-left">
                                                            <a href="./product.html" class="hoverBorder">
                                                                <span class="hoverBorderWrapper">
                                                                    <img style="width:60px;height:85px" src="<?= base_url($cat['image']); ?>" class="image-fly img-responsive" alt="Auctor semper">
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-19 row-right parent-fly">
                                                            <div class="fprod-title">
                                                                <a class="col-title" href="#"><?= $cat['gamename']; ?></a>
                                                                <br>
                                                            </div>
                                                            <div class="hide clearfix">
                                                                <?= $cat['game_description']; ?>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </form>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="home_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                                <div class="control-group visible-xs">
                                    <div class="sb-title header_home_products row" style="color:#a32d0a">Sport Games</div>
                                </div>
                                <div class="home_products_wrapper">
                                    <div id="home_products_2" class="clearfix">
                                        <?php foreach ($this->sport as $cat): ?>
                                            <div class="section-item not-animated" data-animate="bounceIn" data-delay="300">
                                                <form action="/wish/add" method="post" enctype="multipart/form-data">
                                                    <ul class="row-container list-unstyled clearfix">
                                                        <li class="col-md-5 row-left">
                                                            <a href="./product.html" class="hoverBorder">
                                                                <span class="hoverBorderWrapper">
                                                                    <img style="width:60px;height:85px" src="<?= base_url($cat['image']); ?>" class="image-fly img-responsive" alt="Auctor semper">
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-19 row-right parent-fly">
                                                            <div class="fprod-title">
                                                                <a class="col-title" href="#"><?= $cat['gamename']; ?></a>
                                                                <br>
                                                            </div>
                                                            <div class="hide clearfix">
                                                                <?= $cat['game_description']; ?>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </form>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="home_products col-md-8 not-animated clearfix" data-animate="fadeInUp" data-delay="300">
                                <div class="control-group visible-xs">
                                    <div class="sb-title header_home_products row" style="color:#3ba8b6">Action Games</div>
                                </div>
                                <div class="home_products_wrapper">
                                    <div id="home_products_3" class="clearfix">
                                         <?php foreach ($this->action as $cat): ?>
                                            <div class="section-item not-animated" data-animate="bounceIn" data-delay="300">
                                                <form action="/wish/add" method="post" enctype="multipart/form-data">
                                                    <ul class="row-container list-unstyled clearfix">
                                                        <li class="col-md-5 row-left">
                                                            <a href="./product.html" class="hoverBorder">
                                                                <span class="hoverBorderWrapper">
                                                                    <img style="width:60px;height:85px" src="<?= base_url($cat['image']); ?>" class="image-fly img-responsive" alt="Auctor semper">
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="col-md-19 row-right parent-fly">
                                                            <div class="fprod-title">
                                                                <a class="col-title" href="#"><?= $cat['gamename']; ?></a>
                                                                <br>
                                                            </div>
                                                            <div class="hide clearfix">
                                                                <?= $cat['game_description']; ?>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </form>
                                            </div>
                                        <?php endforeach; ?>
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
<?php $q = $this->error; ?>
<?php if (!empty($q)): ?>
    <script type="text/javascript">
        alert('<?= $this->error; ?>');
    </script>

<?php endif; ?>
