<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>蓝色电子科技-首页</title>
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jq.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/kj1.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jQuery.blockUI.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.SuperSlide.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div class="w950 c">
    <div class="w l">
        <div class="logo l">
            <a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_option('logoURL'); ?>"></a>
        </div>
        <div class="nav r">
            <ul class="w l lili lile">
                <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
            </ul>
        </div>
    </div>
</div>
<div class="w950 c">
    <div class="ads w l">
        <div id="focusAd" class="tv-slideBox">
            <a class="prev"></a><a class="next"></a>
            <div class="bd">
                <ul>
                    <li class="li1">
                        <img src="<?php echo get_option('mytheme_ad1url'); ?>">
                    </li>
                    <li class="li2">
                        <img src="<?php echo get_option('mytheme_ad2url'); ?>">
                    </li>
                    <li class="li3">
                        <img src="<?php echo get_option('mytheme_ad3url'); ?>">
                    </li>
                </ul>
            </div>
            <div class="hd">
                <ul>
                    <li class="li1"><span>1</span></li>
                    <li class="li2"><span>2</span></li>
                    <li class="li3"><span>3</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script language="javascript"> jQuery("#focusAd").slide({ mainCell:".bd ul",effect: "leftLoop",autoPlay:true});</script>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
<script>DD_belatedPNG.fix('#focusAd .prev,#focusAd .next');</script>
<![endif]-->
