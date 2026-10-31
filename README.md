# POS Management System

## Project Overview

The POS Management System is a simple web-based application developed using Laravel 12 for IT0049 - Web System Technologies, Technical Formative Assessment 5.

The application demonstrates Laravel's MVC architecture through routing, controllers, Blade templates, and static PHP arrays.

## Features

The application consists of four pages:

1. **Home** - Landing page introducing the POS Management System.
2. **About** - Information about the application and its purpose.
3. **Customer Accounts** - Displays five sample customer records.
4. **User Accounts** - Displays five sample user records and their assigned roles.

The Customer Accounts and User Accounts pages use static PHP arrays as temporary data sources and Blade's `@foreach` directive to display records.

## Technologies Used

- PHP 8.2
- Laravel 12
- HTML5
- CSS3
- Blade Templates
- Composer
- SQLite (default Laravel database)

## Installation and Setup

### Requirements

- PHP 8.2 or newer
- Composer
- Required PHP extensions
- Git

### Steps

1. Clone the repository:

   git clone https://github.com/iyahabacan26-dot/abacan-tfa5.git

2. Navigate to the project folder:

   cd abacan-tfa5

3. Install Laravel dependencies:

   composer install

4. Create the environment configuration:

   cp .env.example .env

   On Windows PowerShell, use:
   Copy-Item .env.example .env

5. Generate the application key:

   php artisan key:generate

6. Start the Laravel development server:

   php artisan serve

7. Open the application in your browser:

   http://127.0.0.1:8000

## Application Routes

| URL | Page |
|---|---|
| / | Home |
| /about | About |
| /customers | Customer Accounts |
| /users | User Accounts |

## Database

The Customer Accounts and User Accounts pages use static PHP arrays instead of database records, as required by the activity.

The project retains Laravel's default database migration files. Database configuration and migrations are not required to display the sample account data.

## Project Structure

- `app/Http/Controllers/` - Application controllers
- `routes/web.php` - Application routes
- `resources/views/` - Blade templates
- `resources/views/layouts/` - Shared layout
- `public/css/style.css` - Custom stylesheet
- `database/migrations/` - Default Laravel migrations

## Academic Information

**Course:** IT0049 - Web System Technologies

**Activity:** Technical Formative Assessment 5

**Project:** POS Management System