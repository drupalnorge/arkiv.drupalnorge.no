<?php /* $Id$ */ ?>
<div id="node-<?php print $node->nid; ?>" class="node<?php print " node-" . $node->type; ?><?php print ($sticky) ? " node-sticky" : ""; ?>">
  <?php if (!$page && $title): ?>
  <h2 class="title">Blogg: <a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print $picture; ?>
  <?php if ($submitted): ?>
  <div class="submitted"><span class="date"><?php print $date; ?></span></div>
  <?php endif; ?>
  <div class="terms"><?php print $terms; ?></div>
  <div class="content"><?php print $content; ?></div>
  <div class="links"><?php print $links; ?></div>
</div>