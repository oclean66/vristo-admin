# Vristo Admin

Admin interface for KDeportes.

# Built With

[![Laravel Badge](https://img.shields.io/badge/Tailwind_Css-3.3-empty?style=for-the-badge&logo=tailwindcss&logoColor=FFFFFF&color=0e1726&labelColor=06B6D4)](#)
[![Laravel Badge](https://img.shields.io/badge/Alpinejs-3.12-empty?style=for-the-badge&logo=alpinedotjs&logoColor=FFFFFF&color=0e1726&labelColor=8BC0D0)](#)
[![Laravel Badge](https://img.shields.io/badge/Laravel-10.10-empty?style=for-the-badge&logo=Laravel&logoColor=FFFFFF&color=0e1726&labelColor=FF2D20)](#)
[![Laravel Badge](https://img.shields.io/badge/Livewire-2.12-empty?style=for-the-badge&logo=livewire&logoColor=FFFFFF&color=0e1726&labelColor=4E56A6)](#)

## Dependecies

-   **PHP**

    -   `laravel/framwork 10.10`
    -   `laravel/sanctum 3.2`
    -   `laravel/fortify 1.17`
    -   `laravel/livewire 2.12`
    -   `spatie/laravel-permission 5.10`

    _Dev Dependecies_

    -   `barryvdh/laravel-debugbar 3.8`
    -   `phpstan/phpstan 1.10`

---

-   **Javascript**
    -   `flag-icons 6.6.6`

    _Dev Dependencies_

    -   `alpinejs 3.12.2`
    -   `tailwindcss 3.3.2`
    -   `vite 4.0.0`
    -   `autoprefixer 10.4.14`
    -   `postcss 8.4.24`

# Getting Started

## Requirements

-   PHP 8.1 or higher
-   Composer 2.5.5 or latest
-   NodeJs 18.16.0

## Installation

### 1. Clone the repository.

```shell
git clone git@github.com:oclean66/terrakion-admin.git
```

### 2. Go into the folder and create a `.env` file, inside the file you must add your globals for the enviroment, database, port, password, etc.

> You need to generate an app key, for generate a key you must run `php artisan key:generate`, it'll automatic add the key on the variable.

```
APP_NAME=<YOUR APP NAME>
APP_ENV=local
APP_KEY=<API KEY>
APP_DEBUG=true
APP_URL=<HOST> | http://localhost

DB_CONNECTION=<DATABSE>
DB_HOST=<HOST NAME>
DB_PORT=<PORT>
DB_DATABASE=<DB NAME>
DB_USERNAME=<DB USER>
DB_PASSWORD=<PASSWORD>
```

> You can use the `.env.example` file by removing the `.example` extension.

### 3. Install the libraries and dependecies.

```shell
composer install
```

```shell
npm install
```

### 4. Run the migrations for create the tables in you database.
```shell
php artisan migrate
```

### 5. Turn on the development server.

```shell
php artisan serve
```

```shell
npm run dev
```

## Development

While you are coding you must follow the **Best PHP Practice** from [PHP-FIG](https://www.php-fig.org/), this proyect use the [PSR-12](https://www.php-fig.org/psr/psr-12/) code style.

### Formatter and Linter

We uses [PHPStan](https://phpstan.org/) for find bugs and format code. PHPstan is a Static Code Analyser, It's already configured you should't change any, but if you are authorized and really need change some rule or modify the package's behavior edit the `phpstan.neon` file.

Files with .neon extensions are similar to yaml files, It uses the same syntax to indent the code.

```yaml
parameters:
	level: 6    # min 0 max 9
	paths:      # folders to scan
		- app
		- database
		- tests
```

For more information see [https://phpstan.org/config-reference](https://phpstan.org/config-reference).
