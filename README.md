# Blog – Object Oriented PHP Blog System

A **fully functional blog application** built using **Object-Oriented PHP and MySQL**, featuring a complete **Admin Panel** for managing posts, categories, and content.

This project demonstrates clean PHP architecture, separation of concerns, and real-world CRUD functionality — making it ideal for portfolio and job applications.

---

## ✨ Features

### Public Website
- View all blog posts
- Read single articles
- Browse posts by category
- Search posts
- Clean responsive layout

### Admin Panel
- Secure admin login
- Create, edit and delete posts
- Manage categories
- Upload images
- Dashboard for content management

### Technical
- Object-Oriented PHP architecture
- MySQL database
- Reusable classes
- Centralized database connection
- Organized file structure

---

## 🧠 Technologies Used

- PHP (Object-Oriented)
- MySQL
- HTML5 / CSS3
- JavaScript
- Apache (XAMPP, Laragon, etc.)

---

## 🚀 Installation

### 1. Clone the repository
```bash
git clone https://github.com/markodam5/Blog.git
cd Blog
```
### 2. Import blog.sql into your MySQL database.
```bash
mysql -u root -p blog < blog.sql
```
### 3. Configure database
Edit config.php:
```bash
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "blog");
```
### 4. Run the project
Place the project inside:
```bash
htdocs (XAMPP)
www (Laragon)
```
Then open:
```bash
http://localhost/Blog
```
Admin Panel:
```bash
http://localhost/Blog/admin
```


