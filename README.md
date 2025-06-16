# Payroll Management System

A web-based **Payroll Management System** built to automate and simplify payroll processes for businesses. This application allows HR and administrative teams to manage employee salaries, generate payslips, track attendance, and handle other payroll-related tasks efficiently using a clean and responsive interface.

---

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## Features

- **Employee Management**: Create, edit, and delete employee profiles with details like name, designation, and department.
- **Salary Calculation**: Compute salaries based on attendance, bonuses, and deductions.
- **Payslip Generation**: Generate payslips for employees, downloadable in PDF format.
- **Attendance Tracking**: Record daily attendance and generate attendance reports.
- **Leave Management**: Manage employee leave requests and approvals.
- **Secure Admin Panel**: Admin access for managing payroll and employee data.
- **Responsive Design**: Mobile-friendly interface using Bootstrap.
- **Reporting**: Generate payroll and tax reports for administrative use.

---

## Technologies Used

- **Backend**: PHP
- **Frontend**: HTML, CSS, Bootstrap 5
- **Database**: MySQL
  
## Installation

Follow these steps to set up the project locally:

### Prerequisites

- PHP >= 7.4
- MySQL
- Web server (e.g., Apache via XAMPP, WAMP, or similar)
- Git

### Steps

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/shihabkamel/Payroll-management-system.git
   cd Payroll-management-system
   ```

2. **Set Up the Web Server**:

   - Place the project folder in your web server’s root directory (e.g., `htdocs` for XAMPP).
   - Ensure the server is running (e.g., start Apache and MySQL via XAMPP).

3. **Create the Database**:

   - Open your MySQL client (e.g., phpMyAdmin).
   - Create a new database (e.g., `payroll_db`).
   - Import the provided SQL file (e.g., `database.sql` in the project root, if available):
     ```sql
     SOURCE /path/to/database.sql
     ```

4. **Configure Database Connection**:

   - Open the database configuration file (e.g., `config.php` or similar in the project root).
   - Update the database credentials:
     ```php
     <?php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'your_username');
     define('DB_PASS', 'your_password');
     define('DB_NAME', 'payroll_db');
     ?>
     ```

5. **Access the Application**:
   - Open your browser and navigate to the project URL (e.g., `http://localhost/Payroll-management-system`).
   - Ensure all files are accessible and the database is connected.

---

## Configuration

- **PDF Generation**: If the project uses a PDF library (e.g., TCPDF), ensure it is installed or included in the project directory.
- **File Permissions**: Set appropriate permissions for directories (e.g., `chmod 775 uploads/` for file uploads, if applicable).
- **Email Notifications** (Optional):
  - If email functionality is implemented, configure PHP’s `mail()` function or an SMTP service in your configuration file:
    ```php
    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', '587');
    ```

---

## Usage

1. **Admin Login**:

   - Access the admin panel (e.g., `http://localhost/Payroll-management-system/admin`).
   - Use default credentials (check `database.sql` or project documentation):
     - Username: `admin`
     - Password: `admin123`
   - Manage employees, process payrolls, and generate reports.

2. **Employee Access**:

   - Employees can log in to view their payslips and submit leave requests (if implemented).
   - Example URL: `http://localhost/Payroll-management-system/employee`.

3. **Payslip Generation**:

   - Admins can select a payroll period, calculate salaries, and generate payslips.
   - Download payslips as PDFs or send them via email (if configured).

4. **Reports**:
   - View payroll summaries, attendance reports, or tax deductions in the admin panel.

---

## Contributing

We welcome contributions to improve this project! To contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Make your changes and commit (`git commit -m "Add your feature"`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a pull request with a description of your changes.

Please follow the project’s coding standards and include comments for clarity.

---

## License

This project is licensed under the [MIT License](LICENSE). See the `LICENSE` file for details.

---

## Contact

For questions, suggestions, or support, feel free to reach out:

- **Author**: Shihab Kamel
- **GitHub**: [shihabkamel](https://github.com/shihabkamel)
- **Email**: your.email@example.com

Thank you for exploring the Payroll Management System! 🌟
