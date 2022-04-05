# Drupal Exercise: Views basic
Create several common views use case

## Setup
1. Create empty database
2. Create the config files
   1. On website/web/sites/default, copy example.settings.php to settings.php.
   2. Update the content as needed (database connection, etc.)
3. Site install
   1. run `composer install`
   2. run `vendor/bin/drush si --existing-config`

## Task
The site is preinstalled with content type Article & taxonomy Tags.

Create several article list:
1. create article list page
   1. paginate, 25 per page
   2. sort:
      1. sticky
      2. latest
2. create featured article list
   1. displayed on article detail page
   2. 3 item max
   3. sort latest
   4. sticky article only
   5. exclude current article
3. create related article list
   1. displayed on article detail page
   2. list article with same tags as current article
   3. exclude current article
   4. 5 item max
   5. sort latest
