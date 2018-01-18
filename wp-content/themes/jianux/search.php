<?php get_header();?>
<div class="row-fluid">
      
<div class="recommended">
   <div class="span3 left-aside">
    <div class="cover-img"></div>
    <div class="bottom-block">
      <h1><?php bloginfo('name')?></h1>
      <h3><?php bloginfo('description')?></h3>
    </div>
    <div class="img-info">
      <i class="icon-info"></i>
      <div class="info">
         Photo by: <a href="http://www.flickr.com/photos/scatto_felino/" target="_blank">lfs</a>
      </div>
    </div>
  </div>
  <div class="span7 offset3">
    <div class="page-title">
      <ul class="recommened-nav navigation clearfix">
        <li><a><?php bloginfo('name')?> · <?php bloginfo('description')?></a></li>
        <?php get_search_form(); ?>
      </ul>
    </div>
 
<ul class="thumbnails">
<?php
    if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('post', 'homepage');
    endwhile;
    endif;
?>
</ul>
<div id="pagination">
<?php next_posts_link(__('点击查看更多')); ?>
</div></div></div></div>
<?php get_footer(); ?>