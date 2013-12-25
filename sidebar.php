<div class="ci_l l">

    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Primary Sidebar') ) : ?>
        <div class=" w cil_p l">
            <ul class="w l lili lile">
                <li class="focus"><a href="">公司新闻</a></li>
                <li><a href="">公司动态</a></li>
                <li><a href="">新闻分类</a></li>
                <li><a href="">行业资讯</a></li>
            </ul>
        </div>

        <div class=" w cil_p l">
            <ul class="w l lili lile">
                <?php get_the_category('7,8'); ?>
            </ul>

        </div>

        <div class="block10 w l"></div>
        <div class=" w cil_p l ">
            <div class="tel l">
                <div class="dhs l">
                    <p>
                        <span class="dhhm">0731-8888888</span><br>时间:9:00-18:00<br>联系人:迷失
                    </p>
                </div>
                <div class="indz l">
                    联系地址：湖南长沙市火车站附近湖南长沙市火车站附近湖南长沙市火车站附近湖南长沙市火车站附近
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>