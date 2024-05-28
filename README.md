# Crowned - Gaming Website Backend
Welcome to Crowned, a small gaming website built on Laravel. This README will guide you through the setup and usage of the backend portion of Crowned.

## Introduction
Crowned is a gaming website that hosts a collection of six games for users to enjoy. This Laravel project serves as the backend for Crowned, providing APIs and administrative functionalities to manage the games, users, and other aspects of the platform.

## What is Laravel?
Laravel is an open-source PHP web framework known for its elegant syntax, developer-friendly features, and robust ecosystem. It was created by Taylor Otwell and first released in 2011. Laravel follows the MVC (Model-View-Controller) architectural pattern, which separates the application logic into three interconnected components.
<br>
## Key Features of Laravel:
* Eloquent ORM:<br>
Laravel provides an expressive and fluent ORM (Object-Relational Mapping) called Eloquent, which simplifies database operations by allowing developers to work with databases using PHP syntax instead of SQL queries directly.

* Blade Templating Engine: <br>
Blade is a powerful templating engine included with Laravel, which allows developers to write clean and readable views with features like template inheritance, control structures, and reusable components.

* Artisan CLI: <br>
Laravel comes with a built-in command-line interface called Artisan, which provides various commands to automate repetitive tasks such as database migrations, model creation, and more.

* Routing: <br>
Laravel's routing system allows developers to define clean and expressive routes for handling HTTP requests. It supports RESTful routing, route parameters, route grouping, and more.

* Middleware: <br>
Middleware in Laravel provides a mechanism to filter HTTP requests entering your application. It can be used for tasks such as authentication, logging, and CSRF protection.

* Authentication and Authorization: <br>
Laravel simplifies authentication and authorization with built-in features like authentication scaffolding, authentication drivers, and policies.

* Validation: <br>
Laravel provides a convenient way to validate incoming data from forms or API requests using validation rules and custom error messages.

* Queues: <br>
Laravel's queue system allows you to defer the processing of time-consuming tasks like sending emails, processing payments, or generating reports to improve application performance and responsiveness.

* Community and Ecosystem: <br>
Laravel has a vibrant community and a rich ecosystem of packages and libraries contributed by the community, covering various functionalities like authentication, payment processing, and more.

* Overall, Laravel's combination of powerful features, elegant syntax, and extensive documentation makes it a popular choice for building web applications of all sizes and complexities.

## Creating a Laravel Project
### Install Laravel Installer:
* Ensure you have Composer installed on your system. Then, you can install the Laravel installer globally using Composer: <br>
composer global require laravel/installer

* Create New Laravel Project: <br>
Once the Laravel installer is installed, you can create a new Laravel project using the laravel new command followed by your project name:
<br> laravel new your-project-name <br> Replace your-project-name with the desired name of your project.

## Creating an API in Laravel
* Generate a New Laravel Project:
<br>
Follow the steps mentioned above to create a new Laravel project. Once the project is created, navigate into the project directory.
<br>
Laravel provides a routes/api.php file where you can define routes specifically for APIs. Define your API routes within this file.
<br> <b> routes/api.php </b>
<br> <b>use App\Http\Controllers\API\YourController; </b>
<br> <b> Route::get('/endpoint', [YourController::class, 'method']); </b>
Create Controller:

* Create a controller to handle your API logic. You can generate a controller using the make:controller Artisan command:
<br> php artisan make:controller API/YourController

* Replace YourController with the name of your controller.

## Implement API Logic:
* In your controller, define methods to handle API requests. These methods should return JSON responses.
<br> app/Http/Controllers/API/YourController.php

<br>namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function method(Request $request) <br>
    { <br>
        // Your API logic here <br>
        return response()->json(['message' => 'Your response'], 200);
  <br>  } <br>
}

## Installation
* Clone the repository:
<br>git clone https://github.com/emazech/crowned-backend
(or use github desktop to clone it)
* Install dependencies: <br>
composer install
* Copy the environment file: <br>
cp .env.example .env
* Generate application key:
<br> php artisan key:generate
* Configure the database:
Update the .env file with your database credentials.
* Run migrations and seeders:
<br>php artisan migrate --seed
* Start the development server:
<br>php artisan serve
