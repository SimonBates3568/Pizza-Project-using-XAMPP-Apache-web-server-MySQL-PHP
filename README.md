# Pizza Ordering Project

This project is a simple web application for ordering pizza, built using PHP and Materialize CSS, and powered by a MySQL database. It allows users to fill out a form with pizza details (such as pizza name, ingredients, and email) and submit it to the database. The project uses **XAMPP**, an Apache web server, and **MySQL** for database management.


## Features

- **Add Pizza**: Fill out a form with pizza details (such as name, ingredients, and email), and the information is stored in the MySQL database.
- **View Pizza**: See all the pizzas that have been added, and view details of individual pizzas.
- **Responsive Design**: Uses Materialize CSS to ensure the site is mobile-friendly and looks great on all devices.

## Technologies Used

- **PHP**: Handles server-side functionality, processes form submissions, and interacts with the MySQL database.
- **MySQL**: Stores pizza information (pizza name, ingredients, and user email).
- **XAMPP**: Provides the Apache server and MySQL database for local development.
- **Materialize CSS**: For styling the frontend, ensuring a responsive and modern design.
- **HTML/CSS**: Structure and styling of the web pages.

## Setup Instructions

### Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) installed on your local machine.
- Basic knowledge of PHP, MySQL, and HTML/CSS.

### Steps to Set Up the Project Locally

1. **Clone the repository** to your local machine:

   ```bash
   git clone https://github.com/your-username/pizza-ordering-app.git

Start XAMPP:

Launch the XAMPP Control Panel and start the Apache and MySQL services.
Database Setup:

Open phpMyAdmin and create a database named pizza_db.
Import the pizza_db.sql file into the database. This file should contain the necessary table structure for storing pizzas.
Configure Database Connection:

In the /config/db_connect.php file, adjust the database connection details (host, username, password) to match your XAMPP setup.
Example of db_connect.php:

php
Copy code
<?php
$conn = mysqli_connect('localhost', 'root', '', 'pizza_db');
if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}
?>
Run the Project:

Place the project folder in the htdocs directory of your XAMPP installation.
Open a web browser and go to http://localhost/pizza-ordering-app/.
Add a Pizza:

Go to the Add Pizza page (add.php), fill out the form, and submit to add a new pizza to the database.
View Pizza:

The main page (index.php) will display all pizzas stored in the database. You can click on individual pizzas to view more details.
Screenshots
Add Pizza Form

Pizza List

License
This project is open-source and available under the MIT License.



