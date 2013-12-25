<?php get_header();?>
<div class="block10 w l"></div>
<div class="w l content_in">
    <div class="w950 c">
        <div class="w l">
            <?php get_sidebar();?>
            <?php
            foreach((get_the_category()) as $category)
            {
                $category->cat_name;
            }

            $category = get_the_category();
            $category_title = $category[0]->cat_name;
            ?>
            <div class="ci_r l">
                <div class="pos w l"><h3 class="l"><?php echo $category_title; ?></h3><div class="nsm l"></div><div class="r f14 wzb"><a href="">首页</a> &gt; <a href=""><?php echo $category_title; ?></a> &gt; <a href="">文章详细</a></div></div>
                <div class="block10 w l"></div>
                <div class="w l incons newscon">
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <h1 class="w l zjuz"><?php the_title(); ?></h1>
                    <p class="sly w l f12 zjuz"><span>作者：<?php the_author_posts_link(); ?></span>&nbsp;&nbsp;<span>类别：<?php the_category(', '); ?></span>&nbsp;&nbsp;  </p>

                    <div class="wzpcon l c_83">
                        <?php the_content('Read More...'); ?>
     </div>
<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="block15 w l"></div>
<?php get_footer();?>