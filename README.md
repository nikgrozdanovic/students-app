# students-app

### Instructions

First of, you will need to import the DB. Create a DB called `school` and import the `school.sql` file after that.

After importing the date to the db you will need to run:
```
composer install
```
After the installation is complete, make sure to change the `Connection.php` class and set your own db credentials (lines 16-19).

In order for the routing library to work you will need to host the app on your localhost by running:
```
php -S localhost:8080
```
