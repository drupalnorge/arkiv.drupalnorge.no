<?php /* $Id$ */ ?>
<div id="site-comment-<?php print $comment->cid; ?>" class="comment<?php print ($comment->new)?" comment-new":""; ?>">
  <?php if ($title): ?>
  <h4 class="title">
    <?php print $title; ?>
    <?php if ($comment->new): ?>
    <a id="new"></a>
    <span class="new"><?php print $new; ?></span>
    <?php endif; ?>
  </h4>
  <?php endif; ?>

  <?php print $picture ?>

  <?php if ($submitted): ?>
  <div class="date"><?php print $date; ?></div>
  <div class="author"><?php print $author; ?></div>
  <?php endif; ?>

  <div class="content"><?php print $content; ?></div>

  <div class="links"><?php print $links; ?></div>
</div>

