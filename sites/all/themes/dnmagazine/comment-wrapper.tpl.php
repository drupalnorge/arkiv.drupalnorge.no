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

<?php if ($content): ?>
  <div id="comments">
    <?php if ($node->type != 'forum'): ?>
      <h2 id="comments-title"><?php print t('Comments'); ?></h2>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
<?php endif; ?>
