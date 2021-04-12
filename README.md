## About project

Very basic articles parser with abillity to add multiple resources.
To create resource please provide a valid url to website you've decided to parse,
html class you want to parse in list of items on the page, 
class of html element containing your article,
html classes you want to filter in your article in csv format (comma separated).
All classes should be a strings without dots.

For example: news-list, article-content, banner, article_date-item

To run project locally:

- composer install
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- npm i && npm run dev  
- php artisan serve
