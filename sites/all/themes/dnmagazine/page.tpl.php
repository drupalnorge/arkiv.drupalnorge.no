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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <!--[if IE 7]>
  <link type="text/css" rel="stylesheet" href="<?php print base_path().path_to_theme(); ?>/css/ie.css" media="screen">
  <![endif]-->
  
</head>
<body class="<?php print $body_classes; ?>">
  <div id="page">
    <div id="header"><div id="header-inner" class="clearfix">
	  <?php if ($user_menu): ?>
        <div id="user-menu"><div id="user-menu-inner-wrapper"><div id="user-menu-inner">
          <?php print $user_menu; ?>
        </div></div></div> <!-- /#user_menu -->
      <?php endif; ?>
      <?php if ($logo || $site_name || $site_slogan): ?>
        <div id="logo-title">
          <?php if ($logo): ?>
            <div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
          <?php endif; ?>
          <?php if ($site_name): ?>  
		    <div id="site-name"><h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1></div>
		  <?php endif; ?>
          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#logo-title -->
      <?php endif; ?>
      <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>
    </div></div> <!-- /#header-inner, /#header -->

	<div id="navbar"><div id="navbar-inner" class="clearfix">
      <?php if ($search): ?>
        <div id="search">
          <?php print $search; ?>
        </div> <!-- /#search block -->
      <?php endif; ?>
	  <?php if ($primary_links): ?>	    
        <div id="primary" <?php if ($search): print 'class="withsearch"';
		  else: print 'class="withoutsearch"'; 
		  endif; ?>>
		  <?php print menu_tree($menu_name = 'primary-links'); ?>
        </div>
      <?php endif; ?> <!-- /#primary -->
	</div></div>

  	<div id="top-border"></div>
    <div id="main">
	  <div id="main-inner" class="clearfix">
        <?php if ($showcase): ?>
          <div id="showcase"><div id="showcase-inner">
            <?php print $showcase; ?>
		  </div></div>
        <?php endif; ?> <!-- /#showcase -->     
		<div>
		  <div id="content-top">
		    <?php if ($breadcrumb && $breadcrumb != '<div class="breadcrumb"></div>'): ?><div id="breadcrumb-wrapper"><div id="breadcrumb"><?php print t('You are here:') . $breadcrumb; ?></div></div>
		    <?php else: ?>
                    <div id="breadcrumb-wrapper"><div id="breadcrumb"><?php print t('You are here:'); ?> <a href="/"><?php print t('Home'); ?></a></div></div> 
		    <?php endif; ?>
			<div id="content-top-inner">
			  <div id="content-wrapper" class="clearfix">
        <?php if ($highlight): ?>
          <div id="highlight"><div id="highlight-inner">
            <?php print $highlight; ?>
		  </div></div>
        <?php endif; ?> <!-- /#showcase -->
		        <div id="content">
  		          <?php if ($title || $tabs || $help || $messages): ?>
                    <div id="content-header">
                      <?php if (($title) && ($node->type!= 'blog')) : ?><h1 class="title"><?php print $title; ?></h1><?php endif; ?>
                      <?php print $messages; ?>
                      <?php if ($tabs): ?>
                        <div class="tabs"><?php print $tabs; ?></div>
                      <?php endif; ?>
                      <?php print $help; ?>
                    </div> <!-- /#content-header -->
                  <?php endif; ?> 
                  <?php print $content; ?>
		        </div>
		        <?php if ($left): ?>
                  <div id="sidebar-left">
                    <?php print $left; ?>
                  </div> <!-- /#sidebar-left -->
                <?php endif; ?>
		      </div>
			</div>
		  </div>
          <?php if ($right): ?>
            <div id="sidebar-right">
              <?php print $right; ?>
            </div> <!-- /#sidebar-right -->
          <?php endif; ?>
        </div>	  

	    <?php if ($content_bottom_one || $content_bottom_two || $content_bottom_three || $content_bottom_four): ?>
          <div id="content-bottom" ><div id="content-bottom-inner" class="<?php print $content_bottom; ?> clearfix">
            <?php if ($content_bottom_one): ?>
              <div id="content-bottom-one" class="column">
                <?php print $content_bottom_one; ?>
              </div><!-- /content-bottom-one -->
            <?php endif; ?>
            <?php if ($content_bottom_two): ?>
              <div id="content-bottom-two" class="column">
                <?php print $content_bottom_two; ?>
              </div><!-- /content-bottom-two -->
            <?php endif; ?>
	    	<?php if ($content_bottom_three): ?>
              <div id="content-bottom-three" class="column">
                <?php print $content_bottom_three; ?>
              </div><!-- /content-bottom-three -->
            <?php endif; ?>
		    <?php if ($content_bottom_four): ?>
              <div id="content-bottom-four" class="column">
                <?php print $content_bottom_four; ?>
              </div><!-- /content-bottom-four -->
            <?php endif; ?>
			<?php if ($content_bottom_five): ?>
              <div id="content-bottom-five">
                <?php print $content_bottom_five; ?>
              </div><!-- /content-bottom-five -->
            <?php endif; ?>
          </div></div> 
	    <?php endif; ?>
      </div>
    </div> <!-- /#main-inner, /#main -->
 	<div id="bottom-border"></div>    
    <div id="closure"><div id="closure-inner" class="clearfix"><div id="attribution"><small><a href="http://www.drupalnorge.no" title="Foreningen Drupal Norge">Foreningen Drupal Norge</a></small></div><?php print $closure_region; ?></div></div>
  </div> 
<?php print $scripts; ?>
<?php print $closure; ?><!-- /#page -->
</body>
</html>