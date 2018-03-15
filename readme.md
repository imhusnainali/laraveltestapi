#Install

    git clone https://github.com/bahek2462774/laraveltestapi.git
    composer install
    cp .env.example .env


Now you have to create MySQL DB and put creds (host/username/password/db_name)
to this file .env

    php artisan key:generate
    php artisan migrate --seed
    php artisan passport:install
    php artisan storage:link
    yarn 
    yarn prod

#Run server
(http://127.0.0.1:8000)  

    php artisan serve
    
    
There will be 100 users with creds:
test0@test.com/secret  
test1@test.com/secret  
test2@test.com/secret ...  

Link for POSTMAN Collection
https://www.getpostman.com/collections/8ee8bcfbf67f889c829e