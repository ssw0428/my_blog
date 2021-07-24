<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision School</title>

    <link rel="stylesheet" href="/Portfolio/vision/index.css">
    <link rel="stylesheet" href="/Portfolio/vision/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- 제이쿼리 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- swiper 불러오기 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!--aos 불러오기-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- 아울 캐러셀 불러오기, 제이쿼리 보다 밑에 있어야 합니다. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">

    <script type="text/javascript"
        src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=71ccd67c35204ca0935a0cc24526a8d4&libraries=services">
    </script>

    <!-- 구글 지도 api-->
    <script type="text/javascript" src=" http://maps.google.com/maps/api/js?v=3.3&sensor=true"></script>
    <script type="text/javascript">
        function initialize() {
            var myLatlng = new google.maps.LatLng(36.344704, 127.523407);
            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            }
            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: "비쿨학원"
            });
            var infowindow = new google.maps.InfoWindow({
                content: "옥천 비쿨학원"
            });
            infowindow.open(map, marker);
        }
        window.onload = function () {
            initialize();
        }
    </script>


    <script src="/Portfolio/vision/index.js"></script>
</head>

<body>
    <!--메인 메뉴바-->
    <nav class="main-menu-bar flex con">
        <div class="inner flex flex-1-0-0">
            <div class="width-size con flex flex-1-0-0">
                <div class="logo flex height-100p">
                    <a href="" class="flex flex-ai-c height-100p">
                        <img src="https://ssw0428.github.io/img1/pf/vision/main_logo.png" alt="">
                    </a>
                </div>
                <div class="flex-1-0-0 width-100p"></div>
                <ul class="flex height-100p">
                    <li data-list-head="1" data-list="1">
                        <a class="flex flex-ai-c height-100p" href="#">
                            <span>비쿨 소개</span>
                        </a>
                    </li>
                    <li data-list-head="1" data-list="2">
                        <a class="flex flex-ai-c height-100p" href="#">
                            <span>비쿨 이야기</span>
                        </a>
                    </li>
                    <li data-list-head="1" data-list="3">
                        <a class="flex flex-ai-c height-100p" href="#">
                            <span>자랑스러운 비쿨人</span>
                        </a>
                    </li>
                    <li data-list-head="1" data-list="4">
                        <a class="flex flex-ai-c height-100p" href="#">
                            <span>비쿨 소식</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex flex-ai-c height-100p" href="#">
                            <span>입학 안내</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrap">
        <!--메인 슬라이드-->
        <div class="main-slide swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-box swiper-slide">
                    <img src="https://ssw0428.github.io/img1/pf/vision/main-slide-1.jpg" alt="">
                    <div class="txt-box">
                        <p>하나님과 동행하는 비전스쿨</p>
                        <p>하나님과 동행하는 아이들</p>
                        <p>하나님과 동행하는 아이들</p>
                        <p>하나님과 동행하는 아이들</p>
                    </div>
                </div>
                <div class="swiper-box swiper-slide">
                    <img src="https://ssw0428.github.io/img1/pf/vision/main-slide-2.jpg" alt="">
                    <div class="txt-box">
                        <p>하나님과 동행하는 비전스쿨</p>
                        <p>하나님과 동행하는 아이들</p>
                        <p>하나님과 동행하는 아이들</p>
                        <p>하나님과 동행하는 아이들</p>
                    </div>
                </div>
                <div class="swiper-box swiper-slide">
                    <img src="https://ssw0428.github.io/img1/pf/vision/main-slide-2.jpg" alt="">
                    <div class="txt-box">
                        <p>하나님과 동행하는 비전스쿨</p>
                        <p>하나님과 동행하는 아이들</p>
                        <p>하나님과 동행하는 아이들</p>
                        <p>하나님과 동행하는 아이들</p>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!--content-1-->
        <div class="content-1 con btn-scroll-offset" data-list-body="1" data-list="1" data-AOV-diff-y="100">
            <div class="title-box flex" data-aos="zoom-in">
                <div class="bar"></div>
                <div class="title">
                    비전스쿨은<br>하나님과 함께 동행하는 기독교 대안학교 입니다.
                </div>
            </div>
            <div class="box-list-1">
                <div class="box">
                    <div class="content tab-type-1">
                        <div class="head">
                            <ul class="flex">
                                <li class="active" data-tab-name="box-1" data-tab-head-item-name="1">
                                    <a>비쿨 소개</a>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-head-item-name="2">
                                    <a>비쿨 과정</a>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-head-item-name="3">
                                    <a>교육 시설</a>
                                </li>
                                <li class="" data-tab-name="box-1" data-tab-head-item-name="4">
                                    <a>오시는 길</a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <ul>
                                <li class="active" data-tab-name="box-1" data-tab-body-item-name="1">
                                    <div class="inner flex flex-ai-c">
                                        <img src="https://ssw0428.github.io/img1/pf/vision/img1.jpg" alt="">
                                        <div class="box">
                                            <div class="txt-1">
                                                자유로운 학교, 비전스쿨
                                            </div>
                                            <div class="txt-2">
                                                비전스쿨에 대한 소개가<br>들어가면 좋겠습니다
                                            </div>
                                            <div class="txt-3">
                                                비전스쿨을 뭐라고 표현하면 좋을까요? 다함께 손을 잡고, 또는<br>
                                                좋은 아이디어로 이 부분을 꾸미면 너무 좋겠습니다. 하하하하<br>
                                                비쿨 소개 및 과정, 이야기, 입학 안내 4개나 있습니다. 화이팅!!!!
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab-name="box-1" data-tab-body-item-name="2">
                                    <div class="inner inner-1 flex flex-jc-sb">
                                        <div class="txt-box txt-box-1">
                                            <span class="num">01</span>
                                            <span class="txt-1">교육 목적</span>
                                            <div class="bar"></div>
                                            <span class="txt-2">
                                                비전스쿨 교육 목적에 대해서 이곳에 간략하게<br>
                                                적으면 참 좋을 것 같습니다. 3줄에서 4줄정도가<br>
                                                참 좋겠죠?? 아니면 좀 더 넣어도 좋습니다
                                            </span>
                                        </div>
                                        <div class="txt-box txt-box-2">
                                            <span class="num">02</span>
                                            <span class="txt-1">교육 특징</span>
                                            <div class="bar"></div>
                                            <span class="txt-2">
                                                비전스쿨 교육 특징에 대해서 이곳에 간략하게<br>
                                                적으면 참 좋을 것 같습니다. 3줄에서 4줄정도가<br>
                                                참 좋겠죠?? 아니면 좀 더 넣어도 좋습니다
                                            </span>
                                        </div>
                                        <div class="txt-box txt-box-3">
                                            <span class="num">03</span>
                                            <span class="txt-1">교육 대상</span>
                                            <div class="bar"></div>
                                            <span class="txt-2">14세 - 19세 청소년</span>
                                        </div>
                                        <div class="txt-box txt-box-4">
                                            <span class="num">04</span>
                                            <span class="txt-1">교육 과정</span>
                                            <div class="bar"></div>
                                            <span class="txt-2">
                                                1년 2학기 과정<br>
                                                1년 2학기 과정<br>
                                                1년 2학기 과정<br>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li data-tab-name="box-1" data-tab-body-item-name="3">
                                    <div class="slide1 swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="item swiper-slide"
                                                onclick="Pop1__open('교육시설', '비전스쿨 전경', 'https://ssw0428.github.io/img1/pf/vision/vs-img-1.jpg', 'https://ssw0428.github.io/img1/pf/vision/vs-img-2.jpg');">
                                                <div>
                                                    <a class="title">
                                                        <span class="name1">비전스쿨 교육시설</span>
                                                        <span class="name2">비전스쿨 전경</span>
                                                        <span class="name3"></span>
                                                    </a>
                                                </div>
                                                <img class="hor"
                                                    src="https://ssw0428.github.io/img1/pf/vision/vs-img-1.jpg" alt="">
                                            </div>
                                            <div class="item swiper-slide" class="item swiper-slide"
                                                onclick="Pop1__open('교육시설', '비전스쿨 족구장', 'https://ssw0428.github.io/img1/pf/vision/vs-img-3.jpg');">
                                                <div>
                                                    <a class="title">
                                                        <span class="name1">비전스쿨 교육시설</span>
                                                        <span class="name2">족구장</span>
                                                        <span class="name3"></span>
                                                    </a>
                                                </div>
                                                <img class="hor"
                                                    src="https://ssw0428.github.io/img1/pf/vision/vs-img-3.jpg" alt="">
                                            </div>
                                            <div class="item swiper-slide" class="item swiper-slide"
                                                onclick="Pop1__open('교육시설', '비전스쿨 사무실', 'https://ssw0428.github.io/img1/pf/vision/vs-img-4.jpg');">
                                                <div>
                                                    <a class="title">
                                                        <span class="name1">비전스쿨 교육시설</span>
                                                        <span class="name2">사무실</span>
                                                        <span class="name3"></span>
                                                    </a>
                                                </div>
                                                <img class="hor"
                                                    src="https://ssw0428.github.io/img1/pf/vision/vs-img-4.jpg" alt="">
                                            </div>
                                            <div class="item swiper-slide" class="item swiper-slide"
                                                onclick="Pop1__open('교육시설', '비전스쿨 교실', 'https://ssw0428.github.io/img1/pf/vision/vs-img-5.jpg');">
                                                <div>
                                                    <a class="title">
                                                        <span class="name1">비전스쿨 교육시설</span>
                                                        <span class="name2">교실</span>
                                                        <span class="name3"></span>
                                                    </a>
                                                </div>
                                                <img class="hor"
                                                    src="https://ssw0428.github.io/img1/pf/vision/vs-img-5.jpg" alt="">
                                            </div>
                                            <div class="item swiper-slide" class="item swiper-slide"
                                                onclick="Pop1__open('교육시설', '비전스쿨 교실', 'https://ssw0428.github.io/img1/pf/vision/vs-img-7.jpg');">
                                                <div>
                                                    <a class="title">
                                                        <span class="name1">비전스쿨 교육시설</span>
                                                        <span class="name2">교실</span>
                                                        <span class="name3"></span>
                                                    </a>
                                                </div>
                                                <img class="hor"
                                                    src="https://ssw0428.github.io/img1/pf/vision/vs-img-7.jpg" alt="">
                                            </div>
                                            <div class="item swiper-slide" class="item swiper-slide"
                                                onclick="Pop1__open('교육시설',  '비전스쿨 대강의실', 'https://ssw0428.github.io/img1/pf/vision/vs-img-9.jpg');">
                                                <div>
                                                    <a class="title">
                                                        <span class="name1">비전스쿨 교육시설</span>
                                                        <span class="name2">대강의실</span>
                                                        <span class="name3"></span>
                                                    </a>
                                                </div>
                                                <img class="hor"
                                                    src="https://ssw0428.github.io/img1/pf/vision/vs-img-9.jpg" alt="">
                                            </div>
                                            <div class="item swiper-slide" class="item swiper-slide"
                                                onclick="Pop1__open('교육시설', '비전스쿨 휴게실', 'https://ssw0428.github.io/img1/pf/vision/vs-img-10.jpg');">
                                                <div>
                                                    <a class="title">
                                                        <span class="name1">비전스쿨 교육시설</span>
                                                        <span class="name2">휴게실</span>
                                                        <span class="name3"></span>
                                                    </a>
                                                </div>
                                                <img class="hor"
                                                    src="https://ssw0428.github.io/img1/pf/vision/vs-img-10.jpg" alt="">
                                            </div>
                                            <div class="item swiper-slide" class="item swiper-slide"
                                                onclick="Pop1__open('교육시설', '교육시설 악기실', 'https://ssw0428.github.io/img1/pf/vision/vs-img-12.jpg');">
                                                <div>
                                                    <a class="title">
                                                        <span class="name1">비전스쿨 교육시설</span>
                                                        <span class="name2">악기실</span>
                                                        <span class="name3"></span>
                                                    </a>
                                                </div>
                                                <img class="hor"
                                                    src="https://ssw0428.github.io/img1/pf/vision/vs-img-12.jpg" alt="">
                                            </div>
                                            <div class="item swiper-slide" class="item swiper-slide"
                                                onclick="Pop1__open('교육시설', '비전스쿨 샤워장', 'https://ssw0428.github.io/img1/pf/vision/vs-img-11.jpg');">
                                                <div>
                                                    <a class="title">
                                                        <span class="name1">비전스쿨 교육시설</span>
                                                        <span class="name2">샤워장</span>
                                                        <span class="name3"></span>
                                                    </a>
                                                </div>
                                                <img class="hor"
                                                    src="https://ssw0428.github.io/img1/pf/vision/vs-img-11.jpg" alt="">
                                            </div>
                                        </div>
                                        <!-- Add Pagination -->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </li>
                                <li data-tab-name="box-1" data-tab-body-item-name="4">
                                    <div class="inner inner-4 flex">
                                        <div class="inner-box flex">
                                            <div id="map" style="width:769px;height:433px;"></div>
                                            <div class="contect-list">
                                                <ul>
                                                    <li>
                                                        <div class="tit">주소 & 연락처</div>
                                                        <div class="desc">
                                                            <div class="item multiline flex">
                                                                <div class="icon">
                                                                    <i class="fas fa-map-marker-alt"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <em>주소</em>
                                                                    충청북도 옥천군 군북면 증약길 191-9(우:29001)
                                                                </div>
                                                            </div>
                                                            <div class="item multiline flex">
                                                                <div class="icon">
                                                                    <i class="fas fa-phone-volume"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <em>전화번호</em>
                                                                    043 - 732 - 1234
                                                                </div>
                                                            </div>
                                                            <div class="item multiline flex">
                                                                <div class="icon">
                                                                    <i class="fas fa-fax"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <em>팩스</em>
                                                                    043- 134 -1234
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--content-2-->
        <div class="content-2 btn-scroll-offset" data-list-body="1" data-list="2" data-AOV-diff-y="-100">
            <div class="title-box flex con">
                <div class="bar"></div>
                <div class="title">
                    비전스쿨의<br>또 다른 모습과 매력을 보고 싶다면
                </div>
            </div>
            <div class="box-list-1">
                <div class="flex flex-row-wrap">
                    <div class="box">
                        <div class="content tab-type-1">
                            <div class="head">
                                <ul class="flex">
                                    <li class="flex-1-0-0 active" data-tab-name="box-2" data-tab-head-item-name="1">
                                        <a>비쿨 사진</a>
                                    </li>
                                    <li class="flex-1-0-0" data-tab-name="box-2" data-tab-head-item-name="2">
                                        <a>비쿨 영상</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="active" data-tab-name="box-2" data-tab-body-item-name="1">
                                        <div class="swiper-box con">
                                            <div class="gallery-box">
                                                <div class="box">
                                                    <div class="text-box">
                                                        <p class="text-1">
                                                            <span>PHOTO</span>
                                                            <i class="line1"></i>
                                                        </p>
                                                        <p class="text-2">
                                                            <span>GALLERY</span>
                                                        </p>
                                                    </div>
                                                    <h3>포토갤러리</h3>
                                                    <p class="text-3">아이들의 새로운 모습을 사진으로 만나보세요.</p>
                                                    <div class="slide-arrows">
                                                        <div class="swiper-button swiper-button-prev"></div>
                                                        <div class="swiper-button swiper-button-next"></div>
                                                    </div>
                                                </div>
                                                <div class="slide2 swiper-container">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="img-box"
                                                                style="background-image:url('https://ssw0428.github.io/img1/pf/happy/ex-8.jpg')">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="img-box"
                                                                style="background-image:url('https://ssw0428.github.io/img1/pf/happy/ex-7.jpg')">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="img-box"
                                                                style="background-image:url('https://ssw0428.github.io/img1/pf/happy/ex-6.jpg')">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="img-box"
                                                                style="background-image:url('https://ssw0428.github.io/img1/pf/happy/ex-5.jpg')">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="img-box"
                                                                style="background-image:url('https://ssw0428.github.io/img1/pf/happy/ex-4.jpg')">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="img-box"
                                                                style="background-image:url('https://ssw0428.github.io/img1/pf/happy/ex-3.jpg')">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="img-box"
                                                                style="background-image:url('https://ssw0428.github.io/img1/pf/happy/ex-2.jpg')">
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="img-box"
                                                                style="background-image:url('https://ssw0428.github.io/img1/pf/happy/ex-1.jpg')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-tab-name="box-2" data-tab-body-item-name="2">
                                        <div class="slide3 swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="video-box swiper-slide">
                                                    <iframe src="https://www.youtube.com/embed/09MWmMAhtMg"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="video-box swiper-slide">
                                                    <iframe src="https://www.youtube.com/embed/09MWmMAhtMg"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="video-box swiper-slide">
                                                    <iframe src="https://www.youtube.com/embed/09MWmMAhtMg"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="video-box swiper-slide">
                                                    <iframe src="https://www.youtube.com/embed/09MWmMAhtMg"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="video-box swiper-slide">
                                                    <iframe src="https://www.youtube.com/embed/09MWmMAhtMg"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>
                                                <div class="video-box swiper-slide">Slide 6</div>
                                                <div class="video-box swiper-slide">Slide 7</div>
                                                <div class="video-box swiper-slide">Slide 8</div>
                                                <div class="video-box swiper-slide">Slide 9</div>
                                                <div class="video-box swiper-slide">Slide 10</div>
                                            </div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination"></div>
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--content-3-->
        <div class="content-3 btn-scroll-offset" data-list-body="1" data-list="3">
            <div class="title-box flex con">
                <div class="bar"></div>
                <div class="title">
                    졸업생 이야기
                    <span>나는 자랑스러운 '비쿨인' 입니다.</span>
                    <span>비전스쿨에서 배운 것들을 세상에서 펼칩니다.</span>
                </div>
            </div>
            <div class="hover-box">
                <div class="inner">
                    <ul class="flex">
                        <li class="item item-1 on">
                            <div class="inner">
                                <div class="black_img">
                                    <img src="https://ssw0428.github.io/img1/pf/happy/ex-5.jpg" alt="">
                                </div>
                                <div class="color_img">
                                    <div class="img-box-1">
                                        <div class="video">
                                            <div class="video-box">
                                                <iframe width="100%" height="100%"
                                                    src="https://www.youtube.com/embed/Ak3ZDPXPJ34" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-box">
                                        <p class="text-1">비쿨의 수준 높은 수업 비결
                                        </p>
                                        <p class="text-2">
                                            비전스쿨의 웃음꽃
                                            <span>이유림</span>
                                        </p>
                                        <p class="sub-text">스튜디오 구축 업무를 담당하고 있는 콘텐츠개발사업팀 직원 원선용, 그의 손으로 새롭게 오픈한 스튜디오는 어떤
                                            모습일까?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item item-2 off">
                            <div class="inner">
                                <div class="black_img">
                                    <img src="https://ssw0428.github.io/img1/pf/happy/ex-5.jpg" alt="">
                                </div>
                                <div class="color_img">
                                    <div class="img-box-1">
                                        <div class="video">
                                            <div class="video-box">
                                                <iframe width="100%" height="100%"
                                                    src="https://www.youtube.com/embed/Ak3ZDPXPJ34" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-box">
                                        <p class="text-1">비쿨의 수준 높은 수업 비결
                                        </p>
                                        <p class="text-2">
                                            비전스쿨의 웃음꽃
                                            <span>이유림</span>
                                        </p>
                                        <p class="sub-text">스튜디오 구축 업무를 담당하고 있는 콘텐츠개발사업팀 직원 원선용, 그의 손으로 새롭게 오픈한 스튜디오는 어떤
                                            모습일까?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item item-3 off">
                            <div class="inner">
                                <div class="black_img">
                                    <img src="https://ssw0428.github.io/img1/pf/happy/ex-5.jpg" alt="">
                                </div>
                                <div class="color_img">
                                    <div class="img-box-1">
                                        <div class="video">
                                            <div class="video-box">
                                                <iframe width="100%" height="100%"
                                                    src="https://www.youtube.com/embed/Ak3ZDPXPJ34" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-box">
                                        <p class="text-1">비쿨의 수준 높은 수업 비결
                                        </p>
                                        <p class="text-2">
                                            비전스쿨의 웃음꽃
                                            <span>이유림</span>
                                        </p>
                                        <p class="sub-text">스튜디오 구축 업무를 담당하고 있는 콘텐츠개발사업팀 직원 원선용, 그의 손으로 새롭게 오픈한 스튜디오는 어떤
                                            모습일까?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item item-4 off">
                            <div class="inner">
                                <div class="black_img">
                                    <img src="https://ssw0428.github.io/img1/pf/happy/ex-5.jpg" alt="">
                                </div>
                                <div class="color_img">
                                    <div class="img-box-1">
                                        <div class="video">
                                            <div class="video-box">
                                                <iframe width="100%" height="100%"
                                                    src="https://www.youtube.com/embed/Ak3ZDPXPJ34" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-box">
                                        <p class="text-1">비쿨의 수준 높은 수업 비결
                                        </p>
                                        <p class="text-2">
                                            비전스쿨의 웃음꽃
                                            <span>이유림</span>
                                        </p>
                                        <p class="sub-text">스튜디오 구축 업무를 담당하고 있는 콘텐츠개발사업팀 직원 원선용, 그의 손으로 새롭게 오픈한 스튜디오는 어떤
                                            모습일까?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--content-4-->
        <div class="content-4 con btn-scroll-offset" data-list-body="1" data-list="4">
            <div class="title-box flex con">
                <div class="bar"></div>
                <div class="title">
                    비전스쿨의<br>새로운 소식에 대해서 알아보세요
                </div>
            </div>

            <section class="notice">
                <div class="page-title">
                    <div class="container">
                        <h3>공지사항</h3>
                    </div>
                </div>

                <!-- board seach area -->
                <div id="board-search">
                    <div class="container">
                        <div class="search-window">
                            <form action="">
                                <div class="search-wrap">
                                    <label for="search" class="blind">공지사항 내용 검색</label>
                                    <input id="search" type="search" name="" placeholder="검색어를 입력해주세요." value="">
                                    <button type="submit" class="btn btn-dark">검색</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- board list area -->
                <div id="board-list">
                    <div class="container">
                        <table class="board-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="th-num">번호</th>
                                    <th scope="col" class="th-title">제목</th>
                                    <th scope="col" class="th-date">등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4</td>
                                    <th>
                                        <a href="#!">[공지사항] 개인정보 처리방침 변경안내처리방침</a>
                                        <p>테스트</p>
                                    </th>
                                    <td>2017.07.13</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <th>
                                        <a href="#!">[공지사항] 개인정보 처리방침 변경안내처리방침</a>
                                        <p>테스트</p>
                                    </th>
                                    <td>2017.07.13</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <th><a href="#!">공지사항 안내입니다. 이용해주셔서 감사합니다</a></th>
                                    <td>2017.06.15</td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <th><a href="#!">공지사항 안내입니다. 이용해주셔서 감사합니다</a></th>
                                    <td>2017.06.15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    </div>
    <!--footer-->
    <div class="footer flex">
        <div class="box con flex">
            <div class="inner">
                <div class="address address-1 flex">
                    <p>주소: 충북 옥천군 군북면 증약길 191-5</p>
                    <p>사업자등록번호: 123-33-212312</p>
                </div>
                <div class="address address-2 flex">
                    <p>TEL: 043)123-1234</p>
                    <p>TEL: 043)123-1234</p>
                </div>
            </div>
            <div class="inner">
                <div class="address address-1 flex">
                    <p>주소: 충북 옥천군 군북면 증약길 191-5</p>
                    <p>사업자등록번호: 123-33-212312</p>
                </div>
                <div class="address address-2 flex">
                    <p>TEL: 043)123-1234</p>
                    <p>TEL: 043)123-1234</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 팝업-->
    <div class="pop-1-bg"></div>
    <div class="pop-1">
        <div class="head">
            <div class="btn-close">X</div>
            <div class="btn-close">팝업닫기</div>
        </div>
        <div class="body">
            <div class="client"></div>
            <div class="title"></div>
            <div class="img-boxs"></div>
        </div>
    </div>

    <script>
        var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
        var options = { //지도를 생성할 때 필요한 기본 옵션
            center: new kakao.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
            level: 3 //지도의 레벨(확대, 축소 정도)
        };

        var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴

        // 주소-좌표 변환 객체를 생성합니다
        var geocoder = new kakao.maps.services.Geocoder();

        // 주소로 좌표를 검색합니다
        geocoder.addressSearch('충북 옥천군 군북면 증약길 191-9', function (result, status) {

            // 정상적으로 검색이 완료됐으면 
            if (status === kakao.maps.services.Status.OK) {

                var coords = new kakao.maps.LatLng(result[0].y, result[0].x);

                // 결과값으로 받은 위치를 마커로 표시합니다
                var marker = new kakao.maps.Marker({
                    map: map,
                    position: coords
                });

                // 인포윈도우로 장소에 대한 설명을 표시합니다
                var infowindow = new kakao.maps.InfoWindow({
                    content: '<div style="width:150px;text-align:center;padding:6px 0;">비쿨학원</div>'
                });
                infowindow.open(map, marker);

                // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
                map.setCenter(coords);
            }
        });
    </script>



</body>

</html>