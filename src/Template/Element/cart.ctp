<?php if (!empty($cart)): ?>
<h2>Giỏ hàng hiện có: <span id="cartTotal"><?php echo!empty($cart['total']) ? $cart['total'] : 0; ?></span> sản phẩm</h2>

    <div class="checkout-right">
        <table class="timetable_sub">
            <thead>
                <tr>
                    <th>STT</th>	
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Xóa</th>
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
                    <td class="invert-image">
                        <a href="<?php echo $BASE_URL . '/san-pham/' . $v['url']; ?>">
                            <img src="<?php echo $v['image']; ?>" alt=" " width="100px" class="img-responsive" />
                        </a>
                    </td>
                    <td class="invert">
                        <div class="quantity"> 
                            <div class="quantity-select">                           
                                <div class="entry value-minus" onclick="return cartMinus(<?php echo $v['id'];?>);">&nbsp;</div>
                                <div class="entry value"><span id="qty-<?php echo $v['id'];?>"><?php echo $v['qty']; ?></span></div>
                                <div class="entry value-plus active" onclick="return cartPlus(<?php echo $v['id'];?>);">&nbsp;</div>
                            </div>
                        </div>
                    </td>
                    <td class="invert"><?php echo $v['name']; ?></td>

                    <td class="invert"><?php echo number_format($subTotal); ?></td>
                    <td class="invert">
                        <div class="rem">
                            <div class="close1" onclick="return updateCart(<?php echo $v['id']; ?>);"> </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3"></td>
                <td>Tổng cộng:</td>
                <td colspan="2"><?php echo number_format($total); ?></td>
            </tr>
        </table>
    </div>
    <div class="checkout-left">	
        <div class="checkout-left-basket">
            <a href="<?php echo $BASE_URL; ?>"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Tiếp tục mua hàng</a>
        </div>
        <div class="checkout-right-basket">
            <a href="<?php echo $BASE_URL; ?>/dat-hang">Xác nhận giỏ hàng</a>
        </div>
        <div class="clearfix"> </div>
    </div>
<?php else: ?>
    <h2>Giỏ hàng hiện có: <span>0 sản phẩm</span></h2>
<?php endif; ?>
