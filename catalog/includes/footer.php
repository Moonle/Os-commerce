<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require(DIR_WS_INCLUDES . 'counter.php');
?>
<div class="grid_24 ui-widget infoBoxContainer">

  <div class="ui-widget-header infoBoxHeading ui-corner-all" style="text-align: right; font-size: 11px; ">
 
<a href="<?php echo tep_href_link('advanced_search.php')?>"><?php echo IMAGE_BUTTON_SEARCH?></a><?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?>| <?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?><a href="<?php echo tep_href_link('reviews.php')?>"><?php echo IMAGE_BUTTON_REVIEWS?></a><?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?>|<?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?><?php if (tep_session_is_registered('customer_id')) { 
?><a href="<?php echo tep_href_link('account.php')?>"><?php echo HEADER_TITLE_MY_ACCOUNT?></a><?php } else 
{ ?><a href="<?php echo tep_href_link('create_account.php')?>"><?php echo HEADER_TITLE_CREATE_ACCOUNT?></a><?php } 
?><?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?>|<?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?><?php if (tep_session_is_registered('customer_id')) { 
?><a href="<?php echo tep_href_link('logoff.php')?>"><?php echo HEADER_TITLE_LOGOFF?></a><?php } else 
{ ?><a href="<?php echo tep_href_link('login.php')?>"><?php echo HEADER_TITLE_LOGIN?></a><?php } 
?><?php echo tep_draw_separator('pixel_trans.gif', '15', '1'); ?>
   </div>
</div>
<div class="grid_24 footer">
  <p align="center"><?php echo FOOTER_TEXT_BODY; ?></p>
  <p align="center">Created by  <a href="http://www.oscommerceforyou.hu" target="_blank"><font color="#D50000"  >O.</font><font color="#7979FF" >F.</font><font color="#007D00" >Y.</font></a>   <a  href="http://users.skynet.be/mgueury/mozilla/" target="_blank">
  <img   src="templates/images/serial_16.gif"
  alt="Validated by HTML Validator" height="16" width="39" />
</a><a href="http://www.oscommerceforyou.hu" target="_blank"> shopping cart development</a></p>
</div>

<?php
  if ($banner = tep_banner_exists('dynamic', '468x50')) {
?>

<div class="grid_24" style="text-align: center; padding-bottom: 20px;">
  <?php echo tep_display_banner('static', $banner); ?>
</div>

<?php
  }
?>

<script type="text/javascript">
$('.productListTable tr:nth-child(even)').addClass('alt');
</script>
