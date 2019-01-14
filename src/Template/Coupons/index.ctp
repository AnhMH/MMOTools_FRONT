<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME');?></a></li>
            <li class="active">Hàng khuyến mãi</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!--- household --->
<div class="products">
    <div class="container">
        <div class="col-md-12 products-right">
            <div class="products-right-grid">
                <div class="products-right-grids">
                    <div class="sorting">
                        <select id="merchant" class="frm-field required sect">
                            <option value="">Tất cả đối tác</option>
                            <?php foreach ($merchants as $k => $v): ?>
                            <option value="<?php echo $k;?>" <?php echo !empty($param['merchant']) && $param['merchant'] == $k ? 'selected' : '';?>><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $v;?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php $sortByParam = $param; unset($sortByParam['sort']);?>
                        <input type="hidden" value="<?php echo $BASE_URL.'/hang-khuyen-mai?'.http_build_query($sortByParam);?>" id="merchantParam"/>
                    </div>
                    <div class="sorting-left">
                        <select id="limitData" class="frm-field required sect">
                            <?php foreach ($limitData as $k => $v): ?>
                            <option value="<?php echo $k;?>" <?php echo !empty($param['limit']) && $param['limit'] == $k ? 'selected' : '';?>><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $v;?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php unset($param['limit']); ?>
                        <input type="hidden" value="<?php echo $BASE_URL.'/hang-khuyen-mai?'.http_build_query($param);?>" id="limiDataParam"/>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="agile_top_brands_grids">
                <?php if (!empty($coupons)): ?>
                <?php foreach ($coupons as $c): ?>
                    <?php echo $this->element('coupon_list', array('c' => $c)); ?>
                <?php endforeach; ?>
                <?php endif; ?>
                <div class="clearfix"> </div>
            </div>
            <?php echo $this->Paginate->render($total, $limit); ?>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--- household --->