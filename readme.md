# LaravelVue Car Demo

## Github

Zunächst legen wir ein Github Repository an.
Hierzu gehen wir auf Github und klicken auf New Repository.

## Laravel Project 
```
composer create-project --prefer-dist laravel/laravel laravelvuecar
```
Nun wechseln wir in das Projektverzeichnis:
```
cd laravelvuecar
```

Das Projekt mit unserem Github Repositiory verbinden:
```
git init
git config user.name 'muster'
git config user.email 'michael.muster@gmail.com'
repro pfad hinzufügen

git add .
git commit -m 'Initial commit'
git push -u origin master

git branch develop
git checkout develop
git push -u origin develop
```

## Node Packages installieren
Das Laravel Framework liefert bereits eine package.json mit
den Vue.js Paketen mit
```
npm install
```

## Datenbank erstellen

Wir wechseln in das Terminal und geben folgendes ein:
```
/Applications/MAMP/Library/bin/mysql --host=localhost -uroot -proot
```
Anlegen der Datenbank
```
CREATE DATABASE laravelvuecar CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```
In .env Datenbank hinzufügen
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelvuecar
DB_USERNAME=root
DB_PASSWORD=root
```

Nun wird die Datenbank erstellt:
```
php artisan migrate
```

Falls ein Fehler auftritt, muss die Datei app/Providers/AppServiceProvider.php ergänzt werden:
```php
use Illuminate\Support\Facades\Schema;

public function boot()
{
  Schema::defaultStringLength(191);
}
```

Danach müssen noch verschiedene Vue Node Pakete installiert werden:
```
npm install --save-dev vue-axios vue-loader vue-router vue-template-compiler
```

Dann weiter mit dem Tutorial:

https://appdividend.com/2017/08/05/laravel-vuejs-tutorial/

npm run watch - Vue.js Dateien werden kompiliert