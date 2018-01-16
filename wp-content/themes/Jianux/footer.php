<a class="go-top"><i class="icon-circle-arrow-up"></i></a>
<footer>
  <div class="copyright">
    ©2012-2014 <a href="/" target="_blank"><?php bloginfo('name'); ?></a>
    <br>
    萌ICP备啦啦
  </div>
  <div class="contact">
    <a href="<?php echo home_url(); ?>/about" target="_blank">关于简书</a>
    ·
    <a href="http://<?php home_url(); ?>/wp-admin" target="_blank">管理后台</a>
  </div>
</footer>
    <script src="http://upcdn.b0.upaiyun.com/libs/jquery/jquery-1.10.2.min.js"></script>
<script>
    var week = new Date().getDay();
$('.cover-img').css("background-image","url(/wp-content/themes/jianux/images/"+week+".jpg)");  
</script>         
    <script src="<?php bloginfo('template_url'); ?>/js/full.js"></script>
<?php if( is_singular() ){ ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/comments-ajax.js"></script>
<?php } ?>
<?php wp_footer(); ?>
  </body>
</html>
