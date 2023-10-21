# Todo List API

This is a simple API application built using the Laravel framework to manage a Todo List. It provides endpoints for creating, updating, and deleting tasks, as well as viewing a list of tasks. Authentication is required to use these endpoints, which is achieved through the use of Laravel Sanctum middleware.

## Getting Started

To get started with this API, follow these steps:

1. Clone this repository to your local machine.
2. Navigate to the project directory and run `composer install` to install the project dependencies.
3. Create a copy of the `.env.example` file as `.env` and configure your database connection settings.
4. Generate a new application key by running `php artisan key:generate`.
5. Run migrations to set up the database schema: `php artisan migrate`.
6. Run the development server: `php artisan serve`.
7. You can now access the API at `http://localhost:8000`.

## Authentication

This API uses Laravel Sanctum for authentication. To access the protected endpoints, you need to obtain an API token by registering and logging in as a user.

1. Register a new user by sending a POST request to `/api/register` with your name, email, and password.
2. After registration, you can log in by sending a POST request to `/api/login` with your email and password. This will return an API token.
3. Include this token in the `Authorization` header of your requests to the protected endpoints.

## Endpoints

The API provides the following endpoints:

- `GET /api/todo/list` - Retrieve a list of all tasks.
- `GET /api/todo/{todo}` - Retrieve details of a specific task.
- `POST /api/todo/store` - Create a new task.
- `PUT /api/todo/{todo}` - Update an existing task.
- `DELETE /api/todo/{todo}` - Delete a task.

## Usage Examples

### Retrieving a List of Tasks

```http
GET /api/todo/list
```

### Creating a Task

```http
POST /api/todo/store
Content-Type: application/json
Authorization: Bearer YOUR_API_TOKEN

{
    "content": "Buy groceries",
    "completed": false
}
```

### Updating a Task

```http
PUT /api/todo/{todo}
Content-Type: application/json
Authorization: Bearer YOUR_API_TOKEN

{
    "content": "Buy groceries",
    "completed": true
}
```

### Deleting a Task

```http
DELETE /api/todo/{todo}
Authorization: Bearer YOUR_API_TOKEN
```

## Contributing

If you'd like to contribute to this project, please follow the standard GitHub fork and pull request workflow. Contributions and bug reports are welcome.
License

This project is licensed under the MIT License - see the LICENSE file for details.
