<?php
$webTitle = 'ChoTreo.Com';
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

        <meta name="generator" content="ChoTreo.Com" />
        
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        
        <link rel="canonical" href="<?php echo $current_url;?>" />
        
        <link href="<?php echo $BASE_URL; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $BASE_URL; ?>/css/skdslider.css" rel="stylesheet">
        <link href="<?php echo $BASE_URL; ?>/css/style.css?<?php echo VERSION_DATE; ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $BASE_URL; ?>/css/responsive.css?<?php echo VERSION_DATE; ?>" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome icons -->
        <link href="<?php echo $BASE_URL; ?>/css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $BASE_URL; ?>/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/common.js?<?php echo VERSION_DATE; ?>"></script>
    </head>

    <body onload="hide_preloader()" id="<?php echo $controller.'-'.$action;?>">
        <?php echo $this->element('header'); ?>
        <?php echo $this->element('nav'); ?>
        <?= $this->fetch('content') ?>
        <?php echo $this->element('footer'); ?>
        <?php echo $this->element('popup'); ?>
        <div class="loader"><span></span></div>

        <script type="text/javascript">
            var BASE_URL = '<?php echo $BASE_URL; ?>';
            var controller = '<?php echo $controller; ?>';
            var action = '<?php echo $action; ?>';
            var currentUrl = '<?php echo $current_url; ?>';
            var referer = '<?php echo $referer; ?>';
            var _csrfToken = '<?php echo $this->request->getParam('_csrfToken'); ?>';
        </script>
        
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo $BASE_URL; ?>/js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL; ?>/js/easing.js"></script>
        <!-- start-smoth-scrolling -->
        <script src="<?php echo $BASE_URL; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/skdslider.min.js"></script>
        
    </body>
</html>
