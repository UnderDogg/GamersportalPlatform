## GamersPortal Platform


## Builds


## Route Caching
There's not a lot to using this feature, honestly. There's a new Artisan command, `route:cache`, which serializes the results of your `routes.php file`--it's performing the operation of parsing the routes once and then storing those result. Sort of like pre-compiling a Handlebars template, if you've ever done that before.

That's it! Now your routes are being parsed from the cached file, not your routes file. You can make all the changes you want to `routes.php` and the routing of your app won't change until you re-cache.

## Response Caching
Speed up a Laravel app by caching the entire response https://murze.be/2015/07/speed-up-a-laravel-app-by-caching-the-entire-response/







