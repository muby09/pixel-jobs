# Pixel Jobs

[![Ask DeepWiki](https://devin.ai/assets/askdeepwiki.png)](https://deepwiki.com/muby09/pixel-jobs)

Pixel Jobs is a job board application built with the Laravel framework. It provides a platform for employers to post job listings and for job seekers to search and filter for opportunities. The application features a clean, modern user interface built with Tailwind CSS and Blade components.

## Features

-   **Employer Authentication:** Secure registration and login for employers.
-   **Job Management:** Employers can create, and list job postings.
-   **Dynamic Job Listings:** The homepage displays both "Featured" and "Recent" job sections.
-   **Tagging System:** Jobs can be categorized with tags, allowing for easy filtering.
-   **Search Functionality:** Users can search for jobs based on titles.
-   **Responsive UI:** A clean and modern interface built with Tailwind CSS and modular Blade components.
-   **Database Seeding:** Comes with pre-configured seeders to populate the application with sample jobs and tags for development and testing.

## Tech Stack

-   **Backend:** PHP 8.2+, Laravel 12
-   **Frontend:** Tailwind CSS, Blade, Vite
-   **Database:** SQLite (default), MySQL, PostgreSQL
-   **Testing:** Pest

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

-   PHP >= 8.2
-   Composer
-   Node.js & npm
-   A database server (SQLite is the default)

### Installation

1.  **Clone the repository:**
    ```sh
    git clone https://github.com/muby09/pixel-jobs.git
    cd pixel-jobs
    ```

2.  **Install PHP dependencies:**
    ```sh
    composer install
    ```

3.  **Install JavaScript dependencies:**
    ```sh
    npm install
    ```

4.  **Set up your environment file:**
    Copy the example environment file and generate an application key.
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Configure the database:**
    By default, the application is configured to use SQLite. Simply create the database file:
    ```sh
    touch database/database.sqlite
    ```
    If you prefer to use another database like MySQL, update the `DB_*` variables in your `.env` file accordingly.

6.  **Run database migrations and seeding:**
    This command will create the necessary tables and populate the database with sample jobs and tags.
    ```sh
    php artisan migrate --seed
    ```

7.  **Build frontend assets:**
    ```sh
    npm run build
    ```

### Running the Application

To serve the application locally, you can use the Artisan `serve` command:

```sh
php artisan serve
```

For a more comprehensive development experience that includes the server, queue listener, logs, and Vite asset bundling, use the custom `dev` script:

```sh
composer run dev
```

The application will be available at `http://127.0.0.1:8000`.

## Testing

The application uses Pest for testing. To run the test suite, use the following command:

```sh
composer test
```
This will execute all the feature and unit tests located in the `tests/` directory.
