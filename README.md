# article-list
How to Run 

**Step 1:**

Download or clone this repository.

**Step 2:**


Rename file **.env.example** to **.env** and update it to your configuration.

Create MySQL database with name **laravel**.


**Step 3:**


Go to project root and execute the following commands in console : 

```
composer install
php artisan key:generate
php artisan migrate 
php artisan serve
```

> **NOTE** You can execute this command to generate fake data.
```
artisan db:seed
```
