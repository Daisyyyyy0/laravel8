@extends('layouts.template');

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
@endsection

@section('main')
    <section id="banner">
        <div class="container">
            <div class="text">
                <p class="p1" data-aos="fade-up" data-aos-duration="1500">是否燒著一手好菜的你，此刻找不到人和你一同分享?</p>
                <p class="p2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">每天都不知道晚餐要吃什麼了嗎?</p>
                <p class="p3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2000">
                    覺得很孤單，想找回和家人一起吃飯的感覺嗎?</p>
                <p class="p4" data-aos="fade-up" data-aos-duration="1500">你想念媽媽的晚餐嗎？</p>
            </div>
            <div class="floating img1">
                <img src="{{asset('/image/banner1.png')}}" alt="" data-aos="fade-down-right" data-aos-duration="1000"
                    data-aos-delay="500">
            </div>
            <div class="floating img2">
                <img src="{{asset('/image/banner2.png')}}" alt="" data-aos="fade-down-left" data-aos-duration="1000"
                    data-aos-anchor-placement="top-bottom" data-aos-delay="1800">
            </div>
            <div class="floating img3">
                <img src="{{asset('/image/banner3.png')}}" alt="" data-aos="fade-up-left" data-aos-duration="1000"
                    data-aos-delay="3200">
            </div>

        </div>
    </section>

    <section id="pain-point">
        <div class="container">
            <div class="pain" data-aos="fade-right" data-aos-duration="1200">
                <img src="{{asset('image/pain1.jpg')}}" alt="">
            </div>
            <div class="pain" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="500">
                <img src="{{asset('image/pain2.jpg')}}" alt="">
            </div>

        </div>
    </section>

    <section id="belief" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="container">
            <div class="bigImg">
                <img src="{{asset('image/belief.png')}}" alt="">
            </div>
            <div class="descWrap p-3">
                <div class="h3">
                    | 我們的理念
                </div>
                <div class="text">
                    在這個快速的世代，我們的搭伙平台，你可以快速方便的搭伙機會，提供健康、安心的餐點，立即搜尋家裡附近合適的餐點供應者，留言搭伙並自行連絡領取餐點，享受家的味道！免費分享自己的家常餐點，介紹你的伙食，管理你的訂單，順便賺點外快！們提供一個共餐平台，解決你吃飯問題。
                </div>
            </div>
        </div>
    </section>
    <!-- 功能介紹 -->
    <section id="choice">
        <div class="container">
            <div class="d-flex">
                <a href="#" class="fire acc-btn">
                    <div class="img">
                        <img src="{{asset('image/fire.png')}}" alt="開伙">
                    </div>
                    <div class="text">
                        <span>不吝分享您的廚藝</span>
                        <span>讓想念家常菜的遊子飽餐一頓</span>
                    </div>
                    <div class="letter">我要開伙</div>
                </a>
                <a href="#" class="join acc-btn">
                    <div class="img">
                        <img src="{{asset('image/join.png')}}" alt="搭伙">
                    </div>
                    <div class="text">
                        <span>您可以利用平台預約</span>
                        <span>選擇離您最近的食堂</span>
                    </div>
                    <div class="letter">我要搭伙</div>
                </a>
            </div>
        </div>
    </section>
    <!-- 平台資訊 -->
    <section id="information">
        <div class="container container0">
            <div class="row">
                <div class="col table-price">
                    <div class="price-place">
                        <div class="price-text">收費標準</div>
                        <div class="price-box"></div>
                    </div>
                    <div class="rules-place">
                        <p>依店家規定</p>
                        <p>收費範圍在50~120元間</p>
                    </div>
                    <div class="time-place">
                        <div class="time-text">搭伙時段</div>
                        <div class="time-box"></div>
                    </div>
                    <div class="real-time">
                        <div class="noon">
                            <p>中午時段</p>
                            <div class="noon-number">11點~13點</div>
                        </div>
                        <div class="night">
                            <p>晚間時段</p>
                            <div class="night-number">17點~20點</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container1">
            <div class="row">
                <div class="col-8 news">
                    <div class="news-box">最新消息</div>
                    <div class="news-context">
                        <table class="t">
                            <thead style="border-bottom: 1px #DA7569 solid">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">發布時間</th>
                                    <th scope="col">標題</th>
                                    <th scope="col">點閱人數</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="row">1</th>
                                    <td>2022-01-10</td>
                                    <td>共餐平台網站建立</td>
                                    <td>600</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="row">2</th>
                                    <td>2022-01-09</td>
                                    <td>[徵求開伙人&搭伙人]</td>
                                    <td>1262</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="row row3">3</th>
                                    <td>2022-01-08</td>
                                    <td>家庭廚師來領獎!</td>
                                    <td>1735</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-4 advertise">
                    <div class="swiper" id="carousel">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="mask mask1">健康減油氣炸鍋</div>
                                <img src="./image/pic/pot.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="swiper-slide">
                                <div class="mask mask2">新鮮食材在這裡</div>
                                <img src="./image/pic/swiper-vegetable.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container2">
            <div class="row row2">
                <div class="col-4 rules">
                    <div class="box price">收費標準</div>
                    <div class="box time">搭伙時段</div>
                    <div class="rules-context">
                        <div class="rules-price" style="border-bottom: 2px rgb(95, 85, 85) solid">
                            <p>依店家規定</p>
                            <p>收費範圍在50~120元間</p>
                        </div>
                        <div class="rules-time">
                            <div class="rules-time1">
                                <div>中午時段</div>
                                <div class="white-box">11</div>
                                <div class="white-box">~</div>
                                <div class="white-box">13</div>
                            </div>
                            <div class="rules-time1">
                                <div>晚間時段</div>
                                <div class="white-box">17</div>
                                <div class="white-box">~</div>
                                <div class="white-box">20</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 member">
                    <div class="member-section">
                        <div class="member-title-box">
                            <div class="member-title">團隊介紹</div>
                        </div>
                        <div class="member-context">
                            <div class="member-card">
                                <img src="./image/pic/member-pic1.png" alt="">
                                <p>Mason</p>
                            </div>
                            <div class="member-card">
                                <img src="./image/pic/member-pic2.png" alt="">
                                <p>Aston</p>
                            </div>
                            <div class="member-card">
                                <img src="./image/pic/member-pic3.png" alt="">
                                <p>Annie</p>
                            </div>
                            <div class="member-card">
                                <img src="./image/pic/member-pic4.png" alt="">
                                <p>Daisy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- rwd出現 收費標準 最新消息-->
    <section id="information0">
        <div class="container container1">
            <div class="row">
                <div class="col table-price">
                    <div class="price-place">
                        <div class="price-text">收費標準</div>
                        <div class="price-box"></div>
                    </div>
                    <div class="rules-place">
                        <p>依店家規定</p>
                        <p>收費範圍在50~120元間</p>
                    </div>
                    <div class="time-place">
                        <div class="time-text">搭伙時段</div>
                        <div class="time-box"></div>
                    </div>
                    <div class="real-time">
                        <div class="noon">
                            <p>中午時段</p>
                            <div class="noon-number">11點~13點</div>
                        </div>
                        <div class="night">
                            <p>晚間時段</p>
                            <div class="night-number">17點~20點</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container2">
            <img src="./image/login-picture/Line 1.png" alt="">
            <div class="news-place">
                <div class="news-place-title">最新消息</div>
                <div class="news-place-box"></div>
            </div>
            <div class="news-text">
                <div class="news-grid">
                    <div class="number">1</div>
                    <div class="time">2022-01-10</div>
                    <div class="content content1">共餐平台網站建立</div>
                </div>
                <div class="news-grid">
                    <div class="number">2</div>
                    <div class="time">2022-01-09</div>
                    <div class="content content2">【徵求開伙人＆搭伙人】</div>
                </div>
                <div class="news-grid">
                    <div class="number">3</div>
                    <div class="time">2022-01-08</div>
                    <div class="content content3">家庭廚師來領獎</div>
                </div>
            </div>

        </div>
    </section>
    <!-- rwd出現 團隊介紹-->
    <section id="information1">
        <div class="container">
            <div class="member-place">
                <div class="member-place-title-place">
                    <div class="member-place-title-box">
                        <div class="member-place-title">團隊介紹</div>
                    </div>
                </div>
                <div class="member-place-content">
                    <div class="member-place-part">
                        <div class="member-place-card card1">
                            <img src="./image/pic/member-pic1.png" alt="">
                            <p>Mason</p>
                        </div>
                        <div class="member-place-card">
                            <img src="./image/pic/member-pic2.png" alt="">
                            <p>Aston</p>
                        </div>
                    </div>
                    <div class="member-place-part">
                        <div class="member-place-card card1">
                            <img src="./image/pic/member-pic3.png" alt="">
                            <p>Annie</p>
                        </div>
                        <div class="member-place-card">
                            <img src="./image/pic/member-pic4.png" alt="">
                            <p>Daisy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 使用流程 -->
    <section id="how-to-use">
        <div class="container">
            <div class="title">使用流程</div>
            <div class="row">
                <div class="step col">
                    <div class="step-number">
                        <img src="./image/step-number1.png" alt="">
                    </div>
                    <div class="step-pic">
                        <img src="./image/step1.png" alt="">
                        <div class="step-text">
                            <p> 註冊會員 </p>
                            <p>填寫基本資料</p>
                        </div>
                    </div>
                    <div class="step-arrow">
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
                <div class="step col">
                    <div class="step-number">
                        <img src="./image/step-number2.png" alt="">
                    </div>
                    <div class="step-pic">
                        <img src="./image/step2.png" alt="">
                        <p>登入會員</p>
                        <p>啟動後臺</p>
                    </div>
                    <div class="step-arrow">
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
                <div class="step col">
                    <div class="step-number">
                        <img src="./image/step-number3.png" alt="">
                    </div>
                    <div class="step-pic">
                        <img src="./image/step3.png" alt="">
                        <p>搜尋店家</p>
                        <p>選擇時段 </p>
                    </div>
                    <div class="step-arrow">
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
                <div class="step col">
                    <div class="step-number">
                        <img src="./image/step-number4.png" alt="">
                    </div>
                    <div class="step-pic">
                        <img src="./image/step4.png" alt="">
                        <p>預約時間</p>
                        <p>享用美食</p>
                    </div>
                    <div class="step-arrow">
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
                <div class="step col">
                    <div class="step-number">
                        <img src="./image/step-number5.png" alt="">
                    </div>
                    <div class="step-pic">
                        <img src="./image/step5.png" alt="">
                        <p>選擇現金</p>
                        <p>或綁定金流付款</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 商家介紹 -->
    <section id="kitchen">
        <div class="container">
            <div class="kitchen-heading">商家介紹</div>
            <div class="shop shop1">
                <img src="image/shop1-pic.png" alt="">
                <div class="shop-introduce introduce1">
                    <div class="title">
                        <span class="location">台北市內湖區</span>
                    </div>
                    <div class="place">
                        胡小姐已有中餐證照也對中式麵食及有興趣。天然不過分的調味，也自己手工臘肉、油蔥醬等。 每星期一、四、五，等你來搭伙！
                    </div>
                    <div class="bottom">
                        <div class="time-box">
                            <div class="time">17:00</div>
                            <div class="time">18:00</div>
                            <div class="time">19:00</div>
                            <div class="time">20:00</div>
                        </div>
                        <div class="see-more">
                            <a href="">觀看更多
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line">
                <img src="./image/pic/green-line.png" alt="">
            </div>
            <div class="shop shop2">
                <div class="shop-introduce introduce2">
                    <div class="title">
                        <span class="location">新北市新店區</span>
                    </div>
                    <div class="place">
                        Gina平日開伙，每天採購的新鮮食材決定當日料理，目前提供外帶餐盒方式，拿到即可食用。（木薯炒雞肉看起來好好吃！）
                    </div>
                    <div class="bottom">
                        <div class="time-box">
                            <div class="time">12:00</div>
                            <div class="time">17:00</div>
                            <div class="time">18:00</div>
                            <div class="time">19:00</div>
                            <div class="time">20:00</div>
                        </div>
                        <div class="see-more">
                            <a href="">觀看更多
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <img src="image/shop2-pic.png" alt="">
            </div>
            <div class="line">
                <img src="./image/pic/purple-line.png" alt="">
            </div>
            <div class="shop shop3">
                <img src="image/shop3-pic.png" alt="">
                <div class="shop-introduce introduce3">
                    <div class="title">
                        <span class="location">台北市文山區</span>
                    </div>
                    <div class="place">
                        皓媽當全職家庭主婦近三年了，為家人烹煮健康的料理是她最大的樂趣。重視食材的品質，偏好營養均衡的料理，不過度調味。
                    </div>
                    <div class="bottom">
                        <div class="time-box">
                            <div class="time">11:00</div>
                            <div class="time">12:00</div>
                            <div class="time">17:00</div>
                            <div class="time">18:00</div>
                            <div class="time">19:00</div>
                            <div class="time">20:00</div>
                        </div>
                        <div class="see-more">
                            <a href="">觀看更多
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line">
                <img src="./image/pic/red-line.png" alt="">
            </div>
        </div>
    </section>
    <section id="partner">
        <div class="container">
            <div class="h2">我們的夥伴</div>
        </div>
        <div class="location">
            <div class="city red">
                <div class="name">台北市</div>
                <p>已累積</p>
                <p>11間</p>
            </div>
            <div class="city green">
                <div class="name">新北市</div>
                <p>已累積</p>
                <p>11間</p>
            </div>
            <div class="city purple">
                <div class="name">台中市</div>
                <p>已累積</p>
                <p>11間</p>
            </div>
            <div class="city green">
                <div class="name">台南市</div>
                <p>已累積</p>
                <p>11間</p>
            </div>
            <div class="city red">
                <div class="name">高雄市</div>
                <p>已累積</p>
                <p>11間</p>
            </div>
        </div>
        <a href="#" id="big-btn">立即加入我們！</a>
    </section>
@endsection


@section('js')
    <!-- 輪播區塊 JS -->
    <script src="./JS/swiper.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection