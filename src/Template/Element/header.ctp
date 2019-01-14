<!-- header -->
<div class="agileits_header">
    <div class="container">
        <div class="w3l_offers">
            <p>Phần mềm quản lý bán hàng miễn phí . <a href="https://app.chotreo.com/login" target="_blank">ĐĂNG KÝ NGAY</a></p>
        </div>
        <div class="agile-login">
            <ul>
                <?php if (!empty($AppUI)): ?>
                <li class="dropdown user-profile">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="hello"></span><?php echo $AppUI['name'];?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $BASE_URL;?>"><i class="fa fa-user"></i> Tài khoản</a></li>
                        <li><a href="<?php echo $BASE_URL;?>/dang-xuat"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                    </ul>
                </li>
                <?php else: ?>
                <li><a href="<?php echo $BASE_URL;?>/dang-ky"> Đăng ký </a></li>
                <li><a href="<?php echo $BASE_URL;?>/dang-nhap">Đăng nhập</a></li>
                <?php endif; ?>
                <li><a href="<?php echo $BASE_URL;?>/lien-he">Liên hệ</a></li>

            </ul>
        </div>
        <div class="product_list_header">
            <button class="w3view-cart" onclick="window.location.href = '<?php echo $BASE_URL;?>/gio-hang';">
                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                <?php if (!empty($cart['total'])): ?>
                <span class="cart-num" id="topCartNumber" style="display: block"><?php echo $cart['total'];?></span>
                <?php else: ?>
                <span class="cart-num" id="topCartNumber"></span>
                <?php endif; ?>
            </button>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-envelope" aria-hidden="true"></i> Liên hệ: contact@chotreo.com</li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left">
            <h1><a href="<?php echo $BASE_URL;?>">Chotreo.com</a></h1>
        </div>
        <div class="w3l_search">
            <form action="<?php echo $BASE_URL;?>/tim-kiem" method="get">
                <input type="search" name="keyword" placeholder="Nhập tên sản phẩm cần tìm..." required="required">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
                <div class="clearfix"></div>
            </form>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
