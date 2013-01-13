<?php
// $Id$

/*
+----------------------------------------------------------------+
|   DnMagazine for Dupal 6.x - Version 1.0                       |
|   Copyright (C) 2010 DrupalNorge.no All Rights Reserved.       |
|   @license - GNU GENERAL PUBLIC LICENSE                        |
|----------------------------------------------------------------|
|   Theme Name: DnMagazine                                       |
|   Description: Magazine-style theme for Drupal Norge           |
|   Author: DrupalNorge.no                                       |
|   Date: 11th of May 2011                                       |
|   Website: http://www.drupalnorge.no/                          |
|----------------------------------------------------------------+
*/  
?>

<div id="comment-<?php print $comment->cid; ?>" class="<?php print $classes; ?>"><div class="comment-inner clear-block">
  <?php if ($title): ?>
    <h3 class="title"><!--<?php print $title; ?>--></h3> 
  <?php endif; ?>
  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?> 

  <div class="content">
    <div class="content-inner">    
	  <?php if ($links): ?>
        <div class="links"><?php print $links; ?></div>
      <?php endif; ?> 
      <div class="author"><?php print $author; ?></div>
	  <div class="date"><?php print $date; ?></div>
	  <?php print $picture;?>
      <?php print $content; ?>
	</div>
    <?php if ($signature): ?>
    <div class="user-signature clear-block">
      <?php print $signature; ?>
    </div>
    <?php endif; ?> 
  </div>
</div></div> <!-- /comment-inner, /comment -->
