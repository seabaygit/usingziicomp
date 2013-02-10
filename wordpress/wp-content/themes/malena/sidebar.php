<div id="rightcol">
	<?php if(get_theme_option('ads_125') != '') {
?>
      <div class="box ads">
        <div class="wtitle">
          <h2>Advertising</h2>
          <div class="clr"></div>
        </div>
        <div class="content"><?php sidebar_ads_125(); ?>
          <div class="small_link">
          </div>
        </div>
        <!--/content -->
      </div>
      <!--/box -->
	  <?php } ?>
	  <?php if(get_theme_option('video') != '') {
			?>
      <div class="box ads">
        <div class="wtitle">
          <h2>Featured Video</h2>
          <div class="clr"></div>
        </div>
        <div class="content"><object width="282" height="200"><param name="movie" value="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1"></param>
					<param name="allowFullScreen" value="true"></param>
					<param name="allowscriptaccess" value="always"></param>
					<embed src="http://www.youtube.com/v/<?php echo get_theme_option('video'); ?>&hl=en&fs=1&rel=0&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="282" height="200"></embed>
				</object>
          <div class="small_link">
          </div>
        </div>
        <!--/content -->
      </div>
      <!--/box -->
	  <?php
		}
		?>
		<?php if(get_theme_option('flickr_gallery') != '') {
?>
      <div class="box ads">
        <div class="wtitle">
          <h2>Flickr gallery</h2>
          <div class="clr"></div>
        </div>
        <div class="content" style="margin-left:9px;"><?php sidebar_flickr_gallery(); ?>
          <div class="small_link">
          </div>
        </div>
        <!--/content -->
      </div>
      <!--/box -->
	  <?php } ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/newsScroller.js"></script>
<script type="text/javascript">
    $(function() {
    $(".randomposts").jCarouselLite({
          vertical:true,
		  visible:3,
		  auto:3000,
		  speed:1000
		  
        });
    });
</script>
<div class="box widget widget_flickrRSS">
        <div class="wtitle">
          <h2>Random Post</h2>
        </div>
        <div class="content" style="margin-left:13px;">
		<div class="randomposts">
		<ul class="random">
		<?php
                    $randPosts = new WP_Query();
                    $randPosts->query('showposts=3&orderby=rand');
                    while($randPosts->have_posts()) : $randPosts->the_post();?>
					<li>
                                   <?php 
                    $randomThumb = get_post_meta($post->ID, 'thumbnail', true);
                    ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php echo $randomThumb; ?>" width="243" height="100" /></a>
                     </li>           
                    <?php endwhile; ?>
					
		</ul>
        </div>
		</div>
        <!--/content -->
		
		</div>
		     <?php 
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar 1') ) : ?>
					
				<?php endif; ?>
      </div>
      <!--/box -->
	  
	  <?php wp_reset_query() ?>

    </div>
    <!--/rightcol -->