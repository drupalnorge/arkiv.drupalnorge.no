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

<div id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>" class="<?php print $classes; ?> <?php if (function_exists(block_class)) print block_class($block); ?>">
  <div class="block-inner clearfix">
    <?php if (($block->subject) && (($block->region !='header')&&($block->region !='left')&&($block->region !='footer_one')&&($block->region !='footer_two')&&($block->region !='footer_three')&&($block->region !='footer_four'))): ?>
      <?php $firstword = wordlimit($block->subject, 1, "");
      $block->subject = str_replace($firstword, "<span class=\"first-word\">" . $firstword . "</span>", $block->subject); ?>
      <h2 class="title"><?php print $block->subject; ?></h2>
	  <div class="makeup"></div>
    <?php elseif ($block->subject): ?>
      <h2 class="title"><?php print $block->subject; ?></h2>
    <?php endif;?>
    <div class="content">
      <?php print $block->content; ?>
    </div>
  </div>
</div> <!-- /block-inner, /block -->