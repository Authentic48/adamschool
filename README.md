### Adamschool

Admaschool is a static school website that I built using laravel for my one my client. 

The frontend part of this app was an open source template that I customized for my own need.

Anyone can clone this project, edit,improve and use it for your own purpose.

## Laravel Setup after cloning it from a repository

# step 1

Update Composer by running this command:  composer install

# step 2

Copy the .env.example to .env: cp .env.example .env

# step 3 

Generate the app key: php artisan key:generate

# step 4

Configure .env file with DB etc..

# step 5

Migrate to test the db connection: php artisan migrate

# step 6

Run the app on localhost: php artisan serve





