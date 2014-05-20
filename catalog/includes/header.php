<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  if ($messageStack->size('header') > 0) {
    echo '<div class="grid_24">' . $messageStack->output('header') . '</div>';
  }
?>

<div id="header" class="grid_24">
  <div id="storeLogo"><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . tep_image(DIR_WS_IMAGES . 'store_logo.png', STORE_NAME) . '</a>'; ?></div>


  <div class="headerbutton">
 <ul class="menu">  

            <li class="menu_item un <?php if ($PHP_SELF == 'index.php')  echo "selected"?>" style="margin-left:10px;"><a href="<?php echo tep_href_link(FILENAME_DEFAULT);?>"><?php echo HEADER_TITLE_TOP ?></a></li>
            <li class="menu_item <?php if ($PHP_SELF == 'products_new.php') echo "selected"?>"><a href="<?php echo tep_href_link(FILENAME_PRODUCTS_NEW);?>">WHATS NEW </a></li>     
            <li class="menu_item <?php if ($PHP_SELF == 'specials.php') echo "selected"?>"><a href="<?php echo tep_href_link(FILENAME_SPECIALS);?>">SPECIALS</a></li>

              <?php if (tep_session_is_registered('customer_id')) {
$acc_link = tep_href_link('account.php');
$acc = 'account.php';
$acc_title= 'MY ACCOUNT';
} else{
$acc_link = tep_href_link('create_account.php');
$acc = 'create_account.php' ;
$acc_title= 'CREATE ACCOUNT';
}
?> 
            <li class="menu_item <?php if ($PHP_SELF == $acc) echo "selected"?>"><a href="<?php echo $acc_link;?>"><?php echo $acc_title;?></a></li>
            <li class="menu_item <?php if ($PHP_SELF == 'contact_us.php')  echo "selected"?>" ><a href="<?php echo tep_href_link(FILENAME_CONTACT_US);?>">CONTACT</a></li>


<?php if (tep_session_is_registered('customer_id')) { $login_link = tep_href_link('logoff.php');
$login_title= LOGOFF;
$login = 'logoff.php';
} else{
$login_link = tep_href_link('login.php');
$login_title= LOGIN;
$login = 'login.php';
}
?>              
            <li class="menu_item <?php if ($PHP_SELF == $login) echo "selected"?>"><a href="<?php echo $login_link;?>"><?php echo $login_title;?></a></li>



   </ul>

  </div>
</div>
<?php
  if (isset($HTTP_GET_VARS['error_message']) && tep_not_null($HTTP_GET_VARS['error_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerError">
    <td class="headerError"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['error_message']))); ?></td>
  </tr>
</table>
<?php
  }

  if (isset($HTTP_GET_VARS['info_message']) && tep_not_null($HTTP_GET_VARS['info_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerInfo">
    <td class="headerInfo"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['info_message']))); ?></td>
  </tr>
</table>
<?php
  }
?>
