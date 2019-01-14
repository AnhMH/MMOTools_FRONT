<?php if (!empty($data['sliders'])): ?>
<!-- main-slider -->
<ul id="demo1">
    <?php foreach ($data['sliders'] as $s): ?>
    <?php if ($s['type'] == 1): ?>
    <a href="<?php echo $s['link'];?>">
        <li>
            <img src="<?php echo $s['image']; ?>" alt="<?php echo $s['text']; ?>" />
            <!--Slider Description example-->
            <div class="slide-desc">
                <h3><?php echo $s['text']; ?></h3>
            </div>
        </li>
    </a>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<!-- //main-slider -->

<?php if (!empty($settings['atvn_top_products'])): ?>
<!-- new -->
    <?php echo $this->element('atvn_product_list'); ?>
<!-- //new -->
<?php endif; ?>

<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h2>TOP</h2>
        <div class="grid_3 grid_5">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Sản phẩm</a></li>
                    <li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Cửa hàng</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                        <div class="agile-tp">
                            <h5>Sản phẩm nổi bật trong tuần</h5>
                            <p class="w3l-ad"></p>
                        </div>
                        <div class="agile_top_brands_grids">
                            <?php if (!empty($data['feature_products'])): ?>
                                <?php foreach ($data['feature_products'] as $p): ?>
                                    <div class="col-md-4 top_brand_left" style="margin-bottom:40px;">
                                        <?php echo $this->element('product_list', array('p' => $p)); ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
                        <div class="agile-tp">
                            <h5>Cửa hàng nổi bật</h5>
                            <p class="w3l-ad"></p>
                        </div>
                        <div class="agile_top_brands_grids">
                            <?php if (!empty($data['shops'])): ?>
                            <?php foreach ($data['shops'] as $v): ?>
                            <div class="col-md-4 top_brand_left" style="margin-bottom:40px;">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="images/offer.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block" >
                                                    <div class="snipcart-thumb">
                                                        <a href="<?php echo $BASE_URL;?>/cua-hang/<?php echo $v['url'];?>">
                                                            <img title=" " alt=" " src="<?php echo !empty($v['avatar']) ? $v['avatar'] : $BASE_URL.'/img/avatar_default.png'; ?>" width="150px" height="150px;"/>
                                                        </a>		
                                                        <p><?php echo !empty($v['name']) ? $v['name'] : ''; ?></p>
                                                        <div class="stars">
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <button class="button"  onclick="window.location.href='<?php echo $BASE_URL.'/cua-hang/'.$v['url'];?>'">Xem cửa hàng</button>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //top-brands -->
<!-- Carousel
   ================================================== -->
<?php if (!empty($data['sliders']) && 1==2): $si = 0;?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php foreach ($data['sliders'] as $s): ?>
        <?php if ($s['type'] == 2): ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $si;?>" <?php echo $si == 0 ? 'class="active"' : '';?>></li>
        <?php $si++; endif; ?>
        <?php endforeach; ?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <?php $si = 0; foreach ($data['sliders'] as $s): ?>
        <?php if ($s['type'] == 2): ?>
        <div class="item <?php echo $si == 0 ? 'active' : '';?>">
            <a href="<?php echo !empty($s['link']) ? $s['link'] : '#'; ?>"> 
                <img class="first-slide" src="<?php echo $s['image']; ?>" alt="<?php echo $s['text']; ?>">
            </a>
        </div>
        <?php $si++; endif; ?>
        <?php endforeach; ?>
    </div>
</div><!-- /.carousel -->	
<?php endif; ?>

<!--banner-bottom-->
<div class="ban-bottom-w3l">
    <div class="container">
        <div class="col-md-6 ban-bottom3">
            <div class="ban-top">
                <a href="<?php echo $BASE_URL;?>/danh-muc/me-va-be"><img src="<?php echo $BASE_URL;?>/img/me-va-be.png" class="img-responsive" alt="Mẹ và bé - chotreo.com"/></a>
            </div>
            <div class="ban-img">
                <div class=" ban-bottom1">
                    <div class="ban-top">
                        <a href="<?php echo $BASE_URL;?>/danh-muc/thoi-trang"><img src="<?php echo $BASE_URL;?>/img/thoi-trang.png" class="img-responsive" alt="Thời trang - chotreo.com"/></a>
                    </div>
                </div>
                <div class="ban-bottom2">
                    <div class="ban-top">
                        <a href="<?php echo $BASE_URL;?>/danh-muc/my-pham"><img src="<?php echo $BASE_URL;?>/img/my-pham.png" class="img-responsive" alt="Mỹ phẩm - chotreo.com"/></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 ban-bottom">
            <div class="ban-top">
                <a href="<?php echo $BASE_URL;?>/hang-khuyen-mai"><img src="<?php echo $BASE_URL;?>/img/khuyen-mai.png" class="img-responsive" alt="Khuyến mãi - chotreo.com" style="border: 1px solid #ccc;"/></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--banner-bottom-->
<!--brands-->
<div class="brands">
    <div class="container">
        <h3>Khuyến mãi</h3>
        <div class="brands-agile">
            <?php if (!empty($data['coupons'])): ?>
            <?php foreach ($data['coupons'] as $c): ?>
                <?php echo $this->element('coupon_list', array('c' => $c)); ?>
            <?php endforeach; ?>
            <?php endif; ?>
            <div class="clearfix"></div>
            <div class="view_all">
                <button class="btn btn-primary" onclick="window.location.href='<?php echo $BASE_URL;?>/hang-khuyen-mai'">Xem tất cả</button>
            </div>
        </div>
    </div>
</div>	
<!--//brands-->
<!-- new -->
<div class="newproducts-w3agile">
    <div class="container">
        <h3>Sản phẩm mới</h3>
        <div class="agile_top_brands_grids">
            <?php if (!empty($data['new_products'])): ?>
                <?php foreach ($data['new_products'] as $p): ?>
                <div class="col-md-3 top_brand_left-1">
                    <?php echo $this->element('product_list', array('p' => $p)); ?>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //new -->
<!-- //footer -->
