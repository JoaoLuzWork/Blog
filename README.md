# 📝 Blog — Full-Stack PHP Blog Platform

A full-stack blog application with user authentication, role-based access control, and a complete content management system. Built from scratch with PHP, MySQL, JavaScript, and CSS.

---

## 📖 About

This project is a fully functional blog platform that allows registered users to read content while giving administrators full control over creating, editing, and deleting posts. It was developed as a personal project to practise full-stack web development, database design, and authentication flows.

The application is built without any frameworks — pure PHP, HTML, CSS, and JavaScript — to demonstrate a strong understanding of the underlying fundamentals of server-side web development.

---

## ✨ Features

- 🔐 **User Authentication** — Registration, login, logout, and session management
- 👥 **Role-Based Access Control** — Separate registration flows and permissions for regular users and administrators
- 📝 **Full CRUD Operations** — Create, read, update, and delete blog posts
- 🖼️ **File & Image Uploads** — Upload media to enrich blog posts
- 🛠️ **Admin Dashboard** — Dedicated admin panel for content management
- 💾 **Persistent Storage** — MySQL database with relational schema (users + posts)
- 🎨 **Custom Interactive UI** — Reusable header/footer components and responsive styling
- 🔌 **Centralised DB Connection** — Single connection layer for clean separation of concerns

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Back-end | PHP |
| Database | MySQL / SQL |
| Front-end | HTML, CSS, JavaScript |
| Server | Apache (XAMPP / WAMP / LAMP) |

**Language breakdown:** PHP 89% · CSS 8% · JavaScript 2% · HTML 0.5%

---

## 📂 Project Structure
Blog/
├── css/                    # Stylesheets
├── images/                 # Static images
├── svg/                    # SVG assets
├── conexao.php             # Database connection layer
├── index.php               # Landing page
├── home.php                # Main blog feed
├── header.php              # Reusable site header
├── footer.html             # Reusable site footer
├── login.php               # User login
├── logout.php              # Session termination
├── register.php            # User registration
├── form_register.php       # User registration form
├── admin.php               # Admin dashboard
├── admin_register.php      # Admin account creation
├── form_admin_register.php # Admin registration form
├── Texts.php               # Posts retrieval logic
├── bigText.php             # Single-post detail view
├── form_addText.php        # New post form
├── form_editText.php       # Edit post form
├── textEdit.php            # Edit post processing
├── textDelete.php          # Delete post processing
├── uploadFile.php          # File upload handler
├── script.js               # Client-side interactivity
├── users.sql               # Users table schema
└── texts.sql               # Posts table schema

---

## 🚀 Getting Started

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- A local server environment (XAMPP, WAMP, MAMP, or LAMP)
- A web browser

### Installation

1. **Clone the repository**
```bash
   git clone https://github.com/JoaoLuzWork/Blog.git
   cd Blog
```

2. **Set up the database**
   - Open phpMyAdmin (or your preferred MySQL client)
   - Create a new database (e.g. `blog_db`)
   - Import the schema files:
```sql
     SOURCE users.sql;
     SOURCE texts.sql;
```

3. **Configure the database connection**
   - Open `conexao.php`
   - Update the credentials with your local MySQL settings:
```php
     $host = 'localhost';
     $dbname = 'blog_db';
     $user = 'your_username';
     $password = 'your_password';
```

4. **Run the project**
   - Place the project folder inside your server's `htdocs` directory (XAMPP) or equivalent
   - Start Apache and MySQL
   - Navigate to `http://localhost/Blog/` in your browser

5. **Create an admin account**
   - Visit `admin_register.php` to create the first administrator
   - Log in via `login.php` to access the admin dashboard

---

## 🔒 Security Notes

This project was built as a learning exercise. Before deploying to production, the following improvements would be recommended:

- Use prepared statements for all SQL queries to prevent SQL injection
- Store database credentials in environment variables (e.g. `.env` file)
- Hash all passwords with `password_hash()` and verify with `password_verify()`
- Implement CSRF token protection on all forms
- Sanitise and validate all user input
- Validate file uploads (type, size, extension) before saving

---

## 🎯 What I Learned

Building this project gave me hands-on experience with:

- Designing relational database schemas
- Implementing authentication and session management in PHP
- Structuring a multi-page application with reusable components
- Handling file uploads safely
- Building role-based permission systems
- Working with raw SQL and PHP database connections

---

## 📸 Screenshots

> _Coming soon — screenshots of the home feed, admin dashboard, and post editor._

---

## 🤝 Contributing

This is a personal learning project, but suggestions and feedback are always welcome. Feel free to open an issue or fork the repo.

---

## 👤 Author

**João Pedro Luz**
- GitHub: [@JoaoLuzWork](https://github.com/JoaoLuzWork)
- Email: joao.pedro.luz.work@gmail.com
- Location: Dublin, Ireland

---

## 📄 License

This project is open source and available for personal and educational use.
