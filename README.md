# MyFamilyHub

MyFamilyHub is a web-based family management system developed using Laravel. The system is designed to help a family preserve family history, manage family member records, organize family events, and provide controlled access based on user roles.

This project was developed as part of the BICS 2306 Software Engineering course.

## Project Overview

Many families still depend on handwritten notes, scattered files, social media groups, or the memory of older family members to preserve family history. This can cause important family information to become lost, outdated, or difficult to access.

MyFamilyHub solves this problem by providing a centralized web-based platform where family members can view family information, access event details, and explore family heritage. Administrative users can manage family member records and events through a secure role-based system.

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

## Project Structure

```text
myfamilyhub/
├── app/
│   ├── Http/
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   └── web.php
├── storage/
├── tests/
├── .env.example
├── .gitignore
├── composer.json
├── package.json
└── README.md
```

## Installation Guide

Follow these steps to run the project locally.

### 1. Clone the Repository

```bash
git clone https://github.com/YOUR_USERNAME/myfamilyhub.git
cd myfamilyhub
```

Replace `YOUR_USERNAME` with your GitHub username.

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Frontend Dependencies

```bash
npm install
```

### 4. Create Environment File

```bash
cp .env.example .env
```

For Windows PowerShell, use:

```bash
copy .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Configure Database

Create a MySQL database in phpMyAdmin or MySQL.

Example database name:

```text
myfamilyhub
```

Then update the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myfamilyhub
DB_USERNAME=root
DB_PASSWORD=
```

For XAMPP, the default username is usually `root` and the password is usually empty.

### 7. Run Database Migration

```bash
php artisan migrate
```

If the project includes seeders, run:

```bash
php artisan db:seed
```

Or run both together:

```bash
php artisan migrate --seed
```

### 8. Start Laravel Server

```bash
php artisan serve
```

The project should run at:

```text
http://127.0.0.1:8000
```

### 9. Start Frontend Development Server

Open another terminal and run:

```bash
npm run dev
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

## Screenshots

Create a `screenshots` folder and add your project screenshots there.

Example:

```text
screenshots/
├── login-page.png
├── dashboard.png
├── family-member-management.png
├── event-page.png
└── family-tree-link.png
```

Then update the image paths below.

### Login Page

![Login Page](screenshots/login-page.png)

### Dashboard

![Dashboard](screenshots/dashboard.png)

### Family Member Management

![Family Member Management](screenshots/family-member-management.png)

### Event Page

![Event Page](screenshots/event-page.png)

### Family Tree Link Page

![Family Tree Link Page](screenshots/family-tree-link.png)

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

## License

This project is for academic and learning purposes.
