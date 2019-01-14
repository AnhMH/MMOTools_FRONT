<?php if (!empty($settings['atvn_top_products']) && $controller != 'home'): ?>
<!-- new -->
    <?php echo $this->element('atvn_product_list'); ?>
<!-- //new -->
<?php endif; ?>
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Liên hệ</h3>
                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>54 Quang Trung, Tăng Nhơn Phú B, Q.9, HCM.</li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:contact@chotreo.com">contact@chotreo.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0968677633</li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Thông tin</h3>
                <ul class="info"> 
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo $BASE_URL;?>/lien-he">Liên hệ</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="https://app.chotreo.com/login">Bán hàng cùng ChoTreo</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo $BASE_URL;?>/hang-khuyen-mai">Săn hàng khuyến mãi</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo $BASE_URL;?>/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo $BASE_URL;?>/dieu-khoan-dich-vu">Điều khoản dịch vụ</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="https://hoanganhonline.com">Liên hệ làm web</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Danh mục</h3>
                <ul class="info"> 
                    <?php if (!empty($settings['cates'])): ?>
                    <?php foreach ($settings['cates'] as $val): ?>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo $BASE_URL.'/danh-muc/'.$val['url'];?>"><?php echo $val['name']; ?></a></li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Tài khoản</h3>
                <ul class="info"> 
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo $BASE_URL;?>/gio-hang">Giỏ hàng</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo $BASE_URL;?>/dang-nhap">Đăng nhập</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo $BASE_URL;?>/dang-ky">Đăng ký</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo $BASE_URL;?>/hang-khuyen-mai">Khuyến mãi</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="footer-copy">

        <div class="container">
            <p>Copyright © 2018 <a href="https://hoanganhonline.com">HoangAnhOnline.Com</a>. All rights reserved</p>
        </div>
    </div>

</div>	
<div class="footer-botm">
    <div class="container">
        <div class="w3layouts-foot">
            <ul>
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="payment-w3ls">	
            <img src="<?php echo $BASE_URL;?>/images/card.png" alt=" " class="img-responsive">
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->	
