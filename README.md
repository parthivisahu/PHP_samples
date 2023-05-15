# PHP_samples
**README - PHP Login, Signup, and User Page**

This repository contains PHP files that demonstrate a simple login, signup, and user page functionality. It allows users to create an account, log in with their credentials, and access a protected user page once authenticated.

## Prerequisites
To use this code, you need to have the following:

- A web server (e.g., Apache) with PHP support
- MySQL or another relational database management system (RDBMS)
- PHP installed on the server
- A modern web browser

## Installation

1. Clone or download this repository to your web server directory.

```shell
git clone https://github.com/your-username/php-login.git
```

2. Create a new MySQL database to store user information.

```shell
mysql -u username -p
CREATE DATABASE php_login;
```

3. Import the database structure by importing the provided `database.sql` file into your newly created database.

```shell
mysql -u username -p php_login < database.sql
```

4. Edit the `config.php` file in the repository root to update the database connection details.

```php
<?php
$dbHost = 'localhost';
$dbUsername = 'your-username';
$dbPassword = 'your-password';
$dbName = 'php_login';
?>
```

5. Start your web server and navigate to the URL where you placed the files. For example, `http://localhost/php-login`.

## Usage

The repository contains the following files:

- `index.php`: The homepage that displays the login and signup forms.
- `signup.php`: Handles the user registration process.
- `login.php`: Handles user login and authentication.
- `user.php`: A protected page that can only be accessed by authenticated users.
- `logout.php`: Logs out the user and redirects to the login page.

To use the application, follow these steps:

1. Open your web browser and navigate to the URL where you placed the files.
2. You will see the login and signup forms on the homepage.
3. Click the "Sign Up" link to create a new account. Fill in the required information and submit the form.
4. After signing up, you will be redirected to the login page. Enter your credentials and click "Login."
5. Upon successful login, you will be redirected to the user page where you can see a welcome message.
6. To log out, click the "Logout" link at the top of the user page.

## Customization

Feel free to modify the code to fit your needs. You can add additional fields to the user registration form, implement password reset functionality, or enhance the user page with additional features.

Please note that this is a basic example and may not be suitable for production environments without further security measures.
