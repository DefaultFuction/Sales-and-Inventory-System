# Sales and Inventory System

<div align="center">
  <h3>A Lightweight PHP/MySQL Point of Sale & Inventory Management System</h3>
  <p>Efficient • Practical • Open Source</p>

  <img src="https://img.shields.io/badge/PHP-7.2+-777BB4?style=flat&logo=php&logoColor=white" alt="PHP Version">
  <img src="https://img.shields.io/badge/MySQL-5.7+-4479A1?style=flat&logo=mysql&logoColor=white" alt="MySQL Version">
  <img src="https://img.shields.io/badge/Bootstrap-4.2.1-7952B3?style=flat&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/License-MIT-green.svg" alt="License">
  <img src="https://img.shields.io/badge/Version-1.0.0-blue.svg" alt="Version">
</div>

---

## 📋 Overview

A complete **Sales and Inventory Management System** built with native PHP and MySQL, featuring a fully functional **Point of Sale (POS)** module. Designed for small retail businesses, it provides essential tools for managing sales transactions, product inventory, customers, employees, and suppliers — all within a clean, responsive dashboard interface powered by SB Admin 2.

---

## ✨ Features

| Module | Capabilities |
|--------|--------------|
| 🔐 **Authentication** | Secure login with session management & role-based access (Admin / User) |
| 📊 **Dashboard** | Business overview with customer, supplier, employee & product counts, recent products list |
| 🛒 **Point of Sale** | Full POS system with category-based product grid, cart management, customer selection, VAT calculation, cash payment & receipt |
| 📦 **Product Management** | Add, edit, delete products with categories, suppliers, stock quantities and pricing |
| 📋 **Inventory Tracking** | Monitor stock levels, on-hand quantities, stock-in dates per product |
| 👥 **Customer Management** | Manage customer records with contact details and purchase history |
| 👔 **Employee Management** | Manage employee profiles, job titles, locations and hire dates |
| 🏢 **Supplier Management** | Manage supplier companies with location tracking and contact info |
| 💳 **Transaction Records** | Complete sales history with itemized details, VAT breakdown, payment info |
| 👤 **User Accounts** | Multi-role account system (Admin / User) linked to employee profiles |
| ⚙️ **System Settings** | Configure site name, keywords, description and other preferences |

---

## 🖥️ System Pages

| Page | Description |
|------|-------------|
| `login.php` | Secure authentication gateway |
| `index.php` | Dashboard with key business metrics |
| `pos.php` | Point of Sale terminal with product grid and cart |
| `product.php` | Product catalog management |
| `inventory.php` | Stock and inventory monitoring |
| `customer.php` | Customer directory management |
| `employee.php` | Staff/employee management |
| `supplier.php` | Supplier management |
| `transaction.php` | Transaction history & details |
| `user.php` | Account & role management |
| `settings.php` | System configuration |

---

## 🗄️ Database Structure

The system uses **12 MySQL tables**:

| Table | Purpose |
|-------|---------|
| `users` | Login credentials & role assignments |
| `employee` | Employee profiles & job information |
| `customer` | Customer contact records |
| `product` | Product catalog with pricing & stock |
| `category` | Product categories (Keyboard, Mouse, Monitor, etc.) |
| `supplier` | Supplier company information |
| `inventory` / stock fields | Stock tracking (`QTY_STOCK`, `ON_HAND`) |
| `transaction` | Sales transaction headers |
| `transaction_details` | Itemized transaction line items |
| `type` | User role types (Admin / User) |
| `job` | Employee job titles (Manager / Cashier) |
| `location` | Province/City location reference |

---

## 🚀 Quick Start

### Prerequisites

```bash
✓ PHP >= 7.2
✓ MySQL >= 5.7
✓ Web Server (Apache / Nginx)
✓ mysqli PHP Extension
✓ GD Library (for image processing)
✓ mod_rewrite (Apache, optional)
```

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/yourusername/sales-inventory-system.git

# 2. Import the database
mysql -u root -p < sql.sql

# 3. Configure database connection
#    Edit: includes/connection.php
#    Set your database host, username, password

# 4. Deploy to web server
#    Point your document root to the project directory

# 5. Access the system
#    Open browser → http://localhost/
```

### Default Credentials

| Role | Username | Password |
|------|----------|----------|
| **Admin** | `admin` | `admin@123123` |
| **User** | `user` | `admin@123123` |

> ⚠️ **Change default passwords immediately after first login!**

---

## 🛒 POS Module

The Point of Sale module provides a complete checkout experience:

- **Product Grid** — Browse products by category (Keyboard, Mouse, Monitor, etc.)
- **Cart System** — Add/update quantities, real-time calculation
- **VAT Computation** — Automatic 12% VAT handling (Less VAT, Net VAT, Add VAT)
- **Customer Assignment** — Link transactions to customer records
- **Cash Payment** — Enter cash amount, system calculates change
- **Transaction Logging** — All sales saved with unique transaction IDs

---

## 🔐 User Roles

| Role | Access |
|------|--------|
| **Admin** | Full access — Dashboard, all management pages, reports & settings |
| **User** | Restricted to POS terminal only; redirected from admin pages |

---

## 🧰 Built With

- [PHP](https://www.php.net/) — Server-side scripting
- [MySQL](https://www.mysql.com/) — Database
- [Bootstrap 4.2.1](https://getbootstrap.com/) — Frontend framework
- [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) — Admin dashboard template
- [jQuery](https://jquery.com/) — JavaScript library
- [DataTables](https://datatables.net/) — Table sorting & pagination
- [Font Awesome](https://fontawesome.com/) — Icon library
- [Unsplash](https://unsplash.com/) — Stock photography

---

## 📁 Project Structure

```
Sales and Inventory System/
├── index.html                 # Entry redirect → pages/index.php
├── sql.sql                    # Database schema & sample data
├── css/
│   ├── sb-admin-2.css         # Main stylesheet
│   └── sb-admin-2.min.css     # Minified styles
├── js/
│   ├── sb-admin-2.js          # Admin template scripts
│   └── demo/                  # Demo script assets
├── img/                       # Image assets
├── includes/
│   ├── connection.php         # Database connection config
│   ├── sidebar.php            # Admin sidebar navigation
│   ├── topbar.php             # Admin top navigation bar
│   ├── topp.php               # POS top navigation bar
│   └── footer.php             # Footer & logout modal
├── pages/
│   ├── login.php              # Authentication page
│   ├── processlogin.php       # Login validation & session
│   ├── logout.php             # Session destroy & redirect
│   ├── session.php            # Session helper functions
│   ├── index.php              # Dashboard
│   ├── pos.php                # Point of Sale
│   ├── posside.php            # POS cart/summary panel
│   ├── postabpane.php         # POS product grid tabs
│   ├── pos_transac.php        # POS transaction processor
│   ├── product.php            # Product CRUD
│   ├── pro_add.php / _edit / _del / _searchfrm
│   ├── inventory.php          # Inventory view
│   ├── inv_edit.php / _del / _searchfrm
│   ├── customer.php           # Customer CRUD
│   ├── cust_add.php / _edit / _del / _searchfrm / _transac
│   ├── employee.php           # Employee CRUD
│   ├── emp_add.php / _edit / _del / _searchfrm / _transac
│   ├── supplier.php           # Supplier CRUD
│   ├── sup_add.php / _edit / _del / _searchfrm / _transac
│   ├── transaction.php        # Transaction records
│   ├── trans_view.php         # Transaction detail view
│   ├── user.php               # User account management
│   ├── us_add.php / _edit / _del / _searchfrm / _transac
│   ├── settings.php           # System settings
│   └── settings_edit.php      # Settings update handler
└── vendor/                    # External libraries
    ├── bootstrap/
    ├── fontawesome-free/
    ├── jquery/
    ├── jquery-easing/
    └── datatables/
```

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!  
Feel free to check the [issues page](https://github.com/yourusername/sales-inventory-system/issues).

---

## 📄 License

This project is open-source software licensed under the [MIT License](LICENSE).

---

<div align="center">
  <sub>Built with ❤️ for small business management</sub>
</div>
