 My Software Work 1 — PHP Product Management API

A small PHP and MySQL project I built to practice working with databases, backend PHP, and APIs.

The project focuses on storing product information in a database and retrieving products through PHP files. It also includes a separate search function for finding products.

About the Project

I built this project as part of my software development practice to understand how PHP can communicate with a MySQL database.

The main idea is simple: connect PHP to a database, work with product data, and return the information when it is requested.

This project helped me get more comfortable with backend development and understand how different PHP files can work together to handle database operations.

What It Does

The project includes functionality for:

* Connecting PHP to a MySQL database
* Working with product information
* Retrieving products from the database
* Searching for products
* Returning product data through PHP

## Project Files

| File                  | Description                                               |
| --------------------- | --------------------------------------------------------- |
| database.php       | Handles the connection between PHP and the MySQL database |
| product.php         | Works with product-related database operations            |
| get_products.php    | Retrieves products from the database                      |
| search_products.php | Searches the product data and returns matching products   |

How It Works

The basic flow of the project is:

PHP → MySQL Database → Product Data → PHP Response

The database connection is handled separately in `database.php`, which can then be used by the other PHP files when they need to work with the product data.

This keeps the database connection separate from the actual product operations and makes the project easier to organize.

Technologies Used

PHP — backend programming
MySQL— database
SQL — working with the stored product data

What I Learned

This project gave me practical experience with connecting PHP to a database and working with data from the backend.

I also learned how to separate different parts of a small application into different files instead of putting everything into one PHP file.

The project was a good starting point for understanding how a backend can retrieve and search database records, which I can build on as I work on larger software projects.

 Project Structure

text
my_software-work_1/
│
├── database.php
├── product.php
├── get_products.php
└── search_products.php


Project Note

This is a learning project created to practice PHP, MySQL, SQL, and backend development.

It is a small project, but it helped me understand the basic connection between a PHP application and a relational database.

Author
Jennifer Onyedika

