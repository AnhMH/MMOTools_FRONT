<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME');?></a></li>
            <li class="active">Tìm kiếm từ khóa: <b><?php echo !empty($param['keyword']) ? $param['keyword'] : '';?></b></li>
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
                        <select id="sortBy" class="frm-field required sect">
                            <?php foreach ($sortBy as $k => $v): ?>
                            <option value="<?php echo $k;?>" <?php echo !empty($param['sort']) && $param['sort'] == $k ? 'selected' : '';?>><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $v;?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php $sortByParam = $param; unset($sortByParam['sort']);?>
                        <input type="hidden" value="<?php echo $BASE_URL.'/tim-kiem?'.http_build_query($sortByParam);?>" id="sortByParam"/>
                    </div>
                    <div class="sorting-left">
                        <select id="limitData" class="frm-field required sect">
                            <?php foreach ($limitData as $k => $v): ?>
                            <option value="<?php echo $k;?>" <?php echo !empty($param['limit']) && $param['limit'] == $k ? 'selected' : '';?>><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $v;?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php unset($param['limit']); ?>
                        <input type="hidden" value="<?php echo $BASE_URL.'/tim-kiem?'.http_build_query($param);?>" id="limiDataParam"/>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="agile_top_brands_grids">
                <?php if (!empty($products)): ?>
                <?php foreach ($products as $p): ?>
                <div class="col-md-3 top_brand_left">
                    <?php echo $this->element('product_list', array('p' => $p)); ?>
                </div>
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