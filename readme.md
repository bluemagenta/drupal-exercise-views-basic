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
   3. run `vendor/bin/drush gent --bundles=tag`
   4. run `vendor/bin/drush genmd --media-types=image`
   5. run `vendor/bin/drush genc --bundles=article`

## Task
The site is preinstalled with content type Article & taxonomy Tags.

Create several article list:
1. create article list page
   1. paginate, 25 per page
   2. display: teaser
   3. sort: latest
2. create featured article list
   1. displayed on article detail page
   2. display: featured
   3. 3 item max
   4. sort latest
   5. sticky article only
   6. exclude current article
3. create related article list
   1. displayed on article detail page
   2. display: teaser
   3. list article with same tags as current article
   4. exclude current article
   5. 5 item max
   6. sort latest
