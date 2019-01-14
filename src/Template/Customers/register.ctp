<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL; ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME'); ?></a></li>
            <li class="active">Đăng ký</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<?php echo $this->Flash->render() ?>
<!-- register -->
<div class="register">
    <div class="container">
        <h2>Đăng ký</h2>

        <div class="login-form-grids">
            <form action="<?php echo $BASE_URL;?>/dang-ky" method="post">
                <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>
                <h5>Thông tin đăng nhập</h5>
                <input type="email" name="email" placeholder="Email" required=" " >
                <input type="password" name="password" placeholder="Mật khẩu" required=" " >
                <input type="password" name="re_password" placeholder="Xác nhận mật khẩu" required=" " >
<!--                <div class="register-check-box">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="accept_terms"><i> </i>Tôi đồng ý với Điều khoản dịch vụ và Chính sách bảo mật</label>
                    </div>
                </div>-->
                <h6>Thông tin tài khoản (<span style="font-size: 12px">Không bắt buộc</span>)</h6>
                <input type="text" name="name" placeholder="Họ tên...">
                <input type="text" name="phone" placeholder="Số điện thoại...">
                <input type="text" name="address" placeholder="Địa chỉ...">
                <div class="register-check-box">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="subscribe"><i> </i>Đăng ký nhập tin mới</label>
                    </div>
                </div>
                <input type="submit" value="Đăng ký">
            </form>
        </div>

        <div class="register-home">
            <a href="<?php echo $BASE_URL; ?>"><?php echo __('LABEL_HOME'); ?></a>
        </div>
    </div>
</div>
<!-- //register -->
