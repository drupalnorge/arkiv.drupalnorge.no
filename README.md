drupalnorge.no
==============

The Drupal installation behind drupalnorge.no

This repo uses a Drush makefile to track Drupal core and modules, 
version and any applied patches.

Only costum modules and themes are committed to repo.

To get started clone repository as usual, then run

    drush make install.make

which will install Drupal core and all non-custom modules and themes, 
*with* patches. Whenever modules are installed, updated or patched,
you should update the makefile (and commit it). Run

    drush make-generate install.make

Read more about this type of development at
http://www.lullabot.com/articles/strategies-for-patch-management


PS! The site runs on Drupal 6 still and will be 
be replaced with Drupal Commons in due time.
