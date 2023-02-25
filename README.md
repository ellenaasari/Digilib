![Digilib](https://user-images.githubusercontent.com/92472860/221360898-e4518060-5acc-40c6-baf5-52613a3ae63d.png)
<h1 align="center"> 🪷 Digital Library (Digilib) 🪷 </h1>
<p align="center">Digilib merupakan aplikasi peminjaman buku perpustakaan SMK Negeri 6 Jember secara Digital.</p>

## Instal
🌱 Clone Project ini 
    ```bash
    git clone https://github.com/ellenaasari/digilib.git
    cd digilib
    ```
🌱 Instal dependensi
    ```bash
    composer install
    ```
    dan dependensi javascript
    ```bash
    yarn install && yarn dev
    #atau
    npm install && npm run dev
    ```

🌱 Konfigurasi Laravel
    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

🌱 Buat database 'digilib' pada phpmyadmin

🌱 Migrate database
    ```bash
    php artisan migrate --seed
    ```

🌱 Serve aplikasi
    ```bash
    php artisan serve
    ```
    
   Note
    ```bash
    Sebelum login silahkan registrasi terlebih dahulu
    ```
