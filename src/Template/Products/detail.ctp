<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL; ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME');?></a></li>
            <li><a href="<?php echo $BASE_URL.'/danh-muc/'.$data['product']['cate_url'];?>"><?php echo $data['product']['cate_name']; ?></a></li>
            <li class="active"><?php echo $data['product']['name']; ?></li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<div class="products">
    <div class="container">
        <div class="agileinfo_single">
            <?php if (!empty($data['product'])): ?>
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="<?php echo $data['product']['image']; ?>" alt="<?php echo $data['product']['name']; ?>" width="300px" height="300px" class="img-responsive">
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <h2><?php echo $data['product']['name']; ?> <span>(<?php echo $data['product']['code']; ?>)</span></h2>
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4" checked="">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" >
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <div class="w3agile_description">
                    <h5>Danh mục: <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $data['product']['cate_url'];?>"><?php echo $data['product']['cate_name']; ?></a></h5>
                </div>
                <div class="w3agile_description">
                    <h5>Cửa hàng: <a href="<?php echo $BASE_URL;?>/cua-hang/<?php echo $data['product']['admin_url'];?>"><?php echo $data['product']['admin_name']; ?></a></h5>
                </div>
                <div class="w3agile_description">
                    <h4>Mô tả:</h4>
                    <p><?php echo $data['product']['description'];?></p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        <h4 class="m-sing"><?php echo number_format($data['product']['sell_price']); ?></h4> (VND)
                    </div>
                    <input type="hidden" id="inputCartNumber" value="1" min="1"/>
                    <div class="snipcart-details agileinfo_single_right_details">
                        <button class="button" onclick="return addToCart(<?php echo $data['product']['id'];?>, document.getElementById('inputCartNumber').value)">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 product-description">
                <h4>Mô tả chi tiết</h4>
                <?php echo $data['product']['detail']; ?>
            </div>
            <?php endif; ?>
            
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- new -->
<div class="newproducts-w3agile">
    <div class="container">
        <h3>Sản phẩm cùng danh mục</h3>
        <div class="agile_top_brands_grids">
            <?php if (!empty($data['relate_products'])): ?>
            <?php foreach ($data['relate_products'] as $p): ?>
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
