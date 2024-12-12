# VIRALBlog API Based 

This is a Best Laravel API boilerplate project with pre-configured authentication, authorization, and other common features.

## Features

- Laravel 11.x
- User Authentication (Laravel Passport)
- Role-based Authorization
- Google OAuth Integration
- API Routes for User Management
- Database Migrations and Seeders
- Docker Configuration

## Requirements

- PHP 8.2+
- Composer
- Docker (optional)

## Installation

1. Clone the repository:

   ```
   git clone git@github.com:Emmanueltt21/viralblog.git
   cd viralblog
   ```

2. Install dependencies:

   ```
   composer install
   ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:

   ```
   cp .env.example .env
   ```

4. Generate application key:

   ```
   php artisan key:generate
   ```

5. Run migrations and seeders:
   ```
   php artisan migrate --seed
   ```

## Docker Setup

This project includes a Docker configuration for easy setup. To use Docker:

1. Make sure Docker and Docker Compose are installed on your system.

2. Build and start the containers:

   ```
   docker-compose up -d --build
   ```

3. The application will be available at `http://localhost:8000`.

## API Routes

The API routes are defined in the following files:

- `routes/api.php`
- `routes/user.php`

## Authentication

This project uses API authentication. The authentication routes and controllers are located in:

- `app/Http/Controllers/Api/Auth/AuthController.php`
- `routes/api.php`

4. The Creation of Account and login

## API Routes and Controller

The API routes are defined in the following files:

- `routes/api.php`
- `app/Http/Controllers/Api/Auth/AuthController.php`

4. The CRUD Blog Post

## API Routes and Controller

The API routes are defined in the following files:

- `routes/api.php`
- `app/Http/Controllers/Api/Auth/PostController.php`

