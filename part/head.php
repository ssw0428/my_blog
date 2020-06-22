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
        <div class="con height-100p flex">
            <!-- 블로그 이름 -->
            <a href="#" class="blog-name flex flex-ai-c flex-1-0-0 ">Sang Won's_blog</a>

            <!-- 메뉴 박스 -->
            <nav class="menu-box-1 flex flex-1-0-0">
                <ul class="flex flex-1-0-0">
                    <li class="flex-1-0-0 flex"><a href="/"
                            class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>Home</span></a></li>
                    <li class="flex-1-0-0 flex"><a href="/list.php"
                            class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>Articles</span></a>
                        <ul>
                            <li>
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
                        <a href="/aboutMe.php" class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>About Me</span></a>
                        <ul>
                            <li>
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
                        <a href="#" class="flex flex-1-0-0 flex-ai-c flex-jc-c"><span>SNS</span></a>
                        <ul>
                            <li>
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
            <!-- 로고 -->
            <a href="#" class="flex flex-ai-c flex-jc-end flex-1-0-0 main-logo">
                <img class="flex-ai-c flex-jc-c" src="/resource/img/img-1.png" alt="width=100">
            </a>
        </div>
    </div>

    <!-- 슬라이더 -->
    <div class="main-slider con">
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
