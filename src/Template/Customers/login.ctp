<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME');?></a></li>
            <li class="active">Đăng nhập</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<?php echo $this->Flash->render() ?>
<!-- login -->
<div class="login">
    <div class="container">
        <h2>Đăng nhập</h2>

        <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
            <form action="<?php echo $BASE_URL;?>/dang-nhap" method="POST">
                <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>
                <input type="email" name="email" placeholder="Email" required=" " >
                <input type="password" name="password" placeholder="Mật khẩu" required=" " >
                <div class="forgot">
                    <a href="#">Quên mật khẩu?</a>
                </div>
                <input type="submit" value="Đăng nhập">
            </form>
        </div>
        <h4>Thành viên mới</h4>
        <p><a href="<?php echo $BASE_URL;?>/dang-ky">Đăng ký</a> (Hoặc) quay lại <a href="<?php echo $BASE_URL;?>"><?php echo __('LABEL_HOME');?><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
    </div>
</div>
<!-- //login -->
