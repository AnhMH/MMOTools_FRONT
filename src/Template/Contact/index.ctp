<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="<?php echo $BASE_URL;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME');?></a></li>
            <li class="active">Liên hệ</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<?php echo $this->Flash->render() ?>
<!-- contact -->
<div class="about">
    <div class="w3_agileits_contact_grids">
        <div class="col-md-6 w3_agileits_contact_grid_left">
            <div class="agile_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6471924662533!2d106.77056461483681!3d10.838288361012369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752707b87dc8a1%3A0xb97e1acf192fd35d!2zNTQgUXVhbmcgVHJ1bmcsIFBoxrDhu5tjIExvbmcgQiwgUXXhuq1uIDksIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1541346771229" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="agileits_w3layouts_map_pos">
                <div class="agileits_w3layouts_map_pos1">
                    <h3>Thông tin liên hệ</h3>
                    <p>54 Quang Trung, Tăng Nhơn Phú B, Quận 9, Hồ Chí Minh</p>
                    <ul class="wthree_contact_info_address">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:contact@chotreo.com">contact@chotreo.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>0968677633</li>
                    </ul>
                    <div class="w3_agile_social_icons w3_agile_social_icons_contact">
                        <ul>
                            <li><a href="#" class="icon icon-cube agile_facebook"></a></li>
                            <li><a href="#" class="icon icon-cube agile_rss"></a></li>
                            <li><a href="#" class="icon icon-cube agile_t"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 w3_agileits_contact_grid_right">
            <h2 class="w3_agile_header">Liên hệ</h2>

            <form action="<?php echo $BASE_URL;?>/lien-he" method="post">
                <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>
                <span class="input input--ichiro">
                    <input class="input__field input__field--ichiro" type="text" id="input-25" name="name" placeholder=" " required="" />
                    <label class="input__label input__label--ichiro" for="input-25">
                        <span class="input__label-content input__label-content--ichiro">Họ tên</span>
                    </label>
                </span>
                <span class="input input--ichiro">
                    <input class="input__field input__field--ichiro" type="email" id="input-26" name="email" placeholder=" " required="" />
                    <label class="input__label input__label--ichiro" for="input-26">
                        <span class="input__label-content input__label-content--ichiro">Email</span>
                    </label>
                </span>
                <textarea name="message" placeholder="Tin nhắn..." required=""></textarea>
                <input type="submit" value="Gửi">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- contact -->
