<?php
// $Id$

/*
+----------------------------------------------------------------+
|   DnMagazine for Dupal 6.x - Version 1.0                       |
|   Copyright (C) 2010 DrupalNorge.no All Rights Reser           |
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

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner clear-block">
  <?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>
  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <div class="meta">
    <?php if ($submitted): ?>
	  <div class="submitted"><?php print $submitted; ?></div>
    <?php endif; ?>
    <?php if ($terms): ?>		
      <div class="terms"><?php print ' Tag: ' . $terms; ?></div>
    <?php endif; ?>
    <?php if ($page): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
  </div>

  <div class="content">
    <?php print $content; ?>
  </div>

    <?php if (!$page): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>

</div></div> <!-- /node-inner, /node -->