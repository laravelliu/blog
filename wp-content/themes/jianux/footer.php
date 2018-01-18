<a class="go-top"><i class="icon-circle-arrow-up"></i></a>
<footer>
  <div class="copyright">
    ©2017-2020<a href="/" target="_blank"><?php echo get_option('zh_cn_l10n_icp_num' );?></a>
  </div>
  <div class="contact">
    <a href="<?php echo home_url(); ?>/about" target="_blank">关于<?php bloginfo('name'); ?></a>
    ·
    <a href="<?php echo home_url(); ?>/wp-admin" target="_blank">管理后台</a>
  </div>
</footer>
    <script src="http://upcdn.b0.upaiyun.com/libs/jquery/jquery-1.10.2.min.js"></script>
<script>
    var week = new Date().getDay();
$('.cover-img').css("background-image","url(/wp-content/themes/jianux/images/"+week+".jpg)");  
</script>         
    <script src="<?php bloginfo('template_url'); ?>/js/full.js"></script>
<?php if (is_singular()) {
    ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/comments-ajax.js"></script>
<?php
} ?>
<?php wp_footer(); ?>
  </body>
</html>
