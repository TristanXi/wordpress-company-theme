<?php get_header(); ?>

    <div class="block10 w l"></div>
    <div class="w l content_in">
        <div class="w950 c">
            <div class="w l">
                <?php get_sidebar();?>
                <div class="ci_r l">
                    <div class="pos w l"><h3 class="l"><?php single_cat_title(); ?></h3><div class="nsm l"></div><div class="r f14 wzb"><a href="">首页</a> &gt; <a href=""><?php single_cat_title(); ?></a></div></div>
                    <div class="block10 w l"></div>
                    <div class="w l incons">
<?php if ($posts_perpage) { ?>
    <?php $postsperpage = $posts_perpage; ?>
<?php } else { ?>
    <?php $postsperpage = 5; ?>
<?php } ?>
<?php
$categoryID=$cat;
$wp_query = new WP_Query('cat=' . $categoryID. 'orderby=date&order=desc&posts_per_page='.$postsperpage.'&paged='.$paged); ?>
                        <ul class="w l lili lile wzlist">

                            <li class="wzltt w">
                                <span class="ids lan">序号</span>
                                <span class="wzbt lan">文章标题</span>
                                <span class="fbr lan">发布人</span>
                                <span class="fbsj lan">发布时间</span>

                            </li>
                            <?php while (have_posts()) : the_post(); ?>
                            <li class="l w hui">
                                <span class="ids"><?php the_ID();?></span>
                                <span class="wzbt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                <span class="fbr"><?php the_author(); ?></span>
                                <span class="fbsj"><?php the_time('Y-m-d'); ?></span>

                            </li>
                            <?php endwhile; ?>
                        </ul>





                    </div>
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
                    else { ?>
                    <div class="w l listpage zjuz f12">
                        <?php previous_posts_link('&laquo; 上一页') ?>
                        <?php next_posts_link('下一页 &raquo;') ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="block15 w l"></div>
<?php get_footer(); ?>