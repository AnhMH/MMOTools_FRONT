<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL; ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME'); ?></a></li>
            <li class="active">Đặt hàng</li>
        </ol>
    </div>
</div>
<div class="container checkout" id="cartCheckout">
    <div class="col-sm-5">
        <h2>Giỏ hàng hiện có: <span id="cartTotal"><?php echo!empty($cart['total']) ? $cart['total'] : 0; ?></span> sản phẩm</h2>
        <div class="checkout-right">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <?php
                unset($cart['total']);
                $stt = 0;
                $total = 0;
                ?>
                <?php foreach ($cart as $k => $v): ?>
                    <?php
                    $stt++;
                    $subTotal = $v['qty'] * $v['price'];
                    $total += $subTotal;
                    ?>
                    <tr>
                        <td class="invert"><?php echo $stt; ?></td>
                        <td class="invert"><?php echo $v['name']; ?></td>
                        <td class="invert">
                            <div class="quantity"> 
                                <div class="quantity-select">   
                                    <div class="entry value"><span id="qty-<?php echo $v['id']; ?>"><?php echo $v['qty']; ?></span></div>
                                </div>
                            </div>
                        </td>
                        <td class="invert"><?php echo number_format($subTotal); ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2">Tổng cộng:</td>
                    <td colspan="2"><b><?php echo number_format($total); ?></b> (VND)</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-7">
        <form action="<?php echo $BASE_URL; ?>/dat-hang" method="POST" id="cartCheckoutForm">
            <h2>Thông tin giao hàng</h2>
            <div class="form-group">
                <label for="name"><i class="fa fa-user"></i> Họ tên</label>
                <input type="text" class="form-control" value="<?php echo !empty($AppUI['name']) ? $AppUI['name'] : '';?>" id="name" name="name" placeholder="Họ tên..." required="">
            </div>
            <div class="form-group">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="email" class="form-control" value="<?php echo !empty($AppUI['email']) ? $AppUI['email'] : '';?>" id="email" name="email" placeholder="Email..." required="">
            </div>
            <div class="form-group">
                <label for="phone"><i class="fa fa-phone" style="margin-right: 0;"></i> Số điện thoại</label>
                <input type="text" class="form-control" value="<?php echo !empty($AppUI['phone']) ? $AppUI['phone'] : '';?>" id="phone" name="phone" placeholder="Số điện thoại..." required="">
            </div>
            <div class="form-group">
                <label for="address"><i class="fa fa-building-o"></i> Địa chỉ</label>
                <input type="text" class="form-control" value="<?php echo !empty($AppUI['address']) ? $AppUI['address'] : '';?>" id="address" name="address" placeholder="Địa chỉ..." required="">
            </div>
            <?php if (empty($AppUI)): ?>
            <div class="form-group passContainer" style="display: none">
                <label for="password"><i class="fa fa-key"></i> Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu..." required="">
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="save_account" id="saveAccount" value="1" onclick="return showPassword();"> Lưu thông tin đăng nhập lần sau
                </label>
            </div>
            <?php endif; ?>
            <input type="submit" value="Đặt hàng" class="btn btn-danger cartCheckoutFormSubmit">
        </form>
    </div>
</div>
