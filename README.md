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
