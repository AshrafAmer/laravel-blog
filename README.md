# How to Run This project Locally?!


- ### Clone this repo locally and navigate to it.

>
> `git clone https://github.com/AshrafAmer/laravel-blog.git`
>
> `cd laravel-blog`
>

<br>


- ### Install Composer Dependencies
<br>
Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually installs Laravel itself, among other necessary packages to get started.

>
> `composer install`
> 

<br>


- ### Install NPM Dependencies
<br>
Just like how we must install composer packages to move forward, we must also install necessary NPM packages to move forward. This is just like above step, where we installed the composer PHP packages, but this is installing the Javascript (or Node) packages required. 
<br>
The list of packages that a repo requires is listed in the packages.json file which is submitted to the github repo. 

>
> `npm install` or if you use yarn:  `yarn install`
> 

<br>

- ### Create a Copy of `.env.example` into `.env`
<br> `.env` files are not generally committed to source control for security reasons. But there is a `.env.example` which is a template of the `.env` file that the project expects us to have. So we will make a copy of the `.env.example` file and create a `.env` file that we can start to fill out to do things like database configuration in the next few steps.

>
> `cp .env.example .env`
> 

<br>


- ### Generate an app encryption key
<br> Laravel requires you to have an app encryption key which is generally randomly generated and stored in your `.env` file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.

>
> `php artisan key:generate`
> 

<br> <br>

- In the `.env` file, add database information to allow Laravel to connect to the database
<br> We will want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must add the connection credentials in the `.env` file and Laravel will handle the connection from there.
<br>
In the `.env` file fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.

<br>

- ### Migrate the database
Once your credentials are in the `.env` file, now you can migrate your database.

>
> `php artisan migrate`
> 

<br>

- ### Seed the database
<br>

After the migrations are complete and you have the database structure required, then you can seed the database to create `admin` with username: `admin@admin.com` and pass: `admin123`

To access admin dashboard, redirect to `127.0.0.1:8000/admin-panel`


>
> `php artisan db:seed --class=UserSeeder`
> 


<br><br>

## Author

 Ashraf Amer

## License

Copyright(c) 2021 @AshrafAmer