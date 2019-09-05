Tutorial:
1) clone repository and rename .env.example to .env
2) run command in folder project sudo docker-compose up -d --build;
3) run command sudo docker-compose up -d;
4) run command sudo docker exec -it education_junior_php bash;
5) run command in container: 
- composer install
- php artisan migrate
- php artisan db:seed
- exit
6) open http://127.0.0.1:800

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
