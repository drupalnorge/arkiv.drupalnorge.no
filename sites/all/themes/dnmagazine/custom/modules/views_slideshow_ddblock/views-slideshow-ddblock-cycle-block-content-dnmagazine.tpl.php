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
*
* This file incorporates work covered by the following copyright and permission notice
*
* Dynamic display block module template: vsd-upright60 - content template
* Copyright (c) 2008 - 2009 P. Blaauw All rights reserved.
* Version 1.1 (01-SEP-2009)
* Licenced under GPL license
* http://www.gnu.org/licenses/gpl.html
*/

$settings = $views_slideshow_ddblock_slider_settings;
?>

<div id="views-slideshow-ddblock-<?php print $settings['delta'] ?>" class="showcase-container">
  <div class="slider">
    <?php if ($settings['output_type'] == 'view_fields') : ?>
      <?php foreach ($views_slideshow_ddblock_slider_items as $slider_item): ?>
        <div class="slide">
          <?php print $slider_item['slide_image']; ?>
          <div class="slide-text slide-text-bottom">
            <h2><?php print $slider_item['slide_title'] ?></h2>
            <p><?php print strip_tags($slider_item['slide_text'], '<a>');?><span class="read-more"><?php print $slider_item['slide_read_more'] ?></span></p>
          </div> 
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <!-- showcase pager --> 
  <?php print $views_slideshow_ddblock_pager_content ?>
</div> 