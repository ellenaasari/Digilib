<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/home/img/ekscool.svg" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/home/css/styles.css">

        <title>Home | Digilib</title>
    </head>
    <body>
        <!-- Header -->
        <header class="header" id="header">
            <nav class="container nav">
                <a href="#" class="nav__logo">
                    <img src="assets/home/img/ekscool.svg" alt="">D i g i t a l  -  L i b r a r y
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">

                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">

            <!--home-->
            <section class="home" id="home">
                <div class="container grid home__container">
                    <img src="assets/home/img/digilib.svg" alt="" class="home__img">
                   
                    <div class="home__data">
                        <h1 class="huruf__title">
                            Hello Everyone! 
                        </h1>
                        <p class="home__description">
                            Digital Library (Digilib) merupakan aplikasi peminjaman buku perpustakaan SMK Negeri 6 Jember secara Digital.
                            <br>
                            <h4 class="huruf__reg">
                            Silahkan registrasi jika belum memiliki akun!
                            </h4>
                            <br>
                        </p>
                        
                        <a href="{{ route('login') }}"class="button button--flex">
                            Login <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                        <a href="{{ route('register') }}"class="button button--flex">
                            Register <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                        <p class="footer__copy">&#169; SMK Negeri 6 Jember</p>
                    </div>
                    

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/smkn6jember/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                         
                    </div>
                </div>
            </section>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/home/js/main.js"></script>
    </body>
</html>
