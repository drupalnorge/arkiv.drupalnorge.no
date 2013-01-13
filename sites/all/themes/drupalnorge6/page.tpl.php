<?php /* $Id$ */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
<head>
<title><?php print $head_title; ?></title>
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="revisit-after" content="1 days" />
<meta name="rating" content="general" />
<meta http-equiv="Content-language" content="<?php print $language->language; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<?php print $head; ?>
<link rel="search" type="application/opensearchdescription+xml" title="Drupal Norge - Søk på innhold" href="/drupalnorgeinnholdsok.xml" />
<link rel="search" type="application/opensearchdescription+xml" title="Drupal Norge - Søk brukere" href="/drupalnorgebrukersok.xml" />
<link rel="search" type="application/opensearchdescription+xml" title="Drupal Norge | Engelsk-norsk ordliste" href="/drupalnorgeordlistesok.xml" />
<?php print $styles; ?>
<?php print $scripts; ?>
<script type="text/javascript"> </script>
</head>
<body class="<?php print $body_classes; ?>">
<?php if ($headertop): ?>
<div id="headertop" class="clear-block">
  <table width="100%">
    <tr>
      <td><?php print $headertop; ?> </td>
    </tr>
  </table>
</div>
<?php endif; ?>
<?php
         $section1count = 0;
         $user1count = 0;
         $user2count = 0;
         $user3count = 0;

         if ($user1)
         {
            $section1count++;
            $user1count++;
         }

         if ($user2)
         {
            $section1count++;
            $user2count++;
         }

         if ($user3)
         {
            $section1count++;
            $user3count++;
         }
      ?>
<?php if ($section1count): ?>
<?php $section1width = 'width' . floor(99 / $section1count); ?>
<?php $block2div = ($user1count and ($user2count or $user3count)) ? " divider" : ""; ?>
<?php $block3div = ($user3count and ($user1count or $user2count)) ? " divider" : ""; ?>
<div class="clr" id="section1">
  <table class="sections" cellspacing="0" cellpadding="0">
    <tr valign="top">
      <?php if ($user1): ?>
      <td class="section <?php echo $section1width ?>"><?php print $user1; ?> </td>
      <?php endif; ?>
      <?php if ($user2): ?>
      <td class="section <?php echo $section1width . $block2div; ?>"><?php print $user2; ?> </td>
      <?php endif; ?>
      <?php if ($user3): ?>
      <td class="section <?php echo $section1width . $block3div; ?>"><?php print $user3; ?> </td>
      <?php endif; ?>
    </tr>
  </table>
</div>
<!-- /section1 -->
<?php endif; ?>
<?php if ($primary_links || $secondary_links): ?>
<div class="navigation">
  <?php if ($primary_links): ?>
  <div class="navigation-primary"><?php print theme('links', $primary_links); ?></div>
  <?php endif; ?>
  <?php if ($secondary_links): ?>
  <div class="navigation-secondary"><?php print theme('links', $secondary_links); ?></div>
  <?php endif; ?>
</div>
<?php endif; ?>

<div id="masthead">
  <?php if ($logo): ?>
  <a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="logo" /></a>
  <?php endif; ?>

  <?php if ($site_name): ?>
  <h1 id="site_name" class="site-name"><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
  <?php endif; ?>

  <?php if ($search_box): ?>
  <?php print $search_box ?>
  <?php endif; ?>
</div>

<?php if ($site_slogan): ?>
	<div id="headerbottom">
  		<?php if ($site_slogan): ?>
  			<div class="site-slogan"><?php print $site_slogan; ?></div>
  		<?php endif; ?>
	</div>
<?php endif; ?>

<?php if ($header): ?>
	<div id="header"><?php print $header; ?></div>
<?php endif; ?>

<div id="container">
  <?php if ($breadcrumb): ?>
  	<div id="breadcrumb"><?php print $breadcrumb; ?></div>
  <?php endif; ?>

  <div id="main" class="clearfix">

    <?php if ($left): ?>
    <div id="sidebar-left" class="sidebar"><?php print $left; ?></div>
    <?php endif; ?>

    <div id="page">
      <?php if ($messages): ?>
      <?php print $messages; ?>
      <?php endif; ?>
      <?php print $contenttop; ?>
      <?php if ($is_front && $mission): ?>
      <div class="mission"><?php print $mission; ?></div>
      <?php endif; ?>
      <?php if ($title): ?>
      <h2 class="title"><?php print $title; ?></h2>
      <?php endif; ?>
      <?php if ($help): ?>
      <div class="help"><?php print $help; ?></div>
      <?php endif; ?>
      <?php if ($tabs): ?>
      <?php print $tabs; ?>
      <?php endif; ?>
      <?php print $content; ?>
    </div>

    <?php if ($right): ?>
    <div id="sidebar-right" class="sidebar"><?php print $right; ?></div>
    <?php endif; ?>

    <div id="footer">
      <?php if ($footer_message): ?>
      <?php print $footer_message; ?>
      <?php endif; ?>
      <?php if ($footer): ?>
      <?php print $footer; ?>
      <?php endif; ?>
    </div>

  </div>
</div>
<div id="twitter-follow"> <a href="http://twitter.com/drupalnorge"><img src="/sites/all/resources/bilder/folg-oss.png" width="30" height="123" alt="Følg oss på Twitter" /></a> </div>
<?php print $closure; ?>
<div id="trademark"><a href="http://drupal.org" title="Drupal">Drupal</a> er et registrert varemerke for <a href="http://buytaert.net" title="Dries Buytaert">Dries Buytaert</a></div>
</body>
</html>
