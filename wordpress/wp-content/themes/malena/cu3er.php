<?php
header('Content-type:text/xml');
?>
<?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>
<cu3er>
    <settings>

		<auto_play>
			<defaults symbol="circular"/>
			<tweenIn x="900" y="25" width="30" height="30" tint="0x000000" alpha="0.5"/>
			<tweenOver alpha="1"/>
		</auto_play>
    	<prev_button>
			<defaults round_corners="5,5,5,5"/>
			<tweenIn x="30" y="160" width="40" height="40" alpha="0.45"/>
			<tweenOver tint="0xFFFFFF" scaleX="1" scaleY="1"/>
			<tweenOut tint="0x000000" />
		</prev_button>

    	<prev_symbol>
			<defaults type="2" />
			<tweenIn x="30" y="160" />
			<tweenOver tint="0x000000" />


		</prev_symbol>

    	<next_button>
			<defaults round_corners="5,5,5,5"/>
			<tweenIn x="900" y="160" width="40" height="40" alpha="0.45"/>
			<tweenOver tint="0xFFFFFF"  scaleX="1" scaleY="1"/>
			<tweenOut tint="0x000000" />
		</next_button>
		
    	<next_symbol>
			<defaults type="2" />
			<tweenIn x="900" y="160" />
			<tweenOver tint="0x000000" />

		</next_symbol>	
			
				<description>
		<defaults 

			round_corners="10,10,10,10"

			heading_font="Georgia"
			heading_text_size="18"
			heading_text_color="0xffffff"
			heading_text_margin="10,15,0,15"

			paragraph_font="Arial"
			paragraph_text_size="12"
			paragraph_text_color="0xffffff"
			paragraph_text_margin="5,15,10,15"
		/>

		<tweenIn x="10" y="145" width="840" height="95" delay="0.2" alpha="0.45"/>
		<tweenOver alpha="0.8"/>
		</description>
    </settings>
<slides>
<?php
	$gldcat = get_option('swt_slide_category');
	$gldct = get_option('swt_slide_count');
	$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
<?php $preview = get_post_meta($post->ID, 'slide', $single = true); ?>
<slide>
     <url> <?php echo $preview; ?></url>
	  <link target="_self"><?php the_permalink() ?></link>
	  <description>

                <heading> <?php the_title(); ?> </heading>
                <paragraph>  <?php the_content_rss('', TRUE, '', 50); ?>
 </paragraph>
            </description>


</slide>
<?php
$slice_value = array("horizontal","vertical"); $rand_slice_keys = array_rand($slice_value, 2);
$direction_value = array("left","right","up","down"); $rand_direction_keys = array_rand($direction_value, 4);
?>
<transition num="<?php echo(rand(1,5));?>" slicing="<?php echo($slice_value[$rand_slice_keys[rand(0, 1)]]);?>" direction="<?php echo($direction_value[$rand_direction_keys[rand(0, 3)]]); ?>" shader="phong" delay="0.08" z_multiplier="6" />

<?php endwhile; ?>
<?php wp_reset_query(); ?>
</slides>
</cu3er>

