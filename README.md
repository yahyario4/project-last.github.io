# project-last.github.io
cara menjalankan di laptop/komputer anda
-clone kan repositorynya
*-buka git bash ketikkan: composer install
*-kemudian : nmp install jika terdapat file node.js , jika tidak skip aja lanjut ke
*-ketikkan command: php artisan key:generate (supaya generate key local server kita).
*-lanjut jalankan db di phpmyadmin kemudian buat db sesuaikan di kodingan kemudian ketik di bash: php artisan migrate)
*-jika ada seed di db nya ketikkan: php artisan db:seed
untuk menjalankan ketika telah selesai: php artisan serve
