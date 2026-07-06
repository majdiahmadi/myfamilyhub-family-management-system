# MyFamilyHub

MyFamilyHub is a web-based family management system developed using Laravel. The system is designed to help a family preserve family history, manage family member records, organize family events, and provide controlled access based on user roles.

## Project Overview

Many families still depend on handwritten notes, scattered files, social media groups, or the memory of older family members to preserve family history. This can cause important family information to become lost, outdated, or difficult to access.

MyFamilyHub solves this problem by providing a centralized web-based platform where family members can view family information, access event details, and explore family heritage. Administrative users can manage family member records and events through a secure role-based system.

## Usage Note

This repository is shared as a public example of a Software Engineering project built using Laravel.

Laravel was used because it is free, widely supported, and follows the MVC architecture, making it suitable for academic software engineering projects that involve requirements analysis, system design, implementation, testing, and database-driven web development.

The current code is based on a family management system developed for a specific large family client. Because of that, the design, content, database records, user roles, and features were created according to that client’s requirements.

This project should be treated as a reference template or starting point, not a final product for every family. The final system should be customized based on the needs, design preferences, data structure, and requirements of each client or family.

This repository may also help beginners understand how a Laravel web application is organized, especially for authentication, role-based access control, dashboards, database management, and basic CRUD features.

## Main Features

- Multi-role login system
- Role-based dashboard
- Family member management
- Add, edit, and search family members
- Event management
- Add and edit family event details
- Event photo upload
- Family background page
- External Ancestry link for family tree access
- Access control using Laravel middleware
- Responsive pink and purple themed interface

## User Roles

The system supports three main user roles:

### System Admin

The System Admin is responsible for technical maintenance and system support.

Main responsibilities:

- Manage system security
- Maintain system functionality
- Support database and backend configuration
- Assist with troubleshooting

### Family Admin

The Family Admin is responsible for managing family-related data.

Main responsibilities:

- Add family members
- Edit family member information
- Manage family events
- Update family-related content
- Access admin management features

### Family Member

The Family Member has view-only access.

Main responsibilities:

- View family background
- View family events
- Access the external family tree link
- Browse available family information

## Tech Stack

This project was built using:

- Laravel
- PHP
- MySQL
- XAMPP
- Laravel Blade
- Tailwind CSS
- Eloquent ORM
- Node.js
- Composer
- Git and GitHub

## System Modules

### 1. Access Control

The system requires users to log in using an email and password. Access is controlled based on the user role. Admin users can access management features, while normal family members are limited to view-only pages.

### 2. Family Database Management

Family Admins can manage family member records. This includes adding new members, editing existing information, assigning roles, and searching for specific users.

### 3. Event Management

Family Admins can create and update family events. Event details may include the event name, date, time, venue, description, dress code, and event photo.

### 4. Heritage Information

The system provides a family background section and a direct external link to an Ancestry page for extended family tree information.

### 5. Dashboard

The dashboard displays family background information, images, and navigation options based on the user role.

## Installation and Setup Guide

This section explains how to run the project locally using XAMPP, MySQL, Laravel, and Vite.

## Requirements

Before running the project, make sure the following tools are installed:

- XAMPP
- PHP
- Composer
- Node.js and npm
- Git
- Web browser

## 1. Start XAMPP

Open the **XAMPP Control Panel**.

Start both services:

```text
Apache
MySQL
```

Make sure both of them show as running.

## 2. Create a Database in phpMyAdmin

After starting MySQL in XAMPP, click the **Admin** button on the right side of the MySQL row.

This will open phpMyAdmin in your browser.

In phpMyAdmin:

1. Click **New** on the left sidebar.
2. Enter the database name:

```text
myfamilyhub
```

3. Click **Create**.

The database is now ready to be used by the Laravel project.

## 3. Clone the Repository

Open Command Prompt, PowerShell, or Git Bash.

Go to the folder where you want to store the project.

Example:

```bash
cd C:\Users\YourName\Downloads
```

Clone the repository:

```bash
git clone https://github.com/majdiahmadi/myfamilyhub-family-management-system.git
```

Go into the project folder:

```bash
cd myfamilyhub-family-management-system
```

## 4. Install PHP Dependencies

Run:

```bash
composer install
```

This will install the Laravel backend dependencies.

## 5. Install Frontend Dependencies

Run:

```bash
npm install
```

This will install the frontend dependencies required by Vite and Tailwind CSS.

## 6. Create the Environment File

Laravel needs a `.env` file to store local configuration.

For Windows Command Prompt, run:

```bash
copy .env.example .env
```

For PowerShell, run:

```bash
Copy-Item .env.example .env
```

For Git Bash, Linux, or macOS, run:

```bash
cp .env.example .env
```

## 7. Generate the Laravel Application Key

Run:

```bash
php artisan key:generate
```

You should see:

```text
Application key set successfully.
```

## 8. Configure the Database

Open the `.env` file and update the database settings.

For XAMPP, the default MySQL username is usually `root` and the password is usually empty.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myfamilyhub
DB_USERNAME=root
DB_PASSWORD=
```

Save the `.env` file after editing.

## 9. Run Database Migration

Make sure XAMPP MySQL is still running.

Then run:

```bash
php artisan migrate
```

If the project includes seeders, run:

```bash
php artisan migrate --seed
```

If you see:

```text
Nothing to migrate.
```

it means Laravel did not find any new migration to run.

## 10. Run the Laravel Server

In the first terminal, run:

```bash
php artisan serve
```

You should see something like:

```text
Server running on http://127.0.0.1:8000
```

Do not close this terminal.

## 11. Run the Vite Development Server

Open a new terminal.

Go to the same project folder again:

```bash
cd C:\Users\YourName\Downloads\myfamilyhub-family-management-system
```

Then run:

```bash
npm run dev
```

Do not close this terminal either.

The project needs both servers running at the same time:

```text
Terminal 1: php artisan serve
Terminal 2: npm run dev
```

## 12. Open the Website

Open your browser and go to:

```text
http://127.0.0.1:8000
```

The MyFamilyHub website should now be running locally.

## Common Issues

### Vite Manifest Not Found

If you see an error like:

```text
Vite manifest not found at public/build/manifest.json
```

run this in a new terminal:

```bash
npm run dev
```

Then refresh the website.

Alternatively, you can build the frontend files once by running:

```bash
npm run build
```

### Database Connection Error

If the website shows a database connection error, check these:

- XAMPP MySQL is running
- The database `myfamilyhub` exists in phpMyAdmin
- The `.env` database settings are correct
- The MySQL username and password match your local setup

### `.env` File Missing

If `php artisan key:generate` fails because `.env` is missing, create it first:

```bash
copy .env.example .env
```

Then run:

```bash
php artisan key:generate
```

### Port Already in Use

If Laravel says port `8000` is already in use, run:

```bash
php artisan serve --port=8001
```

Then open:

```text
http://127.0.0.1:8001
```

## Demo Login Accounts

Use the demo accounts below only if they are already created in your database seeder.

```text
System Admin
Email: systemadmin@example.com
Password: password

Family Admin
Email: familyadmin@example.com
Password: password

Family Member
Email: member@example.com
Password: password
```

If these accounts do not work, create users manually through the database or update the database seeder.

## Security Features

The system includes several basic security features:

- Authentication using email and password
- Role-based access control
- Admin-only management pages
- Middleware protection for restricted pages
- View-only access for normal family members
- Prevention of unauthorized access through direct URL manipulation

## Database Notes

This project uses MySQL as the database.

If you want to include a sample database file, use fake data only and place it inside:

```text
database/myfamilyhub_sample.sql
```

## Development Process

This project followed an Agile software development approach. The system was planned, designed, implemented, tested, and reviewed in stages.

The development process included:

- Requirement analysis
- Use case design
- Activity diagram design
- MVC architecture planning
- Database design
- User interface prototyping
- Laravel implementation
- Manual functional testing
- Role-based access testing

## Testing

The system was tested manually to ensure that the main functions work correctly.

Main testing areas:

- Login authentication
- Role-based dashboard access
- Family member registration
- Family member editing
- Search functionality
- Event creation
- Event editing
- Event viewing
- External Ancestry link access
- Unauthorized access restriction

## Future Improvements

Possible future improvements include:

- Internal interactive family tree
- Email notification for new events
- Event reminder system
- Better photo gallery management
- Cloud deployment
- Password reset feature
- Improved admin analytics dashboard
- Mobile-friendly interface improvements
- Export family records as PDF
- Better validation and error messages

## Limitations

Current limitations of the system:

- The project is mainly designed for local deployment
- The family tree is accessed through an external Ancestry link
- No direct synchronization with external genealogy platforms
- The system depends on MySQL availability
- The system is designed for a limited family user scale, not large public use

