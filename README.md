# Majoo Backend Test 
## Menggunakan Laravel 8

Cara run app :
-	Download atau pull code dari github
-	Buka source code dengan IDE
-	Masuk terminal pastikan sudah berada di root project folder
-	Jalankan secara urut :
-	Copy .env.example jadi .env dan set DB sesuai local
-	composer install
-	php artisan key:generate
-	php artisan migrate
-	php artisan db:seed
-	set jwt secret dg command : php artisan jwt:secret
-	jalankan app dengan php artisan serve

endpoint :

login
```http://localhost:8000/api/auth/login```

type : POST

payload 
``` 
{
    "user_name" : "user1",
    "password" : "password"
}
```
=============

report merchant monthly
```http://localhost:8000/api/report/merchant/monthly```

type: GET

header: ```Authorization: Bearer {jwt token from login} ```


=============

report outlet monthly
```http://localhost:8000/api/report/outlet/monthly```

type: GET

header: ```Authorization: Bearer {jwt token from login} ```
