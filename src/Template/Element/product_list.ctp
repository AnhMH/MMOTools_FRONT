
<div class="hover14 column">
    <div class="agile_top_brand_left_grid">
        <div class="agile_top_brand_left_grid_pos">
            <img src="<?php echo $BASE_URL;?>/images/offer.png" alt=" " class="img-responsive" />
        </div>
        <div class="agile_top_brand_left_grid1">
            <figure>
                <div class="snipcart-item block" >
                    <div class="snipcart-thumb" title="<?php echo $p['name']; ?>">
                        <a href="<?php echo $BASE_URL.'/san-pham/'.$p['url'];?>">
                            <img title=" " alt=" " src="<?php echo $p['image']; ?>" width="150px" height="150px"/>
                        </a>		
                        <p class="productListName"><?php echo $p['name']; ?></p>
                        <div class="stars">
                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        </div>
                        <h4><?php echo number_format($p['sell_price']); ?></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                        <button class="button" onclick="return addToCart(<?php echo $p['id'];?>)">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </figure>
        </div>
    </div>
</div>