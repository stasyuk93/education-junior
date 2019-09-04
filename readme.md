Tutorial:
1) clone repository;
2) run command in folder project sudo docker-compose up -d --build;
3) run command sudo docker-compose up -d;
3) run command sudo docker exec -it education_junior_php bash;
    3.1) run command in container: 
       - composer install
       - php artisan migrate
       - php artisan db:seed
       - exit
4) open http://127.0.0.1:800

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
