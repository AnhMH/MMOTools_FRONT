<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1">
            <li><a href="<?php echo $BASE_URL;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo __('LABEL_HOME');?></a></li>
            <li class="active">Giỏ hàng</li>
        </ol>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- checkout -->
<div class="checkout">
    <div class="container" id="cartContainer">
        <?php echo $this->element('cart');?>
    </div>
</div>
<!-- //checkout -->
