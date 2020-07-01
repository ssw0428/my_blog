<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="/resource/common.css">
    <link rel="stylesheet" href="/resource/index.css">

    <link rel="icon" href="/resource/img/favicon.ico">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/resource/common.js"></script>
</head>

<body>
    <!-- 모바일 바 -->
    <div class="mobile-bar  visible-sm-down flex flex-1-0-0">
        <!-- 모바일 사이드 바 -->
        <div class="mobile-top-bar visible-sm-down flex flex-1-0-0 relative">
            <a href="#" onclick="return false;" class="btn-toggle-mobile-side-bar flex-as-c">
                <div></div>
                <div></div>
                <div></div>
            </a>
        </div>
        <!-- 모바일 로고 바 -->
        <div class="mobile-logo visible-sm-down flex flex-jc-c flex-ai-c flex-1-0-0 absolute-middle absolute-center">
            <a href="# flex flex-jc-c flex-ai-c flex-1-0-0">
                <img class="flex-ai-c flex-jc-c flex-1-0-0" src="/resource/img/img-1.png" alt="width=100"></a>
            </a>
        </div>
        <!-- 오른쪽 사이드 이름 -->
        <div class="side-name-bar flex flex-1-0-0 flex-jc-end flex-ai-c relative">
            <span>Sang _ Won's Blog</span>
        </div>
    </div>
    <!-- 모바일 서브 메뉴 바bg -->
    <div class="mobile-side-bar-bg visible-sm-down"></div>
    <!-- 모바일 서브 메뉴 바 -->
    <div class="mobile-side-bar visible-sm-down">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">About Me</a></li>
            <li><a href="#">SNS</a>
                <ul>
                    <li><a href="#">Git hub</a></li>
                    <li><a href="#">Insta</a>
                        <ul>
                            <li><a href="#">Private</a></li>
                            <li><a href="#">public</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </li>
        </ul>
    </div>


    <!-- 탑바 -->
    <div class="top-bar visible-md-up">
        <div class="height-100p flex con">
            <!-- 로고 -->
            <a href="#" class="flex flex-ai-c flex-1-0-0 main-logo">
                <img class="" src="/resource/img/img-1.png" alt="width=100">
            </a>
            <!-- 블로그 이름
            <a href="#" class="blog-name flex flex-ai-c flex-1-0-0 ">Sang Won's_blog</a>
             -->

            <!-- 메뉴 박스 -->
            <nav class="menu-box-1 flex flex-jc-end">
                <ul class="flex flex-1-0-0">
                    <li class="flex-1-0-0 flex"><a href="/"
                            class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>Home</span></a></li>
                    <li class="flex-1-0-0 flex"><a href="/list.php"
                            class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>Daily</span></a>
                        <ul class="flex flex-ai-c flex-jc-c flex-1-0-0">
                            <li class="">
                                <a href="https://github.com/jhs512" target="_blank">
                                    GITHUB
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    FACEBOOK
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    INSTA
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="flex-1-0-0 flex"><a href="/list.php"
                            class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>Self&#160;&#160;Development</span></a>
                        <ul class="flex flex-ai-c flex-jc-c flex-1-0-0">
                            <li class="">
                                <a href="https://github.com/jhs512" target="_blank">
                                    GITHUB
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    FACEBOOK
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    INSTA
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="flex-1-0-0 flex">
                        <a href="/aboutMe.php" class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>Portfolio</span></a>
                    </li>
                    <li class="flex-1-0-0 flex">
                        <a href="#" class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>SNS</span></a>
                        <ul class="flex flex-ai-c flex-jc-c flex-1-0-0">
                            <li class="">
                                <a href="https://github.com/jhs512" target="_blank">
                                    GITHUB
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    FACEBOOK
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/jhs512" target="_blank">
                                    INSTA
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
    <!-- 메인페이지  -->
    <div class="main-page con">
        <section class="container con">
            <div class="blog-name flex flex-ai-c">
                <h1>
                    Sang Won's Blog!<br>Come On~
                </h1>

            </div>

            <!-- 프로필 보류
            <div style="border: 1px solid red" class="profile flex flex-ai-c flex-jc-end">
                <img src="../resource/img/img-2.png" alt="">
                <div class="profile-list">
                    <div class="name">
                        <span>이름: 서상원</span>
                    </div>
                    <div class="old">
                        <span>나이: 95.04.28 / 26살</span>
                    </div>
                    <div class="hobby">
                        <span>취미: 사진찍기, IT기기 정보</span>
                    </div>
                    <div class="e-mail">
                        <span>e-mail: ssw0428@naver.com</span>
                    </div>
                    <div class="phone">
                        <span>phone-number: 010-3496-4521</span>
                    </div>
                    <div></div>
                </div>
            </div>
             -->
            <div class="self-introduction flex">
                <!-- 슬라이더 -->
                <div style="border: 1px solid red" class="main-slider flex flex-1-0-0">
                    <div class="slides">
                        <div class="active" style="background-image:url(../resource/img/main-slide-1.jpg);"></div>
                        <div style="background-image:url(../resource/img/main-slide-2.jpg);"></div>
                        <div style="background-image:url(../resource/img/main-slide-3.jpg);"></div>
                        <div style="background-image:url(../resource/img/main-slide-4.jpg);"></div>
                        <div style="background-image:url(../resource/img/main-slide-5.jpg);"></div>
                    </div>

                    <div class="side-bars">
                        <div>
                            <span>
                                <i class="fas fa-angle-left"></i>
                            </span>
                        </div>
                        <div>
                            <span>
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <span class="flex flex-1-0-0">
                    안녕하세요. Sang Won's Blog에 찾아와주셔서 감사합니다. 제가 지금까지 공부한 자료와 저의 일상들이 기록되어 있는 공간입니다. 부족하지만, 많은 글들을 보시면서 함께
                    공감하길
                    원합니다. 글이 마음에 드신다면 좋아요~! 부족하다면, 댓글 달아주시면 수정해서 더욱 더 좋은 글로 보답하겠습니다 :)
                </span>
            </div>

        </section>
        <section class="con flex">
        </section>
        <section></section>
    </div>

    <!-- 주요 소식 -->
    <div class="recentStories con">
        <span class="main-title">Recent Stories</span>
        <div class="story-list flex con">
            <div class="story flex flex-jc-c flex-ai-c">
                <div class="title-img">
                    <a href=""><img src="/resource/img/story-img-1.jpg" alt=""></a></div>
                <div class="issue-1">
                    <a class="" href="">Self-Development</a>
                    <a class="" href="">20-06-29</a>
                </div>
                <div class="issue-2">
                    <a href="">제목들어갑니다.</a>
                    <a href="">"내용이 들어가는 부분입니다.내용이 들어가는 부분입니다.내용이 들어가는 부분입니다...."</a>
                </div>
            </div>
            <div class="story flex flex-jc-c flex-ai-c">
                <div class="title-img">
                    <a href=""><img src="/resource/img/story-img-1.jpg" alt=""></a></div>
                <div class="issue-1">
                    <a class="" href="">Self-Development</a>
                    <a class="" href="">20-06-29</a>
                </div>
                <div class="issue-2">
                    <a href="">제목들어갑니다.</a>
                    <a href="">"내용이 들어가는 부분입니다.내용이 들어가는 부분입니다.내용이 들어가는 부분입니다...."</a>
                </div>
            </div>
            <div class="story flex flex-jc-c flex-ai-c">
                <div class="title-img">
                    <a href=""><img src="/resource/img/story-img-1.jpg" alt=""></a></div>
                <div class="issue-1">
                    <a class="" href="">Self-Development</a>
                    <a class="" href="">20-06-29</a>
                </div>
                <div class="issue-2">
                    <a href="">제목들어갑니다.</a>
                    <a href="">"내용이 들어가는 부분입니다.내용이 들어가는 부분입니다.내용이 들어가는 부분입니다...."</a>
                </div>
            </div>
            <div class="story flex flex-jc-c flex-ai-c">
                <div class="title-img">
                    <a href=""><img src="/resource/img/story-img-1.jpg" alt=""></a></div>
                <div class="issue-1">
                    <a class="" href="">Self-Development</a>
                    <a class="" href="">20-06-29</a>
                </div>
                <div class="issue-2">
                    <a href="">제목들어갑니다.</a>
                    <a href="">"내용이 들어가는 부분입니다.내용이 들어가는 부분입니다.내용이 들어가는 부분입니다...."</a>
                </div>
            </div>
        </div>
    </div>