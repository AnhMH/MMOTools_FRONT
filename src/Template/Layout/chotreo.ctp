<?php
$webTitle = 'HoangAnhOnline.Com';
$webDescription = 'Phần mềm quản lý bán hàng online miễn phí';
$webKeyword = 'mua bán online, phần mềm quản lý, phần mềm quản lý bán hàng online, chotreo, chợ tréo';
$webImage = $BASE_URL.'/img/chotreo.png';
$_description = !empty($pageDescription) ? strip_tags($pageDescription) : $webDescription;
$_keyword = !empty($pageKeyword) ? $pageKeyword : $webKeyword;
$_title = !empty($pageTitle) ? $pageTitle.' - ChoTreo.Com' : $webTitle;
$_image = !empty($pageImage) ? $pageImage : $webImage;
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_title;?></title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <meta name="description" itemprop="description" content="<?php echo $_description; ?>" />
        <meta name="keywords" content="<?php echo $_keyword; ?>">
        
        <meta property="og:title" content="<?php echo $_title; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $current_url;?>" />
        <meta property="og:image" content="<?php echo $_image; ?>" />
        <meta property="og:site_name" content="<?php echo $webTitle; ?>" />
        <meta property="og:description" content="<?php echo $_description; ?>" />
       
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?php echo $_title; ?>" />
        <meta name="twitter:description" content="<?php echo $_description; ?>" />
        <meta name="twitter:image" content="<?php echo $_image; ?>" />
        <meta itemprop="image" content="<?php echo $_image; ?>" />

        <meta name="generator" content="HoangAnhOnlie.Com" />
        
        <link rel="canonical" href="<?php echo $current_url;?>" />
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="<?php echo $BASE_URL; ?>/css/style.css?<?php echo VERSION_DATE; ?>" rel="stylesheet" type="text/css" media="all" />
    </head>

    <body id="<?php echo $controller.'-'.$action;?>">
        <?php echo $this->element('header');?>
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>

        <script type="text/javascript">
            var BASE_URL = '<?php echo $BASE_URL; ?>';
            var controller = '<?php echo $controller; ?>';
            var action = '<?php echo $action; ?>';
            var currentUrl = '<?php echo $current_url; ?>';
            var referer = '<?php echo $referer; ?>';
            var _csrfToken = '<?php echo $this->request->getParam('_csrfToken'); ?>';
        </script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="<?php echo $BASE_URL; ?>/js/common.js?<?php echo VERSION_DATE; ?>"></script>
        
    </body>
</html>
