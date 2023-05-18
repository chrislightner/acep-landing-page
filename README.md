# ACEP Insurance Landing Page 

https://www.acepinsurance.com/

This site uses W3 html includes. In order to work on this locally, you must use a local dev server running php, such as MAMP, and view it via localhost. Just previewing in a browser won't execute the includes.

You will also need a sass compiler like [Koala](http://koala-app.com/)

This site uses Bootstrap.

This site is hosted at Heroku.

---

## When committing changes, please make two pushes.

### First push to our canonical "origin" repository on Bitbucket

``git push``  
 or  
``git push origin master``

### Secondly, push to the Heroku server

THIS IS NO LONGER NECESSARY. This repo points to Github which is connected to Heroku and automatically deploys when you push.

---

## This site doesn't actually use PHP

In order to "trick" Heroku into serving this static site (it is not an app), we pretend it's a php app. We do this with two files:

``composer.json`` Although this file is basically empty, it tells Heroku that this is a php app and to look for an index.php file

``index.php`` There is no php code to execute, but Heroku will be looking for an index.php page - so we use this as our home page

---

## Redeploy to Heroku 20 10/18/21