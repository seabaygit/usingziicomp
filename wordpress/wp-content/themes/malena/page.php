<?php get_header(); ?>
<body>
<div id="pages">
  <div id="header">
    <div id="nav1">
      <ul class="sf-menu sf-js-enabled">
        <li class="cat-item cat-item-9"><?php wp_list_categories('depth=3&exclude=1&hide_empty=0&orderby=name&show_count=0&use_desc_for_title=1&title_li='); ?> </li>
      </ul>
      <div class="clr"></div>
    </div>
    <div class="logo">
      <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>
    <!--/logo -->
       <div id="adsbaner"> <?php echo get_theme_option('ad_header'); ?></div>
    <div class="clr"></div>
     <div class="topnav">
      <ul>
        <?php
                    if(function_exists('wp_nav_menu')) {
                        wp_nav_menu( 'depth=1&theme_location=menu_1&menu_id=pagemenu&container=&fallback_cb=menu_1_default');
                    } else {
                        menu_1_default();
                    }
                    
                    function menu_1_default()
                    {
                        ?>
                        <ul id="pagemenu">
    						<li 
							<?php if(is_home()) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); ?>/">Home page</a>
                            </li>            
							<?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' ); ?>
    					</ul>
                        <?php
                    }
                    
                ?>
      </ul>
      <div class="clr"></div>
    </div>
    <!--/topnav -->
  
    <div class="clr"></div>
  </div>
  <!--/header -->
  <div id="columns">
    <div id="centercol">
     		      <?php if (have_posts()) : ?>
	         <?php while (have_posts()) : the_post(); ?>
            <div class="box post" id="post-<?php the_ID(); ?>">
        <div class="content">
          <!--/post-commets -->
          <div class="post-title">
                  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          </div>
          <!--/post-title -->
          <div class="clr"></div>
          <div class="post-excerpt">
            <p><?php the_content(''); ?></p>
          <div class="clr"></div>
          </div>
          <!--/post-excerpt -->
          <div class="clr"></div>
        </div>
        <!--/content -->
      </div>
      <!--/box -->
                 <?php endwhile; ?>
	       <?php endif; ?>
      <div class="clr"></div>
      <div class="wp-pagenavi" style="width:635px;color:#ed2b50; text-align:center;padding:10px 10px;"> <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="alignright" style="float:right;font-weight: bold;"><?php next_posts_link('Older Entries &raquo;') ?></div>

					<div class="alignleft"  style="float:left;font-weight: bold;" ><?php previous_posts_link('&laquo; Newer Entries') ?></div>
					<?php } ?>            <div class="clr"></div>
          </div>
    </div>
    <!--/centercol -->
            <?php get_sidebar(); ?>
    <div class="clr"></div>
  </div>
  <!--/columns -->
  <div class="clr"></div>
</div>
<!--/page -->
<?php get_footer(); ?>