<?php /*%%SmartyHeaderCode:30176648651872809abc162-53808934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96502563c0de4bfcbb67367200b840318d0313b6' => 
    array (
      0 => '/var/www/usingziicomp/prestashop/themes/default/modules/blockcategories/blockcategories.tpl',
      1 => 1360463446,
      2 => 'file',
    ),
    '53e94ef3156980a4bbe97ad172336e0aeeb6be4d' => 
    array (
      0 => '/var/www/usingziicomp/prestashop/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1360463446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30176648651872809abc162-53808934',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51872809ba2cc4_88030227',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51872809ba2cc4_88030227')) {function content_51872809ba2cc4_88030227($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/usingziicomp/prestashop/index.php?id_category=3&amp;controller=category"  title="Now that you can buy movies from the iTunes Store and sync them to your iPod, the whole world is your theater.">iPods</a>
	</li>

												
<li >
	<a href="http://localhost/usingziicomp/prestashop/index.php?id_category=4&amp;controller=category"  title="Wonderful accessories for your iPod">Accessories</a>
	</li>

												
<li class="last">
	<a href="http://localhost/usingziicomp/prestashop/index.php?id_category=5&amp;controller=category"  title="The latest Intel processor, a bigger hard drive, plenty of memory, and even more new features all fit inside just one liberating inch. The new Mac laptops have the performance, power, and connectivity of a desktop computer. Without the desk part.">Laptops</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>