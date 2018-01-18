<!--博客页面-->
<?php ini_set('display_errors', 0); ?>
<?php
if (function_exists('get_header')) {
    get_header();
} else {
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "");
    exit;
}; ?>
<?php get_header();?>

<div class="row-fluid">
    <div class="recommended">
        <div class="span3 left-aside">
            <div class="cover-img"></div>
            <div class="bottom-block">
                <h1><?php bloginfo('title') ?></h1>
                <h3><?php bloginfo('description') ?></h3>
            </div>
        </div>
        <div class="span7 offset3">
            <div class="page-title">
                <ul class="recommened-nav navigation clearfix">
                    <li><a><?php bloginfo('title') ?> · <?php bloginfo('description') ?></a></li>
                    <?php get_search_form(); ?>
                </ul>
            </div>

            <ul class="thumbnails">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('post', 'homepage');
                endwhile;
            endif;
            ?>
            </ul>

            <div id="pagination">
                <?php next_posts_link(__('点击查看更多')); ?>
            </div>
         </div>
    </div>
</div>

<?php get_footer(); ?>