<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL; ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME');?></a></li>
            <li class="active">Nội dung khuyến mãi</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<div class="products">
    <div class="container">
        <div class="agileinfo_single">
            <?php if (!empty($data['coupon'])): ?>
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="<?php echo $data['coupon']['image']; ?>" alt="<?php echo $data['coupon']['name']; ?>" width="300px" height="300px" class="img-responsive">
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <h2><?php echo $data['coupon']['name']; ?></h2>
                <div class="w3agile_description">
                    <h4>Mô tả:</h4>
                    <p><?php echo $data['coupon']['content'];?></p>
                </div>
                <div class="w3agile_description">
                    <h5>Ngày bắt đầu: <?php echo !empty($data['coupon']['start_time']) ? date('d-m-Y', $data['coupon']['start_time']) : '-';?></h5>
                    <h5>Ngày kết thúc: <?php echo !empty($data['coupon']['end_time']) ? date('d-m-Y', $data['coupon']['end_time']) : '-';?></h5>
                </div>
                <?php if (!empty($data['coupon']['coupons'])):?>
                <div class="w3agile_description">
                    <h5>Mã giảm giá:</h5>
                    
                    <?php
                    $couponCode = json_decode($data['coupon']['coupons'], true);
                    foreach ($couponCode as $cc):
                    ?>
                    <p>Code: <b><?php echo $cc['coupon_code'];?></b> - Giảm: <b><?php echo $cc['coupon_save'];?></b> - Mô tả: <?php echo $cc['coupon_desc'];?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <div class="snipcart-item block">
                    <div class="snipcart-details agileinfo_single_right_details">
                        <button class="button" onclick="window.location.href='<?php echo $data['coupon']['aff_link'];?>'">Xem chi tiết</button>
                    </div>
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
        <h3>Khuyến mãi cùng đối tác</h3>
        <div class="agile_top_brands_grids">
            <?php if (!empty($data['relate_coupons'])): ?>
            <?php foreach ($data['relate_coupons'] as $c): ?>
                <?php echo $this->element('coupon_list', array('c' => $c)); ?>
            <?php endforeach; ?>
            <?php endif; ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //new -->
