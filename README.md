# Book King

Book King - сервис для выбора места для отдыха.

## Стек
- PHP
- Laravel
- tymon/jwt-auth

## Функционал

В приложении реализована jwt авторизация и выделено 2 роли: ‘user’, ‘admin’. При регистрации пользователю автоматически назначается роль ‘user’.

### Для администратора:
- Просмотр списка пользователей;
- Добавление мест для отдыха;
- Просмотр списка мест для отдыха;
- Добавление места отдыха в желаемые для конкретного пользователя по id;
- Просмотр списка желаемого у конкретного пользователя по id;
- Просмотр всех записей списка желаемого.

### Для пользователя:
- Просмотр текущего пользователя;
- Просмотр списка мест для отдыха;
- Добавление места для отдыха в список желаемого текущего пользователя;
- Просмотр списка желаемого текущего пользователя.

## Запуск
1. Клонировать репозиторий: https://github.com/dromaria/Sputnik-test
2. Создать файл ```env``` в корне приложения и скопировать в него данные из ```.env.example```
3. Запустить команду:  ```docker-compose up --build``` 
4. Приложение будет запущено на http://localhost:8876
5. Запустить команду для добавления записи администратора ```docker exec -it book_king_app php artisan migrate --seed```
6. Данные администратора:
   - login = "Test Admin"
   - password = "password"
7. Постман коллекция находится в файле [Sputnik-test.postman_collection.json](Sputnik-test.postman_collection.json)
