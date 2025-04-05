# Project Setup with XAMPP and MySQL

## Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) installed on your machine.
- Basic knowledge of PHP and MySQL.

## Installation Steps

1. **Start XAMPP:**
   - Open the XAMPP Control Panel.
   - Start the `Apache` and `MySQL` modules.

2. **Set Up the Database:**
   - Open `phpMyAdmin` by navigating to `http://localhost/phpmyadmin` in your web browser.
   - Create a new database named `doanqldulich`.
   - Import the SQL file located at `lib/config/DACS2.sql` to set up the necessary tables and data.

3. **Configure the Project:**
   - Ensure the database configuration in `lib/config/database.php` matches your MySQL setup:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASS', '1234'); // Change this if your MySQL password is different
     define('DB_NAME', 'doanqldulich');
     ```

4. **Place the Project in the XAMPP Directory:**
   - Copy the entire project folder to the `htdocs` directory of your XAMPP installation.

5. **Access the Project:**
   - Open your web browser and go to `http://localhost/[your-project-folder-name]` to view the project.

## Troubleshooting

- If you encounter any issues connecting to the database, ensure that the MySQL service is running and the credentials in `database.php` are correct.
- Check the XAMPP Control Panel for any error messages related to Apache or MySQL.

## Additional Notes

- Make sure to stop the Apache and MySQL services in XAMPP when you are done to free up system resources.
- For security reasons, consider changing the default MySQL password from `1234` to something more secure. 