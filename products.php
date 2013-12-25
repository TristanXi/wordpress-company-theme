<?php get_header();?>
    <div class="block10 w l"></div>
    <div class="w l content_in">
        <div class="w950 c">
            <div class="w l">
                <?php get_sidebar();?>
                <div class="ci_r l">
                    <div class="pos w l"><h3 class="l"><?php single_cat_title(); ?></h3><div class="nsm l"></div><div class="r f14 wzb"><a href="">首页</a> &gt; <a href=""><?php single_cat_title(); ?></a></div></div>
                    <div class="block10 w l"></div>
                    <div class="w l incons">
                        <?php set_post_thumbnail_size( 146, 146, true );  ?>
                        <?php if ($posts_perpage) { ?>
                            <?php $postsperpage = $posts_perpage; ?>
                        <?php } else { ?>
                            <?php $postsperpage = 5; ?>
                        <?php } ?>
                        <?php
                        $categoryID=$cat;
                        $wp_query = new WP_Query('cat=' . $categoryID. 'orderby=date&order=desc&posts_per_page='.$postsperpage.'&paged='.$paged); ?>
                        <ul class="w l lili lile cplist">
                            <?php while (have_posts()) : the_post(); ?>
                            <li>
                                <div class="cpimg l">
                                    <a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail();?></a>
                                </div>
                                <div class="cpwz l">
                                    <h4 class="w l"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p class="w l f12 lh22"><?php the_content();?></p>
                                </div>
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
<?php get_footer();?>