## Tugas 4
- buat project baru dengan composer create-project laravel/laravel:^11.0 nameProjek (nama projek disini tugas4)
- buka phpmyadmin, buat database baru
- lalu buka env, edit yang berhubungan dengan database, database_name menjadi nama database yang baru dibuat
- jalankan perintah php artisan make:model (nama model (disini Products)) -m (agar sekallian membuat migrationnya)
- edit model dan migration
- jalankan php artisan migrate
> [!ALERT]
> SQLSTATE[HY000]: General error: 1273 Unknown collation: 'utf8mb4_0900_ai_ci' (Connection: mysql, SQL: select exists (select 1 from information_schema.tables where table_schema = 'dblatihan' and table_name = 'migrations' and table_type in ('BASE TABLE', 'SYSTEM VERSIONED')) as exists)
> saat sama migrate, muncul error ini, yang harus dilakukan adalah:
> - ke config/database.php
> - cari 'collation' => env('DB_COLLATION', 'utf8mb4_0900_ai_ci'), di config untuk mysql
> - ubah utf8mb4_0900_ai_ci menjadi utf8mb4_unicode_ci
> [!NOTE]
> Jika folder tugas4 tidak bisa dibuka, tugas ini juga di upload di branch master
