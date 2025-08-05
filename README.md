# Toggle-User-Status-with-PHP-MySQL

This is a simple PHP + MySQL web application that allows you to:

- Add users (name + age)
- View all users in a dynamic HTML table
- Toggle user `status` (0 or 1) with a button
- Instantly update the database using AJAX (jQuery)

---

## 📁 Project Structure

| File         | Description                                      |
|--------------|--------------------------------------------------|
| `index.php`  | Main interface for adding users and toggling status |
| `db.php`     | Database connection file                         |
| `toggle.php` | Handles AJAX toggle logic                        |
| `script.js`  | JavaScript file for AJAX-based status toggling   |

---

## 🛠️ Setup Instructions

### 1. Prerequisites
- PHP + MySQL environment (e.g., [XAMPP](https://www.apachefriends.org/index.html))
- Basic familiarity with running a local server

### 2. Installation

1. Clone or download this repository.
2. Move the project folder (`form_task/`) into your local `htdocs/` directory (inside XAMPP).
3. Start **Apache** and **MySQL** from the XAMPP control panel.

### 3. Database Setup

1. Create a MySQL database named `form_task`
2. Run the following SQL query to create the `users` table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    status TINYINT(1) DEFAULT 0
);

###⚙️ Database Configuration
Update your db.php file with your database credentials if they are diffrent:
<?php
$conn = new mysqli("localhost", "root", "", "form_task");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

###🚀 How to Use
Open your browser and go to:
http://localhost/form_task/index.php
Use the form to add users with their name and age.
View all added users in the table below.
Click the Toggle button next to any user to switch their status between 0 (OFF) and 1 (ON) instantly.

###💡 Notes
Status updates are handled via AJAX, so the page doesn’t reload.
Status is stored as a TINYINT(1) in the database (0 or 1).
If you delete users, their IDs are not reused.
To reset the AUTO_INCREMENT value manually, you can run:
ALTER TABLE users AUTO_INCREMENT = 1;
Or update it using your SQL tool’s UI (e.g., phpMyAdmin → Operations → AUTO_INCREMENT).

###🧑‍💻 Built With
PHP
MySQL
HTML / CSS
JavaScript (jQuery)
python
