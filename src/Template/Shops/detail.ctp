<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL; ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME');?></a></li>
            <li>Cửa hàng</li>
            <li class="active"><?php echo !empty($data['shop']['name']) ? $data['shop']['name'] : ''; ?></li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<div class="products">
    <div class="container">
        <div class="agileinfo_single">
            <?php if (!empty($data['shop'])): ?>
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="<?php echo !empty($data['shop']['avatar']) ? $data['shop']['avatar'] : ''; ?>" alt="<?php echo !empty($data['shop']['name']) ? $data['shop']['name'] : ''; ?>" width="300px" height="300px" class="img-responsive">
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <h2><?php echo !empty($data['shop']['name']) ? $data['shop']['name'] : ''; ?></h2>
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
                    <h4>Số lượng sản phẩm: <?php echo $total;?></h4>
                </div>
                <div class="w3agile_description">
                    <h4>Ngày tham gia: <?php echo !empty($data['shop']['created']) ? date('d-m-Y', $data['shop']['created']) : '-';?></h4>
                </div>
                <div class="w3agile_description">
                    <h4>Mô tả:</h4>
                    <p><?php echo $data['shop']['description']; ?></p>
                </div>
            </div>
            <?php endif; ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- new -->
<div class="newproducts-w3agile">
    <div class="container">
        <h3>Sản phẩm</h3>
        <div class="agile_top_brands_grids">
            <?php if (!empty($data['products']['data'])): ?>
            <?php foreach ($data['products']['data'] as $p): ?>
            <div class="col-md-3 top_brand_left-1">
                <?php echo $this->element('product_list', array('p' => $p)); ?>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <div class="clearfix"> </div>
        </div>
        <?php echo $this->Paginate->render($total, $limit); ?>
    </div>
</div>
<!-- //new -->
