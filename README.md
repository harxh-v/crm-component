# Simple CRM System

A basic Customer Relationship Management system built with PHP and MySQL.

## Features

- Create, Read, Update, and Delete customers
- Responsive design with Bootstrap
- Simple and clean interface

## File Structure
```
crm/
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
├── includes/
│   ├── config.php
│   ├── db.php
│   └── header.php
├── customers/
│   ├── index.php
│   ├── create.php
│   ├── edit.php
│   └── delete.php
├── index.php
└── README.md
```

## Installation

1. Ensure XAMPP is installed and running
2. Clone or extract this project to `htdocs/crm` folder
3. Create a database named `crm_db` in phpMyAdmin
4. Import the SQL schema from `database.sql` (if provided)
5. Access the application at `http://localhost/crm/`

## Database Configuration

Edit `includes/db.php` to match your database credentials:

```php
$host = 'localhost';
$dbname = 'crm_db';
$username = 'root';
$password = '';
```

## Usage

1. Navigate to Customers section
2. Add new customers using the "Add New Customer" button
3. Edit or delete existing customers as needed

## Screenshots

[Add screenshots here if available]

## License

This project is open-source and available under the MIT License.
