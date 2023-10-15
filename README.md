# corephp-todolist

![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)

The CorePHP Todo project is a simple yet powerful task management application built with PHP. It offers a range of functionalities including user authentication, task creation, viewing, editing, and deletion. This README will guide you through setting up and running the project on your local machine.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Authentication](#authentication)
- [Routes](#routes)
- [Validation](#validation)
- [Middleware](#middleware)
- [Components](#components)

## Features

- **Login/Logout:** Users can authenticate themselves to access the application.
- **Signup:** New users can create an account to manage tasks.
- **Create Task:** Users can add new tasks with title, description, and due date.
- **View Task:** List all tasks with filtering and sorting options.
- **Delete Task:** Remove tasks that are no longer needed.
- **Edit Task:** Modify existing tasks.
- **Authentication:** Secure user authentication system.
- **Routes:** Clearly defined routes for different functionalities.
- **Validation:** Input data is validated to prevent errors.
- **Middleware:** Implement middleware for various checks.
- **Components:** Organized components for maintainability.

## Installation

Follow these steps to set up the CorePHP Todo project on your local machine:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/corephp-todolist.git
   ```

2. **Change directory:**

   ```bash
   cd corephp-todo
   ```

3. **Install dependencies:**

   This project may have dependencies that need to be installed. Run:

   ```bash
   composer install
   ```

4. **Database Configuration:**

   Set up your database connection in the `includes/db.php` file.

5. **Start the server:**

   You can use PHP's built-in server for development.

   ```bash
   php -S localhost:8000
   ```

6. **Access the application:**

   Open your web browser and go to `http://localhost:8000` to access the application.

## Usage

1. **Signup:** Create an account using your email and password.

2. **Login:** Sign in with your credentials.

3. **Create Task:** Click the "Add Task" button to create a new task.

4. **View Task:** Access your tasks through the "View Tasks" menu item.

5. **Edit Task:** Edit tasks by clicking on the "Edit" button.

6. **Delete Task:** Remove tasks by clicking on the "Delete" button.

## Authentication

The authentication system is a crucial part of the project. It ensures that only authorized users can access the application. If you're using the default settings, you can find the login and signup routes at `/login` and `/signup`.

## Routes

- `/login`: User login and authentication.
- `/logout`: Log out the user.
- `/signup`: User registration.
- `/tasks`: List tasks.
- `/tasks/add`: Create a new task.
- `/tasks/edit/:id`: Edit a specific task.

## Validation

Input data is validated to prevent errors. Be sure to follow input validation practices when adding or editing tasks.

## Middleware

Middleware components handle various checks, such as authentication and input validation, before processing the request. They are defined in the `middleware` directory.

## Components

The codebase is organized into components for maintainability and scalability. These components include the authentication system, task management, and route handling.

Feel free to contribute, report issues, or use this project as a base for your own PHP projects!

**Happy task management!**
