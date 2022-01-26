<!DOCTYPE html>
<html lang="Hang-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    @yield('css')
    <title>一起吃飯</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="./index.html">
                    <img src="{{asset('image/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <!-- <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'>
                            <path stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10'
                                stroke-width='2' d='M4 7h22M4 15h22M4 23h22' />
                        </svg> -->
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">關於我們</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">最新消息</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">會員專區</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./dinner-location.html">共餐據點</a>
                        </li>
                    </ul>

                </div>
                <div class="user-icon">
                    <a class="nav-link" href="#"><i class="bi bi-person-fill"></i></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('main')
    </main>

    <footer class="">
        <!-- Right -->
        <div class="container-lg text-light">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <!-- Links -->
                <div class="helpWrap col-12 col-sm-6 col-md-4 mt-3">
                    <p>
                        <a href="#!" class="text-reset">幫助</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">使用手冊</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">常見問題</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">社群守則</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">隱私條款</a>
                    </p>

                </div>
                <!-- Grid column -->
                <div class="contactWrap col-12 col-sm-6 col-md-4 mb-md-0 mt-3">
                    <!-- Links -->
                    <h6 class="fw-bold mb-3">
                        聯絡我們
                    </h6>
                    <p>
                        <i class="fas fa-home"></i> 台中市豐原區中正路127號
                    </p>
                    <p>
                        <i class="fas fa-envelope"></i>
                        02-xxxx-xxxx
                    </p>
                    <p>
                        <i class="fas fa-phone"></i>sharefood@example.com
                    </p>
                </div>
                <div class="lilicoco col-md-4 mx-auto">
                    <!-- Content -->
                    <div class="footer-logo">
                        <img src="{{asset('image/logo-fff.png')}}" width="150" alt="">
                    </div>
                    <div class="social-media d-flex">
                        <a href="">
                            <img src="{{asset('image/facebook-fff.png')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('image/line-fff.png')}}" alt="">
                        </a>
                        <a href="">
                            <img src="{{asset('image/instagram-fff.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!--  Links  -->

        <!-- Copyright -->
        <div class="copyright text-center text-light p-2">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://sharefood.com/">sharefood.com</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    @yield('js')

</body>

</html>