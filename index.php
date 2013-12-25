<?php get_header(); ?>
<div class="block10 w l"></div>
<div class="w l content">
    <div class="w950 c">
        <div class="w l">
            <div class="l c_l">
                <h3 class="w l f12"><span>公司新闻</span></h3>
                <ul class="w l lili lile">

                    <?php if (have_posts()) : ?>
                        <?php query_posts('cat=1&showposts=1'); ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <li><em>公司新闻</em><a href='<?php the_permalink() ?>' title='<?php the_title_attribute(); ?>'><?php the_title(); ?></a><label>[<?php the_time('Y/m/d');?>]</label></li>

                        <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>

<?php if (have_posts()) : ?>
    <?php query_posts('cat=3&showposts=1'); ?>
    <?php while (have_posts()) : the_post(); ?>
                    <li><em>公司动态</em><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><label>[<?php the_time('Y/m/d');?>]</label></li>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<?php if (have_posts()) : ?>
            <?php query_posts('cat=4&showposts=1'); ?>
            <?php while (have_posts()) : the_post(); ?>
                    <li><em><b>最新通告</b></em><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><label>[<?php the_time('Y/m/d');?>]</label></li>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
                <?php if (have_posts()) : ?>
                    <?php query_posts('cat=5&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <li><em><b>紧急通知</b></em><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><label>[<?php the_time('Y/m/d');?>]</label></li>
                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>
                </ul>
            </div>
            <div class="c_c l">
                <h3 class="w l"><span>产品展示</span></h3>
                <div class="w l cpzs">
                    <div id="focuscp" class="cp-slideBox">
                        <a class="prev"></a><a class="next"></a>
                        <div class="bd">
                            <ul>
<?php if (have_posts()) : ?>
    <?php query_posts('cat=9&showposts=3'); ?>
    <?php while (have_posts()) : the_post(); ?>
                                <li class="li1">
                                    <a href="<?php the_permalink() ?>" class="cptu"><?php set_post_thumbnail_size( 92, 92, true ); the_post_thumbnail(); ?></a>
                                    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                                    <?php the_content(); ?>
                                </li>
    <?php endwhile;?>
<?php else : ?>
<?php endif; ?>
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

                    <script language="javascript"> jQuery("#focuscp").slide({ mainCell:".bd ul",effect: "leftLoop",autoPlay:true});</script>
                    <!--[if IE 6]>
                    <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
                    <script>DD_belatedPNG.fix('#focuscp .prev,#focuscp .next');</script>
                    <![endif]-->
                </div>
            </div>
            <div class="c_r l">
                <h3 class="w l"><span>联系方式</span></h3>
                <p class=" l">
                    <?php echo get_option('contactmessage'); ?></p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>