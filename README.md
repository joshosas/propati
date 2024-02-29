# Propati - Property Listing Application

Propati is a web application built with PHP Laravel, providing users with a platform to list, search, and manage properties. The application utilizes Laravel's Blade templating engine for the frontend and is styled primarily with Bootstrap for a clean and responsive design.

## Features

-   **User Authentication**: Users can register, log in, and log out securely.
-   **Property Listing**: Users can list properties with details such as title, price, location, description, and more.
-   **Search Functionality**: Users can search for properties based on various criteria like title, location, price range, and property type.
-   **Dashboard**: Authenticated users have access to a dashboard where they can manage their listed properties, including editing and deleting them.
-   **Error Handling**: Custom error pages are provided for 404 errors, ensuring a smooth user experience.

## Installation

To run the Propati application locally, follow these steps:

1. Clone the repository:

    ```bash
    git clone https://github.com/joshosas/propati.git
    ```

2. Navigate to the project directory:

    ```bash
    cd propati
    ```

3. Install the dependencies using Composer:

    ```bash
    composer install
    ```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the necessary configuration values, including the database connection details.

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Run the database migrations to create the necessary tables:

    ```bash
    php artisan migrate
    ```

7. Optionally, seed the database with sample data using Laravel's seeders:

    ```bash
    php artisan db:seed
    ```

8. Serve the application:

    ```bash
    php artisan serve
    ```

9. Access the application in your web browser at `http://localhost:8000`.

## Usage

1. **Register/Login**: Users can register for an account or log in if they already have one.

2. **Listing Properties**: Authenticated users can list their properties by providing details such as title, price, location, etc.

3. **Search**: Users can search for properties using various criteria provided in the search form.

4. **Dashboard**: Authenticated users have access to a dashboard where they can manage their listed properties, including editing and deleting them.

5. **Error Handling**: Custom error pages are provided for 404 errors to ensure a smooth user experience.

## Credits

Propati was created by [Your Name] as a project for [Purpose/Assignment]. It utilizes the PHP Laravel framework, Laravel Blade templating engine, and Bootstrap for styling.

## License

This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
