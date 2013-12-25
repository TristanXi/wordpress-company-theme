<?php
//设置选项页
function themeoptions_admin_menu(){
    //在控制面板的侧边栏添加设置选项页链接
    add_theme_page('主题设置','主题选项','edit_themes',basename(__FILE__),'themeoptions_page');
}



//if ( $_POST['update_themeoptions'] == 'true' )
//{
//    themeoptions_update();
//}


function themeoptions_update()
{
    // 数据更新验证
    update_option('logoURL', $_POST['logoURL']);

    update_option('newsId', $_POST['newsId']);

    update_option('productId', $_POST['productId']);

    update_option('mytheme_ad1url', $_POST['ad1url']);

    update_option('mytheme_ad2url', $_POST['ad2url']);

    update_option('mytheme_ad3url', $_POST['ad3url']);

    update_option('contactmessage', $_POST['contactmessage']);

    update_option('footer1', $_POST['footer1']);

    update_option('footer2', $_POST['footer2']);

}


function themeoptions_page(){
    //设置选项页面的主要功能
    ?>
    <div class="wrap">
        <div id="icon-themes" class="icon32"><br /></div>
        <form method="POST" action="">
            <p><input type="submit" class="button-primary" name="bcn_admin_options" value="更新数据"/></p>
            <input type="hidden" name="update_themeoptions" id="update_themeoptions" value="true" />

            <h4>首页Logo设置</h4>
            <p><input type="text" name="logoURL" id="logoURL" size="50" value="<?php echo get_option('logoURL'); ?>"/> </p>

            <h4>新闻分类ID</h4>
            <p><input type="text" name="newsId" id="newsId" size="50" value="<?php echo get_option('newsId'); ?>"/> </p>

            <h4>产品展示分类ID</h4>
            <p><input type="text" name="productId" id="productId" size="50" value="<?php echo get_option('productId'); ?>"/> </p>

            <h4>首页幻灯片大图1链接</h4>

            <p><input type="text" name="ad1url" id="ad1url" size="50" value="<?php echo get_option('mytheme_ad1url'); ?>"/> </p>
            <h4>首页幻灯片大图2链接</h4>

            <p><input type="text" name="ad2url" id="ad2url" size="50" value="<?php echo get_option('mytheme_ad2url'); ?>"/> </p>

            <h4>首页幻灯片大图3链接</h4>

            <p><input type="text" name="ad3url" id="ad3url" size="50" value="<?php echo get_option('mytheme_ad3url'); ?>"/></p>

            <h4>联系方式</h4>
            <p><textarea name="contactmessage" id="contactmessage" cols="60" rows="6" value=""><?php echo get_option('contactmessage'); ?></textarea></p>

            <h4>底部版权1</h4>
            <p><input type="text" name="footer1" id="footer1" size="80" value="<?php echo get_option('footer1'); ?>"/> </p>


            <h4>底部版权2</h4>
            <p><input type="text" name="footer2" id="footer2" size="80" value="<?php echo get_option('footer2'); ?>"/> </p>




        </form>
    </div>

<?php
}
add_action('admin_menu','themeoptions_admin_menu');
?>