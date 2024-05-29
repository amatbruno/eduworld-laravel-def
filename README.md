# EDUWORLD
 
 Eduworld is a school CRM project developed with Laravel for the backend and React for the frontend. 
 It provides a platform for managing student, teacher, course, and other related school administration information.

 - PREREQUISITES
    * [PHP](https://www.php.net/) >= 7.4
    * [Composer](https://getcomposer.org/)
    * [Node.js](https://nodejs.org/) >= 12.x
    * [NPM](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/)
    * [MySQL](https://www.mysql.com/) or any other database supported by Laravel
  
## Installation

Follow these steps to set up and run the application in your local environment.

### 1. Clone the repository

```bash
git clone https://github.com/your-username/your-repository.git
cd your-repository
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Configure .env file
```bash
cp .env.example .env
```

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 4. Generate the API key
```bash
php artisan key:generate
```

### 5. Migrate the database
```bash
php artisan migrate
```

### 6. Seed database (Optional)
```bash
php artisan db:seed
```

### 7. Install frontend dependencies
```bash
cd frontend  *if directory exists
npm install
```

### 8. Run in both console
```bash
npm run dev
php artisan serve
```
