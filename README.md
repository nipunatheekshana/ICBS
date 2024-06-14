# ICBS International Git Repository

Welcome to the ICBS International website repository. This README provides an overview of the project structure, setup instructions, and essential information to contribute effectively.

## Project Overview

ICBS International is a vocational and skill-based educational institute offering a variety of courses in fields like Information Technology, Business Management, Graphic Design, and more. The website provides information about courses, registration, and the latest updates from ICBS.

## Table of Contents

1. [Getting Started](#getting-started)
2. [Project Structure](#project-structure)
3. [Installation](#installation)
4. [Usage](#usage)
5. [Contributing](#contributing)
6. [License](#license)
7. [Contact](#contact)

## Getting Started

These instructions will help you set up the project locally.

### Prerequisites

- PHP 8.3.8 or higher
- Composer
- Web server (e.g., Apache, Nginx)
- MySQL or other database

### Installation

1. **Clone the repository:**
    ```sh
    git clone https://github.com/nipunatheekshana/ICBS.git
    cd icbs-international
    ```

2. **Install dependencies:**
    ```sh
    composer install
    ```

3. **Set up the environment:**
    - Copy the `.env.example` file to `.env`:
      ```sh
      cp .env.example .env
      ```
    - Update the `.env` file with your database and other configuration details.

4. **Run migrations:**
    ```sh
    php artisan migrate
    ```

5. **Start the development server:**
    ```sh
    php artisan serve
    ```

## Project Structure

- `app/` - Contains the core code of the application
- `resources/` - Contains views and assets
- `public/` - Publicly accessible files
- `routes/` - Web routes
- `database/` - Database migrations and seeds

## Usage

- Visit `http://localhost:8000` to view the website.
- Use the admin panel to manage courses, updates, and other content.

## Contributing

We welcome contributions to improve the website. To contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Commit your changes and push to the branch.
4. Create a pull request.

## License

This project is licensed under the MIT License.

## Contact

For any questions or inquiries, please contact us at [Nipuna Theekshana](https://github.com/nipunatheekshana).

---

Thank you for contributing to ICBS International!
