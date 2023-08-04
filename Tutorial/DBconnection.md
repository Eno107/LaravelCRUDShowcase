
- Connect to Database
  1. Create a new MySQL schema
  2. Go to ".env" file
  3. Change "DB_DATABASE=" to the name of the new or existing schema we want to connect
  4. Also change "DB_USERNAME=" and "DB_PASSWORD=" accordingly.

- Create Tables in the Database
  1. Go to terminal of current project directory
  2. "php artisan migrate" -> laravel creates everal tables for you which are : failed_jobs, migrations, passsword_resets, personal_access_token, users.

- Add a value to the database
  1. Create Model class for the table
  2. Access ::create method for that Model Class
  i.e. User::create($incomingFields) || ModelName::create(tableColumns);

- Create new Table 
  1. Go to terminal of current project directory
  2. "php artisan make:migration tableName"
  3. If we follow a specific naming format, laravel can almost guess what you want to save in the database, for example "create_posts_table" -> creates base functions for posts.
  4. Again on terminal run the following command, "php artisan migrate"
