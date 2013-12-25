<?php get_header();?>
<div class="block10 w l"></div>
<div class="w l content_in">
    <div class="w950 c">
        <div class="w l">
            <?php get_sidebar();?>
            <div class="ci_r l">
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                <div class="pos w l"><h3 class="l"><?php the_title(); ?></h3><div class="nsm l"></div><div class="r f14 wzb"><a href="">首页</a> &gt; <a href=""><?php the_title(); ?></a></div></div>
                <div class="block10 w l"></div>
                <div class="w l incons newscon">
                    <h1 class="w l zjuz"><?php the_title(); ?></h1>
                    <div class="wzpcon l c_83">
                        <?php the_content('Read More...'); ?>
                    </div>


                </div>
<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="block15 w l"></div>
<?php get_footer();?>