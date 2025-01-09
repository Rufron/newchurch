![Project Cover](/chacha.png)

Quick Start Guide for New Church Laravel Project
1. Clone the Repository
- Run the following command in your terminal:
git clone `https://github.com/Rufron/newchurch.git`
`cd newchurch`

2. Install Dependencies: 
-Install PHP and front-end dependencies: 
`composer install`
`npm install && npm run dev`

3. Configure Environment
- Update the .env file with your database credentials.
 e.g if your using mysql `DB_CONNECTION=mysql`

4. Set Up the Database
Create a new MySQL database (e.g., newchurch) and run: `php artisan migrate --seed`

5. Generate Application Key
Run: `php artisan key:generate`

6. Start the Development Server
Run: `php artisan serve`
Access the app at http://localhost:8000
