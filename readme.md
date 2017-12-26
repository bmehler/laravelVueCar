# LaravelVue Car Demo

- Github Repro erstellen

composer create-project --prefer-dist laravel/laravel laravelvuecar
cd laravelvuecar

git init
git config user.name 'bmehler'
git config user.email 'bernhard.mehler@gmail.com'
repro pfad hinzufügen

git add .
git commit -m 'Initial commit'
git push -u origin master

git branch develop
git checkout develop
git push -u origin develop

npm install

# Datenbank erstellen

/Applications/MAMP/Library/bin/mysql --host=localhost -uroot -proot

CREATE DATABASE laravelvuecar CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

In .env Datenbank hinzufügen

AppServiceProvider für Datenbank updaten 

php artisan migrate

npm install --save-dev vue-axios vue-loader vue-router vue-template-compiler

Dann weiter mit dem Tutorial:

https://appdividend.com/2017/08/05/laravel-vuejs-tutorial/

npm run watch - Vue.js Dateien werden kompiliert