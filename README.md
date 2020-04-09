# Micro CMS For Institutes

This CMS is for institutes who want to manage their web sites without having to deal with markup and stuff, its like wordpress but more focused on a single thing.

## Prerequisites

-   Php > 7.2
-   php mysql ext
-   php xml ext
-   php mbsting ext
-   php bcmath ext
-   php sqlite ext
-   php json ext
-   Mysql 8
-   nodejs & npm
-   Php composer

## Installtion

### Install project dependencies

From root of the project install `php` dependencies

```
composer install
```

install `javascript` dependencies

```
npm install
```

Now compile project assets with `npm`

```
npm run dev
```

### Application Configuration

1. Create a duplicate file `.env.example` as `.env`.

```
cp .env.example .env
```

2. And change config in that file according to yours.

```
...
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=root
DB_PASSWORD=
...
```

3. Migrate database with some dummy data.

```
php artisan migrate --seed
```

4. Create a unique key for protection of app.

```
php artisan key:generate
```

That's all.

## Start Local Development Server

To browse & test app you all need to start a local development server(localhost).

```
php artisan serve
```

# Contribution

All type of contributions are invited, if you find any bug, design issues, you can create an issue or even open a Pull request to suggest some fixes. Thank you!
