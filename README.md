# snappfood
simple clone of Snappfood .

## How to start project :
1- First You clone this project      

#### 2- run this :
```bash
  composer update && composer install
```
------
go to website https://mailtrap.io/ create account
------
3- create .env file in project root and setup setting of project
(Be sure you setup mysql and redis and mail)

#### 4- Change This on .env :
```bash
  FILESYSTEM_DISK=public
```
```bash
  QUEUE_CONNECTION=database
```

#### 5- Generate Key :
```bash
  php artisan key:generate
```
#### 6- Start local server :
```bash
  php artisan serve
```
#### 7- Run queue :
```bash
  php artisan queue:work
```

json api postman
link:https://www.getpostman.com/collections/de38292b32a956f2da47

lunch to postman
link:https://go.postman.co/workspace/My-Workspace~abdae027-eb22-42b7-8754-1952e0a474ea/collection/20960138-c20b7a2a-6a2b-4f4c-9bd8-4948471e08dc?action=share&creator=20960138
  
URL for published documentation
https://documenter.getpostman.com/view/20960138/UzXUNtej
