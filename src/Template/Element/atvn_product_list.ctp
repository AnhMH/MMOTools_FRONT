<div class="newproducts-w3agile top-atvn-products">
    <div class="container">
        <h3>Sản phẩm bán chạy</h3>
        <div class="agile_top_brands_grids">
            <?php foreach ($settings['atvn_top_products'] as $p): ?>
                <div class="col-md-2 col-sm-3 col-xs4 top_brand_left-1">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="<?php echo $BASE_URL; ?>/images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb" title="<?php echo $p['name']; ?>">
                                            <a href="<?php echo $p['aff_link']; ?>" target="_blank">
                                                <img title="<?php echo $p['name']; ?>" alt="<?php echo $p['name']; ?>" src="<?php echo $p['image']; ?>" width="100px" height="100px"/>
                                            </a>		
                                            <p class="productListName"><?php echo $p['name']; ?></p>
                                            <h4><?php echo number_format($p['discount']); ?></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <button class="button" onclick="window.location.href = '<?php echo $p['aff_link']; ?>'">Mua ngay</button>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>