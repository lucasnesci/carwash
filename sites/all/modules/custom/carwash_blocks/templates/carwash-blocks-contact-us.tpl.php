<?php

/**
 * @file
 * Contact us block display.
 */
?>
<div class="ico">
  <a href="tel:<?php print $profile_phone;?>"><img alt="icon" src="/sites/all/themes/bluemasters/images/custom/phone.png" width="30"></a>
</div>
<div class="detail">
  <h3><?php print t('PHONE');?></h3>
  <h4><?php print $profile_phone;?></h4>
</div>
<div class="clear"></div>

<div class="ico">
  <a href="tel:<?php print $profile_cellphone;?>"><img alt="icon" src="/sites/all/themes/bluemasters/images/custom/cellphone.png" width="24"></a>
</div>
<div class="detail">
  <h3><?php print t('CELLPHONE');?></h3>
  <h4><?php print $profile_cellphone;?></h4>
</div>
<div class="clear"></div>

<div class="ico">
  <a href="dir:<?php print $profile_address;?>"><img alt="icon" src="/sites/all/themes/bluemasters/images/custom/house.png" width="24"></a>
</div>
<div class="detail">
  <h3><?php print t('ADDRESS');?></h3>
  <h4><?php print $profile_address;?></h4>
</div>
<div class="clear"></div>

<?php if (!drupal_is_front_page()) : ?>
  <div class="contact-us-address-map">
    <div id="map-canvas"></div>
    <!-- <iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zhqpdbgBj3WU.kko2zbHUvapc" height="360"></iframe> -->
  </div>
<?php endif; ?>

<div class="ico">
  <a href="mailto:<?php print $profile_email;?>"><img alt="icon" src="/sites/all/themes/bluemasters/images/custom/mail.png" width="34"></a>
</div>
<div class="detail">
  <h3><?php print t('EMAIL');?></h3>
  <h4><?php print $profile_email;?><script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName("script");l=b[b.length-1].previousSibling;a=l.getAttribute('data-cfemail');if(a){s='';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})();
/* ]]> */
</script></h4></div>
<div class="clear"></div>

<div class="ico">
  <a href="http://facebook.com/<?php print $profile_facebook;?>" target="_blank"><img alt="icon" src="/sites/all/themes/bluemasters/images/custom/facebook.png" width="24"></a>
</div>
<div class="detail">
  <h3><?php print t('FACEBOOK');?></h3>
  <h4><?php print $profile_facebook;?></h4>
</div>
<div class="clear"></div>

<?php if (drupal_is_front_page()) : ?>
  <ul class = 'links inline'>
    <li class = 'comment-add'>
      <?php print l(t('More..'), 'contact');?>
    </li>
  </ul>
<?php endif; ?>
