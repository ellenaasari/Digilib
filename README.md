![Image](https://raw.githubusercontent.com/zuramai/laravel-mazer/main/screenshot.png)
<h1 align="center">Digital Library (Digilib)</h1>
<p align="center">Mazer is a Admin Dashboard Template that can help you develop faster. We bring Mazer with Laravel starter project. It's completely free and you can use it in your projects.</p>

## Main Template
If you want to check the original template in HTML5 and Bootstrap, [click here](https://github.com/zuramai/mazer) to open template repository.

## Instal
1. Clone Project ini
    ```bash
    git clone https://github.com/ellenaasari/digilib.git
    cd digilib
    ```
2. Instal dependensi
    ```bash
    composer install
    ```
    dan dependensi javascript
    ```bash
    yarn install && yarn dev
    #atau
    npm install && npm run dev
    ```

3. Konfigurasi Laravel
    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. Buat database 'digilib' pada phpmyadmin

5. Migrate database
    ```bash
    php artisan migrate --seed
    ```

6. Serve aplikasi
    ```bash
    php artisan serve
    ```
    
   Note
    ```bash
    Sebelum login silahkan registrasi terlebih dahulu
    ```

## Contributing
Feel free to contribute and make a pull request.
